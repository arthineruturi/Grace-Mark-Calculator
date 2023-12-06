<?php
   define('DB_SERVER', 'sqldatabase-sampleres.mysql.database.azure.com');
   define('DB_USERNAME', 'arthiazure');
   define('DB_PASSWORD', 'A1@azure');
   define('DB_DATABASE', 'testing');
   $conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
?>
