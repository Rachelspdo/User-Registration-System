<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>title</title>
        <link href="css/style.css" rel="stylesheet" >
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
        <!-- content -->
        <div class="container">
          <div class="row">
              <form class="formTable col-md-5" action="" method="post">
                  <div class="form-group">
                    <label for="username">Username:*</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                  </div>
                  <div class="form-group">
                    <label for="password">Password:*</label>
                    <input type="text" class="form-control" id="password" name="username" required>
                  </div>
                  <div class="form-group">
                    <label for="firstname">First Name:*</label>
                    <input type="text" class="form-control" id="firstname" name="firstname" required>
                  </div>
                  <div class="form-group">
                    <label for="lastname">Last Name:*</label>
                    <input type="text" class="form-control" id="lastname" name="lastname" required>
                  </div>
                  <div><hr></div>
                  <div class="form-group">
                    <label for="street">Street:*</label>
                    <input type="text" class="form-control" id="street" name="street" required>
                  </div>
                  <div class="form-group">
                    <label for="city">City:*</label>
                    <input type="text" class="form-control" id="city" name="city" required>
                  </div>
                  <div class="form-group">
                    <label for="state">State:*</label>
                    <input type="text" class="form-control" id="state" name="state" required>
                  </div>
                  <div class="form-group">
                    <label for="zipcode">Zipcode:*</label>
                    <input type="text" class="form-control" id="zipcode" name="zipcode" required>
                  </div>
                  <div class="form-group">
                    <input type="submit" id="register" class="btn btn-primary" value="Register">
                  </div>
              </form>
              <div class="col-md-5">
                  <?php 
                  // Connect to databse
                    $serverhost = "localhost";
                    $dbname = 'project00';
                    $dbuser = 'root';
                    $dbpassword = '';

                    $db = mysqli_connect($serverhost, $dbuser, $dbpassword, $dbname);
                    // Get id and username to display on page
                    $sql_query = "SELECT * FROM register_account INNER JOIN user_address ON register_account.id = user_address.user_id";
                    $result = mysqli_query($db, $sql_query);
                    // looping through all of the accounts and display them
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '
                                <tr>
                                    <td>ID: '.$row['user_id'].'<td><br>
                                    <td>'.$row['username'].'<td><br>
                                </tr>
                        ';
                    }
                  mysqli_close($db);
                  ?>
              </div>
            </div>
        </div>
        
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script>
             $( document ).ready(function() {
                 $('#register').click(function(e) {
                     // Prevent form from submitting
                     e.preventDefault();
                     // Getting form input data
                     var username = $('#username').val();
                     var password = $('#password').val();
                     var firstname = $('#firstname').val();
                     var lastname = $('#lastname').val();
                     var street = $('#street').val();
                     var city = $('#city').val();
                     var state = $('#state').val();
                     var zipcode = $('#zipcode').val();
                     
                     
                     // Alert user when form is not filled
                     if (username == "") {
                         alert("Please enter a username."); 
                     } else if (password == ""){
                         alert("Please enter a password.");
                     } else if (firstname == ""){
                         alert("Please enter a firstname.");
                     } else if (lastname == ""){
                         alert("Please enter a lastname.");
                     } else if (street == ""){
                         alert("Please enter a street.");
                     } else if (city == ""){
                         alert("Please enter a city.");
                     } else if (state == ""){
                         alert("Please enter a state.");
                     } else if (zipcode == "") {
                         alert("Please enter a zipcode.");
                     } 
                     
                     // Save data to server
                     $.ajax({
                         method: "POST",
                         url: "data.php", //Post to data.php file
                         data: { form_username : username, form_password : password, form_firstname : firstname, form_lastname : lastname, form_street : street, form_city : city, form_state : state, form_zipcode : zipcode },
                         dataType: "json",
                         success:
                            function(result){
                                //alert('test');
                            }
                     });
                 });
             });
        </script>
    </body>
</html>