<?php get_header(); ?>
<div class="content-area">
	<main class="site-main home">
		<section class="services">
			<div class="lcw">
				<h2 class="section-header">Услуги компании</h2>
				<div class="cols">
					<div class="col-t-6">
						<a href="property" class="services__item">
							<img src="<?php echo get_template_directory_uri(); ?>/img/home/services/bg/1.jpg" class="services__bg">
							<img src="<?php echo get_template_directory_uri(); ?>/img/home/services/img/1.png" class="services__img">
							<h3 class="services__title">Охрана объектов</h3>
						</a>
					</div>
					<div class="col-t-6">
						<a href="institution" class="services__item">
							<img src="<?php echo get_template_directory_uri(); ?>/img/home/services/bg/2.jpg" class="services__bg">
							<img src="<?php echo get_template_directory_uri(); ?>/img/home/services/img/2.png" class="services__img">
							<h3 class="services__title">Охрана учреждений</h3>
						</a>
					</div>
					<div class="col-t-6">
						<a href="estate" class="services__item">
							<img src="<?php echo get_template_directory_uri(); ?>/img/home/services/bg/3.jpg" class="services__bg">
							<img src="<?php echo get_template_directory_uri(); ?>/img/home/services/img/3.png" class="services__img">
							<h3 class="services__title">Охрана недвижимости</h3>
						</a>
					</div>
					<div class="col-t-6">
						<a href="event" class="services__item">
							<img src="<?php echo get_template_directory_uri(); ?>/img/home/services/bg/4.jpg" class="services__bg">
							<img src="<?php echo get_template_directory_uri(); ?>/img/home/services/img/4.png" class="services__img">
							<h3 class="services__title">Охрана мероприятий</h3>
						</a>
					</div>
					<div class="col-t-6">
						<a href="systems" class="services__item">
							<img src="<?php echo get_template_directory_uri(); ?>/img/home/services/bg/5.jpg" class="services__bg">
							<img src="<?php echo get_template_directory_uri(); ?>/img/home/services/img/5.png" class="services__img">
							<h3 class="services__title">Системы безопастности</h3>
						</a>
					</div>
					<div class="col-t-6">
						<a href="legal" class="services__item">
							<img src="<?php echo get_template_directory_uri(); ?>/img/home/services/bg/6.jpg" class="services__bg">
							<img src="<?php echo get_template_directory_uri(); ?>/img/home/services/img/6.png" class="services__img">
							<h3 class="services__title">Юридические услуги</h3>
						</a>
					</div>					
				</div>
			</div>
		</section>
		<section class="about">
			<div class="lcw">
				<div class="cols">
					<div class="col-t-8">
						<article>
							<p>Физическая охрана является одной из важнейших составляющих организации и ведения бизнеса. При ведении любого вида деятельности, внешняя преступная составляющая, угрожающая делопроизводству, всегда держится на значительном уровне. При подсчете рисков и критериев опасности, важно ответственно подходить к вопросу обеспечения сохранности предприятия, и обращаться только к профессионалам данной отрасли.</p>
							<p><b>Частная охранная организация «Тулрегионохрана»</b> осуществляет безопасность любых видов физической и юридической деятельности с 2002 года. Опыт, подкрепленный большим количеством предотвращенных чрезвычайных ситуаций, позволил сформировать видение необходимого персонального подхода к каждому клиенту.</p>
						</article>
					</div>
					<div class="col-t-4">
						<img src="<?php echo get_template_directory_uri(); ?>/img/home/14.png">
					</div>
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
										<option value="2500" selected>Охрана офиса</option>
										<option value="5000">Охрана не офиса</option>
									</select>
								</div>
								<div class="calc__item">
									<div>
										<span class="calc__subtitle">Количество охранников:</span>
										<input type="number" min="1" max="10" value="2">
									</div>
									<input type="range" min="1" max="10" value="2">
								</div>
								<div class="calc__item calc__item--time">
									<div class="calc__subtitle">Режим несения службы:</div>
									<label>
										<input type="radio" name="time" value="2" checked>
										<span>24/7</span>
									</label>
									<label>
										<input type="radio" name="time" value="1">
										<span>День</span>
									</label>
									<label>
										<input type="radio" name="time" value="1.5">
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
		<section class="garanty">
			<div class="garanty__wrapper">
				<div class="garanty__container">
					<h2>Мы гарантируем!</h2>
					<p>Каждый наш сотрудник подвергается обязательным процедурам, необходимым для преодоления стрессовых ситуаций, исключающих неправомерное поведение. В их число входят:</p>
					<ul>
						<li>лицензирование деятельности сотрудника, что является неотъемлемой частью спокойствия за сохранность бизнеса;</li>
						<li>процедура психологического профотбора и обследования, при подготовке и приемке объекта;</li>
						<li>обязательное ежедневное медицинское освидетельствование, перед приемом поста;</li>
						<li>обязательный инструктаж, непосредственно перед приемом поста;</li>
						<li>еженедельные тренировочные мероприятия, для поддержания формы сотрудника охраны.</li>
					</ul>
				</div>
			</div>
		</section>
		<section class="galery" data-featherlight-gallery data-featherlight-filter=".galery__inner">
			<div class="galery__wrapper lcw">
				<h2 class="section-header">Отзывы:</h2>
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
				<h2 class="section-header">Наши клиенты</h2>
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
