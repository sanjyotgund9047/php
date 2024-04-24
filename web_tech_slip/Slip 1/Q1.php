<?php
//Write a PHP script to get the PHP version and configuration information.

// Get PHP version
$php_version = phpversion();

// Get PHP configuration information
$php_config = phpinfo();

// Output the PHP version and configuration information
echo "PHP Version: $php_version\n\n";
echo "PHP Configuration Information:\n";
echo $php_config;
?>
