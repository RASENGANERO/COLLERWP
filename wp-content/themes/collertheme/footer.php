<footer class="main-footer">
		<div class="main-footer-content">
			<div class="flex footer-top">
				<a href="/" class="main-header-logo logo">
					<img <?php echo 'srcset="'.get_template_directory_uri().'/assets/img/logo.svg'.'"';?> alt="Лого" />
				</a>
				<div class="right">
					
					<?php
        				wp_nav_menu([
							'container' => false,
            				'theme_location'  => 'footer_menu_1',
            				'menu_class'      => 'links-list',
            				'walker'          => new FooterMenu(),
							'menu_id'=>'',
        				]);
        			?>
					
					<?php
					
        				wp_nav_menu([
							'container' => false,
            				'theme_location'  => 'footer_menu_2',
            				'menu_class'      => 'links-list',
            				'walker'          => new FooterMenu(),
							'menu_id'=>'',
        					]);
						
        			?>
					<?php
					
        				wp_nav_menu([
							'container' => false,
            				'theme_location'  => 'footer_menu_3',
            				'menu_class'      => 'links-list',
            				'walker'          => new FooterMenu(),
							'menu_id'=>'',
        				]);
        			?>
					<?php
        				wp_nav_menu([
							'container' => false,
            				'theme_location'  => 'footer_menu_4',
            				'menu_class'      => 'links-list',
            				'walker'          => new FooterMenu(),
							'menu_id'=>'',
        				]);
        			?>
				</div>
			</div>
			<div class="flex footer-bottom">
				<div class="rights">
					©Все права защищены
				</div>
				<div class="rights">
					<a href="/politics">Политика конфиденциальности</a>
				</div>
				<div class="year">
					2024
				</div>
			</div>
		</div>
	</footer>
	<div class="modal js-feedback-modal">
    <div class="modal-overlay modal-all"></div>
    <div class="modal-body">
        <div class="close-icon modal-all">
            <svg width="30px" height="30px" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg">
                <path fill="#fff" d="M764.288 214.592 512 466.88 259.712 214.592a31.936 31.936 0 0 0-45.12 45.12L466.752 512 214.528 764.224a31.936 31.936 0 1 0 45.12 45.184L512 557.184l252.288 252.288a31.936 31.936 0 0 0 45.12-45.12L557.12 512.064l252.288-252.352a31.936 31.936 0 1 0-45.12-45.184z"></path>
            </svg>
        </div>
        <div class="page-title">Оставьте заявку и мы вам перезвоним</div>
        <div class="inputs-wrapper">
            <div class="inputs half">
                <input id="namesendmodal" type="text" placeholder=" ">
                <label>Имя</label>
            </div>
            <div class="inputs half">
                <input id="telsendmodal" type="tel" placeholder=" ">
                <label>Телефон</label>
            </div>
            <div class="inputs full">
                <input id="emailsendmodal" type="email" placeholder=" ">
                <label>Почта</label>
            </div>
            <div class="inputs btn-wrapper">
                <button id="sendmodal" class="btn btn-w-primary">Отправить</button>
            </div>
        </div>
    </div>
</div>
    </body>

</html>