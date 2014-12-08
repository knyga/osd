<?php

namespace Osd;

/**
 * Oleksandr Knyga <oleksandrknyga@gmail.com>
 */
class Osd {
	public static function scandir($path) {
		$files = scandir($path);
		$files = array_slice($files, 2);
		$cnt = count($files);
		$sfiles = [];

		for($i=0; $i<$cnt; $i++) {

			if(preg_match('/\d+/', $files[$i], $matches)) {
				$val = doubleval(array_pop($matches));
			} else {
				$val = 0;
			}

			$sfiles[$files[$i]] = $val;
		}

		asort($sfiles);
		$files = array_keys($sfiles);
		
		return $files;
	}
}