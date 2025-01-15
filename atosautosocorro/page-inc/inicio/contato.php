    <section id="contact">
        <div class="contact">
            <div class="container wrapper">
            <div class="row align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="contact-box">
                        <img src="<?php bloginfo('template_url');?>/assets/img/icon/mail.png">
                        <p><?php the_field('email_footer','option');?></p>
                    </div>
                    <div class="contact-box">
                        <img src="<?php bloginfo('template_url');?>/assets/img/icon/tel.png">
                        <p><?php the_field('telefones_email','option');?></p>

                    </div>
                    <div class="contact-box">
                        <img src="<?php bloginfo('template_url');?>/assets/img/icon/local.png">
                        <p><a href="<?php the_field('link_do_mapa','option');?>" target="blank"><?php the_field('endereco_footer','option');?></a></p>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="contact-form">
						<h2 class="font-weight-bold text-uppercase">Contato</h2>
							
						
                    <?php echo do_shortcode('[contact-form-7 id="11" title="Formulário de Contato"]'); ?>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>