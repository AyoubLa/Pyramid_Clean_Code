<?php

namespace Pyramid;

require ("Resource.php");
require ("Block.php");
require ("BlockFactory.php");
require ("BlockX.php");
require ("BlockV.php");

class Pyramid
{
    private $pyramid = [];
    private $resource;

    public function printPyramid()
    {
        $pyramidCaracters = '';
        for ($index = 0; $index < sizeof($this->pyramid); $index ++){

            
        }
        return '';
    }

    public function addLayer($resources)
    {
        $this->resource = new Resource($resources);
        $numberOfBlocks = $this->resource->getNumberOfBlocks();
        $block = $this->resource->getBlock();
        $this->pyramid[] = $this->getLayer($numberOfBlocks, $block);
        var_dump($this->pyramid);
    }

    public function getLayer($numberOfBlocks,$block)
    {
        $currentLayer = '';
        $underLayer = str_split($this->pyramid[sizeof($this->pyramid - 1)]);
        $nmberOfUnderBlock = sizeof(str_split($this->pyramid[sizeof($this->pyramid - 1)]));
        for ($index = 0;$index< $numberOfBlocks; $index++){
            if ($underLayer[$index] === " " and $underLayer[$index] === "_"){

                $currentLayer .= " ";

            }else
            {

            }
            $currentLayer .= $block->build();
        }

        return $layer;
    }

    public function addEmptyBlockToLayer($layer, $emptyBlocks)
    {

    }
}