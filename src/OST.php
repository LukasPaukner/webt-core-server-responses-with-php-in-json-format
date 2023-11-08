<?php

namespace src;

class OST
{

    public function __construct(private int $ID, private string $name, private string $gameName, private string $erscheinungsDatum, private array $trackList)
    {
    }
}