<?php
namespace SelahattinGns\PhpPackageAbstractFactory\Items;

use SelahattinGns\PhpPackageAbstractFactory\Interfaces\HeaderInterface;

class LightHeader implements HeaderInterface {

    /**
     * @return string
     */
    public function render()
    {
        return "light header <br>";
    }
}
