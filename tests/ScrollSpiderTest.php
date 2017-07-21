<?php

namespace Dprc\Spider\ScrollSpider\Tests;

use Dprc\Spider\ScrollSpider\ScrollSpider;
use Dprc\Spider\Spider;
use Dprc\Spider\Step;
use PHPUnit\Framework\TestCase;

class ScrollSpiderTest extends TestCase {

    public function testAddStepLoadCaptchaPage() {
        $spider = new Spider();
        $step   = new Step();
        $spider->addStep( $step, 'testStep' );
        $steps    = $spider->getSteps();
        $numSteps = count( $steps );
        $this->assertEquals( 1, $numSteps );
    }

    public function testCommand() {
        $spider = new ScrollSpider( TRUE, './storage' );
        $spider->run();
    }

}