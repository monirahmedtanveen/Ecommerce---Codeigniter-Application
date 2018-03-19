<div id="content_holder" class="fixed">
    <div class="inner">
        <div class="breadcrumb"> <a href="<?php echo base_url(); ?>">Home</a> » Desktops </div>
        <div class="box">
            <h2 class="heading-title"><span>Antipasti</span></h2>
            <div class="box-content">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </div>
        </div>
        <div class="box">
            <h2 class="heading-title"><span>Refine Search</span></h2>
            <div class="box-content">
                <ul class="sub_cats">
                    <li class="cat_hold"><a href="category.html"> <img src="<?php echo base_url(); ?>user_asset/image/not_found.jpg" alt="Spicylicious store" /> <span class="info">Long Category name goes here (0)</span> </a> </li>
                    <li class="cat_hold"><a href="category.html"> <img src="<?php echo base_url(); ?>user_asset/image/not_found.jpg" alt="Spicylicious store" /> <span class="info">Long Category name goes here (0)</span> </a> </li>
                    <li class="cat_hold"><a href="category.html"> <img src="<?php echo base_url(); ?>user_asset/image/not_found.jpg" alt="Spicylicious store" /> <span class="info">Long Category name goes here (0)</span> </a> </li>
                    <li class="cat_hold"><a href="category.html"> <img src="<?php echo base_url(); ?>user_asset/image/not_found.jpg" alt="Spicylicious store" /> <span class="info">Long Category name goes here (0)</span> </a> </li>
                    <li class="cat_hold"><a href="category.html"> <img src="<?php echo base_url(); ?>user_asset/image/not_found.jpg" alt="Spicylicious store" /> <span class="info">Long Category name goes here (0)</span> </a> </li>
                    <li class="cat_hold"><a href="category.html"> <img src="<?php echo base_url(); ?>user_asset/image/not_found.jpg" alt="Spicylicious store" /> <span class="info">Long Category name goes here (0)</span> </a> </li>
                    <li class="cat_hold"><a href="category.html"> <img src="<?php echo base_url(); ?>user_asset/image/not_found.jpg" alt="Spicylicious store" /> <span class="info">Long Category name goes here (0)</span> </a> </li>
                    <li class="cat_hold"><a href="category.html"> <img src="<?php echo base_url(); ?>user_asset/image/not_found.jpg" alt="Spicylicious store" /> <span class="info">Long Category name goes here (0)</span> </a> </li>
                </ul>
            </div>
            <div class="clear"></div>
        </div>
        <div class="product-filter">
            <div class="product-compare"><a href="#" id="compare_total">Product Compare (0)</a></div>
            <div class="limit"><b>Show:</b>
                <select>
                    <option value="" selected="selected">8</option>
                    <option value="">25</option>
                    <option value="">50</option>
                    <option value="">75</option>
                    <option value="">100</option>
                </select>
            </div>
            <div class="sort"><b>Sort By:</b>
                <select>
                    <option value="" selected="selected">Default</option>
                    <option value="">Name (A - Z)</option>
                    <option value="">Name (Z - A)</option>
                    <option value="">Price (Low &gt; High)</option>
                    <option value="">Price (High &gt; Low)</option>
                    <option value="">Rating (Highest)</option>
                    <option value="">Rating (Lowest)</option>
                    <option value="">Model (A - Z)</option>
                    <option value="">Model (Z - A)</option>
                </select>
            </div>
        </div>

        <!-- LEFT COLUMN -->
        <div id="column-left">
            <div class="box">
                <h3 class="heading-title"><span>Categories</span></h3>
                <div class="box-content box-category">
                    <ul>
                        <?php foreach ($all_published_category as $v_category){ ?>
                        <li><a href="<?php echo base_url(); ?>Welcome/category/<?php echo $v_category->category_id; ?>"><?php echo $v_category->category_name; ?></a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
            <div class="box">
                <h3 class="heading-title"><span>Bestsellers</span></h3>
                <div class="box-content">
                    <div class="product_unit"> <a class="image" href="<?php echo base_url(); ?>Welcome/product_details"><img src="<?php echo base_url(); ?>user_asset/image/left_module_pic.jpg" alt="Spicylicious store" /></a> <span class="name">Spaghetti Bolognese</span> <span class="price">$19.97</span> </div>
                    <div class="product_unit"> <a class="image" href="<?php echo base_url(); ?>Welcome/product_details"><img src="<?php echo base_url(); ?>user_asset/image/left_module_pic.jpg" alt="Spicylicious store" /></a> <span class="name">Spaghetti Milanese</span> <span class="price">$19.97</span> </div>
                    <div class="product_unit"> <a class="image" href="<?php echo base_url(); ?>Welcome/product_details"><img src="<?php echo base_url(); ?>user_asset/image/left_module_pic.jpg" alt="Spicylicious store" /></a> <span class="name">Spaghetti Monte</span> <span class="price-old">$19.97</span> <span class="price">$17.97</span> </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
        <!-- END OF LEFT COLUMN -->

        <div id="content" class="content-column-left">
            <div class="cat_list fixed">
                <?php foreach ($all_category_product as $v_product){ ?>
                <div class="prod_hold"> <a class="wrap_link" href="<?php echo base_url(); ?>Welcome/product_details/<?php echo $v_product->product_id; ?>">
                        <span class="image"><img src="<?php echo base_url() . $v_product->product_image; ?>" alt="Product Image" height="180" width="180" /></span>
                    </a>
                    <div class="pricetag_small"> <span class="old_price"></span> <span class="new_price">BDT <?php echo $v_product->product_price; ?></span> </div>
                    <div class="info">
                        <h3><?php echo $v_product->product_name; ?></h3>
                        <p><?php echo $v_product->product_short_description; ?></p>
                        <a class="add_to_cart_small" href="<?php echo base_url(); ?>cart/add_product_to_cart/<?php echo $v_product->product_id; ?>">Add to cart</a> 
                        <a class="wishlist_small" href="<?php echo base_url(); ?>wish_list/add_to_wish_list/<?php echo $v_product->product_id; ?>">Wishlist</a> <a class="compare_small" href="#">Compare</a> </div>
                </div>
                <?php } ?>
                <div class="clear"></div>
            </div>
            <div class="pagination">
                <div class="links"> <b>1</b> <a href="#">2</a> <a href="#">&gt;</a> <a href="#">&gt;|</a> </div>
                <div class="results">Showing 1 to 12 of 23 (2 Pages)</div>
            </div>
        </div>
    </div>
</div>