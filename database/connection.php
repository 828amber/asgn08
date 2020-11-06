<?php
/*
/ database connection information
*/
if($_SERVER['HTTP_HOST'] == "hotdumpsterfire.com")
{
    define('SERVER', 'localhost' );
    define('USER', 'wbip' );
    define('PW', 'h0tlava' );
    define('DB', 'amber_test' );
}

else
{
    define('SERVER', 'localhost' );
    define('USER', 'wbip' );
    define('PW', 'wbip123' );
    define('DB', 'test' );
}
