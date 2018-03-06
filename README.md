# SETTING UP PROJECT WITH XAMPP

1. Download Xampp at https://www.apachefriends.org/index.html
2. Install Xampp
3. Open Xampp and Start application
4. Volumes -> Mount
5. Click **Explore** to open Xampp folder
3. Create folder project00 inside **htdocs**
3. Download this project and copy all the files to **project00**


## SET UP DATABASE

1. Open Xampp phpMyAdmin with http://localhost:8080/phpmyadmin
2. Create Database named **project00**
3. Create 2 tables
    
First table named **register_account** with 5 columes: id (set AUTO_INCREMENT under EXTRA), username, password, first_name, and last_name.
    
Second table named **user_address** with 10 columes: id (set AUTO_INCREMENT under EXTRA), user_id, street, city, state, zipcode, street_2, city_2, state_2, zipcode_2
    
## RUN XAMPP

1. Open Xampp
2. Start application
3. Service -> Start
4. Network -> Enable
5. Volumes -> Mount
  
## OPEN APPLICATION

Project is now live at "http://localhost:8080/project00/
