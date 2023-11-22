<?php
namespace src;
class Seeder {
    private array $ostList;

    function __construct(OST ...$ostList) {
        $this->ostList = $ostList;
    }

    function getOSTList(): array
    {
        return $this->ostList;
    }

    function setOSTList(array $ostList) {
        $this->ostList = $ostList;
    }
}