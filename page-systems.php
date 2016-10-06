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
				<h2 class="section-header">Охрана недвижимости</h2>
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
				<p>На базе нашего охранного предприятия работает собственный отдел инженерно-технических средств охраны, специалисты которого прошли соответствующее обучение и по праву считаются одними из лучших в отрасли. Сотрудники технического отдела ЧОО «Тулрегионохрана» выполняют работы с системами безопасности на объектах любой сложности: от квартир и частных домов до многоуровневых торговых центров и производственных предприятий.</p>
				<p>Для обеспечения обеспечения безопасности на объектых мы используем технологии ведущих российских и зарубежных производителей, чья продукция прекрасно зарекомендовала себя в сфере защиты имущества. Благодаря функциональности современных устройств, каждая система оптимально соотносит финансовые возможности клиента и перечень поставленных задач.</p>
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
