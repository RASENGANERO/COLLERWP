<div class="content">

<main class="services">
	<div class="page-title-wrapper second-container">
  <h1 class="page-title">Услуги</h1>
  <a href="http://3d.ritualkomi.ru/" class="btn btn-y-secondary">Рассчитать стоимость в конструкторе</a>
</div>
	<div class="second-container services_list">
    <?php
        //$parts=array(0=>3,1=>2,2=>2,3=>3,4=>1);
        $data=GetServicesAll();
        for($i=0;$i<count($data);$i++){
    ?>

        <div class="services_list_item">
			<div class="services_list_item-img _anim-items downAnim ts-4 td-2">
				<img <?php echo 'src="'.$data[$i][1][0].'"';?> alt="Гранит">
			</div>
			<div class="services_list_item-descr _anim-items downAnim ts-4 td-4">
				<h3>
                    <?php echo $data[$i][0];?>
				</h3>
                <?php
                 $dt_text=$data[$i][2];
                 for ($j=0;$j<count($dt_text);$j++){
                    echo '<p>'.$dt_text[$j].'</p>';   
                 }
                ?>
				<a <?php echo 'href="'.$data[$i][3].'"';?> class="btn btn-y-primary">
					Подробнее
				</a>
			</div>
		</div>
    <?php 
    }
    ?>
		<!--<div class="services_list_item">
			<div class="services_list_item-img _anim-items downAnim ts-4 td-2">
				<picture>
					<source <?php echo 'srcset="'.get_template_directory_uri().'/assets/img/services_page/granit.webp'.'"';?> type="image/webp">
					<img <?php echo 'src="'.get_template_directory_uri().'/assets/img/services_page/granit.png'.'"';?> alt="Гранит">
				</picture>
			</div>
			<div class="services_list_item-descr _anim-items downAnim ts-4 td-4">
				<h3>
					Гранитные надгробия
				</h3>
				<p>
					Если вы слышали словосочетание «вечный камень», то речь идет о граните.
				</p>
				<p>
					Гранит – один из самых долговечных минералов в мире, на многие столетия сохранит прекрасный внешний вид надгробия, а вместе ним и светлую память о близком человеке. 
				</p>
				<p>
					Самой отличительной характеристикой гранита является его прочность и долговечность, первые признаки разрушения гранит начинает подавать примерно через 400-600 лет.
				</p>

				<a href="/" class="btn btn-y-primary">
					Подробнее
				</a>
			</div>
		</div>
		<div class="services_list_item">
			<div class="services_list_item-img _anim-items downAnim ts-4 td-2">
				<picture>
					<source <?php echo 'srcset="'.get_template_directory_uri().'/assets/img/services_page/mramor.webp'.'"';?> type="image/webp">
					<img <?php echo 'src="'.get_template_directory_uri().'/assets/img/services_page/mramor.png'.'"';?> alt="Мрамор">
				</picture>
			</div>
			<div class="services_list_item-descr _anim-items downAnim ts-4 td-4">
				<h3>
					Мраморные надгробия
				</h3>
				<p>
					Слово «мрамор» произошло от греческого слова « Marmaros» и означает белый блестящий камень.
				</p>
				<p>
					Предприятие "Колер" обладает большим опытом в изготовлении мраморных надгробий. Благодаря свойствам материала и удобству обработки, мрамор пластичен и позволяет высекать изделия самой различной формы и цвета, в зависимости от ваших пожеланий. Мраморное надгробие долговечно, поражает своей красотой и изяществом, и призвано достойно увековечит память о покойном человеке. Изготовленное из мрамора надгробие не потеряет вид с годами, придаст благородства месту вечной грусти, символизируя неугасимый огонь в сердцах тех, кто помнит, любит и скорбит.
				</p>
				<a href="/" class="btn btn-y-primary">
					Подробнее
				</a>
			</div>
		</div>
		<div class="services_list_item">
			<div class="services_list_item-img _anim-items downAnim ts-4 td-2">
				<picture>
					<source <?php echo 'srcset="'.get_template_directory_uri().'/assets/img/services_page/kamnerez.webp'.'"';?> type="image/webp">
					<img <?php echo 'src="'.get_template_directory_uri().'/assets/img/services_page/kamnerez.png'.'"';?> alt="Гранит">
				</picture>
			</div>
			<div class="services_list_item-descr _anim-items downAnim ts-4 td-4">
				<h3>
					Камнерезные работы
				</h3>
				<p>
					Предприятие «Колер» производит резьбу по камню на заказ.
				</p>
				<p>
					Камнерезные работы – это целое искусство. Вы можете установить в честь покойного памятник, скульптуру или мемориальную доску, которые сквозь века будут нести светлую память об усопшем. Камнерезное мастерство – очень кропотливый труд, требующий таланта и опыта. Скульпторы осуществят вашу идею, учтут все ваши пожелания, создадут изящный и красивый памятник в память усопшему.
					Вы сможете выбрать материал (камень), заказать памятник
					из предложенных вариантов или рассказать о своей идее
					и воплотить ее в жизнь.
				</p>

				<a href="/" class="btn btn-y-primary">
					Подробнее
				</a>
			</div>
		</div>
		<div class="services_list_item">
			<div class="services_list_item-img _anim-items downAnim ts-4 td-2">
				<picture>
					<source <?php echo 'srcset="'.get_template_directory_uri().'/assets/img/services_page/gravirovka.webp'.'"';?> type="image/webp">
					<img <?php echo 'src="'.get_template_directory_uri().'/assets/img/services_page/gravirovka.png'.'"';?> alt="Гранит">
				</picture>
			</div>
			<div class="services_list_item-descr _anim-items downAnim ts-4 td-4">
				<h3>
					Гравировка по камню
				</h3>
				<p>
					Мастера производственного кооператива «Колер» обладают талантом, подкрепленным опытом, в гравировке по камню.
				</p>
				<p>
					Вы сможете заказать гравировку, и художники разместят имя, фамилию, отчество, дату рождения, смерти, а также фотографию на могильное надгробие для усопшего.
				</p>
				<p>
					Помимо того, что это необходимо, гравировка выглядит очень красиво и достойно, изящно и практично, вы сможете выбрать из массы вариаций шрифта и дизайна для индивидуальной гравировки.
				</p>

				<a href="/" class="btn btn-y-primary">
					Подробнее
				</a>
			</div>
		</div>
		<div class="services_list_item">
			<div class="services_list_item-img _anim-items downAnim ts-4 td-2">
				<picture>
					<source <?php echo 'srcset="'.get_template_directory_uri().'/assets/img/services_page/photokeramika.webp'.'"';?> type="image/webp">
					<img <?php echo 'src="'.get_template_directory_uri().'/assets/img/services_page/photokeramika.png'.'"';?> alt="Фотокерамика">
				</picture>
			</div>
			<div class="services_list_item-descr _anim-items downAnim ts-4 td-4">
				<h3>
					Фотокерамика
				</h3>
				<p>
					Предприятие «Колер» обладает опытом и необходимым оборудованием для выполнения фотокерамики на могильном надгробии. Мастера применяют свой талант на деле и отвечают за производимую ими продукцию, фото будет перенесено точь в точь, а все ваши пожелания будут учтены. Вы сможете выбрать форму, определить цвета, либо просто отдать фотографию как есть и получить идентичный вариант фотокерамического портрета.
				</p>
				<a href="/" class="btn btn-y-primary">
					Подробнее
				</a>
			</div>
		</div>-->
	</div>
	<div class="second-container services_installation">
		<h2 id="install-smooth" class="page-title">
			Установка и благоустройство
		</h2>

		<div class="services_installation-text">
			<p>
				Мы создаем прекрасные и величественные мемориальные комплексы и памятники, которые выражают особое отношение к памяти о вашем усопшем близком человеке. Наша команда специалистов разработает для вас уникальный проект ритуального комплекса и полностью осуществит его производство «под ключ».
			</p>
			<p>
				В наших выставочных залах мастерской вы найдете огромное количество уже готовых памятников. У нас всегда более 300 экземпляров на обширной выставке в Сыктывкаре на Сысольком шоссе, 1/3, и более 100 на Ленина, 48. Вы можете приобрести готовый памятник или заказать уникальный по вашему вкусу. Наше производство обладает всеми необходимыми возможностями для воплощения любых ваших пожеланий.
			</p>
			<p>
				Уход за могилами близких является проявлением уважения их памяти. Климат, месторасположение, состояние почвы и другие факторы могут негативно повлиять на состояние места захоронения. Поэтому лучше всего доверить работы по благоустройству профессионалам.
			</p>
			<p>
				Наша команда специалистов компании Камнеобработчик учтет ваши предпочтения и финансовые возможности, подберет необходимые материалы, а опытная бригада рабочих выполнит все необходимые работы по благоустройству на кладбищах Сыктывкара и соседних районов. Мы предлагаем широкий спектр услуг, включая установку оград, цветников, столиков и скамеек, а также укладку брусчатки.
			</p>
		</div>
	</div>
	<div class="main-slider second-slider">
		<div class="main-slider-header second-container">
			<a href="/category/portfolio/" class="string-link">
        		<span class="text">
          			<?php echo get_option("maintext11");?>
        		</span>
        	<div class="icon">
          		<svg width="152" height="14" viewBox="0 0 152 14" fill="none" xmlns="http://www.w3.org/2000/svg">
            		<path d="M1 7H151M151 7L142.176 1M151 7L142.176 13" stroke="#EABA42" stroke-linecap="round" />
          		</svg>
        	</div>
      		</a>
			<div class="main-slider-icons">
				<div class="icon_left main-slider-icon js-slider-prev">
					<svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M18.7778 14.3333L12.1111 21M12.1111 21L18.7778 27.6667M12.1111 21L29.8889 21M21 41C9.95422 41 0.999998 32.0458 0.999998 21C0.999998 9.95431 9.95422 1 21 1C32.0457 1 41 9.95431 41 21C41 32.0458 32.0457 41 21 41Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
					</svg>
				</div>
				<div class="icon_right main-slider-icon js-slider-next">
					<svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M23.2222 27.6667L29.8889 21M29.8889 21L23.2222 14.3333M29.8889 21H12.1111M21 0.999998C32.0458 0.999998 41 9.95422 41 21C41 32.0457 32.0458 41 21 41C9.95431 41 1 32.0457 1 21C1 9.95422 9.95431 0.999998 21 0.999998Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
					</svg>
				</div>
			</div>
		</div>
		<div class="swiper swiper-container js-index-page-slider slider-container">
      		<div class="swiper-wrapper" id="main-page-gallery">
        		<?php
          		$dat_all=GetWorksAll();
          		for ($i=0;$i<count($dat_all);$i++){
        		?>
          		<div class="swiper-slide" <?php echo 'data-src="'.$dat_all[$i].'"';?>>
            		<img <?php echo 'src="'.$dat_all[$i].'"';?>/>
          		</div>
        	<?php 
          	}
        	?>
      		</div>
    	</div>
	</div>
