<?php
/**
 * Contains database functions
 */

/** Attempt to connect to database
 * @return null|PDO
 */
function connect_to_db()
{
    // DSN - the Data Source Name - requred by the PDO to connect
    $dsn = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME;

    // attempt to create a connection to the database
    try {
        $connection = new \PDO($dsn, DB_USER, DB_PASS);
    } catch (\PDOException $e) {
        // deal with connection error
        print 'ERROR - there was a problem trying to create DB connection' . PHP_EOL;
        return null;
    }

    return $connection;
}

/**
 * Function to get all items from database
 * @param $connection
 * @return mixed
 */
function get_all_items($connection)
{
    // SQL query
    $sql = 'SELECT * FROM items';

    // execute query and collect results
    $statement = $connection->query($sql);
    $items = $statement->fetchAll();

    return $items;
}

/**
 * Function to get an item from database
 * @param $connection
 * @param $id
 * @return null
 */
function get_one_item($connection, $id)
{
    $sql = "SELECT * FROM items WHERE itemID=$id";

    $statement = $connection->query($sql);

    if ($row = $statement->fetch()) {
        return $row;
    } else {
        return null;
    }
}

/**
 * Function to delete an item from database
 * @param $connection
 * @param $id
 * @return bool
 */
function delete_item($connection, $id)
{
    $sql = "DELETE FROM items WHERE itemID=$id";

    $numRowsAffected = $connection->exec($sql);

    if($numRowsAffected > 0) {
        $queryWasSuccessful = true;

    }else{
        $queryWasSuccessful = false;
    }

    return $queryWasSuccessful;
}

/**
 * Function to add an item to database
 * @param $connection
 * @param $itemName
 * @param $imageSrc
 * @param $price
 * @param $description
 * @param $category
 * @return bool
 */
function create_item($connection, $itemName, $imageSrc, $price, $description, $category)
{
    $sql = "INSERT into items (itemName, imageSrc, price, description, category) VALUES ('$itemName', '$imageSrc', '$price', '$description', '$category')";

    $numRowsAffected = $connection->exec($sql);

    if($numRowsAffected > 0) {
        $queryWasSuccessful = true;
    }else{
        $queryWasSuccessful = false;
    }

    return $queryWasSuccessful;
}

/**
 * Function to update item in database
 * @param $connection
 * @param $itemID
 * @param $itemName
 * @param $imageSrc
 * @param $price
 * @param $description
 * @param $category
 * @return bool
 */
function update_item($connection, $itemID, $itemName, $imageSrc, $price, $description, $category)

{
    $sql = "UPDATE items SET itemName= '$itemName', imageSrc = '$imageSrc', price = $price, description='$description', category='$category' WHERE itemID=$itemID";

    $numRowsAffected = $connection->exec($sql);

    if($numRowsAffected > 0) {
        $queryWasSuccessful = true;

    }else{
        $queryWasSuccessful = false;
    }

    return $queryWasSuccessful;
}

/**
 * Function to get username from database
 * @param $connection
 * @param $username
 * @return null
 */
function get_username($connection, $username)
{
    $sql = "SELECT userName FROM users WHERE userName='$username'";

    $statement = $connection->query($sql);

    if ($row = $statement->fetch()) {
        return $row;
    } else {
        return null;
    }
}

/**
 * Function to get  password from database
 * @param $connection
 * @param $username
 * @return null
 */
function get_password($connection, $username)
{
    $sql = "SELECT password FROM users WHERE userName='$username'";

    $statement = $connection->query($sql);

    if ($row = $statement->fetch()) {
        return $row;
    } else {
        return null;
    }
}

/**
 * Function to get user role from database
 * @param $username
 * @return mixed|null
 */
function get_role($username) {

    $connection = connect_to_db();

    $sql = "SELECT role FROM users WHERE userName='$username'";

    $statement = $connection->query($sql);

    if ($row = $statement->fetch()) {
        return $row;
    } else {
        return null;
    }
}

/**
 * Function to get image from database
 * @param $username
 * @return mixed|null
 */
function get_image($username) {
    $connection = connect_to_db();

    $sql = "SELECT image FROM users WHERE userName ='$username' ";

    $statement = $connection->query($sql);

    if ($row = $statement->fetch()) {
        return $row;
    } else {
        return null;
    }
}

/**
 * Function to check if user is admin
 * @param $username
 * @return bool
 */
function is_user_admin($username) {
    $role = get_role($username);

    if ($role[0] == 'admin') {
        return true;
    } else {
        return false;
    }
}

/**
 * Function to check username and password
 * @param $username
 * @param $password
 * @return bool
 */
function authenticate($username, $password)
{
    $connection = connect_to_db();

    $user = get_username($connection, $username);

    if($user == null) {
        return false;
    } else {
        $pass = get_password($connection, $username);

        if ($pass == null) {
            return false;
        } else {
            if (password_verify($password, $pass[0])) {
                return true;
            }
        }
    }

    return false;
}

/**
 * Function to create new user in database
 * @param $connection
 * @param $username
 * @param $role
 * @param $hashedPassword
 * @param $image
 * @return bool
 */
function create_user($connection, $username, $role, $hashedPassword, $image)
{
    $sql = "INSERT into users (userName, role, password, image) VALUES ('$username', '$role', '$hashedPassword', '$image')";


    $numRowsAffected = $connection->exec($sql);

    if($numRowsAffected > 0) {
        $queryWasSuccessful = true;
    }else{
        $queryWasSuccessful = false;
    }

    return $queryWasSuccessful;
}

/**
 * Function to change image in database
 * @param $connection
 * @param $username
 * @param $imageSrc
 * @return bool
 */
function change_image($connection, $username , $imageSrc) {
    $sql = "UPDATE users SET image= '$imageSrc' WHERE userName='$username'";

    $numRowsAffected = $connection->exec($sql);

    if($numRowsAffected > 0) {
        $queryWasSuccessful = true;

    }else{
        $queryWasSuccessful = false;
    }

    return $queryWasSuccessful;
}