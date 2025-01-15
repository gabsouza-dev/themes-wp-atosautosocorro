<section>
    <div class="bg-overlay" style="background-image: url(<?php the_field('background_experiencias') ?>);"></div>
    <div class="experiencie">
        <div class="experiencie-inner">
            <div class="container wrapper">
                <div class="row align-items-stretch text-center">
                    <?php if (have_rows('experiencias_repeat')) : ?>
                        <?php while (have_rows('experiencias_repeat')) : the_row();
                            $numero = get_sub_field('numero');
                            $titulo = get_sub_field('titulo');
                        ?>
                            <div class="col-lg-3 wow fadeInUp" data-wow-delay="0.2s">
                                <h2>+<span class="counter"><?php echo $numero; ?></span></h2>
                                <h6><?php echo $titulo; ?></h6>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
</section>