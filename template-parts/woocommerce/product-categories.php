<?php 

  $args = array(
          'taxonomy' => 'product_cat',
          'hide_empty' => false,
          'parent'   => 0
      );
  $product_cat = get_terms( $args );

  ?>

  <?php if( !empty($product_cat)): ?>
    <section>
        <h2 class="widget-title font-permanent">
            <?php _e('Categories' , 'web14devsn'); ?>
        </h2>
    </section>

  <div id="accordion-p-categories" class="accordion-transparent">
       <?php foreach($product_cat as $parent_product_cat) : ?>
        <?php $termchildren = get_term_children( $parent_product_cat->term_id, 'product_cat' ); ?>
        <div class="card">
            <div class="card-header" id="headingOne-<?php echo $parent_product_cat->term_id; ?>">
                <h2 class="mb-0">
                    <span class="parent-cat-name">            
                        <?php echo '<a href="'.get_term_link($parent_product_cat->term_id).'">'.$parent_product_cat->name.'</a>' ?>         
                    </span>
                    <span>
                        <div class="angle-dropdown-cat">
                            <?php if (!empty($termchildren)): ?>
                                <button class="btn btn-link" type="button" data-bs-toggle="collapse" data-bs-target="#prod-category-sn-<?php echo $parent_product_cat->term_id; ?>" aria-expanded="true" aria-controls="prod-category-sn-<?php echo $parent_product_cat->term_id; ?>">
                                    <img style="height: 12px;" src="<?php echo PATH_SN ?>/uploads/angle-down.svg"  alt="angle">
                                </button>
                            <?php endif; ?>
                        </div>
                    </span>
                    
                </h2>
            </div>
            <?php if( !empty( $termchildren )): ?>
            <div id="prod-category-sn-<?php echo $parent_product_cat->term_id; ?>" class="collapse children-cat-items" aria-labelledby="headingOne-<?php echo $parent_product_cat->term_id; ?>" data-bs-parent="#accordion">
                <div class="card-body">
                    <ul class="list-group">
                        <?php 
                        $child_args = array(
                            'taxonomy'   => 'product_cat',
                            'hide_empty' => false,
                            'parent'     => $parent_product_cat->term_id
                        );
                        $child_product_cats = get_terms( $child_args );
                        foreach ($child_product_cats as $child_product_cat)
                        {
                            echo '<li class="list-group-item"><a href="'.get_term_link($child_product_cat->term_id).'">'.$child_product_cat->name.'</a></li>';
                        }
                        ?>
                    </ul>
                </div>
            </div>
            <?php endif; ?>
        </div>
    <?php endforeach; ?>
  </div>
<?php endif; ?>