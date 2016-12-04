<?php

session_start();

require_once __DIR__ . '/../src/main_controller.php';

$action = filter_input(INPUT_GET, 'action');

switch ($action) {

    case 'logout':
        logout_action();
        break;

    case 'processLogin':
        process_login_action();
        break;

    case 'login':
        login_action();
        break;

    case 'about':
        about_action();
        break;

    case 'shop':
        shop_action();
        break;

    case 'contact':
        contact_action();
        break;

    case 'sitemap':
        sitemap_action();
        break;

    case 'show':
        show_one_item_action();
        break;

    case 'delete':
        delete_item_action();
        break;

    case 'showUpdateItemForm';
        show_update_item_form_action();
        break;

    case 'updateItem';
        update_item_action();
        break;


    case 'showNewItemForm';
        show_new_item_form_action();
        break;

    case 'createNewItem';
        create_item_action();
        break;

    case 'adminCrud':
        show_admin_crud();
        break;

    case 'showNewUserForm':
        show_new_user_form();
        break;

    case 'createNewUser':
        create_user_process();
        break;

    case 'settings':
        show_settings();
        break;

    case 'updatePicture':
        change_picture();
        break;

    case 'setBackgroundColorBlue':
        changeBackgroundColor('#99ebff');
        break;

    case 'setBackgroundColorBlack':
        changeBackgroundColor('#333333');
        break;

    case 'showShoppingCart':
        show_shopping_cart();
        break;

    case 'addToCart':
        addToCart();
        break;

    case 'removeFromCart':
        removeFromCart();
        break;


    case 'index':
    default:
        index_action();

}