<?php
$str1 = "Hello PHP";
$str2 = "Hello";
if (strncmp($str1, $str2, 5) === 0) {
    echo "Chuỗi bắt đầu bằng '$str2'";
} else {
    echo "Không bắt đầu";
}
?>