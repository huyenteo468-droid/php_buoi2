<?php
$str = "Hello! @2024 #PHP";
echo "Sau thay thế: " . preg_replace('/[^a-zA-Z0-9]/', '-', $str);
?>