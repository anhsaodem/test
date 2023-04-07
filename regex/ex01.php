<!-- Bài 01: Kiểm tra số điện thoại Việt Nam hợp lệ

Bắt đầu bằng số 0 hoặc +84
Có tổng 10 số (+84 quy ước là 1 số) -->
<?php
$subject = '0398695869';
$subject = '+84398695869';

$pattern = '/^0|\+84[0-9]{9}/';
$check = preg_match($pattern,$subject);
$result = $check?"SDT hợp lệ":"SĐT không hợp lệ";
echo $result;
?>
<!-- Bài 02: Kiểm tra 1 URL hợp lệ
Cấu trúc URL: protocol + www + domain + port + path
Trong đó: www và port là không bắt buộc
Ví dụ: https://unicode.vn/khoa-hoc/lap-trinh-php-nang-cao -->
<?php
$url = 'https://unicode.vn/khoa-hoc/lap-trinh-php-nang-cao';
$pattern = '~^(https|http):\/\/[a-z]+\.[a-z]{2,}\/[a-z0-9_-]+\/[a-z0-9-]+~';
$check = preg_match($pattern,$url);
$result = $check?"Url hợp lệ":"Url không hợp lệ";
echo $result;
?>
<!-- Bài 03: Kiểm tra 1 thẻ html hợp lệ
1 thẻ html gọi là hợp lệ nếu tuân thủ cấu trúc sau:
<tag attribute1="Value 1" attribute2="Value 2">Content</tag>
Hoặc
<tag attribute1="Value 1" attribute2="Value 2" /> -->
<?php
$tag = '<tag attribute1="Value 1" attribute2="Value 2">Content</tag>';
$pattern = '~^<[a-z]{2,}\s[a-z0-9]+=\"[A-Za-z-0-9]+\"\s[a-z0-9]+=\"[A-Za-z-0-9]+\"(\/>)|>~';
$check = preg_match($pattern,$url);
$result = $check?"Url hợp lệ":"Url không hợp lệ";
echo $result;
?>