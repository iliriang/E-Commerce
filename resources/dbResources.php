<?php

include("functions.php");
$all_products_data = fetch_data(
    $db,
    "all_products_data",
    ['id','	new_title','second_title','title' , 'description']
);

$brand_data = fetch_data(
    $db,
    "brand_data",
    ['id','title' , 'description']
);
$discound_data = fetch_data(
    $db,
    "discound_data",
    ['id','title' , 'description']
);
$ending_data = fetch_data(
    $db,
    "ending_data",
    ['id','text']
);
$featured_data = fetch_data(
    $db,
    "featured_data",
    ['id','	title','product_name','product_price']
);
$footer_data = fetch_data(
    $db,
    "footer_data",
    ['id','title' , 'description']
);
$new_collection_data = fetch_data(
    $db,
    "new_collection_data",
    ['id','title' , 'second_title' , 'product_price	']
);
$product_home_data = fetch_data(
    $db,
    "product_home_data",
    ['id','brand','title' , 'description', 'price']
);
$shop_all_products_data = fetch_data(
    $db,
    "shop_all_products_data",
    ['id','title' , 'price']
);
$subscribe_data = fetch_data(
    $db,
    "subscribe_data",
    ['id','title' ,'second_title', 'description']
);
$women_data = fetch_data(
    $db,
    "women_data",
    ['id','title' , 'product_title','product_price']
);
$users = fetch_data(
    $db,
    "users",
    ['id','username' , 'email','password', 'confirm' , 'role']
);
$userss = fetch_data(
    $db,
    "users",
    ['id','firstname' , 'lastname','password']
);

?>