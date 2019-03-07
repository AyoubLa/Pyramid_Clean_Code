<?php

namespace Pyramid;


class BlockEmpty implements Block
{
    public static function build()
    {
        return " ";
    }
}