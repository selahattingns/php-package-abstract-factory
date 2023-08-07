<?php
namespace SelahattinGns\PhpPackageAbstractFactory\Interfaces;

interface ThemeFactoryInterface {
    /**
     * @return mixed
     */
    public function createHeader();

    /**
     * @return mixed
     */
    public function createFooter();
}
