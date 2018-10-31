<?php
global $product;

if ($product->get_stock_quantity()>0) {
    echo "<div class='stock'> quantity: " . $product->get_stock_quantity() . "</div>";
}
else {
    echo "<div class='stock'>Article épuisé</div>";
}
?>
