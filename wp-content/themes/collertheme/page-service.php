<?php
get_header();
?>
<?php
/*
Template Name: Услуга
Template post type: post
*/
?>
<?php 

$data=GetOneService($post->post_content);
$text_arr=$data[1];
?>
	<div class="content">

<main class="service">
  <div class="page-title-wrapper second-container">
  <h1 class="page-title"><?php echo $post->post_title;?></h1>
  <a href="http://3d.ritualkomi.ru/" class="btn btn-y-secondary">Рассчитать стоимость в конструкторе</a>
</div>

  <div class="service_item second-container">
    <div class="service_item-top">
      <div class="service_item-img">
        <img <?php echo 'src="'.$data[0][0].'"';?>/>
      </div>
      <div class="service_item-descr">
        <?php 
        for($j=0;$j<count($text_arr);$j++){
          echo "<p>".$text_arr[$j]."</p>";
        ?>
        <?php 
        }
        ?>
      </div>
    </div>

    <div class="service_item-bottom">
      <div class="service_item-preferences">
        <div class="service_item-preferences-item">
          <div class="service_item-preferences-img">
            <img <?php echo 'src="'.get_template_directory_uri().'/assets/img/service/icon_calendar.svg'.'"';?> alt="Календарь">
          </div>
          <div class="service_item-preferences-text">
            Срок службы: <span class="underline">до 100 лет</span>
          </div>
        </div>
        <div class="service_item-preferences-item">
          <div class="service_item-preferences-img">
            <img <?php echo 'src="'.get_template_directory_uri().'/assets/img/service/icon_time.svg'.'"';?> alt="Календарь">
          </div>
          <div class="service_item-preferences-text">
            Срок изготовления: <span class="underline">от 1 до 30 дней</span>
          </div>
        </div>
      </div>
      <button id="order-serv" href="/" class="btn btn-y-primary">
        Заказать
      </button>
    </div>
  </div>
  <div class="main-slider second-slider service-slider">
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
<?php
get_footer();
?>