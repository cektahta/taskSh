<?php

use Product\Product;
use Product\BundleProducts;
use Client\BigClient;
use Casse\Casse;
use Client\LittleClient;
use Store\Store;


require_once 'autoload.php';

$p1 = new Product("breed", 1, 1);
$p2 = new Product("water", 1, 1);
$p3 = new Product("vafla", 1, 1);
$p4 = new Product("cheese", 1, 1);
$p5 = new Product("morkov", 1, 1);

$b1 = new BundleProducts("qdene", 1);
$b1->addProducts($p1);
$b1->addProducts($p2);

$b2 = new BundleProducts("mandha", 1);
$b2->addProducts($p5);
$b2->addProducts($p4);

$b3 = new BundleProducts("desert", 1);
$b3->addProducts($p3);
$b3->addProducts($p5);

$c1= new LittleClient(330);
$c1->addProductToBasket($p1);
$c1->addProductToBasket($p2);

$c2 = new BigClient("pencho");
$c2->addProductToBasket($b3);
$c2->addProductToBasket($p1);

$casa1 =new Casse(1);
$casa2 = new Casse(2);
$casa1->takeClient($c1);
$casa2->takeClient($c2);

$store = new Store("sfs");
$store->addCase($casa1);
$store->addCase($casa2);

 echo $store->showCase();