# SETTING UP PROJECT WITH XAMPP

1. Download Xampp at https://www.apachefriends.org/index.html
2. Install Xampp
3. Create folder project00 inside "/opt/lampp/htdocs"
3. Download this project and copy all the files to "/opt/lampp/htdocs/project00"


## SET UP DATABASE

1. Open Xampp phpMyAdmin with http://localhost:8080/phpmyadmin
2. Create Database named project00
3. Create 2 tables
    - First table named **register_account** with 5 columes: ID, username, password, first_name, and last_name.
    - Second table named **user_address** with 9 columes: user_id, street, city, state, zipcode, street_2, city_2, state_2, zipcode_2
    
## RUN XAMPP

1. Open Xampp
2. Start application
3. Service -> Start
4. Network -> Enable
5. Volumes -> Mount
  
  Note: You can also access project folder when you click **Explore**
  
## OPEN APPLICATION

Project is now live at "http://localhost:8080/project00
