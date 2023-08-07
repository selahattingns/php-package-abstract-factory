<?php
namespace SelahattinGns\PhpPackageAbstractFactory\Items;

use SelahattinGns\PhpPackageAbstractFactory\Interfaces\HeaderInterface;

class DarkHeader implements HeaderInterface {

    /**
     * @return string
     */
    public function render()
    {
        return "dark header <br>";
    }
}
