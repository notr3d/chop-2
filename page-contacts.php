<?php get_header(); ?>
<div class="content-area">
	<main class="site-main contacts">
		<div class="contacts__wrapper">
			<div class="contacts__container">
				<div class="address">
					<div class="address__item">
						<div class="address__header">Адрес:</div>
						<div class="address__text">300004, Россия, г.Тула,<br>шоссе Веневское, д. 4, корп. 5</div>
					</div>
					<div class="address__item">
						<div class="address__header">Телефон:</div>
						<div class="address__text">8 (4872) 52-44-51</div>
					</div>
					<div class="address__item">
						<div class="address__header">E-mail:</div>
						<div class="address__text"><a href="mailto:info@regionchop.ru">info@regionchop.ru</a></div>
					</div>
					<div class="address__item">
						<div class="address__header">Режим работы:</div>
						<div class="address__text">пн-пт с 9.00 до 18.00</div>
					</div>				
				</div>
				<div class="callback">
					<div class="callback__header">Обратная связь:</div>
					<div class="callback__item">
						<input type="text" placeholder="Ваше имя:">
					</div>
					<div class="callback__item">
						<input type="email" placeholder="Ваш e-mail:">
					</div>
					<div class="callback__item">
						<textarea placeholder="Сообщение:"></textarea>
					</div>
					<div class="callback__item">
						<input type="submit" value="Отправить">
					</div>					
				</div>
			</div>
		</div>
		<section class="contacts__map" id="contacts-map">
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC-vOBdjVqwgHav99Lw79O25RL04z5pq2c" type="text/javascript"></script>
			<script>								
				var center = new google.maps.LatLng(55.788911, 37.729356);
				var init = function(){
					var prop = {
						center: center,
						scrollwheel: false,
						zoom: 14,						
						mapTypeId: google.maps.MapTypeId.ROADMAP
					};
					var map = new google.maps.Map(document.getElementById('contacts-map'), prop);
					var marker = new google.maps.Marker({
						position: center,
						icon: '<?php echo get_template_directory_uri(); ?>/img/map-icon.png',
						size: new google.maps.Size(20, 32)
					});
					marker.setMap(map);	
					google.maps.Map.prototype.setCenterWithOffset= function(latlng, offsetX, offsetY) {
						var map = this;
						var ov = new google.maps.OverlayView();
						ov.onAdd = function() {
							var proj = this.getProjection();
							var aPoint = proj.fromLatLngToContainerPixel(latlng);
							aPoint.x = aPoint.x+offsetX;
							aPoint.y = aPoint.y+offsetY;
							map.setCenter(proj.fromContainerPixelToLatLng(aPoint));
						}; 
						ov.draw = function() {}; 
						ov.setMap(this); 
					};
					if (window.matchMedia('(min-width: 1100px)').matches) {
    					map.setCenterWithOffset(center, -200, 0);
    				}					
				};
				google.maps.event.addDomListener(window, 'load', init);
			</script>
		</section>
	</main>
</div>
<?php get_footer(); ?>
