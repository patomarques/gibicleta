<?php
/**
 * Template Name : Contato
 */
echo get_header(); ?>

<section class="section-content">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="title-section"><?php echo get_the_title(); ?></h1>
            </div>
        </div>
    </div>
</section>
<?php echo do_shortcode('[contact-form-7 id="5" title="Formulário de contato 1"]'); ?>
<?php echo get_footer(); ?>
