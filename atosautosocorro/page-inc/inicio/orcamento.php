<section id="faq">
    <div class="bg-overlay" style="background-image: url(<?php the_field('background_questions') ?>);"></div>
    <div id="budget-desktop" class="budget">
        <div id="contact" class="container wrapper">
            <div class="row">
                <?php $image = get_field('imagem_do_orcamento');
                ?>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="budget-form">
                        <div class="budget-form-inner" style="background-image: url(<?php echo esc_url($image['url']) ?>);">
                        <?php echo do_shortcode('[contact-form-7 id="202" title="Contact formulary"]'); ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="budget-info">
                        <div class="faq-title">
                            <h2><?php the_field('titulo_perguntas_frequentes'); ?></h2>
                        </div>
                        <?php if (have_rows('faq_repeat')) : ?>
                            <div class="tab-items">
                                <?php while (have_rows('faq_repeat')) : the_row();
                                    $categoria = get_sub_field('categoria');
                                ?>
                                    <a data-target="tab-<?= $categoria ?>" class="tab-toggle">
                                        <h3><?php echo $categoria; ?></h3>
                                    </a>
                                <?php endwhile; ?>
                            </div>
                            <?php while (have_rows('faq_repeat')) : the_row();
                                $categoria = get_sub_field('categoria');
                            ?>
                                <ul class="accordion" id="tab-<?= $categoria ?>">
                                    <?php while (have_rows('faq_repeat_item')) : the_row();
                                        $pergunta = get_sub_field('pergunta');
                                        $resposta = get_sub_field('resposta');
                                    ?>
                                        <li>
                                            <a><?php echo $pergunta; ?></a>
                                            <p><?php echo $resposta; ?>?</p>
                                        </li>
                                    <?php endwhile; ?>
                                </ul>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="contact-row">
                <div class="contact-tag">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/icon/envelope-icone.png">
                    <p><?php the_field('email_footer', 'option'); ?></p>
                </div>
                <div class="contact-tag">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/icon/whatsapp.png">

                    <p><?php the_field('telefones_email', 'option'); ?></p>
                </div>
                <div class="contact-tag">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/icon/pin-icone.png">
                    <p><a href="<?php the_field('link_do_mapa', 'option'); ?>" target="blank"><?php the_field('endereco_footer', 'option'); ?></a></p>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="faq">
    <div class="bg-overlay" style="background-image: url(<?php get_field('background_questions') ?>);"></div>
    <div id="budget-mobile" class="budget">
        <div class="container wrapper">
            <div class="row align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="budget-info">
                        <div class="faq-title">
                            <h2><?php the_field('titulo_perguntas_frequentes'); ?></h2>
                        </div>
                        <?php if (have_rows('faq_repeat')) : ?>
                            <div class="tab-items">
                                <?php while (have_rows('faq_repeat')) : the_row();
                                    $categoria = get_sub_field('categoria');
                                ?>
                                    <a data-target="tab-<?= $categoria ?>" class="tab-toggle">
                                        <h3><?php echo $categoria; ?></h3>
                                    </a>
                                <?php endwhile; ?>
                            </div>
                            <?php while (have_rows('faq_repeat')) : the_row();
                                $categoria = get_sub_field('categoria');
                            ?>
                                <ul class="accordion" id="tab-<?= $categoria ?>">
                                    <?php while (have_rows('faq_repeat_item')) : the_row();
                                        $pergunta = get_sub_field('pergunta');
                                        $resposta = get_sub_field('resposta');
                                    ?>
                                        <li>
                                            <a><?php echo $pergunta; ?></a>
                                            <p><?php echo $resposta; ?>?</p>
                                        </li>
                                    <?php endwhile; ?>
                                </ul>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="budget-form">
                        <div class="budget-form-inner" style="background-image: url(<?php echo esc_url($image['url']) ?>);">
                            <?php echo do_shortcode('[contact-form-7 id="202" title="Contact formulary"]'); ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>