</main>

	</div>
	<div class="contacts-wrapper main-container content">
	<div class="contacts">
        <div class="contacts_head">
            <div class="page-title">
                Контакты
            </div>
            <div class="tabs-container contacs-head-tabs">
                <?php
                $arraycontacts=GetPostsContacts();
                $k=0;
                for($i=0;$i<count($arraycontacts);$i++){
                    $k+=1;
                    if ($i==0){
                        echo '<div id="tab'.$k.'" class="js-contacts-tab btn tab-btn active">'.$arraycontacts[$i][4].'</div>';
                    }
                    else{
                        echo '<div id="tab'.$k.'" class="js-contacts-tab btn tab-btn">'.$arraycontacts[$i][4].'</div>';
                    }
                }
                ?>
            </div>
        </div>
        <div class="contacts_content">
            <?php
                $k=0;
                for($i=0;$i<count($arraycontacts);$i++){
                    $k+=1;
                    if ($i==0){
                        echo '<div id="tab'.$k.'-content" class="js-contacts-tab-content tab-content contacts-tab-content active">';
                    }
                    else{
                        echo '<div id="tab'.$k.'-content" class="js-contacts-tab-content tab-content contacts-tab-content">';
                    }
                ?>
                <div class="contacts-info">
                    <div class="contacts-info-item contacts-info-phone">
                    <a <?php echo 'href="tel:'.NumberNormalizeContactPost($arraycontacts[$i][0]).'"';?>><?php echo $arraycontacts[$i][0];?></a> - <span class="text"><?php echo $arraycontacts[$i][1];?></span>
                    </div>
                    <div class="contacts-info-item contacts-info-phone">
                        <a <?php echo 'href="tel:'.NumberNormalizeContactPost($arraycontacts[$i][2]).'"';?>><?php echo $arraycontacts[$i][2];?></a> - <span class="text"><?php echo $arraycontacts[$i][3];?></span>
                    </div>

                    <div class="contacts-info-operating">
                        <h3 class="contacts-info-operating-title">
                            Режим работы:
                        </h3>
                        <div class="contacts-info-operating-item">
                            <div class="contacts-info-operating-days">
                                <?php echo get_option("contactstext1");?>
                            </div>
                            <div class="contacts-info-operating-time">
                                <?php echo get_option("contactstext2");?>
                            </div>
                        </div>
                        <div class="contacts-info-operating-item">
                            <div class="contacts-info-operating-days">
                                <?php echo get_option("contactstext3");?>
                            </div>
                            <div class="contacts-info-operating-time">
                                <?php echo get_option("contactstext4");?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contacts-card">
                    <iframe <?php echo 'src="'.$arraycontacts[$i][5].'"';?> width="100%" height="600" frameborder="0"></iframe>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>

</div>