<?php get_header(); ?>
<div class="content-area">
	<main class="site-main regions">		
		<div class="lcw">			
			<section class="region">
				<h2 class="section-header"><span>Под нашей охраной</span></h2>
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
