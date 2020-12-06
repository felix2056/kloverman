<?php include_once('../includes/header.php'); ?>

<?php require_once('../products/db/products.php'); ?>

<body class="index promo_banner-show" data-money-format="${{ amount }}" data-new-gr-c-s-check-loaded="14.984.0"
    data-gr-ext-installed="">

    <?php include_once('../includes/nav.php'); ?>

    <?php if ( isset($_GET['product'])) : ?>

    <?php
        $id = (int) $_GET['product'];
        $single = json_decode(find($id), true);
        // echo $_GET['product'];
    ?>

    <div class="container">
        <div id="shopify-section-product-template" class="shopify-section product-template-section">
            <div class="sixteen columns">
                <div class="product-633244352573">
                    <div class="section product_section clearfix thumbnail_position--bottom-thumbnails  product_slideshow_animation--none"
                        data-thumbnail="bottom-thumbnails" data-slideshow-animation="none" data-slideshow-speed="6"
                        itemscope="" itemtype="http://schema.org/Product">

                        <div class="eight columns product-image--align-right omega">
                            <div class="flexslider product_gallery product-633244352573-gallery product_slider ">
                                <ul class="slides">
                                    <li data-thumb="<?php echo $single['featured_image'] ?>"
                                        data-title="<?php echo $single['title'] ?>"
                                        class="flex-active-slide" data-thumb-alt=""
                                        style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 1; display: block; z-index: 2;">

                                        <a href="<?php echo $single['featured_image'] ?>"
                                            class="fancybox" data-fancybox-group="633244352573">
                                            <div class="image__container" style="max-width: 800px">
                                                <img src="<?php echo $single['featured_image'] ?>"
                                                    alt="<?php echo $single['title'] ?>"
                                                    class="lazyload--fade-in cloudzoom featured_image lazyautosizes lazyloaded"
                                                    data-cloudzoom="zoomImage: '<?php echo $single['featured_image'] ?>', tintColor: '#ffffff', autoInside: 767, zoomPosition: 13, zoomWidth: 460, zoomHeight: 460, touchStartDelay: 250, lazyLoadZoom: true"
                                                    data-index="0" data-image-id="13590693052477" data-sizes="auto"
                                                    data-src="<?php echo $single['featured_image'] ?>"
                                                    data-srcset="<?php echo $single['featured_image'] ?>"
                                                    draggable="false" sizes="580px"
                                                    srcset="<?php echo $single['featured_image'] ?>">
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="eight columns alpha">
                            <h1 class="product_name" itemprop="name">
                                <?php echo $single['title'] ?>
                            </h1>

                            <span class="spr-badge" id="spr_badge_633244352573" data-rating="0.0"><span
                                    class="spr-starrating spr-badge-starrating"><i
                                        class="spr-icon spr-icon-star-empty"></i><i
                                        class="spr-icon spr-icon-star-empty"></i><i
                                        class="spr-icon spr-icon-star-empty"></i><i
                                        class="spr-icon spr-icon-star-empty"></i><i
                                        class="spr-icon spr-icon-star-empty"></i></span><span
                                    class="spr-badge-caption">No reviews</span>
                            </span>

                            <p class="modal_price" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                                <meta itemprop="priceCurrency" content="CAD">
                                <meta itemprop="seller" content="Klover Sales">
                                <link itemprop="availability" href="http://schema.org/InStock">
                                <meta itemprop="itemCondition" itemtype="http://schema.org/OfferItemCondition"
                                    content="http://schema.org/NewCondition">

                                <span class="sold_out"></span>
                                <span itemprop="price" content="10.84" class="">
                                    <span class="current_price "><span
                                            class="money"><?php echo $single['price'] ?></span></span>
                                </span>
                                <span class="was_price"></span>
                            </p>

                            <p><strong>SKU:</strong> <span class="variant-sku">P210TPASK12</span></p>

                            <span class="availability" style="display: none;">
                                <!-- Code added for Inventory -->
                                <script>
                                var inv_qty = {};

                                inv_qty[7338290118717] = 14;

                                inv_qty[7927716020285] = 0;
                                </script>

                                <p class="variant-inventory"><strong>AVAILABILITY:</strong> This product will ship
                                    within 24-48 hours.</p>
                                <!-- end inventory -->
                            </span>

                            <div class="clearfix product_form product_form_options is-visible"
                                id="product-form-633244352573product-template" data-money-format="${{amount}}"
                                data-shop-currency="CAD"
                                data-select-id="product-select-633244352573productproduct-template"
                                data-enable-state="true"
                                data-product="{&quot;id&quot;:633244352573,&quot;title&quot;:&quot;Happy Fries News Print Closable Perforated Snack Cup&quot;,&quot;handle&quot;:&quot;happy-fries-news-print-closable-perforated-snack-cup&quot;,&quot;description&quot;:&quot;\u003cp\u003eDimensions: H 4.7 \&quot; \/ 眺 2.36 \&quot;\u003c\/p\u003e&quot;,&quot;published_at&quot;:&quot;2018-04-04T11:53:15-04:00&quot;,&quot;created_at&quot;:&quot;2018-04-04T11:53:15-04:00&quot;,&quot;vendor&quot;:&quot;Klover Sales&quot;,&quot;type&quot;:&quot;Grab \u0026 Go&quot;,&quot;tags&quot;:[&quot;16.57 x 3.27 x 2.36&quot;,&quot;Paper&quot;],&quot;price&quot;:1084,&quot;price_min&quot;:1084,&quot;price_max&quot;:16681,&quot;available&quot;:true,&quot;price_varies&quot;:true,&quot;compare_at_price&quot;:null,&quot;compare_at_price_min&quot;:0,&quot;compare_at_price_max&quot;:0,&quot;compare_at_price_varies&quot;:false,&quot;variants&quot;:[{&quot;id&quot;:7338290118717,&quot;title&quot;:&quot;Package (50 pieces)&quot;,&quot;option1&quot;:&quot;Package (50 pieces)&quot;,&quot;option2&quot;:null,&quot;option3&quot;:null,&quot;sku&quot;:&quot;P210TPASK12&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:{&quot;id&quot;:13590693052477,&quot;product_id&quot;:633244352573,&quot;position&quot;:1,&quot;created_at&quot;:&quot;2020-02-20T09:36:33-05:00&quot;,&quot;updated_at&quot;:&quot;2020-02-28T16:03:02-05:00&quot;,&quot;alt&quot;:null,&quot;width&quot;:800,&quot;height&quot;:800,&quot;src&quot;:&quot;https:\/\/cdn.shopify.com\/s\/files\/1\/1782\/3515\/products\/JeY4x8XSpSnaq5c5HZ16_210TPASK12_Happy_2BFries_2BNews_2BPrint_2BClosable_2BPerforated_2BSnack_2BCup_Main_2BView.jpg?v=1582923782&quot;,&quot;variant_ids&quot;:[7338290118717,7927716020285]},&quot;available&quot;:true,&quot;name&quot;:&quot;Happy Fries News Print Closable Perforated Snack Cup - Package (50 pieces)&quot;,&quot;public_title&quot;:&quot;Package (50 pieces)&quot;,&quot;options&quot;:[&quot;Package (50 pieces)&quot;],&quot;price&quot;:1084,&quot;weight&quot;:372,&quot;compare_at_price&quot;:null,&quot;inventory_quantity&quot;:14,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;inventory_policy&quot;:&quot;continue&quot;,&quot;barcode&quot;:null,&quot;featured_media&quot;:{&quot;alt&quot;:null,&quot;id&quot;:5762886139965,&quot;position&quot;:1,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:800,&quot;width&quot;:800,&quot;src&quot;:&quot;https:\/\/cdn.shopify.com\/s\/files\/1\/1782\/3515\/products\/JeY4x8XSpSnaq5c5HZ16_210TPASK12_Happy_2BFries_2BNews_2BPrint_2BClosable_2BPerforated_2BSnack_2BCup_Main_2BView.jpg?v=1582209393&quot;}},&quot;requires_selling_plan&quot;:false,&quot;selling_plan_allocations&quot;:[]},{&quot;id&quot;:7927716020285,&quot;title&quot;:&quot;Case (1000 pieces)&quot;,&quot;option1&quot;:&quot;Case (1000 pieces)&quot;,&quot;option2&quot;:null,&quot;option3&quot;:null,&quot;sku&quot;:&quot;210TPASK12&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:{&quot;id&quot;:13590693052477,&quot;product_id&quot;:633244352573,&quot;position&quot;:1,&quot;created_at&quot;:&quot;2020-02-20T09:36:33-05:00&quot;,&quot;updated_at&quot;:&quot;2020-02-28T16:03:02-05:00&quot;,&quot;alt&quot;:null,&quot;width&quot;:800,&quot;height&quot;:800,&quot;src&quot;:&quot;https:\/\/cdn.shopify.com\/s\/files\/1\/1782\/3515\/products\/JeY4x8XSpSnaq5c5HZ16_210TPASK12_Happy_2BFries_2BNews_2BPrint_2BClosable_2BPerforated_2BSnack_2BCup_Main_2BView.jpg?v=1582923782&quot;,&quot;variant_ids&quot;:[7338290118717,7927716020285]},&quot;available&quot;:true,&quot;name&quot;:&quot;Happy Fries News Print Closable Perforated Snack Cup - Case (1000 pieces)&quot;,&quot;public_title&quot;:&quot;Case (1000 pieces)&quot;,&quot;options&quot;:[&quot;Case (1000 pieces)&quot;],&quot;price&quot;:16681,&quot;weight&quot;:8100,&quot;compare_at_price&quot;:null,&quot;inventory_quantity&quot;:0,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;inventory_policy&quot;:&quot;continue&quot;,&quot;barcode&quot;:null,&quot;featured_media&quot;:{&quot;alt&quot;:null,&quot;id&quot;:5762886139965,&quot;position&quot;:1,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:800,&quot;width&quot;:800,&quot;src&quot;:&quot;https:\/\/cdn.shopify.com\/s\/files\/1\/1782\/3515\/products\/JeY4x8XSpSnaq5c5HZ16_210TPASK12_Happy_2BFries_2BNews_2BPrint_2BClosable_2BPerforated_2BSnack_2BCup_Main_2BView.jpg?v=1582209393&quot;}},&quot;requires_selling_plan&quot;:false,&quot;selling_plan_allocations&quot;:[]}],&quot;images&quot;:[&quot;\/\/cdn.shopify.com\/s\/files\/1\/1782\/3515\/products\/JeY4x8XSpSnaq5c5HZ16_210TPASK12_Happy_2BFries_2BNews_2BPrint_2BClosable_2BPerforated_2BSnack_2BCup_Main_2BView.jpg?v=1582923782&quot;,&quot;\/\/cdn.shopify.com\/s\/files\/1\/1782\/3515\/products\/MKoYTeacRUGbEdWNHLJk_Grab_2B__2BGo_News_2BPrint_2BCollection_06.jpg?v=1582923782&quot;,&quot;\/\/cdn.shopify.com\/s\/files\/1\/1782\/3515\/products\/iDDxlJaRSmkiAp0mQZUg_210TPASK12-210TPASK16-210TPASK20_Happy_2BFries_2BNews_2BPrint_2BClosable_2BPerforated_2BSnack_2BCup_Family_2BView.jpg?v=1582923782&quot;,&quot;\/\/cdn.shopify.com\/s\/files\/1\/1782\/3515\/products\/1uTxESGtRmW3GzqPAcxu_Grab_2B__2BGo_News_2BPrint_2BCollection_03.jpg?v=1582923782&quot;,&quot;\/\/cdn.shopify.com\/s\/files\/1\/1782\/3515\/products\/210TPASK12_HappyFriesNewsPrintClosablePerforatedSnackCup_MainView_measurements.jpg?v=1595004025&quot;],&quot;featured_image&quot;:&quot;\/\/cdn.shopify.com\/s\/files\/1\/1782\/3515\/products\/JeY4x8XSpSnaq5c5HZ16_210TPASK12_Happy_2BFries_2BNews_2BPrint_2BClosable_2BPerforated_2BSnack_2BCup_Main_2BView.jpg?v=1582923782&quot;,&quot;options&quot;:[&quot;Package Size&quot;],&quot;media&quot;:[{&quot;alt&quot;:null,&quot;id&quot;:5762886139965,&quot;position&quot;:1,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:800,&quot;width&quot;:800,&quot;src&quot;:&quot;https:\/\/cdn.shopify.com\/s\/files\/1\/1782\/3515\/products\/JeY4x8XSpSnaq5c5HZ16_210TPASK12_Happy_2BFries_2BNews_2BPrint_2BClosable_2BPerforated_2BSnack_2BCup_Main_2BView.jpg?v=1582209393&quot;},&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:800,&quot;media_type&quot;:&quot;image&quot;,&quot;src&quot;:&quot;https:\/\/cdn.shopify.com\/s\/files\/1\/1782\/3515\/products\/JeY4x8XSpSnaq5c5HZ16_210TPASK12_Happy_2BFries_2BNews_2BPrint_2BClosable_2BPerforated_2BSnack_2BCup_Main_2BView.jpg?v=1582209393&quot;,&quot;width&quot;:800},{&quot;alt&quot;:null,&quot;id&quot;:5762886238269,&quot;position&quot;:2,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:0.666,&quot;height&quot;:1202,&quot;width&quot;:800,&quot;src&quot;:&quot;https:\/\/cdn.shopify.com\/s\/files\/1\/1782\/3515\/products\/MKoYTeacRUGbEdWNHLJk_Grab_2B__2BGo_News_2BPrint_2BCollection_06.jpg?v=1582209394&quot;},&quot;aspect_ratio&quot;:0.666,&quot;height&quot;:1202,&quot;media_type&quot;:&quot;image&quot;,&quot;src&quot;:&quot;https:\/\/cdn.shopify.com\/s\/files\/1\/1782\/3515\/products\/MKoYTeacRUGbEdWNHLJk_Grab_2B__2BGo_News_2BPrint_2BCollection_06.jpg?v=1582209394&quot;,&quot;width&quot;:800},{&quot;alt&quot;:null,&quot;id&quot;:5762886303805,&quot;position&quot;:3,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:2.096,&quot;height&quot;:800,&quot;width&quot;:1677,&quot;src&quot;:&quot;https:\/\/cdn.shopify.com\/s\/files\/1\/1782\/3515\/products\/iDDxlJaRSmkiAp0mQZUg_210TPASK12-210TPASK16-210TPASK20_Happy_2BFries_2BNews_2BPrint_2BClosable_2BPerforated_2BSnack_2BCup_Family_2BView.jpg?v=1582209397&quot;},&quot;aspect_ratio&quot;:2.096,&quot;height&quot;:800,&quot;media_type&quot;:&quot;image&quot;,&quot;src&quot;:&quot;https:\/\/cdn.shopify.com\/s\/files\/1\/1782\/3515\/products\/iDDxlJaRSmkiAp0mQZUg_210TPASK12-210TPASK16-210TPASK20_Happy_2BFries_2BNews_2BPrint_2BClosable_2BPerforated_2BSnack_2BCup_Family_2BView.jpg?v=1582209397&quot;,&quot;width&quot;:1677},{&quot;alt&quot;:null,&quot;id&quot;:5762886172733,&quot;position&quot;:4,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.5,&quot;height&quot;:800,&quot;width&quot;:1200,&quot;src&quot;:&quot;https:\/\/cdn.shopify.com\/s\/files\/1\/1782\/3515\/products\/1uTxESGtRmW3GzqPAcxu_Grab_2B__2BGo_News_2BPrint_2BCollection_03.jpg?v=1582209394&quot;},&quot;aspect_ratio&quot;:1.5,&quot;height&quot;:800,&quot;media_type&quot;:&quot;image&quot;,&quot;src&quot;:&quot;https:\/\/cdn.shopify.com\/s\/files\/1\/1782\/3515\/products\/1uTxESGtRmW3GzqPAcxu_Grab_2B__2BGo_News_2BPrint_2BCollection_03.jpg?v=1582209394&quot;,&quot;width&quot;:1200},{&quot;alt&quot;:null,&quot;id&quot;:6258827427901,&quot;position&quot;:5,&quot;preview_image&quot;:{&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:1800,&quot;width&quot;:1800,&quot;src&quot;:&quot;https:\/\/cdn.shopify.com\/s\/files\/1\/1782\/3515\/products\/210TPASK12_HappyFriesNewsPrintClosablePerforatedSnackCup_MainView_measurements.jpg?v=1595004025&quot;},&quot;aspect_ratio&quot;:1.0,&quot;height&quot;:1800,&quot;media_type&quot;:&quot;image&quot;,&quot;src&quot;:&quot;https:\/\/cdn.shopify.com\/s\/files\/1\/1782\/3515\/products\/210TPASK12_HappyFriesNewsPrintClosablePerforatedSnackCup_MainView_measurements.jpg?v=1595004025&quot;,&quot;width&quot;:1800}],&quot;requires_selling_plan&quot;:false,&quot;selling_plan_groups&quot;:[],&quot;content&quot;:&quot;\u003cp\u003eDimensions: H 4.7 \&quot; \/ 眺 2.36 \&quot;\u003c\/p\u003e&quot;}"
                                data-variant-inventory="[{&quot;id&quot;:7338290118717,&quot;inventory_quantity&quot;:14,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;inventory_policy&quot;:&quot;continue&quot;},{&quot;id&quot;:7927716020285,&quot;inventory_quantity&quot;:0,&quot;inventory_management&quot;:&quot;shopify&quot;,&quot;inventory_policy&quot;:&quot;continue&quot;}]"
                                data-product-id="633244352573">
                                <form method="post" action="/cart/add" id="product_form_633244352573"
                                    accept-charset="UTF-8" class="shopify-product-form" enctype="multipart/form-data">
                                    <input type="hidden" name="form_type" value="product"><input type="hidden"
                                        name="utf8" value="✓">

                                    <div class="select">
                                        <label>Package Size</label>
                                        <div class="selector-wrapper"><select class="single-option-selector"
                                                data-option="option1"
                                                id="product-select-633244352573productproduct-template-option-0">
                                                <option value="Package (50 pieces)">Package (50 pieces)</option>
                                                <option value="Case (1000 pieces)">Case (1000 pieces)</option>
                                            </select></div><select
                                            id="product-select-633244352573productproduct-template" name="id"
                                            style="display: none;">

                                            <option selected="selected" value="7338290118717" data-sku="P210TPASK12">
                                                Package (50 pieces)</option>

                                            <option value="7927716020285" data-sku="210TPASK12">Case (1000 pieces)
                                            </option>

                                        </select>
                                    </div>

                                    <div class="swatch_options">
                                        <div class="swatch clearfix" data-option-index="0">
                                            <div class="option_title">Package Size</div>

                                            <input id="swatch-0-package-50-pieces-633244352573product-template"
                                                type="radio" name="option-0" value="Package (50 pieces)" checked="">
                                            <div data-value="Package (50 pieces)"
                                                class="swatch-element package-50-pieces-swatch available">
                                                <label for="swatch-0-package-50-pieces-633244352573product-template">
                                                    Package (50 pieces)
                                                    <img class="crossed-out"
                                                        src="//cdn.shopify.com/s/files/1/1782/3515/t/6/assets/soldout.png?v=6156942011252700046">
                                                </label>

                                            </div>

                                            <script type="text/javascript">
                                            $('.swatch[data-option-index="0"] .package-50-pieces-swatch',
                                                    '#product-form-633244352573product-template').removeClass('soldout')
                                                .addClass('available').find(':radio');
                                            </script>

                                            <input id="swatch-0-case-1000-pieces-633244352573product-template"
                                                type="radio" name="option-0" value="Case (1000 pieces)">
                                            <div data-value="Case (1000 pieces)"
                                                class="swatch-element case-1000-pieces-swatch available">


                                                <label for="swatch-0-case-1000-pieces-633244352573product-template">
                                                    Case (1000 pieces)
                                                    <img class="crossed-out"
                                                        src="//cdn.shopify.com/s/files/1/1782/3515/t/6/assets/soldout.png?v=6156942011252700046">
                                                </label>

                                            </div>


                                            <script type="text/javascript">
                                            $('.swatch[data-option-index="0"] .case-1000-pieces-swatch',
                                                    '#product-form-633244352573product-template').removeClass('soldout')
                                                .addClass('available').find(':radio');
                                            </script>
                                        </div>
                                    </div>

                                    <div class="items_left sfdsg">14 items left</div>

                                    <div class="purchase-details smart-payment-button--false">

                                        <div class="purchase-details__quantity 123456">
                                            <label for="quantity">Quantity</label>
                                            <input type="number" min="1" size="2" class="quantity" name="quantity"
                                                id="quantity" value="1">
                                        </div>


                                        <div id="variant-inventory" style="display:none">This product is available</div>


                                        <div class="purchase-details__buttons">



                                            <button type="submit" name="add" class="action_button add_to_cart"
                                                data-label="Add to Cart"><span class="text">Add To Cart</span></button>

                                        </div>
                                    </div>
                                    <div class="continue_shopping">
                                        <a href="/collections">Continue Shopping</a> or <a href="/cart">View
                                            Cart</a>
                                    </div>
                                </form>
                            </div>

                            <hr>

                            <div class="description" itemprop="description">
                                <?php echo $single['description'] ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php endif; ?>

    <?php include_once('../includes/footer.php'); ?>
</body>

</html>