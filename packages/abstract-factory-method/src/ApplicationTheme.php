<?php
namespace SelahattinGns\PhpPackageAbstractFactory;

use SelahattinGns\PhpPackageAbstractFactory\Interfaces\ThemeFactoryInterface;

class ApplicationTheme {

    /**
     * @param ThemeFactoryInterface $theme
     */
    public function render(ThemeFactoryInterface $theme)
    {
        echo $theme->createHeader()->render();
        echo $theme->createFooter()->render();
    }
}
