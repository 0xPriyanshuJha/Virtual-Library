<?php

/*
This file contains database configuration assuming you are running mysql using user "root" and password ""
*/

define('DB_SERVER', 'sql100.epizy.com');
define('DB_USERNAME', 'epiz_33488613');
define('DB_PASSWORD', 'ARIeYd0LLr');
define('DB_NAME', 'epiz_33488613_login');

// Try connecting to the Database
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

//Check the connection
if($conn == false){
    dir('Error: Cannot connect');
}


?>