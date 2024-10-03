<?php
$category_all='';
if($category_current->parent>0){
  $category_all =GenerateChildsCat($category_current->parent);
}
else{
  $category_all =GenerateChildsCat($category_current->cat_ID);
}
?>

<div class="content">

<div class="catalog">
  <div class="page-title-wrapper second-container">
  <h1 class="page-title">Каталог</h1>
  <a href="http://3d.ritualkomi.ru/" class="btn btn-y-secondary">Рассчитать стоимость в конструкторе</a>
</div>

  <div class="rubricator second-container">
    <?php
    for ($i=0;$i<count($category_all);$i++){
        if($category_all[$i][0]==$category_current->name){
            echo '<a href="'.$category_all[$i][1].'" class="rubricator-item js-active">'.$category_all[$i][0].'</a>';
        }
        else{
            echo '<a href="'.$category_all[$i][1].'" class="rubricator-item">'.$category_all[$i][0].'</a>';
        }
    }
    ?>
  </div>
  <div class="catalog-list second-container">
  <?php if ( have_posts() ) : ?>


    <?php
    while ( have_posts() ) : the_post();
    ?>
        <?php
        $data=GetProductsAll(get_the_content());
        ?>
        <a class="catalog-item" href="<?php the_permalink() ?>">
            <div class="catalog-item-img">
                <img <?php echo $data[0];?> alt="Granit">
            </div>
            <div class="catalog-item-descr">
                <div class="catalog-item-name">
                <?php the_title(); ?>
                </div>
                <!--<div class="catalog-item-price">
                    <span class="price-count"><?php echo get_field('price');?></span>
                    <span class="price-currency">₽</span>
                </div>-->
            </div>
        </a>
    <?php endwhile;?>
        <?php else: ?>
            <p>Sorry, no posts matched your criteria.</p>
    <?php endif; ?>
  </div>
</div>
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