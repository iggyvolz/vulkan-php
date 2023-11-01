<?php

namespace iggyvolz\vulkan\generator\Registry\Type;

use DOMElement;
use iggyvolz\vulkan\generator\Registry\EnumType;

final readonly class Enum extends Type
{
    /**
     * @var array<string,int>
     */
    public array $enums;

    public bool $is64bits;
    public EnumType $enumType;

    /**
     * @param array<string,string> $enums
     * @param list<string> $enums64bit
     * @return void
     */
    protected function setUpEnums(array $enums, array $enums64bit, array $bitmasks): void
    {
        $this->enumType = in_array($this->name, $bitmasks) ? EnumType::Bitmask : EnumType::Enum;
        $this->enums = array_combine(
            array_map($this->mapKeys(...), array_keys($enums[$this->name] ?? [])),
            array_map(self::mapValue(...), $enums[$this->name] ?? [])
        );
        $this->is64bits = in_array($this->name, $enums64bit);
    }

    private function mapKeys(string $cName): string
    {
        return self::_mapKeys($this->name, $cName);
    }

    /**
     * Map the C enum from a full name to a short name with context from the enum name
     * ex. VkAccessFlagBits2::VK_ACCESS_2_NONE to VkAccessFlagBits2::None
     */
    public static function _mapKeys(string $typeName, string $cName): string
    {
        // Get the suffix from the type (ex. KHR, 2)
        preg_match("/[A-Z0-9]*$/", $typeName, $suffixMatches);
        [$suffix] = $suffixMatches;
        // TODO improve this logic
        if($suffix === "") {
            $suffixes = [];
        } elseif($suffix === "2KHR") {
            $suffixes = ["2", "KHR"];
        } else {
            $suffixes = [$suffix];
        }
        $cNameWithoutSuffix = substr($typeName, 0, strlen($typeName) - strlen($suffix));
        $typeWords = array_map(strtolower(...), preg_split('/(?=[A-Z]+)/',lcfirst($cNameWithoutSuffix)));
        $nameWords = array_map(strtolower(...), explode("_", $cName));
        $numPrefixWords = 0;
        $numSuffixWords = 0;
        while(($typeWords[$numPrefixWords] ?? null) === $nameWords[$numPrefixWords]) {
            $numPrefixWords++;
        }
        // Suffix portion might be at the beginning or end of our string (wtf vulkan???)
        foreach($suffixes as $suffix) {
            if($suffix !== "" && $nameWords[array_key_last($nameWords)] === strtolower($suffix)) {
                $numSuffixWords++;
            }
            if($suffix !== "" && $nameWords[$numPrefixWords] === strtolower($suffix)) {
                $numPrefixWords++;
            }
        }
        if((
            // If "bit" is the last word, and
            $nameWords[array_key_last($nameWords) - $numSuffixWords] ?? null) === "bit" &&
            //  the name contains "FlagBits", and
            str_contains($typeName, "FlagBits") &&
            // the second-to-last word is not a number (as in "8 bit"), then
            !preg_match("/^[0-9]+$/", $nameWords[array_key_last($nameWords) - $numSuffixWords - 1] ?? null)
        ) {
            // pop off the trailing word "bit"
            $numSuffixWords++;
        }
        $result = implode("", array_map(ucfirst(...), array_slice($nameWords, $numPrefixWords, $numSuffixWords === 0 ? null : -$numSuffixWords)));
        // If the enum name starts with a number, prepend with an underscore to make syntactically valid
        if(preg_match("/^[0-9]/", $result)) {
            $result = "_$result";
        }
        return $result;
    }
    private static function mapValue(string $cValue): int
    {
        if(preg_match("/^-?[0-9]+$/", $cValue)) {
            return intval($cValue);
        }
        if(preg_match("/^0x[0-9A-F]+$/", $cValue)) {
            return hexdec(substr($cValue, 2));
        }
        throw new \RuntimeException("Can't parse C value $cValue");
    }
}