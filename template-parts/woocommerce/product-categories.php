<?php 
// Feminized - 32
// Traditional - 48

$argsOthers = array(
      'taxonomy' => 'product_cat',
      'hide_empty' => false,
      'parent'   => 0,
      'exclude'    => array(32, 48)
  );
$others_product_cat = get_terms( $argsOthers );

// Get two main cats
$argsMain = array(
    'taxonomy'   => 'product_cat',
    'hide_empty' => false,
    'include'    => array(32, 48)
);

$two_main_product_cat = get_terms($argsMain);

?>

<?php if( !empty($others_product_cat)): ?>
<section class="widget">
    <h2 class="widget-title font-permanent">
        <?php _e('Categories' , 'web14devsn'); ?>
    </h2>

    <!-- Two main categories -->
    <div class="two-main-categories">
        <?php 
        if (!empty($two_main_product_cat)) {
            echo '<ul>';
            foreach ($two_main_product_cat as $cat) {
                echo '<li><a href="' . get_term_link($cat->term_id) . '">' . $cat->name . '</a></li>';
            }
            echo '</ul>';
        }
        ?>
    </div>
    <!-- Two main end -->

    <!-- Other categories -->
    <div class="categories-exclude-main">
        <a class="btn-main-web14 w-100 mb-3" type="button" data-bs-toggle="collapse" href="#cat-exclude-main" aria-expanded="false" aria-controls="cat-exclude-main">
            Other categories
        </a>
        <div class="collapse" id="cat-exclude-main">
            <div class="card card-body">
                <div id="accordion-p-categories" class="accordion-transparent accordion">
                    <?php foreach($others_product_cat as $parent_product_cat) : ?>
                        <?php $termchildren = get_term_children($parent_product_cat->term_id, 'product_cat'); ?>
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
                                                    <img class="accordion-item-arow" style="height: 12px;" src="<?php echo PATH_SN ?>/uploads/angle-down.svg" alt="angle">
                                                </button>
                                            <?php else: ?>
                                                <div class="arrow-none-cat"></div>
                                            <?php endif; ?>
                                        </div>
                                    </span>
                                </h2>
                            </div>
                            <?php if (!empty($termchildren)): ?>
                                <div id="prod-category-sn-<?php echo $parent_product_cat->term_id; ?>" class="collapse children-cat-items" aria-labelledby="headingOne-<?php echo $parent_product_cat->term_id; ?>" data-bs-parent="#accordion">
                                    <div class="card-body">
                                        <ul class="list-group">
                                            <?php 
                                            $child_args = array(
                                                'taxonomy'   => 'product_cat',
                                                'hide_empty' => false,
                                                'parent'     => $parent_product_cat->term_id
                                            );
                                            $child_product_cats = get_terms($child_args);
                                            foreach ($child_product_cats as $child_product_cat) {
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
            </div>
        </div>
    </div>

    
    <!-- Other categories end -->

</section>
<?php endif; ?>

<script type="text/javascript">
jQuery(document).ready(function($) {
  $('.accordion .btn-link').on('click', function(){
    $(this).find('.accordion-item-arow').toggleClass('item-expanded');
  });
});
</script>
