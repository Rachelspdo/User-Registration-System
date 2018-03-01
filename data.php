<?php
// Check if username is set in form from index.php
if (isset($_POST['form_username'])) {
    
    $serverhost = "localhost";
    // Databasename
    $dbname = 'project00';
    // Username for xampp is root
    $dbuser = 'root';
    // Password for xampp is '' (empty)
    $dbpassword = '';
    
    // MYSQLI

    // Create connection
    // mysqli_connect("localhost","my_user","my_password","my_db");
    $db = mysqli_connect($serverhost, $dbuser, $dbpassword, $dbname);
    
    // Check connection
    if (!$db) {
        die("Connection failed: " . mysqli_connect_error());
    } else {
        echo "Connected successfully";
    }
    
    // set variable to hold json data.
    $username = $_POST['form_username'];
    $password = $_POST['form_password'];
    $firstname = $_POST['form_firstname'];
    $lastname = $_POST['form_lastname'];
    $street = $_POST['form_street'];
    $city = $_POST['form_city'];
    $state = $_POST['form_state'];
    $zipcode = $_POST['form_zipcode'];
    $street2 = $_POST['form_street2'];
    $city2 = $_POST['form_city2'];
    $state2 = $_POST['form_state2'];
    $zipcode2 = $_POST['form_zipcode2'];
    
    // Perform query, insert input to database
    $sql_insert = "INSERT INTO register_account (username, password, `first_name`, `last_name`) 
                                    VALUES ('".$username."', '".$password."', '".$firstname."', '".$lastname."' )";
    
    $insert_input = mysqli_query($db, $sql_insert);
    
    if ($insert_input) {
        $lastID = mysqli_insert_id($db);
        $sql_insert_address = "INSERT INTO user_address (user_id, street, city, state, zipcode, street_2, city_2, state_2, zipcode_2)
                                            values('".$lastID."','".$street."','".$city."','".$state."','".$zipcode."','".$street2."','".$city2."','".$state2."','".$zipcode2."')";
        mysqli_query($db, $sql_insert_address);

    }
    
    mysqli_close($db);

}


?>