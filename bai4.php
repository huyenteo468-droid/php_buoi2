<?php
$str = "Xin chào các bạn!";
$sub = "các";
$pos = strpos($str, $sub);
if ($pos !== false) {
    echo "Tìm thấy '$sub' tại vị trí: $pos";
} else {
    echo "Không tìm thấy";
}
?>