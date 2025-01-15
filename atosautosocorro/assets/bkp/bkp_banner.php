<section class="slider">
    <?php $args = array('post_type' => 'banner', 'posts_per_page' => -1);
    $loop = new WP_Query($args); ?>
    <div class="owl-carousel owl-slider">
        <?php while ($loop->have_posts()):
            $loop->the_post(); ?>
            <?php if (get_field('formulario_check')): ?>
                <?php
                $form = get_field('form_shortcode');
                $image = get_field('imagem_do_banner');
                ?>
                <div class="single-slider form-slide">

                    <div class="container">
                        <div class="slide-overlay" style="background-image:url('<?php echo esc_url($image['url']); ?>')"></div>
                        <div class="row">
                            <div class="col-md-7">
                                <div class="form-content">
                                    <h3 class="form-subtitle"><?php the_field('subtitulo_do_banner') ?></h3>
                                    <h2 class="form-title"><?php the_field('titulo_do_banner') ?></h2>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="contact-form">
                                    <div class="contact-form-inner">
                                        <?php echo do_shortcode("$form"); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php else: ?>
                <div class="single-slider" style="background-image:url('<?php echo esc_url($image['url']); ?>')">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="text">
                                    <h2 class="form-title"><?php the_field('titulo_do_banner') ?></h2>
                                    <h3 class="form-subtitle"><?php the_field('subtitulo_do_banner') ?></h3>
                                    <a href="<?php the_field('link_do_banner') ?>"><?php the_field('texto_do_botao') ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        <?php endwhile; ?>
    </div>
    <?php wp_reset_query(); ?>
</section>