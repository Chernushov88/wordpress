<?php

class jt_abstract {

    protected $labels;
    protected $args;
    protected $labels_tax;
    protected $args_tax;
    protected $name;
    protected $name_category;
    protected $has_category;

    function init_var() {

        $this->labels = array(
            'name' => _x('General', 'post type general name'),
            'singular_name' => _x('Singular', 'post type singular name'),
            'add_new' => _x('Добавить новую', 'new'),
            'add_new_item' => __('Добавить новую'),
            'edit_item' => __('Редактировать'),
            'new_item' => __('Новая'),
            'all_items' => __('Все'),
            'view_item' => __('Просмотр'),
            'search_items' => __('Поиск'),
            'not_found' => __('Не найдена'),
            'parent_item_colon' => '',
            'menu_name' => 'Abstract'
        );
        $this->args = array(
            'labels' => $this->labels,
            'description' => 'Abstract',
            'public' => true,
            'menu_position' => 5,
            'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'comments', 'slug'),
            'has_archive' => true,
            'hierarchical' => true,
        );

        $this->labels_tax = array(
            'name' => _x('Категории', 'taxonomy general name'),
            'singular_name' => _x('Категория', 'taxonomy singular name'),
            'search_items' => __('Поиск по категории'),
            'all_items' => __('Все категории'),
            'parent_item' => __('Категория источника'),
            'parent_item_colon' => __('Категория источника:'),
            'edit_item' => __('Редактировать категорию'),
            'update_item' => __('Обновить категорию'),
            'add_new_item' => __('Добавить новую категорию'),
            'new_item_name' => __('Новая категория'),
            'menu_name' => __('Категории'),
        );

        $this->args_tax = array(
            'labels' => $this->labels_tax,
            'hierarchical' => true,
        );
        $this->has_category = false;
        $this->name = get_class($this);
        $this->name_category = $this->name . '_category';
    }

    function __construct() {

        $this->init_var();

        if ($this->has_category) {
            add_action('init', array(&$this, 'my_taxonomies'), 0);
        }
        add_action('init', array(&$this, 'my_custom_post'), 0);
    }

    function my_custom_post() {

        register_post_type($this->name, $this->args);
    }

    function my_taxonomies() {

        register_taxonomy($this->name_category, $this->name, $this->args_tax);
    }

}

/*
* БАНЕР НА ГЛАВНОЙ
*/
class jt_slider extends jt_abstract {
    function init_var() {
        parent::init_var();     
        $label = 'Банер';
        $this->labels = array(
            'name' => _x($label, 'post type general name'),
            'singular_name' => _x($label, 'post type singular name'),
            'add_new' => _x('Добавить новый слайдер', 'slider '),
            'add_new_item' => __('Добавить нового учителя'),
            'edit_item' => __('Редактировать '.$label),
            'new_item' => __('Новый '.$label),
            'all_items' => __('Все учителя'),
            'view_item' => __('Просмотр '.$label),
            'search_items' => __('Поиск '.$label),
            'not_found' => __($label.' не найдено'),
            'parent_item_colon' => '',
            'menu_name' => 'БАНЕР НА ГЛАВНОЙ'
        );
        $this->args = array(
            'labels' => $this->labels,
            'description' => 'slider ',
            'public' => true,
            'menu_position' => 2,
            'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'comments'),
            'has_archive' => true,
            'hierarchical' => true,
        );
        $this->has_category = true;
        $this->name = get_class($this);
        $this->name_category = $this->name . '_category';
    }
}
/*
* АКЦИИ
*/
class jt_actionSite extends jt_abstract {
    function init_var() {
        parent::init_var();     
        $label = 'Акции';
        $this->labels = array(
            'name' => _x($label, 'post type general name'),
            'singular_name' => _x($label, 'post type singular name'),
            'add_new' => _x('Добавить новую акцию', 'action '),
            'add_new_item' => __('Добавить новую аикцию'),
            'edit_item' => __('Редактировать '.$label),
            'new_item' => __('Новые '.$label),
            'all_items' => __('Все '.$label),
            'view_item' => __('Просмотр '.$label),
            'search_items' => __('Поиск '.$label),
            'not_found' => __($label.' не найдено'),
            'parent_item_colon' => '',
            'menu_name' => 'АКЦИИ'
        );
        $this->args = array(
            'labels' => $this->labels,
            'description' => 'actionSite ',
            'public' => true,
            'menu_position' => 2,
            'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'comments', 'custom-fields', 'revisions', 'page-attributes', 'post-formats'),
            'has_archive' => true,
            'hierarchical' => true,
        );
        $this->has_category = true;
        $this->name = get_class($this);
        $this->name_category = $this->name . '_category';
    }
}