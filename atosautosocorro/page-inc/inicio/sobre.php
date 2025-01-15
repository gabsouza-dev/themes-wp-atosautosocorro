    <section id="aboutus">
        <div class="about">
            <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
                <div class="about-inner">
                    <?php $image = get_field('imagem_sobre'); if( !empty( $image ) ): ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="img-fluid"/>
                    <?php endif; ?>
                </div>
                </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="about-info">
                    <h2><?php the_field('titulo_sobre'); ?></h2>
                    <div class="about-info-text">
                        <?php the_field('descricao_sobre'); ?>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>