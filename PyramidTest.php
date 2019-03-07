<?php

namespace Pyramid;

require ("Pyramid.php");

use PHPUnit\Framework\TestCase;

class PyramidTest extends TestCase
{
    /**
     * @test
     */
    public function buildSimplePyramid() {
        $pyramid = new Pyramid();
		$pyramid->addLayer("250 Slaves, 10 Anks");
		$this->assertEquals("XXXXX", $pyramid->printPyramid());
		$pyramid->addLayer("150 Slaves, 4 Anks");
		$this->assertEquals("_VVV_\nXXXXX", $pyramid->printPyramid());
		$pyramid->addLayer("50 Slaves, 2 Anks");
		$this->assertEquals(" _X_ \n_VVV_\nXXXXX", $pyramid->printPyramid());
	}

    /**
     * @test
     */
	public function collapseLayers() {
        $pyramid = new Pyramid();
		$pyramid->addLayer("250 Slaves, 10 Anks");
		$pyramid->addLayer("50 Slaves, 3 Anks");
		$this->assertEquals("__X__\nXXXXX", $pyramid->printPyramid());
		$pyramid->addLayer("150 Slaves, 6 Anks");
		$this->assertEquals("_XXX_\nXXXXX", $pyramid->printPyramid());
		$pyramid->addLayer("150 Slaves, 3 Anks");
		$this->assertEquals(" VVV \n_XXX_\nXXXXX", $pyramid->printPyramid());
		$pyramid->addLayer("150 Slaves, 3 Anks");
		$this->assertEquals(" VVV \n_XXX_\nXXXXX", $pyramid->printPyramid());
	}
}