<?php
require_once 'Book.php';
require_once 'ShopCart.php';
// instâncias de classes
$bookOne = new Book(
    '973-8594318602',
    'Dom casmurro',
    'Machado de Assis',
    'Principis',
    'ação',
    new dateTime('12/05/2001'),
    '3',
    ['Audio Book'],
    'oi tudo bem',
    '208',
    '14',
    '20.00'
);
$bookTwo = new Book(
    '973-8594318602',
    'Dom casmurro',
    'Machado de Assis',
    'Principis',
    'ação',
    new dateTime('12/05/2001'),
    '3',
    ['Audio Book'],
    'oi tudo bem',
    '208',
    '14',
    '20.00'
);
$ShopCar = new ShopCart();

$ShopCar->addItem($bookOne);
$ShopCar->addItem($bookTwo);

echo "Listando ao cadastrar\n";
print_r($shopCart->showItems());

$shopCart->removeItem('973-8594318602');

echo "Listando após remover\n";
print_r($shopCart->showItems());

echo "Preço total\n";
$total = $shopCart->subtotal();
echo "Subtotal: R$ $total";
