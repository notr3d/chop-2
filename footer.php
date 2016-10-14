	</div>
	<div class="scrollup"></div>
	<footer class="site-footer">
		<?php wp_nav_menu(array(
			'theme_location' => 'header-nav',
			'container_class' => 'footer-nav',
			'menu_class' => 'footer-nav__wrapper'
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
						<a href="tel:84872524451">8 (4872) 52-44-51</a>
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
					<?php echo do_shortcode( '[contact-form-7 title="footer form"]' ); ?>
					<!--<div class="footer-callback__item footer-callback__item--left">
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
					</div>-->
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

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
	(function (d, w, c) {
		(w[c] = w[c] || []).push(function() {
			try {
				w.yaCounter39095985 = new Ya.Metrika({
					id:39095985,
					clickmap:true,
					trackLinks:true,
					accurateTrackBounce:true,
					webvisor:true
				});
			} catch(e) { }
		});

		var n = d.getElementsByTagName("script")[0],
			s = d.createElement("script"),
			f = function () { n.parentNode.insertBefore(s, n); };
		s.type = "text/javascript";
		s.async = true;
		s.src = "https://mc.yandex.ru/metrika/watch.js";

		if (w.opera == "[object Opera]") {
			d.addEventListener("DOMContentLoaded", f, false);
		} else { f(); }
	})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/39095985" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->	

<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
	ga('create', 'UA-82670039-1', 'auto');
	ga('send', 'pageview');
</script>
<?php wp_footer(); ?>
</body>
</html>
