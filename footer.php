	</div>
	<footer class="site-footer">
		<div class="footer-nav">
			<div class="footer-nav__wrapper lcw">
				<a href="<?php echo get_permalink( get_page_by_title('О компании')->ID ); ?>" class="footer-nav__item">О компании</a>
				<a href="<?php echo get_permalink( get_page_by_title('Услуги')->ID ); ?>" class="footer-nav__item">Услуги</a>
				<a href="<?php echo get_permalink( get_page_by_title('Документы')->ID ); ?>" class="footer-nav__item">Документы</a>
				<a href="<?php echo get_permalink( get_page_by_title('Цены')->ID ); ?>" class="footer-nav__item">Цены</a>
				<a href="<?php echo get_permalink( get_page_by_title('Клиенты')->ID ); ?>" class="footer-nav__item">Клиенты</a>
				<a href="<?php echo get_permalink( get_page_by_title('Вопрос-ответ')->ID ); ?>" class="footer-nav__item">Вопрос-ответ</a>
				<a href="<?php echo get_permalink( get_page_by_title('Контакты')->ID ); ?>" class="footer-nav__item">Контакты</a>
			</div>
		</div>
		<div class="site-footer__wrapper lcw">
			<div class="site-footer__item">
				<div class="site-logo">
					<div class="site-logo__title">Тулрегионохрана</div>
					<div class="site-logo__subtitle">Частная охранная организация</div>
				</div>
			</div>
			<div class="site-footer__item">
				<div class="footer-address">
					<div class="footer-address__item footer-address__item--tel">8 (487) 252-44-51</div>
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
				<form action="" class="footer-callback">
					<h2 class="footer-callback__header">Связаться с нами:</h2>
					<input type="text" placeholder="Ваше имя*" required> 
					<input type="email" placeholder="Ваш email*" required>
					<textarea placeholder="Ваше сообщение*" required></textarea>
					<input type="submit" value="Отправить">
				</form>
			</div>
		</div>
	</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>
