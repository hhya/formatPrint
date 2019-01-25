<?php

/**
 * 格式化打印数据
 *@param mixed $param
 */

if (!function_exists('fp')) {
	function fp($param) {
		echo '<pre>';
		print_r($param);
	}
}
