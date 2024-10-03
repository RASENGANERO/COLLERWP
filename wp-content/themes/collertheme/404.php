<?php
get_header();
?>

	<div class="content">

<main class="404">
	404
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
