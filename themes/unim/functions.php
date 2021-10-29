<?

add_filter('acf/prepare_field', 'my_translatable_acf_fields');
function my_translatable_acf_fields($field)
{
    if (strpos($field['wrapper']['class'], 'translatable') !== false) {
        $field['class'] = 'translatable';
    }
    return $field;
}


add_action('acf/init', 'my_acf_op_init');
function my_acf_op_init()
{

    // Check function exists.
    if (function_exists('acf_add_options_sub_page')) {

        // Add parent.
        acf_add_options_page(array(
            'page_title' => 'Основные настройки',
            'menu_title' => 'Настройки темы',
            'menu_slug' => 'theme-general-settings',
            'capability' => 'edit_posts',
            'redirect' => false
        ));

        acf_add_options_sub_page(array(
            'page_title' => 'Меню',
            'menu_title' => 'Меню',
            'menu_slug' => 'theme-menu-settings',
            'parent_slug' => 'theme-general-settings',
            'redirect' => false
        ));

        acf_add_options_sub_page(array(
            'page_title' => 'Меню',
            'menu_title' => 'Меню',
            'menu_slug' => 'theme-menu-settings',
            'parent_slug' => 'theme-general-settings',
            'redirect' => false
        ));

        acf_add_options_sub_page(array(
            'page_title' => 'Главный экран',
            'menu_title' => 'Главный экран',
            'menu_slug' => 'theme-main-settings',
            'parent_slug' => 'theme-general-settings',
            'redirect' => false
        ));


        acf_add_options_sub_page(array(
            'page_title' => 'Ссылки после главного экрана',
            'menu_title' => 'Ссылки после главного экрана',
            'menu_slug' => 'theme-main-links-settings',
            'parent_slug' => 'theme-general-settings',
            'redirect' => false
        ));

        acf_add_options_sub_page(array(
            'page_title' => 'Мы предлагаем',
            'menu_title' => 'Мы предлагаем',
            'menu_slug' => 'theme-main-offers-settings',
            'parent_slug' => 'theme-general-settings',
            'redirect' => false
        ));

        acf_add_options_sub_page(array(
            'page_title' => 'В каждом случае ведется статистика',
            'menu_title' => 'В каждом случае ведется статистика',
            'menu_slug' => 'theme-main-statistic-settings',
            'parent_slug' => 'theme-general-settings',
            'redirect' => false
        ));

        acf_add_options_sub_page(array(
            'page_title' => 'Исследования',
            'menu_title' => 'Исследования',
            'menu_slug' => 'theme-main-research-settings',
            'parent_slug' => 'theme-general-settings',
            'redirect' => false
        ));

        acf_add_options_sub_page(array(
            'page_title' => 'О нас',
            'menu_title' => 'О нас',
            'menu_slug' => 'theme-main-about-settings',
            'parent_slug' => 'theme-general-settings',
            'redirect' => false
        ));

        acf_add_options_sub_page(array(
            'page_title' => 'Ссылки',
            'menu_title' => 'Ссылки',
            'menu_slug' => 'theme-simples-links-settings',
            'parent_slug' => 'theme-general-settings',
            'redirect' => false
        ));


        acf_add_options_sub_page(array(
            'page_title' => 'Настройки форм',
            'menu_title' => 'Настройки форм',
            'menu_slug' => 'theme-simples-form-settings',
            'parent_slug' => 'theme-general-settings',
            'redirect' => false
        ));
    }
}


function getParamsOptions($params = [])
{
    $arResult = [];

    foreach ($params as $key => $value) {
        $arResult[$value] = get_field($key, 'option');
    }

    return $arResult;

}

add_action( 'wp_ajax_sendF', 'sendF' );
add_action( 'wp_ajax_nopriv_sendF', 'sendF' );





function sendF()
{
    $email = 'genis@unim.su';
    $messages = [];
    $messages[] = "Имя Фамилия: " . $_POST["name"];
    $messages[] = "Телефон: " . $_POST["phone"];
    $messages[] = "email: " . $_POST["email"];
    $messages[] = "Facebook: " . $_POST["fb"];
    $messages[] = "LinkedIn: " . $_POST["ln"];
    $messages[] = "Должность: " . $_POST["special"];
    $messages[] = "Цели работы: " . $_POST["celi"];
    $messages = implode("\n", $messages);
    $headers[] = 'Content-type: text/html; charset=utf-8';
    wp_mail( $email, 'Заявка на участие в конкурсе', $messages, $headers);
}