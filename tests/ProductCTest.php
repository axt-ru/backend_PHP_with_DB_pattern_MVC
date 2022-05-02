<?php
require_once '../model/ProductM.class.php';
require_once '../controller/ProductC.class.php';
require_once '../tests/BaseTest.php';

class ProductCTest extends BaseTest
{
    public function testViewBasket()
    {
        $newCatalog = new ProductM();
        $this->assertNull($newCatalog->getCart());
    }

    public function testGetUserName(){
        $ids = new ProductM();
        $ids->getUserName(1);
        $res = new ProductM();
        $res->getUserName($ids[0]['id']);
        $this->assertNotNull($res);
    }

}
