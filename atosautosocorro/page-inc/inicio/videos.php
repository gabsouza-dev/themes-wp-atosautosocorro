<section id="videos">
    <div class="videos">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="videos-info">
                        <h2><?php the_field('titulo_videos'); ?></h2>
                        <div class="videos-info-text">
                            <?php the_field('descricao_videos'); ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="videos-inner px-2">
                        <?php if (have_rows('lista_videos')) : ?>
                            <div class="owl-carousel owl-videos">
                                <?php $i=1; while (have_rows('lista_videos')) : the_row();?>
                                    <div class="item-video">
                                        <a class="owl-video" data-merge=<?= $i;?> href="<?= get_sub_field('link'); ?>"><?php the_sub_field('titulo'); ?></a>
                                        <p></p>
                                    </div>
                                <?php $i++; endwhile; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
</section>