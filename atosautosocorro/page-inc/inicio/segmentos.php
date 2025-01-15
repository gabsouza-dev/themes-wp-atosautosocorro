<section id="segments">
    <div class="bg-overlay" style="background-image: url(<?php the_field('background_segments') ?>);"></div>
    <div class="segments">
        <div class="container-fluid wrapper pb-1">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="segments-title">
                        <h2><?php the_field('titulo_segmentos_atendidos'); ?></h2>
                    </div>
                </div>
                <?php if (have_rows('segmentos_atendidos_repeat')): ?>
                    <?php $num = 0; ?>
                    <div class="owl-carousel owl-segmentos">
                        <?php while (have_rows('segmentos_atendidos_repeat')):
                            the_row();
                            $titulo = get_sub_field('titulo');
                            $imagem = get_sub_field('imagem');
                            ?>
                            <div class="owl-segmentos-itens" data-wow-delay="0.3s">
                                <div id="segbox-<?php echo $num;
                                $num += 1; ?>" class="segments-box">
                                    <div class="segments-box-thumb">
                                        <img src="<?php echo esc_url($imagem['url']); ?>"
                                            alt="<?php echo esc_attr($imagem['title']); ?>" class="img-fluid">
                                    </div>
                                    <div class="segments-box-details">
                                        <h5><?php echo $titulo; ?></h5>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    </div>
</section>