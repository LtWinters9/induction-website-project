<?php
if(isset($_SERVER["HTTP_ACCEPT_LANGUAGE"])){
$langarray=explode(",", $_SERVER["HTTP_ACCEPT_LANGUAGE"]);
$lang = strtolower($langarray[0]);
//echo $lang . " / " . $_COOKIE["Lang"] . " / ";
$stop=1; //change this to 1 to disable redirect
if ($_GET["stop"]!=1&&$stop!=1){
	if (isset($_COOKIE["Lang"])){
		if ($_COOKIE["Lang"]=="italian"){
			header("Location: " . $_SERVER["HOST"] . "it/");
		} else {
			header("Location: " . $_SERVER["HOST"] . "en/");
		}
	} else {
		switch ($lang){
		case "en-au":
		case "en-bz":
		case "en-ca":
		case "en-029":
		case "en-gb":
		case "en-in":
		case "en-ie":
		case "en-jm":
		case "en-my":
		case "en-nz":
		case "en-ph":
		case "en-sg":
		case "en-za":
		case "en-tt":
		case "en-us":
		case "en-zw":
		case "en":
		case "gd":
		case "ga":
		case "ga-ie":
		case "cy-gb":
		case "cy":
			header("Location: " . $_SERVER["HOST"] . "en/");
			break;
		case "it":
		case "it-ch":
		case "it-it":
			header("Location: " . $_SERVER["HOST"] . "it/");
			break;
		case "es":
		case "es-es":
		case "es-ar":
		case "es-ve":
		case "es-bo":
		case "es-cl":
		case "es-co":
		case "es-cr":
		case "es-do":
		case "es-ec":
		case "es-sv":
		case "es-gt":
		case "es-hn":
		case "es-mx":
		case "es-ni":
		case "es-pa":
		case "es-py":
		case "es-pe":
		case "es-pr":
		case "es-us":
		case "es-uy":
			header("Location: " . $_SERVER["HOST"] . "es/");
			break;
		}
	}
}
}
?>
