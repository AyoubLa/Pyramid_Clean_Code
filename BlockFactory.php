<?php

namespace Pyramid;


class BlockFactory
{

    public static function getBlock($priceOfBlock)
    {
        switch ($priceOfBlock)
        {
            case 2: return new BlockX();
                break;
            case 1: return new BlockV();
        }
    }
}