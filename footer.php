
        <section class="feedback" id="feedback" >
            <div class="container">
                <h2 class="feedback__title">Заявка
                    <span>бесплатную</span><br>на консультацию
                </h2>
                <div class="feedback__wrapper">
                    <p class="feedback__desc">Свяжитесь с нами и мы расскажем Вам
                        как начать торговать на маркетплейсах.
                        И максимально бысто и эффективно
                        выйти на прибыльные продажи.
                    </p>
                    <div class="feedform">
                        <?php echo do_shortcode('[contact-form-7 id="54" title="consult_form"]')?>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="footer">
        <div class="container">
            <div class="footer__contact">
                <a href="tel:+7<?php echo get_field( 'city_number_code', 9 );?>" class="footer__phone-link"><?php echo get_field( 'city_number_visual', 9 );?></a>
                <a href="tel:+7<?php echo get_field( 'mobile_number_code', 9 );?>" class="footer__phone-link"><?php echo get_field( 'mobile_number_visual', 9 );?></a>
                <a href="mailto:<?php echo get_field( 'e-mail', 9 );?>" class="footer__mail-link"><?php echo get_field( 'e-mail', 9 );?></a>
            </div>
            <div class="footer__copyright">
                <p>&copy; <span><?php echo date('Y')?></span> MarketCell</p>
                <p>Создание сайтов</p>
            </div>
        </div>
    </footer>
   <?php wp_footer();?>
</body>

</html>