<?php
echo 'Current PHP version: ' . phpversion(); // Display current PHP version
file_put_contents('phpinfo.php', '<?php phpinfo(); ?>'); // Create phpinfo.php with phpinfo() content
echo "phpinfo.php file created."; // Confirmation message
?>
