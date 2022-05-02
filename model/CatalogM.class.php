<?php


class CatalogM
{

    // Вывод информации о продуктах каталога
    public function getCatalog()
    {
        if (isset($_GET['id'])) {
            settype($id, 'integer');  //  Приведение к целочисленному типу - защита от SQL инъекций
            $id = $_GET['id'];
            $query = "SELECT * FROM products where category_id=$id";
        } else {
            $query = "SELECT * FROM products";
        }
//        var_dump($query);
        $res = PdoM::Instance() -> SelectAll($query);
//        var_dump($res);
        return $res;
    }
}