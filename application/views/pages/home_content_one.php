<div id="content_holder" class="fixed">
    <div class="inner">
      <div id="content">
        <div class="box featured-box">
          <h2 class="heading-title"><span>Featured Products</span></h2>
          <div class="box-content">
            <ul id="myRoundabout">
                <?php foreach ($all_featured_product as $v_product){ ?>
              <li>
                  <div class="prod_holder"> <a href="<?php echo base_url(); ?>Welcome/product_details/<?php echo $v_product->product_id; ?>"> <img src="<?php echo base_url() . $v_product->product_image; ?>" alt="Spicylicious store" height="300" width="500" /> </a>
                  <h3><?php echo $v_product->product_name; ?></h3>
                </div>
                <span class="pricetag">BDT <?php echo $v_product->product_price; ?></span> </li>
              <?php } ?>
            </ul>
            <a href="#" class="previous_round">Previous</a> <a href="#" class="next_round">Next</a> </div>
        </div>
        <div class="box">
          <h2 class="heading-title"><span>Welcome to Spicylicious</span></h2>
          <div class="box-content">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
          </div>
        </div>
        <div class="box">
          <div class="banner">
            <div><a href="#"><img src="<?php echo base_url(); ?>user_asset/image/banner1.jpg" alt="Spicylicious store" /></a></div>
            <div><a href="#"><img src="<?php echo base_url(); ?>user_asset/image/banner2.jpg" alt="Spicylicious store" /></a></div>
          </div>
        </div>
        <div class="box">
          <h2 class="heading-title"><span>Latest Products</span></h2>
          <div class="box-content">
            <div class="box-product fixed">
              <?php foreach ($latest_product as $v_product){ ?>
                <div class="prod_hold"> <a class="wrap_link" href="<?php echo base_url(); ?>Welcome/product_details/<?php echo $v_product->product_id; ?>"> <span class="image"><img src="<?php echo base_url() . $v_product->product_image; ?>" alt="Spicylicious store" height="180" width="180" /></span> </a>
                <div class="pricetag_small"> <span class="price">BDT <?php echo $v_product->product_price; ?></span> </div>
                <div class="info">
                  <h3><?php echo $v_product->product_name; ?></h3>
                  <p><?php echo $v_product->product_short_description; ?></p>
                  <a class="add_to_cart_small" href="<?php echo base_url(); ?>cart/add_product_to_cart/<?php echo $v_product->product_id; ?>">Add to cart</a>
                  <a class="wishlist_small" href="<?php echo base_url(); ?>wish_list/add_to_wish_list/<?php echo $v_product->product_id; ?>">Wishlist</a> <a class="compare_small" href="#">Compare</a> </div>
              </div>
              <?php } ?>
            </div>
            <div class="clear"></div>
          </div>
        </div>
      </div>
    </div>
  </div>