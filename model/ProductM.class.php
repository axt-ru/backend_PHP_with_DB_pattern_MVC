<?php

class ProductM
{
    // Вывод информации о конкретном продукте
    public function getItem()
    {
        // Todo: добавить опцию увеличения кол-во просмотров товара
        //       $sqlupdate = "UPDATE products SET reviews_count = reviews_count + 1 where id = $id";
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $query = "SELECT * FROM products where id=$id";
        }
        $res = PdoM::Instance() -> Select($query);
        return $res;
    }

    // Вывод информации о конкретном продукте
    public function getItemTitle()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $query = "SELECT title FROM products where id=$id";
        }
        $res = PdoM::Instance() -> Select($query);
        return $res;
    }

    public function getItemPrice()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $query = "SELECT price FROM products where id=$id";
        }
        $res = PdoM::Instance() -> Select($query);
        return $res;
    }

    // Вывод информации о скидке на конкретный продукт
    public function getItemDiscount()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $query = "SELECT discount FROM products where id=$id";
        }
        $res = PdoM::Instance() -> Select($query);
        return $res;
    }

    public function getUserId($name)
    {
        $sql = "SELECT id FROM users where name='$name';";
        $res = PdoM::Instance() -> select($sql);
        return $res['id'];
    }

    public function getUserName($id)
    {
        $sql = "SELECT name FROM users where id='$id';";
        $res = PdoM::Instance() -> select($sql);
        return $res['name'];
    }

    public function getPrice($id)
    {
        $sql = "SELECT price FROM products where id='$id';";
        $res = PdoM::Instance() -> select($sql);
        return $res['price'];
    }

    public function getName($id)
    {
        $sql = "SELECT title FROM products where id='$id';";
        $res = PdoM::Instance() -> select($sql);
        return $res['title'];
    }

    public function checkCart($id,$userid)
    {
        $sql = "SELECT id FROM basket where (id_good='$id' AND id_user='$userid');";
        $res = PdoM::Instance() -> select($sql);
        return $res['id'];
    }

    public function getCartAmount($id,$userid)
    {
        $sql = "SELECT amount FROM basket where (id_good='$id' AND id_user='$userid');";
        $res = PdoM::Instance() -> select($sql);
        return $res['amount'];
    }

    public function addToCart()
    {
        $id = $_GET['id'];
        if ($_SESSION['user_id'] == NULL) {
            $user = "demo";
            $userid = 999;
        } else {
            $userid = $_SESSION['user_id'];
            $user = $this->getUserName($userid);
        }
        $price = $this->getPrice($id);
        $cart_id = $this->checkCart($id,$userid);
        $good_title = $this->getName($id);
        $amount = 1;
        if ($cart_id == NULL) {
            $object = ['id_user' => $userid, 'id_good' => $id, 'price' => $price, 'amount' => $amount, 'good_title' => $good_title];
            $res = PdoM::Instance() -> Insert('basket',$object);
        } else {
           $amount = $this->getCartAmount($id,$userid) + 1;
           $object = ['amount' => $amount];
           $res = PdoM::Instance() -> Update('basket',$object,"id='$cart_id'");
        }
    }

    public function removeFromCart()
    {
        $id = $_GET['id'];
        if ($_SESSION['user_id'] == NULL) {

            $user = "demo";
            $userid = 999;
        } else {
            $userid = $_SESSION['user_id'];
            $user = $this->getUserName($userid);
        }
        $cart_id = $this->checkCart($id,$userid);
        $amount = $this->getCartAmount($id,$userid);
        if ($amount > 1) {
            $amount = $amount - 1;
            $object = ['amount' => $amount];
            $res = PdoM::Instance() -> Update('basket',$object,"id='$cart_id'");
        } else {
            $res = PdoM::Instance() -> Delete('basket',"id='$cart_id'");
        }
    }

    public function addShopItem($object)
    {
        $object = ['category_id' => $object[category_id], 'title' => $object[title], 'photo' => $object[photo], 'description' => $object[description],
            'short_description' => $object[short_description], 'brand_id' => $object[brand_id], 'price' => $object[price], 'availability' => $object[availability],
            'discount' => $object[discount], 'is_new' => 0, 'is_recommended' => 0,'reviews_count' => 0, 'reviews_score' => 0];
        $res = PdoM::Instance() -> Insert('products',$object);
    }

    public function deleteShopItem($id)
    {
        $res = PdoM::Instance() -> Delete('products',"id='$id'");
    }

    // Вывод информации о корзине товаров
    public function getCart()
    {
        if ($_SESSION['user_id'] == NULL) {

            $user = "demo";
            $userid = 999;
        } else {
            $userid = $_SESSION['user_id'];
            $user = $this->getUserName($userid);
        }
            $query = "SELECT * FROM basket where id_user=$userid";
        $res = PdoM::Instance() -> SelectAll($query);
        return $res;
    }

    public function getCountCart()
    {
        if ($_SESSION['user_id'] == NULL) {

            $user = "demo";
            $userid = 999;
        } else {
            $userid = $_SESSION['user_id'];
            $user = $this->getUserName($userid);
        }
        $query = "SELECT COUNT(*) FROM basket where id_user=$userid";
        $res = PdoM::Instance() -> Select($query);
        return $res["COUNT(*)"];
    }

    public function emptyCard()
    {
        if ($_SESSION['user_id'] == NULL) {

            $user = "demo";
            $userid = 999;
        } else {
            $userid = $_SESSION['user_id'];
            $user = $this->getUserName($userid);
        }
        $res = PdoM::Instance() -> Delete('basket',"id_user='$userid'");
    }

    public function createOrder()
    {
        if ($_SESSION['user_id'] == NULL) {

            $user = "demo";
            $userid = 999;
        } else {
            $userid = $_SESSION['user_id'];
            $user = $this->getUserName($userid);
        }
        $num=$this->getCountCart();
        $cart=$this->getCart();
        $totalPrice=0;
        if ($num > 1) {
            foreach ($cart as $item) {
                $totalPrice += $item["amount"]*$item["price"];
            }
        } else {
            $totalPrice = $cart[0]["amount"]*$cart[0]["price"];
        }
        // Создаем заказ, номер и дата создания присваивается автоматически в MySQL
        $object = ['id_user' => $userid, 'amount' => $totalPrice, 'id_order_status' => 1];
        $ordid = PdoM::Instance() -> Insert('orders',$object);
         // Вносим информацию о заказанных товарах в таблицу order_items
        if ($num > 1) {
            foreach ($cart as $item) {
                $cartobj = ['ord_id' => $ordid, 'item_id' => $item["id"], 'amount' => $item["amount"], 'notes' => "", 'price' => $item["price"]];
                $res = PdoM::Instance() -> Insert('order_items',$cartobj);
            }
        } else {
            $cartobj = ['ord_id' => $ordid, 'item_id' => $cart[0]["id"], 'amount' => $cart[0]["amount"], 'notes' => "", 'price' => $cart[0]["price"]];
            $res = PdoM::Instance() -> Insert('order_items',$cartobj);
        }
        // Далее необходимо обнулить корзину заказа
        $this->emptyCard();
    }

    public function listOrders()
    {
        if ($_SESSION['user_id'] == NULL) {

            $user = "demo";
            $userid = 999;
        } else {
            $userid = $_SESSION['user_id'];
            $user = $this->getUserName($userid);
        }
        $query = "SELECT * FROM orders where id_user=$userid";
        $res = PdoM::Instance() -> SelectAll($query);
        return $res;
    }

    public function getCountOrders()
    {
        if ($_SESSION['user_id'] == NULL) {

            $user = "demo";
            $userid = 999;
        } else {
            $userid = $_SESSION['user_id'];
            $user = $this->getUserName($userid);
        }
        $query = "SELECT COUNT(*) FROM orders where id_user=$userid";
        $res = PdoM::Instance() -> Select($query);
        return $res["COUNT(*)"];
    }
}