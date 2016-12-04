<?php
/**
 * Main Controller
 */

/**
 *  Contains functions
 */

define('DB_HOST', 'localhost');
define('DB_NAME', 'movie');
define('DB_USER', 'admin');
define('DB_PASS', 'admin');

require_once __DIR__.'/../src/db_functions.php';

/**
 * Function to show homepage
 */
function index_action()
{
    $backgroundColor = getBackgroundColor();

    $isLoggedIn = is_logged_in_from_session();
    $username = username_from_session();
    $isAdmin = is_user_admin($username);
    $profilePicture = get_image($username);

    $pageTitle = "home page";
    $indexLinkClass = "current";
    $aboutLinkClass = "button";
    $shopLinkClass = "button";
    $contactLinkClass = "button";
    $sitemapLinkClass = "button";
    $crudLinkClass = "button";
    $settingLinkClass = "button";


    require_once __DIR__ . '/../templates/index.php';
}

/**
 * Function to show about page
 */
function about_action()

{
    $backgroundColor = getBackgroundColor();

    $isLoggedIn = is_logged_in_from_session();
    $username = username_from_session();
    $isAdmin = is_user_admin($username);
    $profilePicture = get_image($username);

    $pageTitle = "about page";
    $indexLinkClass = "button";
    $aboutLinkClass = "current";
    $shopLinkClass = "button";
    $contactLinkClass = "button";
    $sitemapLinkClass = "button";
    $crudLinkClass = "button";
    $settingLinkClass = "button";


    require_once __DIR__ . '/../templates/about.php';
}

/**
 * Function to show shop page
 */
function shop_action()
{
    $backgroundColor = getBackgroundColor();

    $isLoggedIn = is_logged_in_from_session();
    $username = username_from_session();
    $isAdmin = is_user_admin($username);
    $profilePicture = get_image($username);

    $pageTitle = "about page";
    $indexLinkClass = "button";
    $aboutLinkClass = "button";
    $shopLinkClass = "current";
    $contactLinkClass = "button";
    $sitemapLinkClass = "button";
    $crudLinkClass = "button";
    $settingLinkClass = "button";

    // 1. get connection
    $connection = connect_to_db();

    // 2. get all products
    $items = get_all_items($connection);


    require_once __DIR__ . '/../templates/shop.php';
}

/**
 * Function to show contact page
 */
function contact_action()
{
    $backgroundColor = getBackgroundColor();

    $isLoggedIn = is_logged_in_from_session();
    $username = username_from_session();
    $isAdmin = is_user_admin($username);
    $profilePicture = get_image($username);

    $pageTitle = "about page";
    $indexLinkClass = "button";
    $aboutLinkClass = "button";
    $shopLinkClass = "button";
    $contactLinkClass = "current";
    $sitemapLinkClass = "button";
    $crudLinkClass = "button";
    $settingLinkClass = "button";

    require_once __DIR__ . '/../templates/contact.php';
}

/**
 * Function to show admin crud
 */
function show_admin_crud() {
    $backgroundColor = getBackgroundColor();

    $isLoggedIn = is_logged_in_from_session();
    $username = username_from_session();
    $isAdmin = is_user_admin($username);
    $profilePicture = get_image($username);

    $pageTitle = "Admin CRUD";

    $indexLinkClass = "button";
    $aboutLinkClass = "button";
    $shopLinkClass = "button";
    $contactLinkClass = "button";
    $sitemapLinkClass = "button";
    $crudLinkClass = "current";
    $settingLinkClass = "button";

    // 1. get connection
    $connection = connect_to_db();

    // 2. get all products
    $items = get_all_items($connection);


    require_once __DIR__ . '/../templates/admincrud.php';
}

/**
 * Function to show settings page
 */
function show_settings() {
    $backgroundColor = getBackgroundColor();

    $isLoggedIn = is_logged_in_from_session();
    $username = username_from_session();
    $isAdmin = is_user_admin($username);
    $profilePicture = get_image($username);

    $pageTitle = "Admin CRUD";

    $indexLinkClass = "button";
    $aboutLinkClass = "button";
    $shopLinkClass = "button";
    $contactLinkClass = "button";
    $sitemapLinkClass = "button";
    $crudLinkClass = "button";
    $settingLinkClass = "current";

    require_once __DIR__ . '/../templates/settings.php';
}

/**
 * Change profile picture function
 */
