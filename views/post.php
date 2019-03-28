<?php
require_once ('../vendor/autoload.php');


if(array_key_exists('register',$_POST)){

    $obj  = new \App\Authentication();

    $obj->setData($_POST);

    $obj->store();

    \Model\Utility::redirect("login.php");

}

if(array_key_exists('product_photo',$_FILES)){
    $obj = new \App\Product();
    // Start of physically moving file to its destination

    $fileName =   time().$_FILES["product_photo"]["name"];

    $source = $_FILES["product_photo"]["tmp_name"];

    $destination = "Uploads/".$fileName;

    move_uploaded_file($source, $destination);

// End of physically moving file to its destination

// Start of the process to store file name to the table
    $_POST["product_photo"] = $fileName;

    $obj->setData($_POST);

    $obj->store();

// End of the process to store file name to the table


    \Model\Utility::redirect("products.php");


}

if(array_key_exists('product_quantity_update',$_POST)){
    $obj = new \App\Product();
    $obj->setData($_POST);
    $obj->quantityUpdate();
    \Model\Utility::redirect("products.php");
}

if(array_key_exists('cart_price',$_POST)){
    $obj = new \App\Cart();
    $obj->setData($_POST);
    $obj->store();
    \Model\Utility::redirect("pos.php");

}

if (array_key_exists('sale_id',$_POST)){
    $obj = new \App\Sale();
    $strIds = implode(",",$_POST["sale_id"]);
    $_POST["sale_id"] = $strIds;
    $obj->setData($_POST);
    $obj->store();
    \Model\Utility::redirect("invoicesingle.php");

}