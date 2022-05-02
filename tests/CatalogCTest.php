<?php
require_once '../controller/CatalogC.class.php';
require_once '../model/CatalogM.class.php';
require_once '../tests/BaseTest.php';

class CatalogCTest extends BaseTest
{
    /**
     * @dataProvider providerCatalogC
     */
    public function testViewCatalog()
    {
        $newCatalog = new CatalogM();
        $resNewCatalog = $newCatalog->getCatalog();
        $this->assertNotNull($resNewCatalog);
        $this->assertArrayHasKey("categories", $resNewCatalog);
    }

    public function providerCatalogC() {
        return array (
            array(["id_category" => 0]),
            array(["id_category" => 1]),
            array(["id_category" => 2])
        );

    }

}
