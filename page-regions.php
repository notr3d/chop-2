<?php get_header(); ?>
<div class="content-area">
	<main class="site-main regions">		
		<div class="lcw">			
			<section class="region">
				<h2 class="section-header">Под нашей охраной</h2>
				<div class="region__container">
					<h3>Региональное охранное предприятие</h3>
					<p>Мы организуем охрану в нескольких областях Российской Федерации!</p>
				</div>
			</section>
		</div>
		<section class="calc">
			<div class="lcw">
				<div class="cols">
					<div class="col-t-8 col-t-8--visible">
						<p>Частная охранная организация «Тулрегионохрана» предоставляет полный спектр охранных услуг в пяти областях центрального региона РФ.</p>
						<div class="reg">
							<div class="reg__item">
								<div class="reg__img"></div>
								<div class="reg__title">Тульская область</div>
							</div>
							<div class="reg__item">
								<div class="reg__img"></div>
								<div class="reg__title">Рязанская область</div>
							</div>
							<div class="reg__item">
								<div class="reg__img"></div>
								<div class="reg__title">Калужская область</div>
							</div>
							<div class="reg__item">
								<div class="reg__img"></div>
								<div class="reg__title">Орловская область</div>
							</div>
							<div class="reg__item">
								<div class="reg__img"></div>
								<div class="reg__title">Липецкая область</div>
							</div>							
						</div>
						<div class="callback">
							<h2 class="callback__header">Если у Вас возникли вопросы, то уточните их<br>у наших менеджеров по телефону:</h2>
							<a href="tel:84872524451" class="callback__button callback__button--tel">8 (487) 252-44-51</a>
							<div class="callback__button callback__button--open header-form__open--callback">Заказать звонок</div>
						</div>
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
									<div class="calc__order header-form__open--form">Заказать охрану</div>
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
