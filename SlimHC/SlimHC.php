<?php

namespace SlimHC;

abstract class SlimHC {

	protected $app;
	protected $config;

    public function __construct() {
    }
    

    public function init($app) {
    	$this->app = $app;
    	$this->routes();
    }

    public function routes(){

    }


    public function set_config($config){
    	$this->config = $config;
    }
}

?>