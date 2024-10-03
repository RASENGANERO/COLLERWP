<?php
require __DIR__ . '/menufunctions/menu_header.php';
require __DIR__ . '/menufunctions/menu_footer.php';
function coller_scripts(){
    
    wp_enqueue_style('newcss',get_template_directory_uri().'/assets/css/mystyle.css');
    wp_enqueue_style('stylecss',get_template_directory_uri().'/assets/css/style.css');
    
    wp_enqueue_style('stylelight','https://cdn.jsdelivr.net/npm/lightgallery@2.7.2/css/lightgallery-bundle.min.css');
    wp_enqueue_script('mainjs',get_template_directory_uri().'/assets/js/app.js');
    wp_enqueue_script('mainmyjs',get_template_directory_uri().'/assets/js/main.js');
    wp_register_style('fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap', false, null);
	wp_enqueue_style('fonts');
}
add_action( 'wp_enqueue_scripts','coller_scripts');
add_theme_support('post-thumbnails');

add_action('after_setup_theme',function(){
    register_nav_menus( [
		'header_menu' => 'Верхнее меню',
		'footer_menu_1' => 'Нижнее меню 1',
        'footer_menu_2' => 'Нижнее меню 2',
        'footer_menu_3' => 'Нижнее меню 3',
        'footer_menu_4' => 'Нижнее меню 4',
	] );
}
);



