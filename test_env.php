<?php
echo "AWS_ACCESS_KEY_ID: " . getenv('AWS_ACCESS_KEY_ID') . "\n";
echo "AWS_SECRET_ACCESS_KEY: " . getenv('AWS_SECRET_ACCESS_KEY') . "\n";
echo "From \$_ENV: " . ($_ENV['AWS_ACCESS_KEY_ID'] ?? 'not found') . "\n";
?>
