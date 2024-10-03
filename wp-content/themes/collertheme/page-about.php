<?php
get_header();
?>
<?php
/*
Template Name: О нас
*/
?>
<div class="content">

<main class="about">
    <div class="page-title-wrapper second-container">
    <h1 class="page-title">
    О нас
    </h1>
</div>
    <div class="about_info second-container">
    <div class="about_info-wrapper main-flexBlock reverse">
        <div class="about_info_content">
            <div class="info__text">
                <p class="text">
                    Предприятие "Колер" начал свою деятельность в феврале 1989 года. Производством памятников и ритуальными принадлежностями занялся с 1993 года. Единственное в Эжвинском районе ритуальное предприятие с собственным производством. Предприятие “Колер” занимается в том числе и благотворительной деятельностью.
                </p>
                <p class="text">
                    Каждый человек заслуживает того, чтобы о нём помнили. Увековечьте память о своих близких с должным почтением. Пронесите светлую память о них сквозь время, делясь с окружающим миром горечью своей утраты.
                </p>
            </div>
        </div>
        <picture>
          <source <?php echo 'srcset="'.get_template_directory_uri().'/assets/img/about_page/main_info/about.webp'.'"';?> type="image/webp">
          <img class="main-flexBlock-img" <?php echo 'src="'.get_template_directory_uri().'/assets/img/about_page/main_info/about.png'.'"';?> alt="О нас">
        </picture>
    </div>
</div>
    <div class="production main-block second-container">
    <div class="production_title-wrapper">
        <h2 class="page-title">
            Производство
        </h2>
        <div class="production_header">
            <a href="/category/portfolio/" class="string-link production_header-link">
                <span class="text">
                    Смотреть все фото
                </span>
                <div class="icon">
                    <svg width="152" height="14" viewBox="0 0 152 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 7H151M151 7L142.176 1M151 7L142.176 13" stroke="#EABA42" stroke-linecap="round"/>
                    </svg>
                </div>
            </a>
        </div>
    </div>
    <?php
        $data=GetServMain();
    ?>
    <div class="production_list">
        <div class="production_list-wrapper" id="production-page-gallery">
            <?php
               // for($i=0;$i<count($data);$i++){
            ?>
                <!--<div class="production_list_item" <?php echo 'data-src="'.$data[$i][2].'"';?>>
                    <img <?php echo 'src="'.$data[$i][2].'"';?>>
                </div>-->
            <?php 
              //  }
            ?>
            <div class="production_list_item" <?php echo 'data-src="'.get_template_directory_uri().'/assets/img/about_page/production/1.png'.'"';?>>
                <picture>
                  <source <?php echo 'srcset="'.get_template_directory_uri().'/assets/img/about_page/production/1.png'.'"';?> type="image/webp">
                  <img <?php echo 'src="'.get_template_directory_uri().'/assets/img/about_page/production/1.png'.'"';?> alt="slide 1">
                </picture>
            </div>
            <div class="production_list_item" <?php echo 'data-src="'.get_template_directory_uri().'/assets/img/about_page/production/2.png'.'"';?>>
                <picture>
                  <source <?php echo 'srcset="'.get_template_directory_uri().'/assets/img/about_page/production/2.png'.'"';?> type="image/webp">
                  <img <?php echo 'src="'.get_template_directory_uri().'/assets/img/about_page/production/2.png'.'"';?> alt="slide 2">
                </picture>
            </div>
            <div class="production_list_item" <?php echo 'data-src="'.get_template_directory_uri().'/assets/img/about_page/production/3.png'.'"';?>>
                <picture>
                  <source <?php echo 'srcset="'.get_template_directory_uri().'/assets/img/about_page/production/3.png'.'"';?> type="image/webp">
                  <img <?php echo 'src="'.get_template_directory_uri().'/assets/img/about_page/production/3.png'.'"';?> alt="slide 1">
                </picture>
            </div>
            <div class="production_list_item" <?php echo 'data-src="'.get_template_directory_uri().'/assets/img/about_page/production/4.png'.'"';?>>
                <picture>
                  <source <?php echo 'srcset="'.get_template_directory_uri().'/assets/img/about_page/production/4.png'.'"';?> type="image/webp">
                  <img <?php echo 'src="'.get_template_directory_uri().'/assets/img/about_page/production/4.png'.'"';?> alt="slide 1">
                </picture>
            </div>
        </div>
    </div>
</div>
<div class="production main-block second-container">
  <div class="production_title-wrapper">
      <h2 class="page-title">
        Заказать памятник со скидкой
      </h2>
  </div>
  <form class="production_form" onsubmit="return false;">
    <div class="inputs half" style="padding: 0;">
      <input id="nameform" type="text" placeholder=" "/>
      <label>Имя</label>
    </div>
    <div class="inputs half" style="padding: 0;">
      <input id="telform" type="tel" placeholder=" "/>
      <label>Телефон</label>
    </div>
    <button id="sendform" class="btn btn-y-secondary">Позвоните мне</button>
  </form>
</div>


<div class="main-block">
  <h2 class="page-title second-container">
    Отзывы
  </h2>
  <?php
  $comm=GetComments();
  ?>
  <div class="main-slider comments-slider second-slider service-slider" style="margin-top: 0;">
    <div class="main-slider-header second-container" style="justify-content: flex-end;">
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
    <div class="js-comments-page-slider swiper swiper-container slider-container swiper-initialized swiper-horizontal swiper-backface-hidden">
      <div class="swiper-wrapper" >
        <?php
        for($i=0;$i<count($comm);$i++){
        ?>
        <div class="swiper-slide">
          <div class="comment">
            <div class="comment-top">
              <div class="name">
              <?php echo $comm[$i]->comment_author;?>
              </div>
              <div class="date">
                <?php echo date('d.m.Y',strtotime($comm[$i]->comment_date))?>
              </div>
            </div>
            <div class="comment-bottom">
              <?php echo $comm[$i]->comment_content;?>
            </div>
          </div>
        </div>
        
        <?php
        }
        ?>
      </div>
    </div>
  </div>
  <div class="second-container" style="margin-top: 0; padding-top: 0; display: flex; justify-content: end;">
    <div class="btn comments-btn btn-y-primary js-comments-modal-handler">
      Оставить отзыв
    </div>
  </div>
</div>

<div class="modal js-comments-modal">
  <div class="modal-overlay js-comments-modal-handler">
  </div>
  <div class="modal-body">
    <div class="close-icon js-comments-modal-handler">
      <svg width="30px" height="30px" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg">
        <path fill="#fff" d="M764.288 214.592 512 466.88 259.712 214.592a31.936 31.936 0 0 0-45.12 45.12L466.752 512 214.528 764.224a31.936 31.936 0 1 0 45.12 45.184L512 557.184l252.288 252.288a31.936 31.936 0 0 0 45.12-45.12L557.12 512.064l252.288-252.352a31.936 31.936 0 1 0-45.12-45.184z"/>
      </svg>
    </div>
    <div class="page-title">Оставить отзыв</div>
    <div class="inputs-wrapper">
      <div class="inputs half">
        <input id="namecomment" type="text" placeholder=" "/>
        <label>Имя</label>
      </div>
      <div class="inputs textarea half">
        <textarea id="textcomment" placeholder=" "></textarea>
        <label>Что вы хотите рассказать?</label>
      </div>
      <div class="inputs btn-wrapper">
        <button id="send-comment" class="btn btn-w-primary">Отправить</button>
      </div>
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