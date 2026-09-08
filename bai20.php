<?php
$email = "example@domain.com";
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "$email là email hợp lệ";
} else {
    echo "$email không hợp lệ";
}
?>