<?php
namespace SelahattinGns\PhpPackageAbstractFactory\Items;

use SelahattinGns\PhpPackageAbstractFactory\Interfaces\FooterInterface;

class LightFooter implements FooterInterface {

    /**
     * @return string
     */
    public function render()
    {
        return "light footer <br>";
    }
}
