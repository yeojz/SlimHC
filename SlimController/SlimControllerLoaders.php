<?php

namespace SlimController;

class SlimControllerLoaders {

	/*
	 * Go through an array 
	 * Require/Import each of the files defined by it.
	 */
	public static function registerModules($modules, $directory) {
		foreach ($modules as $module){
			require $directory . '/' . $module . '.php';
		}
	}


	/*
	 * Go through an array
	 * Initialize and put it array
	 * Return the array
	 */
	public static function loadModules($modules, $namespace = "\\"){
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