//ФУНКЦИИ ДЛЯ РАЗРЕШЕНИЯ SVG
add_filter( 'upload_mimes', 'svg_upload_allow' );
add_filter( 'wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5 );
# Добавляет SVG в список разрешенных для загрузки файлов.
function svg_upload_allow( $mimes ) {
	$mimes['svg']  = 'image/svg+xml';
	return $mimes;
}
# Исправление MIME типа для SVG файлов.
function fix_svg_mime_type( $data, $file, $filename, $mimes, $real_mime = '' ){
	if( version_compare( $GLOBALS['wp_version'], '5.1.0', '>=' ) )
		$dosvg = in_array( $real_mime, [ 'image/svg', 'image/svg+xml' ] );
	else
		$dosvg = ( '.svg' === strtolower( substr($filename, -4) ) );
	if( $dosvg ){// mime тип был обнулен, поправим его а также проверим право пользователя
		// разрешим
		if( current_user_can('manage_options') ){

			$data['ext']  = 'svg';
			$data['type'] = 'image/svg+xml';
		}
		// запретим
		else {
			$data['ext'] = $type_and_ext['type'] = false;// запретим
		}
	}
	return $data;
}

function mytheme_customize_register( $wp_customize ) {

    /*
    Добавление элементов кастомизации на главной странице
    */
    
    $wp_customize->add_section(
        'main_section',// ID
        array(
            'title' => 'Главная страница',
            'capability' => 'edit_theme_options',
            'description' => "Данные главной страницы"
        )
    );
    $wp_customize->add_setting( 'coller_logo', array(
		'default' => get_template_directory_uri().'/assets/img/logo.svg', // Add Default Image URL 
		'sanitize_callback' => 'esc_url_raw'
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'coller_logo_control', array(
		'label' => 'Установить лого',
		'section' => 'main_section',
		'settings' => 'coller_logo',
		'button_labels' => array(// All These labels are optional
					'select' => 'Выбрать логотип',
					'remove' => 'Удалить логотип',
					'change' => 'Изменить логотип',
					)
    )));

    
    $wp_customize->add_setting(
        'maintext1',
        array(
            'default' => '',
            'type' => 'option',
            'transport'=>'refresh'
        )
    );
    $wp_customize->add_control(
        'maintext1_control',
        array(
            'type' => 'text',
            'label' => "Текст 1",
            'section' => 'main_section',
            'settings' => 'maintext1'
        )
    );
    $wp_customize->add_setting(
        'maintext2',
        array(
            'default' => '',
            'type' => 'option',
            'transport'=>'refresh'
        )
    );
    $wp_customize->add_control(
        'maintext2_control',
        array(
            'type' => 'text',
            'label' => "Текст 2",
            'section' => 'main_section',
            'settings' => 'maintext2'
        )
    );
  
    $wp_customize->add_setting( 'mainvideo',
        array(
            'default' => '',
            'transport' => 'refresh',
        )
    );
    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'mainvideo_control',
        array(
            'label' => 'Видео',
            'section' => 'main_section',
            'settings' => 'mainvideo',
            'mime_type' => 'video',  // Required. Can be image, audio, video, application, text
            'button_labels' => array(
                'select' =>'Выбрать файл',
                'change' => 'Изменить файл',
                'remove' =>'Удалить файл',
            )
        )
    ));

    $wp_customize->add_setting(
        'maintext3',
        array(
            'default' => '',
            'type' => 'option',
            'transport'=>'refresh'
        )
    );
    $wp_customize->add_control(
        'maintext3_control',
        array(
            'type' => 'text',
            'label' => "Текст 3",
            'section' => 'main_section',
            'settings' => 'maintext3'
        )
    );


    $wp_customize->add_setting( 'mainimage1', array(
		'default' => get_template_directory_uri().'/assets/img/advantages/profi.svg', 
		'sanitize_callback' => 'esc_url_raw'
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'mainimage1_control', array(
		'label' => 'Картинка 1',
		'section' => 'main_section',
		'settings' => 'mainimage1',
		'button_labels' => array(
					'select' => 'Выбрать картинку',
					'remove' => 'Удалить картинку',
					'change' => 'Изменить картинку',
					)
    )));

    $wp_customize->add_setting(
        'maintext4',
        array(
            'default' => '',
            'type' => 'option',
            'transport'=>'refresh'
        )
    );
    $wp_customize->add_control(
        'maintext4_control',
        array(
            'type' => 'text',
            'label' => "Текст 4",
            'section' => 'main_section',
            'settings' => 'maintext4'
        )
    );
    $wp_customize->add_setting(
        'maintext5',
        array(
            'default' => '',
            'type' => 'option',
            'transport'=>'refresh'
        )
    );
    $wp_customize->add_control(
        'maintext5_control',
        array(
            'type' => 'text',
            'label' => "Текст 5",
            'section' => 'main_section',
            'settings' => 'maintext5'
        )
    );
    $wp_customize->add_setting( 'mainimage2', array(
		'default' => get_template_directory_uri().'/assets/img/advantages/materials.svg', 
		'sanitize_callback' => 'esc_url_raw'
    ));
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'mainimage2_control', array(
		'label' => 'Картинка 2',
		'section' => 'main_section',
		'settings' => 'mainimage2',
		'button_labels' => array(
					'select' => 'Выбрать картинку',
					'remove' => 'Удалить картинку',
					'change' => 'Изменить картинку',
					)
    )));
    $wp_customize->add_setting(
        'maintext6',
        array(
            'default' => '',
            'type' => 'option',
            'transport'=>'refresh'
        )
    );
    $wp_customize->add_control(
        'maintext6_control',
        array(
            'type' => 'text',
            'label' => "Текст 6",
            'section' => 'main_section',
            'settings' => 'maintext6'
        )
    );
    $wp_customize->add_setting(
        'maintext7',
        array(
            'default' => '',
            'type' => 'option',
            'transport'=>'refresh'
        )
    );
    $wp_customize->add_control(
        'maintext7_control',
        array(
            'type' => 'text',
            'label' => "Текст 7",
            'section' => 'main_section',
            'settings' => 'maintext7'
        )
    );
    $wp_customize->add_setting( 'mainimage3', array(
		'default' => get_template_directory_uri().'/assets/img/advantages/price.svg', 
		'sanitize_callback' => 'esc_url_raw'
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'mainimage3_control', array(
		'label' => 'Картинка 3',
		'section' => 'main_section',
		'settings' => 'mainimage3',
		'button_labels' => array(
					'select' => 'Выбрать картинку',
					'remove' => 'Удалить картинку',
					'change' => 'Изменить картинку',
					)
    )));

    $wp_customize->add_setting(
        'maintext8',
        array(
            'default' => '',
            'type' => 'option',
            'transport'=>'refresh'
        )
    );
    $wp_customize->add_control(
        'maintext8_control',
        array(
            'type' => 'text',
            'label' => "Текст 8",
            'section' => 'main_section',
            'settings' => 'maintext8'
        )
    );
    $wp_customize->add_setting(
        'maintext9',
        array(
            'default' => '',
            'type' => 'option',
            'transport'=>'refresh'
        )
    );
    $wp_customize->add_control(
        'maintext9_control',
        array(
            'type' => 'text',
            'label' => "Текст 9",
            'section' => 'main_section',
            'settings' => 'maintext9'
        )
    );
    $wp_customize->add_setting( 'mainimage4', array(
		'default' => get_template_directory_uri().'/assets/img/advantages/advantages.webp', 
		'sanitize_callback' => 'esc_url_raw'
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'mainimage4_control', array(
		'label' => 'Картинка 4',
		'section' => 'main_section',
		'settings' => 'mainimage4',
		'button_labels' => array(
					'select' => 'Выбрать картинку',
					'remove' => 'Удалить картинку',
					'change' => 'Изменить картинку',
					)
    )));
    $wp_customize->add_setting( 'mainimage5', array(
		'default' => get_template_directory_uri().'/assets/img/advantages/advantages.png', 
		'sanitize_callback' => 'esc_url_raw'
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'mainimage5_control', array(
		'label' => 'Картинка 5',
		'section' => 'main_section',
		'settings' => 'mainimage5',
		'button_labels' => array(
					'select' => 'Выбрать картинку',
					'remove' => 'Удалить картинку',
					'change' => 'Изменить картинку',
					)
    )));
    $wp_customize->add_setting(
        'maintext10',
        array(
            'default' => '',
            'type' => 'option',
            'transport'=>'refresh'
        )
    );

    $wp_customize->add_control(
        'maintext10_control',
        array(
            'type' => 'text',
            'label' => "Текст 10",
            'section' => 'main_section',
            'settings' => 'maintext10'
        )
    );
    $wp_customize->add_setting(
        'maintext11',
        array(
            'default' => '',
            'type' => 'option',
            'transport'=>'refresh'
        )
    );
    $wp_customize->add_control(
        'maintext11_control',
        array(
            'type' => 'text',
            'label' => "Текст 11",
            'section' => 'main_section',
            'settings' => 'maintext11'
        )
    );
    $wp_customize->add_setting(
        'maintext12',
        array(
            'default' => '',
            'type' => 'option',
            'transport'=>'refresh'
        )
    );
    $wp_customize->add_control(
        'maintext12_control',
        array(
            'type' => 'text',
            'label' => "Текст 12",
            'section' => 'main_section',
            'settings' => 'maintext12'
        )
    );
    $wp_customize->add_setting(
        'maintext13',
        array(
            'default' => '',
            'type' => 'option',
            'transport'=>'refresh'
        )
    );
    $wp_customize->add_control(
        'maintext13_control',
        array(
            'type' => 'text',
            'label' => "Текст 13",
            'section' => 'main_section',
            'settings' => 'maintext13'
        )
    );


    $wp_customize->add_setting( 'mainimage6', array(
		'default' => get_template_directory_uri().'/assets/img/promo/1.webp', 
		'sanitize_callback' => 'esc_url_raw'
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'mainimage6_control', array(
		'label' => 'Картинка 6',
		'section' => 'main_section',
		'settings' => 'mainimage6',
		'button_labels' => array(
					'select' => 'Выбрать картинку',
					'remove' => 'Удалить картинку',
					'change' => 'Изменить картинку',
					)
    )));
    $wp_customize->add_setting( 'mainimage7', array(
		'default' => get_template_directory_uri().'/assets/img/promo/1.png', 
		'sanitize_callback' => 'esc_url_raw'
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'mainimage7_control', array(
		'label' => 'Картинка 7',
		'section' => 'main_section',
		'settings' => 'mainimage7',
		'button_labels' => array(
					'select' => 'Выбрать картинку',
					'remove' => 'Удалить картинку',
					'change' => 'Изменить картинку',
					)
    )));
    $wp_customize->add_setting( 'mainimage8', array(
		'default' => get_template_directory_uri().'/assets/img/info/1.webp', 
		'sanitize_callback' => 'esc_url_raw'
    ));
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'mainimage8_control', array(
		'label' => 'Картинка 8',
		'section' => 'main_section',
		'settings' => 'mainimage8',
		'button_labels' => array(
					'select' => 'Выбрать картинку',
					'remove' => 'Удалить картинку',
					'change' => 'Изменить картинку',
					)
    )));
    $wp_customize->add_setting( 'mainimage9', array(
		'default' => get_template_directory_uri().'/assets/img/info/1.png', 
		'sanitize_callback' => 'esc_url_raw'
    ));
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'mainimage9_control', array(
		'label' => 'Картинка 9',
		'section' => 'main_section',
		'settings' => 'mainimage9',
		'button_labels' => array(
					'select' => 'Выбрать картинку',
					'remove' => 'Удалить картинку',
					'change' => 'Изменить картинку',
					)
    )));
    $wp_customize->add_setting(
        'maintext14',
        array(
            'default' => '',
            'type' => 'option',
            'transport'=>'refresh'
        )
    );
    $wp_customize->add_control(
        'maintext14_control',
        array(
            'type' => 'text',
            'label' => "Текст 14",
            'section' => 'main_section',
            'settings' => 'maintext14'
        )
    );
    $wp_customize->add_setting(
        'maintext15',
        array(
            'default' => '',
            'type' => 'option',
            'transport'=>'refresh'
        )
    );
    $wp_customize->add_control(
        'maintext15_control',
        array(
            'type' => 'text',
            'label' => "Текст 15",
            'section' => 'main_section',
            'settings' => 'maintext15'
        )
    );
    $wp_customize->add_setting(
        'maintext16',
        array(
            'default' => '',
            'type' => 'option',
            'transport'=>'refresh'
        )
    );
    $wp_customize->add_control(
        'maintext16_control',
        array(
            'type' => 'text',
            'label' => "Текст 16",
            'section' => 'main_section',
            'settings' => 'maintext16'
        )
    );
    $wp_customize->add_setting(
        'maintext17',
        array(
            'default' => '',
            'type' => 'option',
            'transport'=>'refresh'
        )
    );
    $wp_customize->add_control(
        'maintext17_control',
        array(
            'type' => 'text',
            'label' => "Текст 17",
            'section' => 'main_section',
            'settings' => 'maintext17'
        )
    );
    $wp_customize->add_setting(
        'maintext18',
        array(
            'default' => '',
            'type' => 'option',
            'transport'=>'refresh'
        )
    );
    $wp_customize->add_control(
        'maintext18_control',
        array(
            'type' => 'text',
            'label' => "Текст 18",
            'section' => 'main_section',
            'settings' => 'maintext18'
        )
    );
    $wp_customize->add_setting(
        'maintext19',
        array(
            'default' => '',
            'type' => 'option',
            'transport'=>'refresh'
        )
    );
    $wp_customize->add_control(
        'maintext19_control',
        array(
            'type' => 'text',
            'label' => "Текст 19",
            'section' => 'main_section',
            'settings' => 'maintext19'
        )
    );
    $wp_customize->add_setting(
        'maintext20',
        array(
            'default' => '',
            'type' => 'option',
            'transport'=>'refresh'
        )
    );
    $wp_customize->add_control(
        'maintext20_control',
        array(
            'type' => 'text',
            'label' => "Текст 20",
            'section' => 'main_section',
            'settings' => 'maintext20'
        )
    );
    $wp_customize->add_setting(
        'maintext21',
        array(
            'default' => '',
            'type' => 'option',
            'transport'=>'refresh'
        )
    );
    $wp_customize->add_control(
        'maintext21_control',
        array(
            'type' => 'text',
            'label' => "Текст 21",
            'section' => 'main_section',
            'settings' => 'maintext21'
        )
    );
    $wp_customize->add_setting(
        'maintext22',
        array(
            'default' => '',
            'type' => 'option',
            'transport'=>'refresh'
        )
    );
    $wp_customize->add_control(
        'maintext22_control',
        array(
            'type' => 'text',
            'label' => "Текст 22",
            'section' => 'main_section',
            'settings' => 'maintext22'
        )
    );
    $wp_customize->add_setting(
        'maintext23',
        array(
            'default' => '',
            'type' => 'option',
            'transport'=>'refresh'
        )
    );
    $wp_customize->add_control(
        'maintext23_control',
        array(
            'type' => 'text',
            'label' => "Текст 23",
            'section' => 'main_section',
            'settings' => 'maintext23'
        )
    );
    
    $wp_customize->add_setting( 'mainimage10', array(
		'default' => get_template_directory_uri().'/assets/img/info/2.webp', 
		'sanitize_callback' => 'esc_url_raw'
    ));
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'mainimage10_control', array(
		'label' => 'Картинка 10',
		'section' => 'main_section',
		'settings' => 'mainimage10',
		'button_labels' => array(
					'select' => 'Выбрать картинку',
					'remove' => 'Удалить картинку',
					'change' => 'Изменить картинку',
					)
    )));
    $wp_customize->add_setting( 'mainimage11', array(
		'default' => get_template_directory_uri().'/assets/img/info/2.png', 
		'sanitize_callback' => 'esc_url_raw'
    ));
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'mainimage11_control', array(
		'label' => 'Картинка 11',
		'section' => 'main_section',
		'settings' => 'mainimage11',
		'button_labels' => array(
					'select' => 'Выбрать картинку',
					'remove' => 'Удалить картинку',
					'change' => 'Изменить картинку',
					)
    )));
    /*
    Конец кастомизации главной страницы
    */
    $wp_customize->add_section(
        'contacts_section',// ID
        array(
            'title' => 'Контакты',
            'capability' => 'edit_theme_options',
            'description' => "Данные блока контакты"
        )
    );
    $wp_customize->add_setting(
        'contactstext1',
        array(
            'default' => '',
            'type' => 'option',
            'transport'=>'refresh'
        )
    );
    $wp_customize->add_control(
        'contactstext1_control',
        array(
            'type' => 'text',
            'label' => "Текст 1",
            'section' => 'contacts_section',
            'settings' => 'contactstext1'
        )
    );
    $wp_customize->add_setting(
        'contactstext2',
        array(
            'default' => '',
            'type' => 'option',
            'transport'=>'refresh'
        )
    );
    $wp_customize->add_control(
        'contactstext2_control',
        array(
            'type' => 'text',
            'label' => "Текст 2",
            'section' => 'contacts_section',
            'settings' => 'contactstext2'
        )
    );
    $wp_customize->add_setting(
        'contactstext3',
        array(
            'default' => '',
            'type' => 'option',
            'transport'=>'refresh'
        )
    );
    $wp_customize->add_control(
        'contactstext3_control',
        array(
            'type' => 'text',
            'label' => "Текст 3",
            'section' => 'contacts_section',
            'settings' => 'contactstext3'
        )
    );


    $wp_customize->add_setting(
        'contactstext4',
        array(
            'default' => '',
            'type' => 'option',
            'transport'=>'refresh'
        )
    );
    $wp_customize->add_control(
        'contactstext4_control',
        array(
            'type' => 'text',
            'label' => "Текст 4",
            'section' => 'contacts_section',
            'settings' => 'contactstext4'
        )
    );
   
}
add_action( 'customize_register', 'mytheme_customize_register' );
function true_duplicate_post_as_draft(){
 
	if( empty( $_GET[ 'post' ] ) ) {
		wp_die( 'Нечего дублировать!' );
	}
 
	// проверка одноразовых чисел, куда без неё
	if ( ! isset( $_GET[ 'true_duplicate_nonce' ] ) || ! wp_verify_nonce( $_GET[ 'true_duplicate_nonce' ], basename( __FILE__ ) ) ) {
		return;
	}
 
	// получаем ID оригинального поста
	$post_id = absint( $_GET[ 'post' ] );
 
	// затем получили объект поста
	$post = get_post( $post_id );
 
	/*
	 * если вы не хотите, чтобы текущий автор был автором нового поста
	 * тогда замените следующие две строчки на: $new_post_author = $post->post_author;
	 * при замене этих строк автор будет копироваться из оригинального поста
	 */
	$current_user = wp_get_current_user();
	$new_post_author = $current_user->ID;
 
	/*
	 * если пост существует, создаем его дубликат
	 */
	if ( $post ) {
 
		// массив данных нового поста
		$args = array(
			'comment_status' => $post->comment_status,
			'ping_status'    => $post->ping_status,
			'post_author'    => $new_post_author,
			'post_content'   => $post->post_content,
			'post_excerpt'   => $post->post_excerpt,
			'post_parent'    => $post->post_parent,
			'post_name'      => $post->post_name,
			'post_password'  => $post->post_password,
			'post_status'    => 'draft', // черновик, если хотите сразу публиковать - замените на publish
			'post_title'     => $post->post_title,
			'post_type'      => $post->post_type,
			'to_ping'        => $post->to_ping,
			'menu_order'     => $post->menu_order
		);
 
		// создаем пост при помощи функции wp_insert_post()
		$new_post_id = wp_insert_post( $args );
 
		// присваиваем новому посту все элементы таксономий (рубрики, метки и т.д.) старого
		$taxonomies = get_object_taxonomies( $post->post_type ); // возвращает массив названий таксономий, используемых для указанного типа поста, например array("category", "post_tag");
		foreach ( $taxonomies as $taxonomy ) {
			$post_terms = wp_get_object_terms( $post_id, $taxonomy, array( 'fields' => 'slugs' ) );
			wp_set_object_terms( $new_post_id, $post_terms, $taxonomy, false );
		}
 
		// дублируем все произвольные поля
		$post_meta = get_post_meta( $post_id );
		if( $post_meta ) {
			foreach ( $post_meta as $meta_key => $meta_values ) {
				if( '_wp_old_slug' == $meta_key ) { // это лучше не трогать
					continue;
				}
				foreach ( $meta_values as $meta_value ) {
					add_post_meta( $new_post_id, $meta_key, $meta_value );
				}
			}
		}
 
		// и наконец, перенаправляем пользователя на страницу редактирования нового поста
		wp_safe_redirect( add_query_arg( array( 'action' => 'edit', 'post' => $new_post_id ), admin_url( 'post.php' ) ) );
		exit;
	} else {
		wp_die( 'Ошибка создания поста, не могу найти оригинальный пост с ID=: ' . $post_id );
	}
}
 
