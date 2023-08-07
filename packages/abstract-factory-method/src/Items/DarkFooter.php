<?php
namespace SelahattinGns\PhpPackageAbstractFactory\Items;

use SelahattinGns\PhpPackageAbstractFactory\Interfaces\FooterInterface;

class DarkFooter implements FooterInterface {

    /**
     * @return string
     */
    public function render()
    {
        return "dark footer <br>";
    }
}
