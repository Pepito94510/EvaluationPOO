<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once("Item.php");
require_once("ShoppingCart.php");
require_once("FreshItem.php");
require_once("Ticket.php");
require_once("Payable.php");
require_once("Invoice.php");

$item = new Item("corn flakes", 5.00, 0);

var_dump($item->getPrice());
var_dump($item->getName());


function ovar_dump($item)
{
    switch (get_class($item)) {
        case 'Item':
            print($item->getName() . " : " . $item->getPrice() . " €");
            break;

        case 'Ticket':
            print("La reference du ticket est : " . $item->getReference() . " pour le prix de : " . $item->getPrice() . " €");
            break;

        case 'FreshItem':
            print($item->getName() . " : " . $item->getPrice() . " €. À consommer avant : " . $item->getBestBeforeDate());
            break;

        default:
            return "L'article n'est pas connu";
            break;
    }
}



$item3 = new Item("chewing gum", 4.03, 10);


$panier = new ShoppingCart();
$panier2 = new ShoppingCart();

$panier->addItem($item3);

$ticket = new Ticket("France", 22);

var_dump($ticket->getPrice());

var_dump($panier);
var_dump($panier2);