function change_picture() {
    $backgroundColor = getBackgroundColor();

    $isLoggedIn = is_logged_in_from_session();
    $username = username_from_session();
    $isAdmin = is_user_admin($username);
    $profilePicture = get_image($username);

    $indexLinkClass = "button";
    $aboutLinkClass = "button";
    $shopLinkClass = "button";
    $contactLinkClass = "button";
    $sitemapLinkClass = "button";
    $crudLinkClass = "button";
    $settingLinkClass = "current";

    $connection = connect_to_db();

    $imageSrc = filter_input(INPUT_POST, 'imageSrc', FILTER_SANITIZE_STRING);

    $success = change_image($connection, $username ,$imageSrc);

    if($success) {
        $message = "SUCCESS - your profile picture has been changed.";

    }else {
        $message = 'Sorry, there was a problem updating the product';
    }

    require_once __DIR__.'/../templates/message.php';}

/**
 * Function to show site map page
 */
function sitemap_action()
{
    $backgroundColor = getBackgroundColor();

    $isLoggedIn = is_logged_in_from_session();
    $username = username_from_session();
    $isAdmin = is_user_admin($username);
    $profilePicture = get_image($username);

    $pageTitle = "about page";
    $indexLinkClass = "button";
    $aboutLinkClass = "button";
    $shopLinkClass = "button";
    $contactLinkClass = "button";
    $sitemapLinkClass = "current";
    $crudLinkClass = "button";
    $settingLinkClass = "button";

    require_once __DIR__ . '/../templates/sitemap.php';
}

/**
 * Function to show the description of an item from the database
 */
function show_one_item_action()
{
    $backgroundColor = getBackgroundColor();

    $isLoggedIn = is_logged_in_from_session();
    $username = username_from_session();
    $isAdmin = is_user_admin($username);
    $profilePicture = get_image($username);

    $pageTitle = "about page";
    $indexLinkClass = "button";
    $aboutLinkClass = "button";
    $shopLinkClass = "current";
    $contactLinkClass = "button";
    $sitemapLinkClass = "button";
    $crudLinkClass = "button";
    $settingLinkClass = "button";

    $connection = connect_to_db();

    $itemID = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
    $item = get_one_item($connection, $itemID);

    if(null == $item){
        $message = 'sorry, no item with id = ' . $itemID . ' could be retrieved from the database';

        // output the detail of product in HTML table
        require_once __DIR__ . '/../templates/message.php';
    } else {
        // output the detail of product in HTML table
        require_once __DIR__ . '/../templates/detail.php';
    }

}

/**
 * Deletes selected item from database
 */
function delete_item_action()
{
    $backgroundColor = getBackgroundColor();

    $isLoggedIn = is_logged_in_from_session();
    $username = username_from_session();
    $isAdmin = is_user_admin($username);
    $profilePicture = get_image($username);

    $indexLinkClass = "button";
    $aboutLinkClass = "button";
    $shopLinkClass = "current";
    $contactLinkClass = "button";
    $sitemapLinkClass = "button";
    $crudLinkClass = "button";
    $settingLinkClass = "button";

    $connection = connect_to_db();

    $itemID = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
    $success = delete_item($connection, $itemID);


    if($success) {
        $message = 'SUCCESS - product with id = ' . $itemID . ' was deleted';

    }else{
        $message = 'sorry, product id = ' . $itemID . ' could not be deleted';
    }

    require_once __DIR__.'/../templates/message.php';
}

/**
 * Shows the form to add an item to database
 */
function show_new_item_form_action()
{
    $backgroundColor = getBackgroundColor();

    $isLoggedIn = is_logged_in_from_session();
    $username = username_from_session();
    $isAdmin = is_user_admin($username);
    $profilePicture = get_image($username);

    $indexLinkClass = "button";
    $aboutLinkClass = "button";
    $shopLinkClass = "current";
    $contactLinkClass = "button";
    $sitemapLinkClass = "button";
    $crudLinkClass = "button";
    $settingLinkClass = "button";

    require_once __DIR__.'/../templates/newItemForm.php';
}

/**
 * Function to create item in database
 */
function create_item_action()
{
    $backgroundColor = getBackgroundColor();

    $isLoggedIn = is_logged_in_from_session();
    $username = username_from_session();
    $isAdmin = is_user_admin($username);
    $profilePicture = get_image($username);

    $indexLinkClass = "button";
    $aboutLinkClass = "button";
    $shopLinkClass = "current";
    $contactLinkClass = "button";
    $sitemapLinkClass = "button";
    $crudLinkClass = "button";
    $settingLinkClass = "button";

    $connection = connect_to_db();

    $itemName = filter_input(INPUT_POST, 'itemName', FILTER_SANITIZE_STRING);
    $imageSrc = filter_input(INPUT_POST, 'imageSrc', FILTER_SANITIZE_STRING);
    $price = filter_input(INPUT_POST, 'price', FILTER_SANITIZE_NUMBER_FLOAT);
    $description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING);
    $category = filter_input(INPUT_POST, 'category', FILTER_SANITIZE_STRING);

    $success = create_item($connection, $itemName, $imageSrc, $price, $description, $category);

    if($success){
        $itemID = $connection->lastInsertId();
        $message = "SUCCESS - new product with ID = $itemID created";
    } else {
        $message = 'sorry, there was a problem creating new product';
    }

    require_once __DIR__ . '/../templates/message.php';
}

