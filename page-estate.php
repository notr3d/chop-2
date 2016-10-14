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
				<h2 class="section-header"><span>Охрана недвижимости</span></h2>
				<p>Одним из направлений деятельности ЧОО «Тулрегионохрана» является предоставление услуг по охране недвижимости от несанкционированного проникновения, грабежа, вандализма и возможных террористических актов.</p>
				<p>Используемые методы и технические средства подбираются индивидуально для каждого объекта с учетом его специфики (месторасположения, назначения, площади, удаленности, транспортной доступности и прочих факторов). При обеспечении безопасности жилых домов учитываются также высотность зданий, наличие лифтов и количество лестничных пролетов. Берется во внимание и общая криминальная ситуация в конкретном районе.</p>
				<ul class="special special--big">
					<li>Охрана квартир </li>
					<li>Охрана домов</li>
					<li>Охрана дач</li>
					<li>Охрана участков</li>
					<li>Охрана частной собственности</li>
					<li>Охрана коммерческой недвижимости</li>
					<li>Охрана гаражных кооперативов</li>
					<li>Охрана жилых комплексов</li>
					<li>Охрана коттеджных поселков</li>
					<li>Охрана коттеджей</li>
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
					<div class="order__button order__button--open header-form__open--callback">Заказать звонок</div>
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
										<option value="85" selected>Строящиеся объекты</option>
										<option value="90">Складское помещение</option>
										<option value="70">Автостоянка</option>
										<option value="100">Магазин</option>
										<option value="90">Частный дом</option>
										<option value="80">ТЦ</option>
										<option value="90">Офисное помещение</option>
										<option value="80">Ресторан</option>
										<option value="85">Гостиница</option>
										<option value="100">Ювелирный магазин</option>
										<option value="100">Бутик</option>
										<option value="120">Банк</option>
										<option value="100">Массовое мероприятие</option>
									</select>
								</div>
								<div class="calc__item">							
									<span class="calc__subtitle">Количество охранников:</span>
									<input type="number" min="1" max="20" value="2">
									<table class="slider2column">
									  <tr>
										<td>
										  <div class="slidershell" id="slidershell1">
											<div class="sliderfill" id="sliderfill1"></div>
											<div class="slidertrack" id="slidertrack1"></div>
											<div class="sliderthumb" id="sliderthumb1"></div>
											<div class="slidervalue" id="slidervalue1">2</div>
											<input class="slider" id="slider1" type="range" min="1" max="20" value="2" oninput="showValue(value, 1, false);" onchange="showValue(value, 1, false);" />
										  </div>
										</td>
									  </tr>
									</table>
								</div>
								<div class="calc__item calc__item--time">
									<div class="calc__subtitle">Режим несения службы:</div>
									<label>
										<input type="radio" name="time" value="1" checked>
										<span>До 12 часов</span>
									</label>
									<label>
										<input type="radio" name="time" value="0.75">
										<span>До 24 часов</span>
									</label>								
								</div>
								<div class="calc__item">
									<div class="calc__subtitle">Ориентировачная стоимость:</div>
									<output>75 000 руб/мес.</output>
								</div>
								<div class="calc__item calc__item--order">
									<div class="calc__order  header-form__open--form">Заказать охрану</div>
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
