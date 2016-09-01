<?php /* Template Name: Страница - Каталог - Продукт */ get_header(); ?>
<main id="page">
    
    <div class="wrap hor-wrap">
        
        <section class="single-item-first">
            <div class="section-desc">
                <h2><?php the_title(); ?></h2>
                <?php the_excerpt(); ?>
            </div>
            <div class="section-content">
                <div class="section-content-video">
                    <?php the_post_thumbnail(array(800,800)); ?>
                </div>
            </div>
            <div class="single-item-first-down">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/arrow-down.svg">
            </div>
        </section>
        
        
        <section class="single-item-details">
            <div class="tabs">
                <ul class="single-item-details-titles">
                    <li>Описание <img src="<?php bloginfo('template_url'); ?>/assets/images/icons/icon-opisanie.svg"></li>
                    <li>Фото детали <img src="<?php bloginfo('template_url'); ?>/assets/images/icons/icon-foto.svg"></li>
                    <?php if(is_page(21)) { ?>
                    <li>Сборка детали <img src="<?php bloginfo('template_url'); ?>/assets/images/icons/icon-sborka.svg"></li>
                    <?php } ?>
                </ul>
                <div class="single-item-details-desc">
                    <div class="text-block">
                        <?php the_field('описание_детали'); ?>
                    </div>
                    <div class="photo-block">
                        <?php the_field('фото_детали'); ?>
                    </div>
                    <?php if(is_page(21)) { ?>
                    <div class="video-block">
                        <div>
                            <video id="v0" tabindex="0" controls autobuffer preload muted>
                                <source type="video/webm; codecs=&quot;vp8, vorbis&quot;" src="<?php bloginfo('template_url'); ?>/assets/video/sborka.webm">
                                <source type="video/ogg; codecs=&quot;vp8, vorbis&quot;" src="<?php bloginfo('template_url'); ?>/assets/video/sborka.ogg">
                                <source type="video/mp4; codecs=&quot;vp8, vorbis&quot;" src="<?php bloginfo('template_url'); ?>/assets/video/sborka.mp4">
                            </video>
                        </div>
                    </div>  
                    <?php } ?>
                </div>
                <span class="row"></span>
            </div> 
            
        </section>  
        
        
    </div>
    
</main>

<?php get_footer(); ?>