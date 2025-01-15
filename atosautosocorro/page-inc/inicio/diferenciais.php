<section id="differentials">
    <div class="bg-overlay" style="background-image: url(<?php the_field('background_diferenciais') ?>);"></div>
    <div class="diferentials">
        <div class="container wrapper">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="diferentials-title">
                        <h2><?php the_field('titulo_diferenciais'); ?></h2>
                        <hr>
                        <br>
                    </div>
                </div>
                <?php if (have_rows('diferenciais_repeat')): ?>
                    <?php while (have_rows('diferenciais_repeat')):
                        the_row();
                        $icone = get_sub_field('icone');
                        $titulo = get_sub_field('titulo');
                        ?>
                        <div class="col-lg-4 wow zoomIn align-items-center" data-wow-delay="0.2s">
                            <div class="diferentials-box">
                                <img src="<?php echo esc_url($icone['url']); ?>" alt="<?php echo esc_attr($icone['title']); ?>"
                                    class="img-fluid" width="100">
                                <h6><?php echo $titulo; ?></h6>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
</section>