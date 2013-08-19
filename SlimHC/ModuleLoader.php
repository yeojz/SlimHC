<?php

namespace SlimHC;

class ModuleLoader {

	/*
	 * Go through an array 
	 * Require/Import each of the files defined by it.
	 */
	public static function register($modules, $directory) {
		foreach ($modules as $module){
			require $directory . '/' . $module . '.php';
		}
	}


	/*
	 * Go through an array
	 * Initialize and put it array
	 * Return the array
	 */
	public static function load($modules, $namespace = "\\"){
		$loader = array();

		foreach ($modules as $module){
			$list = explode("/", $module);
			$name = end($list);

			$module = $namespace . implode("\\", $list);
			$loader[$name] = new $module();
		}
		return $loader;
	}

}

?>