add_action( 'admin_action_true_duplicate_post_as_draft', 'true_duplicate_post_as_draft' );
 
// Добавляем ссылку дублирования поста для post_row_actions
add_filter( 'post_row_actions', 'true_duplicate_post_link', 10, 2 );
function true_duplicate_post_link( $actions, $post ) {
	if ( current_user_can( 'edit_posts' ) ) {
		$actions[ 'duplicate' ] = '<a href="' . wp_nonce_url( add_query_arg( array( 'action' => 'true_duplicate_post_as_draft', 'post' => $post->ID ), 'admin.php' ), basename(__FILE__), 'true_duplicate_nonce' ) . '">Дублировать</a>';
	}
	return $actions;
}
//Функция нормализации номера
function NumberNormalizeContactPost($value){
    return str_replace(["(",")","-"," "],"",$value);
}




//Общая функция получения информации из блока (обёртка для ...)
function GenerContent($val){
    $arras=array();
    $k=0;
    for($s=0;$s<count($val);$s++){
        $ask=$val[$s]['innerContent'][0];
        $arras[$k]=strip_tags(trim(strval($ask)));
        $k+=1;
    }
    $arras=array_filter($arras);
    $arras=array_values($arras);
    return $arras;
}
//Функция вывода контактов
function GetPostsContacts(){
    $posts=query_posts(['cat' =>get_cat_ID("Контакты"),
                            'order'=>'ASC']);   
    for($i=0;$i<count($posts);$i++){
        $data=GenerContent(parse_blocks($posts[$i]->post_content));//,$posts[$i]->ID,$namefield);
        $arr_contacts[$i]=$data;
    }
    return $arr_contacts; 
}

