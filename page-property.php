<?php get_header(); ?>
<div class="content-area">
	<main class="site-main service service--event">
		<?php wp_nav_menu(array(
			'theme_location' => 'service-nav',
			'container_class' => 'service-nav',
			'menu_class' => 'service-nav__wrapper'
		)); ?>
		<div class="lcw">
			<article>
				<h2 class="section-header">Охрана объектов</h2>
				<p>Охрана объектов различного назначения – развлекательные заведения, офисные и торговые площадки, жилые городские и загородные комплексы и отдельные дома, стоянки автотранспорта, охрана режимных объектов и т.д. – обуславливает всестороннюю подготовку наших сотрудников и использование целого комплекса современных охранных методов и технологий.</p>
				<p>Охрана стационарных объектов осуществляется таким образом, чтобы учесть все возможные риски, сохранить от посягательств все имеющиеся материальные и технические ресурсы, а также жизнь и здоровье людей, не нарушив при этом их работу.</p>
				<ul class="special">
					<li>Охрана предприятий</li>
					<li>Охрана производства</li>
					<li>Охрана заводов</li>
					<li>Охрана складов</li>
					<li>Охрана строительства</li>
					<li>Охрана спортплощадок</li>
					<li>Охрана парковок</li>
					<li>Охрана АЭС</li>
				</ul>				
			</article>
		</div>
		<section class="order">
			<div class="order__wrapper">
				<div class="order__item">
					<a href="tel:84872524451" class="order__button order__button--tel">8 (487) 252-44-51</a>
				</div>
				<div class="order__item order__item--big">
					<div class="order__text">Если у Вас возникли вопросы, то уточните их<br>у наших менеджеров по телефону:</div>
				</div>
				<div class="order__item">
					<div class="order__button order__button--open">Заказать звонок</div>
				</div>
			</div>
		</section>
		<section class="calc">
			<div class="lcw">
				<div class="cols">
					<div class="col-t-8">
						<div class="calc__bg"></div>
					</div>
					<div class="col-t-4">
						<div class="calc__container">
							<div class="calc__title">Онлайн заявка</div>
							<div class="calc__body">
								<div class="calc__item">
									<div class="calc__subtitle">Услуга:</div>
									<select name="service" id="service">
										<option value="1">Охрана офиса</option>
										<option value="2">Охрана не офиса</option>
									</select>
								</div>
								<div class="calc__item">
									<div>
										<span class="calc__subtitle">Количество охранников:</span>
										<input type="number">
									</div>
									<input type="range">
								</div>
								<div class="calc__item calc__item--time">
									<div class="calc__subtitle">Режим несения службы:</div>
									<label>
										<input type="radio" name="time" checked>
										<span>24/7</span>
									</label>
									<label>
										<input type="radio" name="time">
										<span>День</span>
									</label>
									<label>
										<input type="radio" name="time">
										<span>Ночь</span>
									</label>								
								</div>
								<div class="calc__item">
									<div class="calc__subtitle">Ориентировачная стоимость:</div>
									<output>75 000 руб/мес.</output>
								</div>
								<div class="calc__item calc__item--order">
									<div class="calc__order">Заказать охрану</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>		
	</main>
</div>
<?php get_footer(); ?>
