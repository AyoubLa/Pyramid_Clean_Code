<?php

namespace Pyramid;


class Resource
{
    private $numberOfBlocks;
    private $block;

    private $numberOfSlaves;
    private $numberOfAnks;

    public function __construct($resources)
    {
        $this->numberOfSlaves = $this->getNumberOfSlaves($resources);
        $this->numberOfAnks = $this->getNumberOfAnks($resources);
        $this->calculateNumberOfBlocks();
        $this->defineQualityOfBlocks();

    }

    public function getNumberOfSlaves($resources)
    {
        var_dump((explode(' ', $resources))[0]);
        return (explode(' ', $resources))[0];
    }

    public function getNumberOfAnks($resources)
    {
        var_dump((explode(' ', $resources))[2]);
        return (explode(' ', $resources))[2];
    }

    public function calculateNumberOfBlocks()
    {
        $this->numberOfBlocks = ((int)$this->numberOfSlaves / 50);
    }

    public function defineQualityOfBlocks()
    {
        $price = (int)($this->numberOfAnks / $this->numberOfBlocks);
        var_dump($price);
        $this->block = BlockFactory::getBlock($price);
    }

    public function getNumberOfBlocks()
    {
        return $this->numberOfBlocks;
    }

    public function getBlock()
    {
        return $this->block;
    }
}