function GenerateChildsCat($id){
    $cats_childs=get_categories( array(
        'parent'  => $id,
        'hide_empty' => false
    ));
    $cats_childs_normalize=array();
    for($i=0;$i<count($cats_childs);$i++){
        $cats_childs_normalize[$i]=array(0=>$cats_childs[$i]->name,1=>get_category_link($cats_childs[$i]->term_id));
    }
    return $cats_childs_normalize;
}


function GetProductsAll($data){
    $dts=parse_blocks($data);
    $img=explode(' ',$dts[0]['innerBlocks'][0]['innerHTML'])[3];// => Array
    $price= end($dts)['innerContent'][0];
    return array(0=>$img,1=>$price);
}
function GetOneProduct($data){
    $ars_image=array();
    $ars_text=array();
    $dts=parse_blocks($data);
    for($i=0;$i<count($dts);$i++){
        if($dts[$i]['blockName']=="core/gallery"){
            $imges=$dts[$i]['innerBlocks'];
            for ($j=0;$j<count($imges);$j++){
                $imres=explode('src=',explode(' ',$imges[$j]['innerHTML'])[3])[1];
                $imres=str_replace('"', "", $imres);
                $ars_image[$j]=$imres;
            }
        }
        else{
            $ars_text[$i]=strip_tags(trim(strval($dts[$i]['innerContent'][0])));
        }
    }
    $ars_text=array_filter($ars_text);
    $ars_text=array_values($ars_text);
    return array(0=>$ars_image,1=>$ars_text);
}


