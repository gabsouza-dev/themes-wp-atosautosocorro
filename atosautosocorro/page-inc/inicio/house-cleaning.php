<section id="house">
    <div class="house py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="house-info">
                        <h2><?php the_field('titulo_house'); ?></h2>
                        <div class="house-info-text">
                            <?php the_field('descricao_house'); ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="house-inner">
                        <?php $image = get_field('imagem_house'); if( !empty( $image ) ): ?>
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="img-fluid"/>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
</section>