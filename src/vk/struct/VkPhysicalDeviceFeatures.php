<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceFeatures implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "robustBufferAccess" => $this->getRobustBufferAccess(),
          "fullDrawIndexUint32" => $this->getFullDrawIndexUint32(),
          "imageCubeArray" => $this->getImageCubeArray(),
          "independentBlend" => $this->getIndependentBlend(),
          "geometryShader" => $this->getGeometryShader(),
          "tessellationShader" => $this->getTessellationShader(),
          "sampleRateShading" => $this->getSampleRateShading(),
          "dualSrcBlend" => $this->getDualSrcBlend(),
          "logicOp" => $this->getLogicOp(),
          "multiDrawIndirect" => $this->getMultiDrawIndirect(),
          "drawIndirectFirstInstance" => $this->getDrawIndirectFirstInstance(),
          "depthClamp" => $this->getDepthClamp(),
          "depthBiasClamp" => $this->getDepthBiasClamp(),
          "fillModeNonSolid" => $this->getFillModeNonSolid(),
          "depthBounds" => $this->getDepthBounds(),
          "wideLines" => $this->getWideLines(),
          "largePoints" => $this->getLargePoints(),
          "alphaToOne" => $this->getAlphaToOne(),
          "multiViewport" => $this->getMultiViewport(),
          "samplerAnisotropy" => $this->getSamplerAnisotropy(),
          "textureCompressionETC2" => $this->getTextureCompressionETC2(),
          "textureCompressionASTC_LDR" => $this->getTextureCompressionASTC_LDR(),
          "textureCompressionBC" => $this->getTextureCompressionBC(),
          "occlusionQueryPrecise" => $this->getOcclusionQueryPrecise(),
          "pipelineStatisticsQuery" => $this->getPipelineStatisticsQuery(),
          "vertexPipelineStoresAndAtomics" => $this->getVertexPipelineStoresAndAtomics(),
          "fragmentStoresAndAtomics" => $this->getFragmentStoresAndAtomics(),
          "shaderTessellationAndGeometryPointSize" => $this->getShaderTessellationAndGeometryPointSize(),
          "shaderImageGatherExtended" => $this->getShaderImageGatherExtended(),
          "shaderStorageImageExtendedFormats" => $this->getShaderStorageImageExtendedFormats(),
          "shaderStorageImageMultisample" => $this->getShaderStorageImageMultisample(),
          "shaderStorageImageReadWithoutFormat" => $this->getShaderStorageImageReadWithoutFormat(),
          "shaderStorageImageWriteWithoutFormat" => $this->getShaderStorageImageWriteWithoutFormat(),
          "shaderUniformBufferArrayDynamicIndexing" => $this->getShaderUniformBufferArrayDynamicIndexing(),
          "shaderSampledImageArrayDynamicIndexing" => $this->getShaderSampledImageArrayDynamicIndexing(),
          "shaderStorageBufferArrayDynamicIndexing" => $this->getShaderStorageBufferArrayDynamicIndexing(),
          "shaderStorageImageArrayDynamicIndexing" => $this->getShaderStorageImageArrayDynamicIndexing(),
          "shaderClipDistance" => $this->getShaderClipDistance(),
          "shaderCullDistance" => $this->getShaderCullDistance(),
          "shaderFloat64" => $this->getShaderFloat64(),
          "shaderInt64" => $this->getShaderInt64(),
          "shaderInt16" => $this->getShaderInt16(),
          "shaderResourceResidency" => $this->getShaderResourceResidency(),
          "shaderResourceMinLod" => $this->getShaderResourceMinLod(),
          "sparseBinding" => $this->getSparseBinding(),
          "sparseResidencyBuffer" => $this->getSparseResidencyBuffer(),
          "sparseResidencyImage2D" => $this->getSparseResidencyImage2D(),
          "sparseResidencyImage3D" => $this->getSparseResidencyImage3D(),
          "sparseResidency2Samples" => $this->getSparseResidency2Samples(),
          "sparseResidency4Samples" => $this->getSparseResidency4Samples(),
          "sparseResidency8Samples" => $this->getSparseResidency8Samples(),
          "sparseResidency16Samples" => $this->getSparseResidency16Samples(),
          "sparseResidencyAliased" => $this->getSparseResidencyAliased(),
          "variableMultisampleRate" => $this->getVariableMultisampleRate(),
          "inheritedQueries" => $this->getInheritedQueries(),
        ];
    }

    /**
     * @internal
     */
    public function __construct(
        /** @internal */
        public \FFI\CData $cdata,
    ) {
    }

    public static function create(
        \iggyvolz\vulkan\Vulkan $vulkan,
        null|bool $robustBufferAccess = null,
        null|bool $fullDrawIndexUint32 = null,
        null|bool $imageCubeArray = null,
        null|bool $independentBlend = null,
        null|bool $geometryShader = null,
        null|bool $tessellationShader = null,
        null|bool $sampleRateShading = null,
        null|bool $dualSrcBlend = null,
        null|bool $logicOp = null,
        null|bool $multiDrawIndirect = null,
        null|bool $drawIndirectFirstInstance = null,
        null|bool $depthClamp = null,
        null|bool $depthBiasClamp = null,
        null|bool $fillModeNonSolid = null,
        null|bool $depthBounds = null,
        null|bool $wideLines = null,
        null|bool $largePoints = null,
        null|bool $alphaToOne = null,
        null|bool $multiViewport = null,
        null|bool $samplerAnisotropy = null,
        null|bool $textureCompressionETC2 = null,
        null|bool $textureCompressionASTC_LDR = null,
        null|bool $textureCompressionBC = null,
        null|bool $occlusionQueryPrecise = null,
        null|bool $pipelineStatisticsQuery = null,
        null|bool $vertexPipelineStoresAndAtomics = null,
        null|bool $fragmentStoresAndAtomics = null,
        null|bool $shaderTessellationAndGeometryPointSize = null,
        null|bool $shaderImageGatherExtended = null,
        null|bool $shaderStorageImageExtendedFormats = null,
        null|bool $shaderStorageImageMultisample = null,
        null|bool $shaderStorageImageReadWithoutFormat = null,
        null|bool $shaderStorageImageWriteWithoutFormat = null,
        null|bool $shaderUniformBufferArrayDynamicIndexing = null,
        null|bool $shaderSampledImageArrayDynamicIndexing = null,
        null|bool $shaderStorageBufferArrayDynamicIndexing = null,
        null|bool $shaderStorageImageArrayDynamicIndexing = null,
        null|bool $shaderClipDistance = null,
        null|bool $shaderCullDistance = null,
        null|bool $shaderFloat64 = null,
        null|bool $shaderInt64 = null,
        null|bool $shaderInt16 = null,
        null|bool $shaderResourceResidency = null,
        null|bool $shaderResourceMinLod = null,
        null|bool $sparseBinding = null,
        null|bool $sparseResidencyBuffer = null,
        null|bool $sparseResidencyImage2D = null,
        null|bool $sparseResidencyImage3D = null,
        null|bool $sparseResidency2Samples = null,
        null|bool $sparseResidency4Samples = null,
        null|bool $sparseResidency8Samples = null,
        null|bool $sparseResidency16Samples = null,
        null|bool $sparseResidencyAliased = null,
        null|bool $variableMultisampleRate = null,
        null|bool $inheritedQueries = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceFeatures', false));
        if(!is_null($robustBufferAccess)) $self->setRobustBufferAccess($robustBufferAccess);
        if(!is_null($fullDrawIndexUint32)) $self->setFullDrawIndexUint32($fullDrawIndexUint32);
        if(!is_null($imageCubeArray)) $self->setImageCubeArray($imageCubeArray);
        if(!is_null($independentBlend)) $self->setIndependentBlend($independentBlend);
        if(!is_null($geometryShader)) $self->setGeometryShader($geometryShader);
        if(!is_null($tessellationShader)) $self->setTessellationShader($tessellationShader);
        if(!is_null($sampleRateShading)) $self->setSampleRateShading($sampleRateShading);
        if(!is_null($dualSrcBlend)) $self->setDualSrcBlend($dualSrcBlend);
        if(!is_null($logicOp)) $self->setLogicOp($logicOp);
        if(!is_null($multiDrawIndirect)) $self->setMultiDrawIndirect($multiDrawIndirect);
        if(!is_null($drawIndirectFirstInstance)) $self->setDrawIndirectFirstInstance($drawIndirectFirstInstance);
        if(!is_null($depthClamp)) $self->setDepthClamp($depthClamp);
        if(!is_null($depthBiasClamp)) $self->setDepthBiasClamp($depthBiasClamp);
        if(!is_null($fillModeNonSolid)) $self->setFillModeNonSolid($fillModeNonSolid);
        if(!is_null($depthBounds)) $self->setDepthBounds($depthBounds);
        if(!is_null($wideLines)) $self->setWideLines($wideLines);
        if(!is_null($largePoints)) $self->setLargePoints($largePoints);
        if(!is_null($alphaToOne)) $self->setAlphaToOne($alphaToOne);
        if(!is_null($multiViewport)) $self->setMultiViewport($multiViewport);
        if(!is_null($samplerAnisotropy)) $self->setSamplerAnisotropy($samplerAnisotropy);
        if(!is_null($textureCompressionETC2)) $self->setTextureCompressionETC2($textureCompressionETC2);
        if(!is_null($textureCompressionASTC_LDR)) $self->setTextureCompressionASTC_LDR($textureCompressionASTC_LDR);
        if(!is_null($textureCompressionBC)) $self->setTextureCompressionBC($textureCompressionBC);
        if(!is_null($occlusionQueryPrecise)) $self->setOcclusionQueryPrecise($occlusionQueryPrecise);
        if(!is_null($pipelineStatisticsQuery)) $self->setPipelineStatisticsQuery($pipelineStatisticsQuery);
        if(!is_null($vertexPipelineStoresAndAtomics)) $self->setVertexPipelineStoresAndAtomics($vertexPipelineStoresAndAtomics);
        if(!is_null($fragmentStoresAndAtomics)) $self->setFragmentStoresAndAtomics($fragmentStoresAndAtomics);
        if(!is_null($shaderTessellationAndGeometryPointSize)) $self->setShaderTessellationAndGeometryPointSize($shaderTessellationAndGeometryPointSize);
        if(!is_null($shaderImageGatherExtended)) $self->setShaderImageGatherExtended($shaderImageGatherExtended);
        if(!is_null($shaderStorageImageExtendedFormats)) $self->setShaderStorageImageExtendedFormats($shaderStorageImageExtendedFormats);
        if(!is_null($shaderStorageImageMultisample)) $self->setShaderStorageImageMultisample($shaderStorageImageMultisample);
        if(!is_null($shaderStorageImageReadWithoutFormat)) $self->setShaderStorageImageReadWithoutFormat($shaderStorageImageReadWithoutFormat);
        if(!is_null($shaderStorageImageWriteWithoutFormat)) $self->setShaderStorageImageWriteWithoutFormat($shaderStorageImageWriteWithoutFormat);
        if(!is_null($shaderUniformBufferArrayDynamicIndexing)) $self->setShaderUniformBufferArrayDynamicIndexing($shaderUniformBufferArrayDynamicIndexing);
        if(!is_null($shaderSampledImageArrayDynamicIndexing)) $self->setShaderSampledImageArrayDynamicIndexing($shaderSampledImageArrayDynamicIndexing);
        if(!is_null($shaderStorageBufferArrayDynamicIndexing)) $self->setShaderStorageBufferArrayDynamicIndexing($shaderStorageBufferArrayDynamicIndexing);
        if(!is_null($shaderStorageImageArrayDynamicIndexing)) $self->setShaderStorageImageArrayDynamicIndexing($shaderStorageImageArrayDynamicIndexing);
        if(!is_null($shaderClipDistance)) $self->setShaderClipDistance($shaderClipDistance);
        if(!is_null($shaderCullDistance)) $self->setShaderCullDistance($shaderCullDistance);
        if(!is_null($shaderFloat64)) $self->setShaderFloat64($shaderFloat64);
        if(!is_null($shaderInt64)) $self->setShaderInt64($shaderInt64);
        if(!is_null($shaderInt16)) $self->setShaderInt16($shaderInt16);
        if(!is_null($shaderResourceResidency)) $self->setShaderResourceResidency($shaderResourceResidency);
        if(!is_null($shaderResourceMinLod)) $self->setShaderResourceMinLod($shaderResourceMinLod);
        if(!is_null($sparseBinding)) $self->setSparseBinding($sparseBinding);
        if(!is_null($sparseResidencyBuffer)) $self->setSparseResidencyBuffer($sparseResidencyBuffer);
        if(!is_null($sparseResidencyImage2D)) $self->setSparseResidencyImage2D($sparseResidencyImage2D);
        if(!is_null($sparseResidencyImage3D)) $self->setSparseResidencyImage3D($sparseResidencyImage3D);
        if(!is_null($sparseResidency2Samples)) $self->setSparseResidency2Samples($sparseResidency2Samples);
        if(!is_null($sparseResidency4Samples)) $self->setSparseResidency4Samples($sparseResidency4Samples);
        if(!is_null($sparseResidency8Samples)) $self->setSparseResidency8Samples($sparseResidency8Samples);
        if(!is_null($sparseResidency16Samples)) $self->setSparseResidency16Samples($sparseResidency16Samples);
        if(!is_null($sparseResidencyAliased)) $self->setSparseResidencyAliased($sparseResidencyAliased);
        if(!is_null($variableMultisampleRate)) $self->setVariableMultisampleRate($variableMultisampleRate);
        if(!is_null($inheritedQueries)) $self->setInheritedQueries($inheritedQueries);
        return $self;
    }

    /**
     * uint32_t/
     */
    public function getRobustBufferAccess(): bool
    {
        $cValue = $this->cdata->robustBufferAccess;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setRobustBufferAccess(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->robustBufferAccess = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getFullDrawIndexUint32(): bool
    {
        $cValue = $this->cdata->fullDrawIndexUint32;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setFullDrawIndexUint32(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->fullDrawIndexUint32 = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getImageCubeArray(): bool
    {
        $cValue = $this->cdata->imageCubeArray;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setImageCubeArray(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->imageCubeArray = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getIndependentBlend(): bool
    {
        $cValue = $this->cdata->independentBlend;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setIndependentBlend(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->independentBlend = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getGeometryShader(): bool
    {
        $cValue = $this->cdata->geometryShader;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setGeometryShader(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->geometryShader = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getTessellationShader(): bool
    {
        $cValue = $this->cdata->tessellationShader;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setTessellationShader(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->tessellationShader = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getSampleRateShading(): bool
    {
        $cValue = $this->cdata->sampleRateShading;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setSampleRateShading(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->sampleRateShading = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDualSrcBlend(): bool
    {
        $cValue = $this->cdata->dualSrcBlend;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setDualSrcBlend(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->dualSrcBlend = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getLogicOp(): bool
    {
        $cValue = $this->cdata->logicOp;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setLogicOp(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->logicOp = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMultiDrawIndirect(): bool
    {
        $cValue = $this->cdata->multiDrawIndirect;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setMultiDrawIndirect(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->multiDrawIndirect = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDrawIndirectFirstInstance(): bool
    {
        $cValue = $this->cdata->drawIndirectFirstInstance;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setDrawIndirectFirstInstance(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->drawIndirectFirstInstance = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDepthClamp(): bool
    {
        $cValue = $this->cdata->depthClamp;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setDepthClamp(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->depthClamp = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDepthBiasClamp(): bool
    {
        $cValue = $this->cdata->depthBiasClamp;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setDepthBiasClamp(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->depthBiasClamp = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getFillModeNonSolid(): bool
    {
        $cValue = $this->cdata->fillModeNonSolid;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setFillModeNonSolid(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->fillModeNonSolid = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDepthBounds(): bool
    {
        $cValue = $this->cdata->depthBounds;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setDepthBounds(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->depthBounds = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getWideLines(): bool
    {
        $cValue = $this->cdata->wideLines;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setWideLines(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->wideLines = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getLargePoints(): bool
    {
        $cValue = $this->cdata->largePoints;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setLargePoints(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->largePoints = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getAlphaToOne(): bool
    {
        $cValue = $this->cdata->alphaToOne;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setAlphaToOne(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->alphaToOne = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMultiViewport(): bool
    {
        $cValue = $this->cdata->multiViewport;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setMultiViewport(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->multiViewport = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getSamplerAnisotropy(): bool
    {
        $cValue = $this->cdata->samplerAnisotropy;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setSamplerAnisotropy(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->samplerAnisotropy = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getTextureCompressionETC2(): bool
    {
        $cValue = $this->cdata->textureCompressionETC2;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setTextureCompressionETC2(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->textureCompressionETC2 = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getTextureCompressionASTC_LDR(): bool
    {
        $cValue = $this->cdata->textureCompressionASTC_LDR;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setTextureCompressionASTC_LDR(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->textureCompressionASTC_LDR = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getTextureCompressionBC(): bool
    {
        $cValue = $this->cdata->textureCompressionBC;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setTextureCompressionBC(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->textureCompressionBC = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getOcclusionQueryPrecise(): bool
    {
        $cValue = $this->cdata->occlusionQueryPrecise;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setOcclusionQueryPrecise(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->occlusionQueryPrecise = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getPipelineStatisticsQuery(): bool
    {
        $cValue = $this->cdata->pipelineStatisticsQuery;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setPipelineStatisticsQuery(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->pipelineStatisticsQuery = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getVertexPipelineStoresAndAtomics(): bool
    {
        $cValue = $this->cdata->vertexPipelineStoresAndAtomics;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setVertexPipelineStoresAndAtomics(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->vertexPipelineStoresAndAtomics = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getFragmentStoresAndAtomics(): bool
    {
        $cValue = $this->cdata->fragmentStoresAndAtomics;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setFragmentStoresAndAtomics(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->fragmentStoresAndAtomics = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderTessellationAndGeometryPointSize(): bool
    {
        $cValue = $this->cdata->shaderTessellationAndGeometryPointSize;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderTessellationAndGeometryPointSize(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderTessellationAndGeometryPointSize = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderImageGatherExtended(): bool
    {
        $cValue = $this->cdata->shaderImageGatherExtended;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderImageGatherExtended(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderImageGatherExtended = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderStorageImageExtendedFormats(): bool
    {
        $cValue = $this->cdata->shaderStorageImageExtendedFormats;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderStorageImageExtendedFormats(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderStorageImageExtendedFormats = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderStorageImageMultisample(): bool
    {
        $cValue = $this->cdata->shaderStorageImageMultisample;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderStorageImageMultisample(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderStorageImageMultisample = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderStorageImageReadWithoutFormat(): bool
    {
        $cValue = $this->cdata->shaderStorageImageReadWithoutFormat;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderStorageImageReadWithoutFormat(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderStorageImageReadWithoutFormat = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderStorageImageWriteWithoutFormat(): bool
    {
        $cValue = $this->cdata->shaderStorageImageWriteWithoutFormat;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderStorageImageWriteWithoutFormat(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderStorageImageWriteWithoutFormat = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderUniformBufferArrayDynamicIndexing(): bool
    {
        $cValue = $this->cdata->shaderUniformBufferArrayDynamicIndexing;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderUniformBufferArrayDynamicIndexing(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderUniformBufferArrayDynamicIndexing = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderSampledImageArrayDynamicIndexing(): bool
    {
        $cValue = $this->cdata->shaderSampledImageArrayDynamicIndexing;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderSampledImageArrayDynamicIndexing(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderSampledImageArrayDynamicIndexing = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderStorageBufferArrayDynamicIndexing(): bool
    {
        $cValue = $this->cdata->shaderStorageBufferArrayDynamicIndexing;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderStorageBufferArrayDynamicIndexing(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderStorageBufferArrayDynamicIndexing = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderStorageImageArrayDynamicIndexing(): bool
    {
        $cValue = $this->cdata->shaderStorageImageArrayDynamicIndexing;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderStorageImageArrayDynamicIndexing(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderStorageImageArrayDynamicIndexing = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderClipDistance(): bool
    {
        $cValue = $this->cdata->shaderClipDistance;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderClipDistance(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderClipDistance = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderCullDistance(): bool
    {
        $cValue = $this->cdata->shaderCullDistance;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderCullDistance(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderCullDistance = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderFloat64(): bool
    {
        $cValue = $this->cdata->shaderFloat64;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderFloat64(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderFloat64 = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderInt64(): bool
    {
        $cValue = $this->cdata->shaderInt64;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderInt64(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderInt64 = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderInt16(): bool
    {
        $cValue = $this->cdata->shaderInt16;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderInt16(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderInt16 = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderResourceResidency(): bool
    {
        $cValue = $this->cdata->shaderResourceResidency;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderResourceResidency(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderResourceResidency = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderResourceMinLod(): bool
    {
        $cValue = $this->cdata->shaderResourceMinLod;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderResourceMinLod(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderResourceMinLod = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getSparseBinding(): bool
    {
        $cValue = $this->cdata->sparseBinding;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setSparseBinding(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->sparseBinding = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getSparseResidencyBuffer(): bool
    {
        $cValue = $this->cdata->sparseResidencyBuffer;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setSparseResidencyBuffer(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->sparseResidencyBuffer = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getSparseResidencyImage2D(): bool
    {
        $cValue = $this->cdata->sparseResidencyImage2D;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setSparseResidencyImage2D(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->sparseResidencyImage2D = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getSparseResidencyImage3D(): bool
    {
        $cValue = $this->cdata->sparseResidencyImage3D;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setSparseResidencyImage3D(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->sparseResidencyImage3D = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getSparseResidency2Samples(): bool
    {
        $cValue = $this->cdata->sparseResidency2Samples;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setSparseResidency2Samples(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->sparseResidency2Samples = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getSparseResidency4Samples(): bool
    {
        $cValue = $this->cdata->sparseResidency4Samples;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setSparseResidency4Samples(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->sparseResidency4Samples = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getSparseResidency8Samples(): bool
    {
        $cValue = $this->cdata->sparseResidency8Samples;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setSparseResidency8Samples(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->sparseResidency8Samples = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getSparseResidency16Samples(): bool
    {
        $cValue = $this->cdata->sparseResidency16Samples;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setSparseResidency16Samples(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->sparseResidency16Samples = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getSparseResidencyAliased(): bool
    {
        $cValue = $this->cdata->sparseResidencyAliased;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setSparseResidencyAliased(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->sparseResidencyAliased = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getVariableMultisampleRate(): bool
    {
        $cValue = $this->cdata->variableMultisampleRate;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setVariableMultisampleRate(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->variableMultisampleRate = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getInheritedQueries(): bool
    {
        $cValue = $this->cdata->inheritedQueries;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setInheritedQueries(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->inheritedQueries = $cValue;
    }
}