/**
 * Shows form to update database
 */
function show_update_item_form_action()
{
    $backgroundColor = getBackgroundColor();

    $isLoggedIn = is_logged_in_from_session();
    $username = username_from_session();
    $isAdmin = is_user_admin($username);
    $profilePicture = get_image($username);

    $indexLinkClass = "button";
    $aboutLinkClass = "button";
    $shopLinkClass = "current";
    $contactLinkClass = "button";
    $sitemapLinkClass = "button";
    $crudLinkClass = "button";
    $settingLinkClass = "button";


    $connection = connect_to_db();

    $itemID = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

    $item = get_one_item($connection, $itemID);

    require_once __DIR__.'/../templates/updateItemForm.php';

}

/**
 * Function to update item in database
 */
function update_item_action()

{
    $backgroundColor = getBackgroundColor();

    $isLoggedIn = is_logged_in_from_session();
    $username = username_from_session();
    $isAdmin = is_user_admin($username);
    $profilePicture = get_image($username);

    $indexLinkClass = "button";
    $aboutLinkClass = "button";
    $shopLinkClass = "current";
    $contactLinkClass = "button";
    $sitemapLinkClass = "button";
    $crudLinkClass = "button";
    $settingLinkClass = "button";


    $connection = connect_to_db();
    $itemID = filter_input(INPUT_POST, 'itemID', FILTER_SANITIZE_NUMBER_INT);
    $itemName = filter_input(INPUT_POST, 'itemName', FILTER_SANITIZE_STRING);
    $imageSrc = filter_input(INPUT_POST, 'imageSrc', FILTER_SANITIZE_STRING);
    $price = filter_input(INPUT_POST, 'price', FILTER_SANITIZE_NUMBER_INT);
    $description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING);
    $category = filter_input(INPUT_POST, 'category', FILTER_SANITIZE_STRING);

    $success = update_item($connection, $itemID, $itemName, $imageSrc, $price, $description, $category);

    if($success) {
        $message = "SUCCESS - new product with ID = $itemID updated";

    }else {
        $message = 'sorry, there was a problem updating the product';
    }

    require_once __DIR__.'/../templates/message.php';

}

/**
 * Shows for to create new user
 */
function show_new_user_form()
{
    $backgroundColor = getBackgroundColor();

    $isLoggedIn = is_logged_in_from_session();
    $username = username_from_session();
    $isAdmin = is_user_admin($username);
    $profilePicture = get_image($username);

    $indexLinkClass = "button";
    $aboutLinkClass = "button";
    $shopLinkClass = "button";
    $contactLinkClass = "button";
    $sitemapLinkClass = "button";
    $settingLinkClass = "button";

    require_once __DIR__ . '/../templates/newUserForm.php';
}

/**
 * Function to create new user in database
 */
function create_user_process() {
    $backgroundColor = getBackgroundColor();

    $isLoggedIn = is_logged_in_from_session();
    $username = username_from_session();
    $isAdmin = is_user_admin($username);
    $profilePicture = get_image($username);

    $indexLinkClass = "button";
    $aboutLinkClass = "button";
    $shopLinkClass = "current";
    $contactLinkClass = "button";
    $sitemapLinkClass = "button";
    $crudLinkClass = "button";
    $settingLinkClass = "button";

    $connection = connect_to_db();

    $username = filter_input(INPUT_POST, 'userName', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    $image = filter_input(INPUT_POST, 'image', FILTER_SANITIZE_STRING);

    $role = "user";

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $success = create_user($connection, $username, $role, $hashedPassword, $image);

    if($success){
        $message = "SUCCESS - a new account is created";
    } else {
        $message = 'Sorry, there was a problem creating new account';
    }

    require_once __DIR__ . '/../templates/message.php';
}


/**
 * Shows login form
 */
function login_action()
{
    $backgroundColor = getBackgroundColor();


    $indexLinkClass = "button";
    $aboutLinkClass = "button";
    $shopLinkClass = "button";
    $contactLinkClass = "button";
    $sitemapLinkClass = "button";
    $crudLinkClass = "button";
    $settingLinkClass = "button";


    $isLoggedIn = is_logged_in_from_session();
    $username = username_from_session();
    $isAdmin = is_user_admin($username);
    $profilePicture = get_image($username);


    require_once __DIR__ . '/../templates/loginForm.php';
}

/**
 * Logs out and kills session
 */
function logout_action()
{
    unset($_SESSION['user']);
    killSession();
    index_action();
}

/**
 * Function to log in
 */
function process_login_action()
{
    $backgroundColor = getBackgroundColor();


    $isLoggedIn = is_logged_in_from_session();
    $username = username_from_session();
    $profilePicture = get_image($username);
    $isAdmin = is_user_admin($username);


    $indexLinkClass = "button";
    $aboutLinkClass = "button";
    $shopLinkClass = "button";
    $contactLinkClass = "button";
    $sitemapLinkClass = "button";
    $crudLinkClass = "button";
    $settingLinkClass = "button";



    $isLoggedIn = false;

    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);


    if(authenticate($username, $password)){
        $isLoggedIn = true;

        $isAdmin = is_user_admin($username);

        $_SESSION['user'] = $username;

        require_once __DIR__ . '/../templates/loginSuccess.php';
    } else {
        $message = 'bad username or password, please try again';
        require_once __DIR__ . '/../templates/message.php';
    }
}

