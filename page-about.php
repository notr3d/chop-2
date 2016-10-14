<?php get_header(); ?>
<div class="content-area">
	<main class="site-main about">	
		<div class="lcw">
			<div class="cols">
				<div class="col-t-8">
					<article>
						<h2 class="section-header"><span>О компании</span></h2>
						<p>Физическая охрана является одной из важнейших составляющих организации и ведения бизнеса. При ведении любого вида деятельности, внешняя преступная составляющая, угрожающая делопроизводству, всегда держится на значительном уровне. При подсчете рисков и критериев опасности, важно ответственно подходить к вопросу обеспечения сохранности предприятия, и обращаться только к профессионалам данной отрасли.</p>
						<p><bold>Частная охранная организация «Тулрегионохрана»</bold> осуществляет безопасность любых видов физической и юридической деятельности с 2002 года. Опыт, подкрепленный большим количеством предотвращенных чрезвычайных ситуаций, позволил сформировать видение необходимого персонального подхода к каждому клиенту.</p>
						<p>Каждый сотрудник нашего охранного предприятия подвергается обязательным процедурам, необходимым для преодоления стрессовых ситуаций, исключающих неправомерное поведение.</p>
					</article>
				</div>
				<div class="col-t-4">
					<section class="licenses" data-featherlight-gallery data-featherlight-filter=".licenses__item">
						<div class="licenses__wrapper">
							<div class="licenses__header">Лицензии</div>
							<div class="licenses__container">
								<a href="<?php echo get_template_directory_uri(); ?>/img/licenses/big/1.jpg" class="licenses__item">
									<img src="<?php echo get_template_directory_uri(); ?>/img/licenses/small/1.jpg" class="licenses__img">
								</a>
								<a href="<?php echo get_template_directory_uri(); ?>/img/licenses/big/2.jpg" class="licenses__item">
									<img src="<?php echo get_template_directory_uri(); ?>/img/licenses/small/2.jpg" class="licenses__img">
								</a>								
							</div>
						</div>
					</section>					
				</div>
			</div>
			<div class="cols">
				<div class="col-t-8">
					<section class="items">
						<!--<h2 class="section-header"></h2>-->
						<div class="cols">
							<div class="col-t-6">
								<div class="items__item">
									<h3 class="items__header">Лицензирование</h3>
									<p class="items__text">Лицензирование деятельности сотрудника, что является неотъемлемой частью спокойствия за сохранность бизнеса.</p>
								</div>
							</div>
							<div class="col-t-6">
								<div class="items__item">
									<h3 class="items__header">Профотбор</h3>
									<p class="items__text">Процедура психологического профотбора и обследования, при подготовке и приемке объекта.</p>
								</div>
							</div>
							<div class="col-t-6">
								<div class="items__item">
									<h3 class="items__header">Физподготовка</h3>
									<p class="items__text">Еженедельные тренировочные мероприятия, для поддержания формы сотрудника охраны</p>
								</div>
							</div>
							<div class="col-t-6">
								<div class="items__item">
									<h3 class="items__header">Инструктаж</h3>
									<p class="items__text">Обязательный инструктаж, непосредственно перед приемом поста</p>
								</div>
							</div>
							<div class="col-t-6">
								<div class="items__item">
									<h3 class="items__header">Медосмотр</h3>
									<p class="items__text">Обязательное ежедневное медицинское освидетельствование, перед приемом поста.</p>
								</div>
							</div>
						</div>						
					</section>
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
		<section class="galery" data-featherlight-gallery data-featherlight-filter=".galery__inner">
			<div class="galery__wrapper lcw">
				<h2 class="section-header"><span>Отзывы:</span></h2>
				<div class="galery__container">
					<div class="galery__item">
						<a class="galery__inner" href="<?php echo get_template_directory_uri(); ?>/img/galery/reviews/big/1.jpg">
							<img class="galery__img" src="<?php echo get_template_directory_uri(); ?>/img/galery/reviews/small/1.jpg">
						</a>
					</div>
					<div class="galery__item">
						<a class="galery__inner" href="<?php echo get_template_directory_uri(); ?>/img/galery/reviews/big/2.jpg">
							<img class="galery__img" src="<?php echo get_template_directory_uri(); ?>/img/galery/reviews/small/2.jpg">
						</a>
					</div>
					<div class="galery__item">
						<a class="galery__inner" href="<?php echo get_template_directory_uri(); ?>/img/galery/reviews/big/3.jpg">
							<img class="galery__img" src="<?php echo get_template_directory_uri(); ?>/img/galery/reviews/small/3.jpg">
						</a>
					</div>							
				</div>
			</div>
		</section>
		<section class="clients">
			<div class="clients__wrapper lcw">
				<h2 class="section-header"><span>Наши клиенты</span></h2>
				<div class="clients__container">
					<div class="parnters__item">
						<img src="<?php echo get_template_directory_uri(); ?>/img/home/clients/1.jpg" alt="" class="clients__img">
					</div>
					<div class="parnters__item">
						<img src="<?php echo get_template_directory_uri(); ?>/img/home/clients/2.jpg" alt="" class="clients__img">
					</div>
					<div class="parnters__item">
						<img src="<?php echo get_template_directory_uri(); ?>/img/home/clients/3.jpg" alt="" class="clients__img">
					</div>
					<div class="parnters__item">
						<img src="<?php echo get_template_directory_uri(); ?>/img/home/clients/4.jpg" alt="" class="clients__img">
					</div>
					<div class="parnters__item">
						<img src="<?php echo get_template_directory_uri(); ?>/img/home/clients/5.jpg" alt="" class="clients__img">
					</div>
					<div class="parnters__item">
						<img src="<?php echo get_template_directory_uri(); ?>/img/home/clients/1.jpg" alt="" class="clients__img">
					</div>
					<div class="parnters__item">
						<img src="<?php echo get_template_directory_uri(); ?>/img/home/clients/2.jpg" alt="" class="clients__img">
					</div>
					<div class="parnters__item">
						<img src="<?php echo get_template_directory_uri(); ?>/img/home/clients/3.jpg" alt="" class="clients__img">
					</div>
					<div class="parnters__item">
						<img src="<?php echo get_template_directory_uri(); ?>/img/home/clients/4.jpg" alt="" class="clients__img">
					</div>
					<div class="parnters__item">
						<img src="<?php echo get_template_directory_uri(); ?>/img/home/clients/5.jpg" alt="" class="clients__img">
					</div>					
				</div>
			</div>
		</section>
			
	</main>
</div>
<?php get_footer(); ?>
