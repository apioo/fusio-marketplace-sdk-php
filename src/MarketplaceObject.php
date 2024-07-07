<?php
/**
 * MarketplaceObject automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace Fusio\Marketplace;


class MarketplaceObject implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    protected ?int $id = null;
    protected ?string $name = null;
    protected ?User $author = null;
    protected ?string $version = null;
    protected ?string $icon = null;
    protected ?string $summary = null;
    protected ?string $description = null;
    protected ?int $cost = null;
    protected ?\PSX\DateTime\LocalDateTime $updateDate = null;
    protected ?\PSX\DateTime\LocalDateTime $insertDate = null;
    public function setId(?int $id) : void
    {
        $this->id = $id;
    }
    public function getId() : ?int
    {
        return $this->id;
    }
    public function setName(?string $name) : void
    {
        $this->name = $name;
    }
    public function getName() : ?string
    {
        return $this->name;
    }
    public function setAuthor(?User $author) : void
    {
        $this->author = $author;
    }
    public function getAuthor() : ?User
    {
        return $this->author;
    }
    public function setVersion(?string $version) : void
    {
        $this->version = $version;
    }
    public function getVersion() : ?string
    {
        return $this->version;
    }
    public function setIcon(?string $icon) : void
    {
        $this->icon = $icon;
    }
    public function getIcon() : ?string
    {
        return $this->icon;
    }
    public function setSummary(?string $summary) : void
    {
        $this->summary = $summary;
    }
    public function getSummary() : ?string
    {
        return $this->summary;
    }
    public function setDescription(?string $description) : void
    {
        $this->description = $description;
    }
    public function getDescription() : ?string
    {
        return $this->description;
    }
    public function setCost(?int $cost) : void
    {
        $this->cost = $cost;
    }
    public function getCost() : ?int
    {
        return $this->cost;
    }
    public function setUpdateDate(?\PSX\DateTime\LocalDateTime $updateDate) : void
    {
        $this->updateDate = $updateDate;
    }
    public function getUpdateDate() : ?\PSX\DateTime\LocalDateTime
    {
        return $this->updateDate;
    }
    public function setInsertDate(?\PSX\DateTime\LocalDateTime $insertDate) : void
    {
        $this->insertDate = $insertDate;
    }
    public function getInsertDate() : ?\PSX\DateTime\LocalDateTime
    {
        return $this->insertDate;
    }
    public function toRecord() : \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('id', $this->id);
        $record->put('name', $this->name);
        $record->put('author', $this->author);
        $record->put('version', $this->version);
        $record->put('icon', $this->icon);
        $record->put('summary', $this->summary);
        $record->put('description', $this->description);
        $record->put('cost', $this->cost);
        $record->put('updateDate', $this->updateDate);
        $record->put('insertDate', $this->insertDate);
        return $record;
    }
    public function jsonSerialize() : object
    {
        return (object) $this->toRecord()->getAll();
    }
}
