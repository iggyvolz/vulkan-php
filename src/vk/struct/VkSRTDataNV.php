<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkSRTDataNV implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sx" => $this->getSx(),
          "a" => $this->getA(),
          "b" => $this->getB(),
          "pvx" => $this->getPvx(),
          "sy" => $this->getSy(),
          "c" => $this->getC(),
          "pvy" => $this->getPvy(),
          "sz" => $this->getSz(),
          "pvz" => $this->getPvz(),
          "qx" => $this->getQx(),
          "qy" => $this->getQy(),
          "qz" => $this->getQz(),
          "qw" => $this->getQw(),
          "tx" => $this->getTx(),
          "ty" => $this->getTy(),
          "tz" => $this->getTz(),
        ];
    }

    /**
     * @internal
     */
    public function __construct(
        /** @internal */
        public \FFI\CData $cdata,
        /** @internal */
        public \iggyvolz\vulkan\Vulkan $vulkan,
    ) {
    }

    public static function create(
        \iggyvolz\vulkan\Vulkan $vulkan,
        null|float $sx = null,
        null|float $a = null,
        null|float $b = null,
        null|float $pvx = null,
        null|float $sy = null,
        null|float $c = null,
        null|float $pvy = null,
        null|float $sz = null,
        null|float $pvz = null,
        null|float $qx = null,
        null|float $qy = null,
        null|float $qz = null,
        null|float $qw = null,
        null|float $tx = null,
        null|float $ty = null,
        null|float $tz = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkSRTDataNV', false), $vulkan);
        if(!is_null($sx)) $self->setSx($sx);
        if(!is_null($a)) $self->setA($a);
        if(!is_null($b)) $self->setB($b);
        if(!is_null($pvx)) $self->setPvx($pvx);
        if(!is_null($sy)) $self->setSy($sy);
        if(!is_null($c)) $self->setC($c);
        if(!is_null($pvy)) $self->setPvy($pvy);
        if(!is_null($sz)) $self->setSz($sz);
        if(!is_null($pvz)) $self->setPvz($pvz);
        if(!is_null($qx)) $self->setQx($qx);
        if(!is_null($qy)) $self->setQy($qy);
        if(!is_null($qz)) $self->setQz($qz);
        if(!is_null($qw)) $self->setQw($qw);
        if(!is_null($tx)) $self->setTx($tx);
        if(!is_null($ty)) $self->setTy($ty);
        if(!is_null($tz)) $self->setTz($tz);
        return $self;
    }

    /**
     * float/
     */
    public function getSx(): float
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->sx;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setSx(float $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->sx = $cValue;
    }

    /**
     * float/
     */
    public function getA(): float
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->a;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setA(float $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->a = $cValue;
    }

    /**
     * float/
     */
    public function getB(): float
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->b;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setB(float $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->b = $cValue;
    }

    /**
     * float/
     */
    public function getPvx(): float
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->pvx;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setPvx(float $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->pvx = $cValue;
    }

    /**
     * float/
     */
    public function getSy(): float
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->sy;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setSy(float $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->sy = $cValue;
    }

    /**
     * float/
     */
    public function getC(): float
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->c;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setC(float $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->c = $cValue;
    }

    /**
     * float/
     */
    public function getPvy(): float
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->pvy;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setPvy(float $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->pvy = $cValue;
    }

    /**
     * float/
     */
    public function getSz(): float
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->sz;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setSz(float $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->sz = $cValue;
    }

    /**
     * float/
     */
    public function getPvz(): float
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->pvz;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setPvz(float $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->pvz = $cValue;
    }

    /**
     * float/
     */
    public function getQx(): float
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->qx;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setQx(float $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->qx = $cValue;
    }

    /**
     * float/
     */
    public function getQy(): float
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->qy;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setQy(float $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->qy = $cValue;
    }

    /**
     * float/
     */
    public function getQz(): float
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->qz;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setQz(float $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->qz = $cValue;
    }

    /**
     * float/
     */
    public function getQw(): float
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->qw;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setQw(float $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->qw = $cValue;
    }

    /**
     * float/
     */
    public function getTx(): float
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->tx;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setTx(float $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->tx = $cValue;
    }

    /**
     * float/
     */
    public function getTy(): float
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->ty;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setTy(float $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->ty = $cValue;
    }

    /**
     * float/
     */
    public function getTz(): float
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->tz;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setTz(float $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->tz = $cValue;
    }
}
