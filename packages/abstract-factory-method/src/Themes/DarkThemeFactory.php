<?php
namespace SelahattinGns\PhpPackageAbstractFactory\Themes;

use SelahattinGns\PhpPackageAbstractFactory\Interfaces\ThemeFactoryInterface;
use SelahattinGns\PhpPackageAbstractFactory\Items\DarkFooter;
use SelahattinGns\PhpPackageAbstractFactory\Items\DarkHeader;

class DarkThemeFactory implements ThemeFactoryInterface {

    /**
     * @return DarkHeader
     */
    public function createHeader()
    {
        return new DarkHeader();
    }

    /**
     * @return DarkFooter
     */
    public function createFooter()
    {
        return new DarkFooter();
    }
}
