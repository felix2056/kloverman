<?php include_once('../includes/header.php'); ?>

<?php require_once('../products/db/skewers_cat.php'); ?>


<?php
    $products = json_decode(getAllSkewers(), true);
?>

<body class="index promo_banner-show" data-money-format="${{ amount }}" data-new-gr-c-s-check-loaded="14.984.0"
    data-gr-ext-installed="">

    <?php include_once('../includes/nav.php'); ?>

    <div class="container">
        <div id="shopify-section-collection-template" class="shopify-section collection-template-section">
            <div class="sixteen columns clearfix collection_nav">
                <h1 class="collection_title "><a href="/collections/skewers.php"
                        title="Appetizers &amp; Minis">Skewers</a></h1>
                <div class="section_select desktop" style="display:block">
                    <select id="sub-cat_filter" class="coll-filter">
                        <option value="">All Types</option>
                        <option value="boats">Boats</option>
                        <option value="cones">Cones</option>
                        <option value="cups-straws">Cups &amp; Straws</option>
                        <option value="cutlery">Cutlery</option>
                        <option value="grab-go">Grab &amp; Go</option>
                        <option value="plates">Plates</option>
                    </select>
                </div>



                <div class="section_select desktop" style="display:block">
                    <select id="material_filter" class="coll-filter">
                        <option value="">All Materials</option>
                        <option value="bamboo">Bamboo</option>
                        <option value="palm">Palm</option>
                        <option value="paper">Paper</option>
                        <option value="plastic">Plastic</option>
                        <option value="porcelain">Porcelain</option>
                        <option value="sugarcane">Sugarcane</option>
                        <option value="wood">Wood</option>
                    </select>
                </div>


                <div class="section_select">
                    <select id="sort-by" data-default-sort="best-selling">
                        <option value="manual">Featured</option>
                        <option value="best-selling">Best Selling</option>
                        <option value="title-ascending">Alphabetically: A-Z</option>
                        <option value="title-descending">Alphabetically: Z-A</option>
                        <option value="price-ascending">Price: Low to High</option>
                        <option value="price-descending">Price: High to Low</option>
                        <option value="created-descending">Date: New to Old</option>
                        <option value="created-ascending">Date: Old to New</option>
                    </select>
                </div>
            </div>

            <div class="sixteen columns">
                <div class="section clearfix">
                    <div style="text-align: center;"><img src="/assets/images/skewers_a7b4696f-01ed-4db9-aa9b-5c87a8d87a59_2048x2048.jpg" alt="" style="float: none;"></div>
                </div>
            </div>

            <div class="sidebar four columns toggle-all--false">
                <div>
                    <h4 class="toggle" aria-haspopup="true" aria-expanded="true"><span>+</span>Klover News</h4>
                    <ul class="blog_list toggle_list content_block">
                        <li><img src="https://cdn.shopify.com/s/files/1/1782/3515/files/banner_right_714670ed-1dfa-46b1-9163-db2b5b3508de_480x480.jpg?v=1586340899"
                                alt="" width="480x480" height="480x480"></li>
                    </ul>
                </div>

                <div>
                    <h4 class="toggle" aria-haspopup="true" aria-expanded="true"><span>+</span>Shop</h4>
                    <ul class="blog_list toggle_list">
                        <li>
                            <a href="/collections/appetizer-minis.php" aria-expanded="false">Appetizers &amp; Minis</a>
                        </li>

                        <li>
                            <a href="/collections/skewers.php" aria-expanded="false">Skewers</a>
                        </li>

                        <li>
                            <a href="/collections/cups-straws.php" aria-expanded="false">Cups &amp; Straws</a>
                        </li>

                        <li>
                            <a href="/collections/bakeware.php" aria-expanded="false">Bakeware</a>
                        </li>

                        <li>
                            <a href="/collections/cutlery.php" aria-expanded="false">Cutlery</a>
                        </li>

                        <li>
                            <a href="/collections/grab-go.php" aria-expanded="false">Grab &amp; Go</a>
                        </li>
                    </ul>
                </div>
            </div>


            <div class="twelve columns">
                <?php if (count($products) > 0) : ?>
                <div itemtype="http://schema.org/ItemList" class="products">
                    <?php foreach ($products as $product) : ?>
                    <div class="four columns alpha thumbnail even swap-true" itemprop="itemListElement" itemscope=""
                        itemtype="http://schema.org/Product">
                        <a href="/products/single.php?product=<?php echo $product['id'] ?>" itemprop="url">
                            <div class="relative product_image">
                                <div class="product_container">
                                    <div class="image__container" style=" max-width: 200.0px; ">
                                        <img src="<?php echo $product['featured_image'] ?>"
                                            alt="<?php echo $product['title'] ?>"
                                            class="lazyload--fade-in lazyautosizes lazyloaded"
                                            style="width: 100%; height: auto; max-width:800px;" data-sizes="auto"
                                            data-src="<?php echo $product['featured_image'] ?>"
                                            data-srcset="<?php echo $product['featured_image'] ?>" sizes="200px"
                                            srcset="<?php echo $product['featured_image'] ?>">

                                        <div class="image__container" style="max-width: 800px; ">
                                            <img src="<?php echo $product['featured_image'] ?>"
                                                class="secondary lazyloaded" alt="<?php echo $product['ile'] ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="info">
                                <span class="title" itemprop="name"><?php echo $product['title'] ?></span>

                                <span class="price " itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                                    <meta itemprop="price" content="9.80">
                                    <meta itemprop="priceCurrency" content="CAD">
                                    <meta itemprop="seller" content="Klover Sales">
                                    <link itemprop="availability" href="http://schema.org/InStock">
                                    <meta itemprop="itemCondition" itemtype="http://schema.org/OfferItemCondition"
                                        content="http://schema.org/NewCondition">

                                    <small><em>from</em></small>

                                    <span class="money"><?php echo $product['price'] ?> -
                                        <?php echo $product['sale_price'] ?></span>
                                </span>

                            </div>
                        </a>
                    </div>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <?php include_once('../includes/footer.php'); ?>
</body>

</html>