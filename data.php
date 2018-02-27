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
    
    // set a test variable.
    $username = 'Username001';
    $password = 'test';
    $firstname = 'Walt';
    $lastname = 'Street';
    $street = '123 Fake Street';
    $city = 'Westminster';
    $state = 'CA';
    $zipcode = '99999';
    
    // Perform query, insert input to database
    $insert_input = mysqli_query($db, "Insert into register_account (username, password, first_name, last_name) 
                                    values ('".$username."', '".$password."', '".$firstname."', '".$lastname."' )");
    

}


?>