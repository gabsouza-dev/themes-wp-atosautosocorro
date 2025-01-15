    <section id="regions">
        <div class="regions">
            <div class="container wrapper">
                <div class="row align-items-center">
                    <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="regions-inner">
                            <h2><?php the_field('titulo_regioes'); ?></h2>
                            <?php $image = get_field('imagem');
                            if (!empty($image)) : ?>
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="img-fluid" width="800" />
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="regions-row">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h3><?php the_field('subtitulo_regioes'); ?></h3>
                            <?php
                            $array = explode(',', get_field('descritivo_regioes'));
                            foreach ($array as $region) {
                            ?>
                                <span class="region-item"><?= $region ?></span>
                                <?php
                                if (end($array) !== $region) { ?>
                                    <span class="dot"></span>
                                <?php }
                                ?>
                            <?php
                            }
                            ?>
                        </div>
                        <div class="col-md-6 warning-regions">
                            <p><?php the_field('aviso_regioes'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>