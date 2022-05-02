<?php
require_once '../model/ProductM.class.php';
require_once '../tests/BaseTest.php';

class ProductMTest extends BaseTest
{
    public function testGetItem()
    {
        $item = new ProductM();
        $this->assertContains('Открытка №5', $item->getItem(), 'Содержит такое значение');
    }

}