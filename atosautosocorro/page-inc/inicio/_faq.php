
    <section id="faq">
        <div id="faq-desktop" class="faq">
            <div class="container wrapper">
            <div class="row align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
                <?php if( have_rows('faq_repeat') ): ?>
                    <ul class="accordion">
                    <?php while( have_rows('faq_repeat') ): the_row(); 
                        $pergunta = get_sub_field('pergunta');
                        $resposta = get_sub_field('resposta');
                    ?>
                    <li>
                        <a><?php echo $pergunta; ?></a>
                        <p><?php echo $resposta; ?>?</p>
                    </li>
                    <?php endwhile; ?>
                    </ul>
                    <?php endif; ?>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="faq-title">
                        <h2><?php the_field('titulo_perguntas_frequentes'); ?></h2>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>


    <section id="faq">
        <div id="faq-mobile" class="faq">
            <div class="container wrapper">
            <div class="row align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="faq-title">
                        <h2><?php the_field('titulo_perguntas_frequentes'); ?></h2>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
                <?php if( have_rows('faq_repeat') ): ?>
                    <ul class="accordion">
                    <?php while( have_rows('faq_repeat') ): the_row(); 
                        $pergunta = get_sub_field('pergunta');
                        $resposta = get_sub_field('resposta');
                    ?>
                    <li>
                        <a><?php echo $pergunta; ?></a>
                        <p><?php echo $resposta; ?>?</p>
                    </li>
                    <?php endwhile; ?>
                    </ul>
                    <?php endif; ?>
                </div>
               
            </div>
            </div>
        </div>
    </section>