function GenerateServices($data,$count){
    $ars_image=array();
    $ars_text=array();
    $dts=parse_blocks($data);
    for($i=0;$i<count($dts);$i++){
        if($dts[$i]['blockName']=="core/image"){
            $imges=$dts[$i]['innerContent'][0];
            $imres=explode('src=',explode(' ', $imges)[3])[1];
            $imres=str_replace('"', "", $imres);
            $ars_image[0]=$imres;
        }
        else{
            $ars_text[$i]=strip_tags(trim(strval($dts[$i]['innerContent'][0])));
        }
    }
    $ars_text=array_filter($ars_text);
    $ars_text=array_values($ars_text);
    $ars_text=array_splice($ars_text, 0, $count);
    return array(1=>$ars_image,2=>$ars_text);
}

function GetServicesAll(){
    $posts=query_posts(['cat' =>get_cat_ID("Услуги"),
                        'order'=>'ASC']);   
    for($i=0;$i<count($posts);$i++){
        $part= (int)get_post_meta( $posts[$i]->ID, 'count_text', true);
        $data=GenerateServices($posts[$i]->post_content,$part);//,$posts[$i]->ID,$namefield);
        array_unshift($data,$posts[$i]->post_title);
        array_push($data,get_permalink($posts[$i]->ID));
        $arr_contacts[$i]=$data;
    }
    return $arr_contacts; 
}
function GenerateOneService($data){
    $ars_image=array();
    $ars_text=array();
    $dts=parse_blocks($data);
    for($i=0;$i<count($dts);$i++){
        if($dts[$i]['blockName']=="core/image"){
            $imges=$dts[$i]['innerContent'][0];
            $imres=explode('src=',explode(' ', $imges)[3])[1];
            $imres=str_replace('"', "", $imres);
            $ars_image[0]=$imres;
        }
        else{
            $ars_text[$i]=strip_tags(trim(strval($dts[$i]['innerContent'][0])));
        }
    }
    $ars_text=array_filter($ars_text);
    $ars_text=array_values($ars_text);
    return array(0=>$ars_image,1=>$ars_text);
}

