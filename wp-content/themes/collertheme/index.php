<?php
get_header();
?>
<?php
/*
Template Name: Главная
*/
?>
<div class="content">
    <main class="homepage">
        <div class="intro">
            <div class="intro-content-wrapper main-container">
                <h1 class="intro-title _anim-items downAnim ts-4">
                    <?php echo get_option("maintext1");?>
                </h1>
                <div class="intro-content">
                    <p class="intro-content-text _anim-items downAnim ts-4 td-2">
                        <?php echo get_option("maintext2");?>
                    </p>
                    <button class="btn modal-all btn-w-primary _anim-items downAnim ts-4 td-2">
                        Связаться
                    </button>
                </div>
            </div>
            <div class="intro-video _anim-items downAnim ts-4 td-4">
                <video <?php echo 'src="'.wp_get_attachment_url(get_theme_mod("mainvideo")).'"';?> loop="" autoplay="" muted="" playsinline="" width="100%" uk-cover=""></video>
            </div>
            <div class="intro-advantages main-flexBlock">
                <div class="main-flexBlock-content intro-advantages-content">
                    <h2 class="page-title _anim-items downAnim ts-4 td-2">
                        <?php echo get_option("mainimage1");?>
                    </h2>

                    <div class="intro-advantages-list">
                        <div class="intro-advantages-list-item _anim-items downAnim ts-4 td-3">
                            <div class="icon">
                                <img <?php echo 'srcset="'.get_theme_mod("mainimage1").'"';?> alt="1" loading="lazy"/>
                            </div>
                            <div class="intro-advantages-list-content">
                                <div class="intro-advantages-list-title">
                                    <?php echo get_option("maintext4");?>
                                </div>
                                <p class="intro-advantages-list-descr">
                                    <?php echo get_option("maintext5");?>
                                </p>
                            </div>
                        </div>
                        <div class="intro-advantages-list-item _anim-items downAnim ts-4 td-4">
                            <div class="icon">
                                <img <?php echo 'src="'.get_theme_mod("mainimage2").'"';?> loading="lazy"/>
                            </div>
                            <div class="intro-advantages-list-content">
                                <div class="intro-advantages-list-title">
                                    <?php echo get_option("maintext6");?>
                                </div>
                                <p class="intro-advantages-list-descr">
                                    <?php echo get_option("maintext7");?>
                                </p>
                            </div>
                        </div>
                        <div class="intro-advantages-list-item _anim-items downAnim ts-4 td-5">
                            <div class="icon">
                                <img <?php echo 'src="'.get_theme_mod("mainimage3").'"';?> alt="1" loading="lazy"/>
                            </div>
                            <div class="intro-advantages-list-content">
                                <div class="intro-advantages-list-title">
                                    <?php echo get_option("maintext8");?>
                                </div>
                                <p class="intro-advantages-list-descr">
                                <?php echo get_option("maintext9");?>
                                </p>
                            </div>
                        </div>
                        <div class="btn_wrapper _anim-items downAnim ts-4 td-6">
                            <button class="btn btn-w-primary modal-all">
                                Заказать памятник
                            </button>
                        </div>
                    </div>
                </div>
                <picture>
                    <source <?php echo 'srcset="'.get_theme_mod("mainimage4").'"';?> type="image/webp" />
                    <img class="main-flexBlock-img _anim-items downAnim ts-4 td-2" <?php echo 'src="'.get_theme_mod("mainimage5").'"';?> alt="Преимущества" loading="lazy"/>
                </picture>
            </div>
        </div>
        <div class="main-block">
            <h2 class="page-title main-container">
                <?php echo get_option("maintext10");?>
            </h2>
            <div class="main-slider">
                <div class="main-slider-header main-container">
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
                                <path
                                    d="M18.7778 14.3333L12.1111 21M12.1111 21L18.7778 27.6667M12.1111 21L29.8889 21M21 41C9.95422 41 0.999998 32.0458 0.999998 21C0.999998 9.95431 9.95422 1 21 1C32.0457 1 41 9.95431 41 21C41 32.0458 32.0457 41 21 41Z"
                                    stroke="white"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                />
                            </svg>
                        </div>
                        <div class="icon_right main-slider-icon js-slider-next">
                            <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M23.2222 27.6667L29.8889 21M29.8889 21L23.2222 14.3333M29.8889 21H12.1111M21 0.999998C32.0458 0.999998 41 9.95422 41 21C41 32.0457 32.0458 41 21 41C9.95431 41 1 32.0457 1 21C1 9.95422 9.95431 0.999998 21 0.999998Z"
                                    stroke="white"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                />
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
                                <img <?php echo 'src="'.$dat_all[$i].'"';?> loading="lazy"/>
                            </div>
                        <?php 
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="services main-block">
            <h2 class="page-title main-container _anim-items downAnim ts-4 td-2">
                Что мы производим
            </h2>
            <?php
                $data=GetServMain();
               // echo "<pre>";
               // print_r($data);
               // echo "</pre>";
            ?>
            <div class="services_wrapper main-container">
                <div class="services_list first">
                    <?php
                    for($i=0;$i<3;$i++){
                    ?>
                    <a <?php echo 'href="'.$data[$i][1].'"'?> class="services_list-item _anim-items downAnim ts-4 td-2">
                        <div class="img-wrapper">
                            <img <?php echo 'src="'.$data[$i][2].'"';?>loading="lazy"/>
                        </div>
                        <div class="text big_info">
                            <?php echo $data[$i][0];?>
                        </div>
                    </a>
                    <?php 
                    }
                    ?>
                </div>
                <div class="services_list second">
                    <?php
                    for($i=3;$i<count($data);$i++){
                    ?>
                    <a <?php echo 'href="'.$data[$i][1].'"'?> class="services_list-item _anim-items downAnim ts-4 td-5">
                        <div class="img-wrapper">
                            <img <?php echo 'src="'.$data[$i][2].'"';?>loading="lazy"/>
                        </div>
                        <div class="text big_info">
                            <?php echo $data[$i][0];?>
                        </div>
                    </a>
                    <?php 
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="promo__wrapper second-container">
            <div class="promo">
                <div class="promo__info">
                    <h3 class="promo-title">
                        <?php echo get_option("maintext13");?>
                    </h3>
                    <button class="modal-all btn btn-y-secondary">Заказать звонок</button>
                    <div class="promo__info-phones">
                        <div class="text">
                            Позвонить:
                        </div>
                        <a class="yellow-link" href="tel:+78212629962">+7 (821) 262-99-62</a>
                        <a class="yellow-link" href="tel:+79042704845">+7 (904) 270-48-45</a>
                    </div>
                </div>
                <div class="promo__img">
                    <picture>
                      <source <?php echo 'srcset="'.get_theme_mod("mainimage6").'"';?> type="image/webp" />
                      <img <?php echo 'src="'.get_theme_mod("mainimage7").'"';?> loading="lazy"/>
                    </picture>
                </div>
            </div>
        </div>
        <div class="info-wrapper">
            <div class="info main-flexBlock reverse">
                <div class="main-flexBlock-content info-content">
                    <h2 class="page-title _anim-items downAnim ts-6 td-2">
                        <?php echo get_option("maintext14");?>
                    </h2>
                    <div class="info__text">
                        <p class="text _anim-items downAnim ts-6 td-3">
                            <?php echo get_option("maintext15");?>
                        </p>
                        <p class="text _anim-items downAnim ts-6 td-4">
                            <?php echo get_option("maintext16");?>
                        </p>
                        <p class="text _anim-items downAnim ts-6 td-5">
                            <?php echo get_option("maintext17");?>
                        </p>
                        <p class="text _anim-items downAnim ts-6 td-6">
                            <?php echo get_option("maintext18");?>
                        </p>
                        <p class="text _anim-items downAnim ts-6 td-7">
                            <?php echo get_option("maintext19");?>
                        </p>
                        <div class="btn_wrapper _anim-items downAnim ts-6 td-8">
                            <button class="btn btn-y-secondary modal-all">
                                Заказать памятник
                            </button>
                        </div>
                    </div>
                </div>
                <picture>
                  <source <?php echo 'srcset="'.get_theme_mod("mainimage8").'"';?> type="image/webp" />
                  <img <?php echo 'src="'.get_theme_mod("mainimage9").'"';?>loading="lazy"/>
                </picture>
            </div>
            <div class="info main-flexBlock">
                <div class="main-flexBlock-content info-content">
                    <h2 class="page-title _anim-items downAnim ts-6 td-2">
                        <?php echo get_option("maintext20");?>
                    </h2>
                    <div class="info__text">
                        <p class="text _anim-items downAnim ts-6 td-3">
                            <?php echo get_option("maintext21");?>
                        </p>
                        <p class="text _anim-items downAnim ts-6 td-5">
                            <?php echo get_option("maintext22");?>
                        </p>
                        <p class="text _anim-items downAnim ts-6 td-7">
                            <?php echo get_option("maintext23");?>
                        </p>
                        <div class="btn_wrapper _anim-items downAnim ts-6 td-9">
                            <a href="http://3d.ritualkomi.ru/" class="btn btn-y-secondary">
                                Попробовать
                            </a>
                        </div>
                    </div>
                </div>
                <picture>
                  <source <?php echo 'srcset="'.get_theme_mod("mainimage10").'"';?> type="image/webp" />
                  <img <?php echo 'src="'.get_theme_mod("mainimage11").'"';?> loading="lazy"/>
                </picture>
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
