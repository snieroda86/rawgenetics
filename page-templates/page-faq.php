<?php
/**
 * Template Name: FAQ
 * @package web14devsn
 */

get_header();
?>

<main id="primary" class="site-main">
    <?php  get_template_part('template-parts/global/side-arrows'); ?>
	<div class="container-lg page-container-sn">
       <?php  get_template_part('template-parts/global/page-breadcrumb'); ?>
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' ); ?>

            <div class="faq-accordion-wrapper pb-5">
                <?php

                if( have_rows('faq_accordion') ):  $i = 0; ?>
                    <div class="accordion" id="faq-accordion">
                    
                    <?php
                    while( have_rows('faq_accordion') ) : the_row();
                        $i++;
                        $question_faq = get_sub_field('question_faq');
                        $answer_faq = get_sub_field('answer_faq');
                        ?>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-id-<?php echo $i; ?>" aria-expanded="true" aria-controls="collapse-id-<?php echo $i; ?>">
                                <?php echo $question_faq; ?>
                              </button>
                            </h2>
                            <div id="collapse-id-<?php echo $i; ?>" class="accordion-collapse collapse" data-bs-parent="#faq-accordion">
                              <div class="accordion-body">
                                <?php echo $answer_faq; ?>
                              </div>
                            </div>
                        </div>

                    <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>

		<?php endwhile; ?>
	</div>
</main><!-- #main -->

<?php
get_footer();
