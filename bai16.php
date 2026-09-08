<?php
$str = "file.txt";
if (strrchr($str, ".txt") !== false) {
    echo "Kết thúc bằng .txt";
} else {
    echo "Không kết thúc";
}
?>