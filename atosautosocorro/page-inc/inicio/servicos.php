<section id="services">
    <div class="bg-overlay" style="background-image: url(<?php the_field('background_services') ?>);"></div>
    <div class="services">
        <div class="container wrapper">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="services-title">
                        <h2><?php the_field('titulo_servicos'); ?></h2>
                    </div>
                </div>

                <?php if (have_rows('servicos_repeat')): ?>
                    <?php $num = 0; ?>
                    <?php while (have_rows('servicos_repeat')):
                        the_row();
                        $imagem = get_sub_field('imagem');
                        $icone = get_sub_field('icone');
                        $titulo = get_sub_field('titulo');
                        $subtitulo = get_sub_field('subtitulo');
                        ?>
                        <div class="col-lg-3 wow fadeInUp" data-wow-delay="0.3s">

                            <div class="card-custom">
                                <div class="box-intern">
                                    <div class="box-mold">
                                        <picture>
                                            <source media="(min-width: 0px)"
                                                data-srcset="<?php echo esc_url($imagem['url']); ?>">
                                            <img class="lazyload" src="<?php echo esc_url($imagem['url']); ?>" alt="">
                                        </picture>
                                        <div class="conteudo">
                                            <div id="service-<?php echo $num; $num+=1; ?>" class="conteudo-title">
                                                <?php if (!empty($icone)) { ?>
                                                    <img class="icone" src="<?php echo esc_url($icone['url']); ?>" alt="">
                                                <?php } ?>
                                                <h4><?php echo $titulo; ?></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>