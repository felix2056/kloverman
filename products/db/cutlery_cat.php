<?php
$products = array();

/**
 * Cutlely Starts Here
*/

$product43 = array();
$product43['id'] = 43;
$product43['title'] = "Wood Mini Spork";
$product43['price'] = "$17.94";
$product43['sale_price'] = "$29.98";
$product43['description'] = "Wood Mini Spork 105 mm/4 Great looking and fun, our mini spork is perfect when you can't decide between a spoon or a fork, or you need both! Beautifully combines with our mini wood boats.";
$product43['meta'] = array(
    "specification" => "Single-piece Package",
    "style" => "Creative",
    "pattern" => "Plane Wall Sticker",
    "scenerios" => "Wall",
    "material" => "vinyl"
);

$product43['featured_image'] = "/assets/images/products/210MSPK_48891__02467_600x.jpg";

$product43['images'] = array();

$product44 = array();
$product44['id'] = 44;
$product44['title'] = "Wood Fork";
$product44['price'] = "$29.18";
$product44['sale_price'] = "$23.18";
$product44['description'] = "Wooden Fork Made of beautiful and natural wood Strong and durable fork Matches our Palm and Wood line of plates Upscale alternative to plastic Fully disposable, biodegradable and eco-friendly Dimensions: 158 mm / 6.2 Check out the matching Wood Knife.";
$product44['meta'] = array(
    "style" => "Modern",
    "material" => "Spandex",
    "theme" => "Sports",
    "size" => "40cm*40cm/15.7*15.7"
);

$product44['featured_image'] = "/assets/images/products/K2AlO3zFReFZr17on6kQ_210CVB1_Wooden_2BFork_Main_2BView_600x.jpg";
$product44['images'] = array();


$product45 = array();
$product45['id'] = 45;
$product45['title'] = "TUNG Bamboo Mini Spoon";
$product45['price'] = "$74.20";
$product45['sale_price'] = "$56.40";
$product45['description'] = "Our bamboo cutlery offers a more refined and stylish alternative to silverware or plastic. Loved by professional chefs and food photographers for it's beautiful apperance and smooth design, the TUNG Mini Spoon adds a unique touch to any food that it is served with. Offer customers ice cream samples or pair with a mini appetizer, hors d'oeuvres, or any dish that needs delicate scooping. Allows party guests to enjoy their amuse-bouche without getting their hands messy. Looks delicate and upscale but is durable and can be used for casual occasions too.迨 100% natural Very sturdy Smooth finish Perfect to match mini bamboo appetizer dishes Dimensions: 90mm or 3.54";
$product45['meta'] = array(
    "style" => "Flower Bouquet",
    "material" => "Plastic",
    "model" => "Artificial flower",
    "occasion" => "Valentine's Day",
    "type" => "Decorative Flowers & Wreaths,Peony",
    "classification" => "rtificial Flowers"
);

$product45['featured_image'] = "/assets/images/products/209BBTUNG_mini_bamboo_spoon_eco_catering_supplies_76354__77736_600x.jpg";
$product45['images'] = array();


$product46 = array();
$product46['id'] = 46;
$product46['title'] = "Wood Knife";
$product46['price'] = "$44.89";
$product46['sale_price'] = "$33.89";
$product46['description'] = "Wooden Knife Made of beautiful and natural wood Strong and durable fork Matches our迨Palm迨and迨Wood迨line of迨plates Upscale alternative to plastic Fully disposable, biodegradable and eco-friendly Dimensions: 165 mm / 6.2 Check out the matching Wood Fork. 迨";
$product46['meta'] = array(
    "style" => "Modern",
    "quantity" => "a set",
    "size" => "4CM",
    "material" => "PVC"
);

$product46['featured_image'] = "/assets/images/products/amWn4SsT3aw9evHFTg9t_210CVB2_Wooden_2BKnife_Main_2BView_600x.jpg";
$product46['images'] = array();

$product47 = array();
$product47['id'] = 47;
$product47['title'] = "Wood Spoon";
$product47['price'] = "$44.89";
$product47['sale_price'] = "$33.89";
$product47['description'] = "Wooden Spoon 158 mm/ 6.2 We have beautiful, strong, wood cutlery, that looks amazing next to our Palm and Wood line of plates. Fully biodegradable.";
$product47['meta'] = array(
    "style" => "Modern",
    "quantity" => "a set",
    "size" => "4CM",
    "material" => "PVC"
);

$product47['featured_image'] = "/assets/images/products/qSXUUC4pRq6aIt0qgGNW_210CVB3_Wooden_2BSpoon_Main_2BView_600x.webp";
$product47['images'] = array();


$product48 = array();
$product48['id'] = 48;
$product48['title'] = "Bamboo Buffet Fork";
$product48['price'] = "$44.89";
$product48['sale_price'] = "$33.89";
$product48['description'] = "Our great little Bamboo Buffet Fork is perfect for serving appetizers! These sustainable, eco-friendly, biodegradable forks are popular among chefs and caterers and adored by food lovers. Great for oysters, eating small noodle dishes or Chinese food, and any other utensil needs!
<br>
Our Bamboo Buffet Forks are:
<br>
Elegant and make for unique party picks
Natural and eco-friendly
Perfect for cocktail parties, catered events & creative meals
Dimensions: 90mm / 3.5";
$product48['meta'] = array(
    "style" => "Modern",
    "quantity" => "a set",
    "size" => "4CM",
    "material" => "PVC"
);

$product48['featured_image'] = "/assets/images/products/209BBF9_Bamboo_Buffet_Fork_Main_Image_600x.webp";
$product48['images'] = array();

/**
 * Cutlery Ends Here
*/

array_push($products, $product43);
array_push($products, $product44);
array_push($products, $product45);
array_push($products, $product46);
array_push($products, $product47);
array_push($products, $product48);

function getAllCutlery() {
    return json_encode($GLOBALS['products']);
}