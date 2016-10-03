	</div>
	<footer class="site-footer">
		<?php wp_nav_menu(array(
			'theme_location' => 'header-nav',
			'menu_class' => 'footer-nav',
			'depth' => 1
		)); ?>
		<div class="site-footer__wrapper">
			<div class="site-footer__item">
				<a href="#" class="site-logo">
					<div class="site-logo__title">Тулрегионохрана</div>
					<div class="site-logo__subtitle">Частная охранная организация</div>
				</a>
			</div>
			<div class="site-footer__item">
				<div class="footer-address">
					<div class="footer-address__item footer-address__item--tel">
						<a href="tel:84872524451">8 (487) 252-44-51</a>
					</div>
					<div class="footer-address__item footer-address__item--email">
						<a href="mailto:info@regionchop.ru">info@regionchop.ru</a>
					</div>
					<div class="footer-address__item footer-address__item--address">
						300004, Россия, г.Тула,<br>
						шоссе Веневское, д.4, корп.5
					</div>
					<div class="copy">© 2016 ЧОО "Тулрегионохрана"</div>
				</div>
			</div>
			<div class="site-footer__item">
				<div class="footer-callback">
					<h2 class="footer-callback__header">Связаться с нами:</h2>
					<div class="footer-callback__item footer-callback__item--left">
						<input type="text" placeholder="Ваше имя*" required>
					</div>
					<div class="footer-callback__item footer-callback__item--right">
						<input type="email" placeholder="Ваш email*" required>
					</div>
					<div class="footer-callback__item footer-callback__item--big">
						<textarea placeholder="Ваше сообщение*" required></textarea>
					</div>
					<div class="footer-callback__item footer-callback__item--left">
						<input type="submit" value="Отправить">
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/featherlight.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/featherlight.gallery.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
<?php wp_footer(); ?>
</body>
</html>
