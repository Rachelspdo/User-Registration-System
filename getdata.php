<?php
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
    </tr>
    ';
}
mysqli_close($db);
?>