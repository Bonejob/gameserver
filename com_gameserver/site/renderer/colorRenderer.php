<?php
/*------------------------------------------------------------------------
# com_gameserver - GameServer!
# ------------------------------------------------------------------------
# author    Lars Hildebrandt
# copyright Copyright (C) 2014 Lars Hildebrandt. All Rights Reserved.
# @license - http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
# Websites: http://www.larshildebrandt.de
# Technical Support:  Forum - http://www..larshildebrandt.de/forum/
-------------------------------------------------------------------------*/

// no direct access
defined('_JEXEC') or die('Restricted access');

class colorRenderer {

	public static function aaName2Html($text)
	{
		$color["���"] = "White";
		$color["�we"] = "Pink";
		$color["���"] = "Light Pink";
		$color["�"] = "Red";
		$color["��@"] = "Orange";
		$color["��"] = "Orange";
		$color["��"] = "Yellow";
		$color["�"] = "Bright Green";
		$color["�"] = "Dark Green";
		$color["�@"] = "Aqua-Blue Green";
		$color["�"] = "Dark Blue";
		$color[""] = "Black";		
		$color["�"] = "Red";
		$color["��"] = "Orange";
		$color["��"] = "Yellow";
		$color["�"] = "Green";
		$color[""] = "Blue";
		$color["g�"] = "Purple";
		$color["�@"] = "Brown";
		$color[""] = "Black";
		$color["�33"] = "Light Red";
		$color["���"] = "Light Yellow";
		$color["���"] = "Light Green";
		$color["��"] = "Light Blue";
		$color["��3"] = "Light Brown";
		$color["���"] = "Light Purple";
		
		$count = 0;
		foreach($color as $key => $value) {
			$search = "$key";
			$replace = "<font color=\"$value\">";
			$replace = "</font>" . $replace;
			
			if (strstr ( $text , $search)) {
				$text = str_replace ( $search, $replace , $text);
				$count++;
			} # End if
		} # End if
		
		if ($count > 0) {
			$text .= "</font>";
			$replace = "</font>";
			$pos = strpos($text,$replace);		
			if ($pos !== false) {
				$text = substr_replace($text,'',$pos,strlen($replace));
			}		
		} # End if
		
		return $text;
	}
	
	public static function q3Name2HTML( $text ) {
		$color["0"] = "Black";
		$color["1"] = "Red";
		$color["2"] = "Green";
		$color["3"] = "Yellow";
		$color["4"] = "Blue";
		$color["5"] = "Cyan";
		$color["6"] = "Pink";
		$color["7"] = "White";
		$color["8"] = "Orange";
		$color["9"] = "Gray";
		$color["a"] = "Orange";
		$color["b"] = "Turquoise";
		$color["c"] = "Purple";
		$color["d"] = "Light Blue";
		$color["e"] = "Purple";
		$color["f"] = "Light Blue";
		$color["g"] = "Light Green";
		$color["h"] = "Dark Green";
		$color["i"] = "Dark Red";
		$color["j"] = "Claret";
		$color["k"] = "Brown";
		$color["l"] = "Light Brown";
		$color["m"] = "Olive";
		$color["n"] = "Beige";
		$color["o"] = "Beige";
		$color["p"] = "Black";
		$color["q"] = "Red";
		$color["r"] = "Green";
		$color["s"] = "Yellow";
		$color["t"] = "Blue";
		$color["u"] = "Cyan";
		$color["v"] = "Pink";
		$color["w"] = "White";
		$color["x"] = "Orange";
		$color["y"] = "Gray";
		$color["z"] = "Orange";
		$color["/"] = "Beige";
		$color["*"] = "Gray";
		$color["-"] = "Olive";
		$color["+"] = "Foxy Red";
		$color["?"] = "Dark Brown";
		$color["@"] = "Brown";
		
		$count = 0;
		
		
		foreach($color as $key => $value) {
			$search = "^$key";
			$replace = "<font color=\"$value\">";
			$replace = "</font>" . $replace;
			
			if (strstr ( $text , $search)) {
				$text = str_replace ( $search, $replace , $text);
				$count++;
			} # End if
		} # End if
		
		if ($count > 0) {
			$text .= "</font>";
			$replace = "</font>";
			$pos = strpos($text,$replace);		
			if ($pos !== false) {
				$text = substr_replace($text,'',$pos,strlen($replace));
			}		
		} # End if
		
		return $text;
	}
	
	public static function codName2HTML( $text ) {
		$color["0"] = "Black";
		$color["1"] = "Red";
		$color["2"] = "Green";
		$color["3"] = "Yellow";
		$color["4"] = "Blue";
		$color["5"] = "Cyan";
		$color["6"] = "Pink";
		$color["7"] = "White";
		$color["8"] = "Gray";
		$color["9"] = "Black";
		
		$count = 0;
		foreach($color as $key => $value) {
			$search = "^$key";
			$replace = "<font color=\"$value\">";
			$replace = "</font>" . $replace;
			
			if (strstr ( $text , $search)) {
				$text = str_replace ( $search, $replace , $text);
				$count++;
			} # End if
		} # End if
		
		if ($count > 0) {
			$text .= "</font>";
			$replace = "</font>";
			$pos = strpos($text,$replace);		
			if ($pos !== false) {
				$text = substr_replace($text,'',$pos,strlen($replace));
			}		
		} # End if
		
		return $text;
	}
	
}
?>