/**
 * Checks if user is logged in
 * @return bool
 */
function is_logged_in_from_session()
{
    $isLoggedIn = false;

    if(isset($_SESSION['user'])){
        $isLoggedIn = true;
    }

    return $isLoggedIn;
}

/**
 * Gets username from the session
 * @return string
 */
function username_from_session()
{
    $username = '';

    if (isset($_SESSION['user'])) {
        $username = $_SESSION['user'];
    }

    return $username;
}

/**
 * Function to kill session
 */
function killSession()
{
    // (1) Unset all of the session variables.
    $_SESSION = [];

    // (2) If it is desired to kill the session, also delete the session cookie.
    // Note: This will destroy the session, and not just the session data!
    if (ini_get('session.use_cookies')){
        $params = session_get_cookie_params();
        setcookie(
            session_name(),
            '',
            time() - 42000,
            $params['path'],
            $params['domain'],
            $params['secure'],
            $params['httponly']
        );
    }

    // (3) destroy the session.
    session_destroy();
}


/**
 * Gets background colour from session
 * @return string
 */
function getBackgroundColor()
{
    // default to WHITE if not found in $_SESSION
    if (isset($_SESSION['backgroundColor'])){
        return $_SESSION['backgroundColor'];
    } else {
        return '#333333';
    }
}

/**
 * Changes the background colour of session
 * @param $color
 */
function changeBackgroundColor($color)
{
    $_SESSION['backgroundColor'] = $color;

    show_settings();
}

/**
 * Shows shopping cart
 */
function show_shopping_cart() {

    $connection = connect_to_db();

    $backgroundColor = getBackgroundColor();

    $isLoggedIn = is_logged_in_from_session();
    $username = username_from_session();
    $isAdmin = is_user_admin($username);
    $profilePicture = get_image($username);

    $indexLinkClass = "button";
    $aboutLinkClass = "button";
    $shopLinkClass = "current";
    $contactLinkClass = "button";
    $sitemapLinkClass = "button";
    $crudLinkClass = "button";
    $settingLinkClass = "button";

    $shoppingCart = getShoppingCart();
    $products = get_all_items($connection);

    require_once __DIR__ . '/../templates/shopping_cart.php';
}

/**
 * Function to add item to cart
 */
function addToCart()
{
    // get the ID of product to add to cart
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

    // get the cart array
    $shoppingCart = getShoppingCart();

    // default is old total is zero
    $oldTotal = 0;

    // if quantity found in cart array, then use this
    if(isset($shoppingCart[$id])){
        $oldTotal = $shoppingCart[$id];
    }

    // store old total + 1 as new quantity into cart array
    $shoppingCart[$id] = $oldTotal + 1;

    // store new  array into SESSION
    $_SESSION['shoppingCart'] = $shoppingCart;

    // redirect display page
    shop_action();
}

/**
 * Function to remove item from cart
 */
function removeFromCart()
{
    // get the ID of product to add to cart
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

    // get the cart array
    $shoppingCart = getShoppingCart();

    // remove entry for this ID
    unset($shoppingCart[$id]);

    // store new  array into SESSION
    $_SESSION['shoppingCart'] = $shoppingCart;

    // redirect display page
    show_shopping_cart();
}

/** Gets shopping cart from session
 * @return array
 */
function getShoppingCart()
{
    if (isset($_SESSION['shoppingCart'])){
        return $_SESSION['shoppingCart'];
    } else {
        return [];
    }
}