function GetOneService($posts){

    $data=GenerateOneService($posts);
    return $data; 
}
function GetWork($data){
    $dts=parse_blocks($data);
    $img=explode('src=',explode(' ',$dts[0]['innerContent'][0])[3])[1];
    $img=str_replace('"','',$img);
    return $img;
}
function GetWorksAll(){
    $posts=query_posts(['cat' =>get_cat_ID("Портфолио"),
                        'order'=>'ASC',
                        'posts_per_page'=>'5']);   
    for($i=0;$i<count($posts);$i++){
        $data=GetWork($posts[$i]->post_content);//,$posts[$i]->ID,$namefield);
        $arr_contacts[$i]=$data;
    }
    return $arr_contacts; 
}

function GetServImg($data){
    $data=parse_blocks($data);
    $imges=$data[0]['innerContent'][0];
    $imres=explode('src=',explode(' ', $imges)[3])[1];
    $imres=str_replace('"', "", $imres);
    return $imres;

}
function GetServMain(){
    $dat_all=array();
    $posts=query_posts(['cat' =>get_cat_ID("Услуги"),
                        'order'=>'ASC',
                        'posts_per_page'=>'5']);
    for($i=0;$i<count($posts);$i++){
        $dat_cont=array();
        array_push($dat_cont,$posts[$i]->post_title);
        array_push($dat_cont,get_permalink($posts[$i]->ID));
        array_push($dat_cont,GetServImg($posts[$i]->post_content));
        $dat_all[$i]=$dat_cont;
    }
    return $dat_all; 
}
function GetComments(){
    $args = array(
        'number'=> '6',
        'order'=> 'DESC',
        "status" => "approve",
    );
    $comments = get_comments( $args );
    return $comments;
}


function add_comment($author_name,$text){
    $commentdata = [
        'comment_post_ID'      => 17,
        'comment_author'       => $author_name,
        'comment_content'      => $text,
        'comment_type'         => 'comment',
    ];
    wp_new_comment( $commentdata );  
    return "Комментарий отправлен!";  
}
if(isset($_POST["textcomment"])){
//    $answer=add_comment($_POST["namecomment"],$_POST["textcomment"]);
    $commentdata = [
        'comment_post_ID'      => 17,
        'comment_author'       => $_POST["namecomment"],
        'comment_content'      => $_POST["textcomment"],
        'comment_type'         => 'comment',
    ];
    wp_new_comment( $commentdata );  
    echo json_encode(array("1"=>"Комментарий отправлен!"));
}
