<?php
// database name and credentials
define('DATABASE', 'helloworld');
define('DB_USER', 'root');
define('DB_USER_PASSWORD', 'Letmein1');

error_reporting( E_ALL & ~E_DEPRECATED & ~E_NOTICE );
if(!mysql_connect('localhost', DB_USER, DB_USER_PASSWORD))
{
        die('Incorrect credentials ! --> '.mysql_error());
}
if(!mysql_select_db(DATABASE))
{
        die('Incorrect dabatase selection ! --> '.mysql_error());
}
?>

