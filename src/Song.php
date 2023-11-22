<?php
namespace src;

class Song {
    /**
     * @var int
     */
    private int $uniqueId;      
    /**
     * @var string
     */
    private string $name;
    /**
     * @var string
     */
    private string $artist;
    /**
     * @var int
     */
    private int $trackNumber;
    /**
     * @var int
     */
    private int $duration;

    /**
     * @param int $uniqueId
     * @param string $name
     * @param string $artist
     * @param int $trackNumber
     * @param int $duration
     */
    public function __construct(int $uniqueId, string $name, string $artist, int $trackNumber, int $duration)
    {
        $this->uniqueId = $uniqueId;
        $this->name = $name;
        $this->artist = $artist;
        $this->trackNumber = $trackNumber;
        $this->duration = $duration;
    }


    /**
     * @return int
     */
    public function getUniqueId(): int
    {
        return $this->uniqueId;
    }

    /**
     * @param int $uniqueId
     * @return void
     */
    public function setUniqueId(int $uniqueId): void
    {
        $this->uniqueId = $uniqueId;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return void
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getArtist(): string
    {
        return $this->artist;
    }

    /**
     * @param string $artist
     * @return void
     */
    public function setArtist(string $artist): void
    {
        $this->artist = $artist;
    }

    /**
     * @return int
     */
    public function getTrackNumber(): int
    {
        return $this->trackNumber;
    }

    /**
     * @param int $trackNumber
     * @return void
     */
    public function setTrackNumber(int $trackNumber): void
    {
        $this->trackNumber = $trackNumber;
    }

    /**
     * @return int
     */
    public function getDuration(): int
    {
        return $this->duration;
    }

    /**
     * @param int $duration
     * @return void
     */
    public function setDuration(int $duration): void
    {
        $this->duration = $duration;
    }
}