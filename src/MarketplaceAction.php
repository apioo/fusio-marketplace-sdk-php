<?php
/**
 * MarketplaceAction automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace Fusio\Marketplace;


class MarketplaceAction extends MarketplaceObject implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    protected ?string $class = null;
    protected ?MarketplaceActionConfig $config = null;
    public function setClass(?string $class): void
    {
        $this->class = $class;
    }
    public function getClass(): ?string
    {
        return $this->class;
    }
    public function setConfig(?MarketplaceActionConfig $config): void
    {
        $this->config = $config;
    }
    public function getConfig(): ?MarketplaceActionConfig
    {
        return $this->config;
    }
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = parent::toRecord();
        $record->put('class', $this->class);
        $record->put('config', $this->config);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}
