<?php

$mysql = mysqli_connect('host-server', 'user-banco', 'password');

/* Test the MySQL connection */
if (mysqli_connect_errno()) {
printf("Connection failed: %s\n", mysqli_connect_error());
exit();
}

/* Print the MySQL server version */
printf("MySQL server version: %s\n", mysqli_get_server_info($mysql));

/* Close the MySQL connection */
mysqli_close($mysql);
?>
