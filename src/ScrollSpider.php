<?php

namespace Dprc\Spider\ScrollSpider;

use Dprc\Spider\Spider;
use Dprc\Spider\Step;

class ScrollSpider {

    /**
     * @var Spider This is the spider that will be doing the heavy lifting.
     */
    protected $spider;

    public function __construct( $debug = FALSE, $debugDirectory = './' ) {
        $this->spider = new Spider();
        $this->spider->setDebugDirectory( $debugDirectory );
        $this->addStepLoadCaptchaPage();
    }

    /**
     * Load up the first page of the site, that should present us with a CAPTCHA.
     */
    protected function addStepLoadCaptchaPage() {
        $step = new Step();
        $step->setUrl( 'http://iapps.courts.state.ny.us/iscroll/' );
        $this->spider->addStep( $step, 'load_captcha_page' );
    }

    public function run() {
        $this->spider->run();
    }

}