<?php
require 'vendor/autoload.php';

$applicationTheme = new SelahattinGns\PhpPackageAbstractFactory\ApplicationTheme();


$darkTheme = new \SelahattinGns\PhpPackageAbstractFactory\Themes\DarkThemeFactory();
$applicationTheme->render($darkTheme);

$lightTheme = new \SelahattinGns\PhpPackageAbstractFactory\Themes\LightThemeFactory();
$applicationTheme->render($lightTheme);
