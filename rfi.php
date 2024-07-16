<?php
echo 'Current PHP version: ' . phpversion(); // Display current PHP version
 
// Output PHP configuration details directly
echo '<br>';
eval('phpinfo();');
?>
