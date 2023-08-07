<?php
namespace SelahattinGns\PhpPackageAbstractFactory\Themes;

use SelahattinGns\PhpPackageAbstractFactory\Interfaces\ThemeFactoryInterface;
use SelahattinGns\PhpPackageAbstractFactory\Items\LightFooter;
use SelahattinGns\PhpPackageAbstractFactory\Items\LightHeader;

class LightThemeFactory implements ThemeFactoryInterface {

    /**
     * @return LightHeader
     */
    public function createHeader()
    {
        return new LightHeader();
    }

    /**
     * @return LightFooter
     */
    public function createFooter()
    {
        return new LightFooter();
    }
}
