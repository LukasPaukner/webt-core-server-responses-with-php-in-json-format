<?php

namespace src;

class OST implements \JsonSerializable
{

    public function __construct(private int $ID, private string $name, private string $gameName, private string $erscheinungsDatum, private array $trackList)
    {
    }

    /**
     * @return int
     */
    public function getID(): int
    {
        return $this->ID;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getGameName(): string
    {
        return $this->gameName;
    }

    /**
     * @return string
     */
    public function getErscheinungsDatum(): string
    {
        return $this->erscheinungsDatum;
    }

    /**
     * @return array
     */
    public function getTrackList(): array
    {
        return $this->trackList;
    }

    public function jsonSerialize(): mixed
    {
        return array(
          "ID"=>$this->getID(),
          "name"=>$this->getName(),
          "gameName"=>$this->getGameName(),
          "date"=>$this->getErscheinungsDatum(),
          "trackList"=>$this->getTrackList()
        );
    }
}