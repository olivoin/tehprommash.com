<?php /* Template Name: Страница - Контакты */ get_header(); ?>
<main id="page">
    <section class="section-contacts">
        <div class="wrap hor-wrap">
            <div class="section-desc"></div>
            <div class="section-content">
                <div class="padding-40">
                    <div class="text-block">
                        <h2>контакты</h2>
                        <p><a href="tel:84959339909">8 (495) 933-99-09</a></p>
                        <p><a href="mailto:info@sotek.ru">sotek@sotek.ru</a></p>
                        <p>105005, г.Москва, набережная Академика Туполева д.15, стр.12</p>
                    </div>
                    <div class="contact-form">
                        <?php echo do_shortcode('[contact-form-7 id="4" title="Обратная связь"]'); ?>
                    </div>
                </div>
            </div>
        </div>
        
    </section>
</main>

<?php get_footer(); ?>