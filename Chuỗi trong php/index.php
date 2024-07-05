<?php
$chuoi1 = 'Học | lập | trình | PHP';
$catChuoi = explode('|', $chuoi1);// Hàm cắt chuỗi theo ký tự |
var_dump($catChuoi);
echo '<br>';
$noiChuoi = implode('|', $catChuoi);// Hàm nối chuỗi theo ký tự |
print_r($noiChuoi);
$doDaiChuoi = strlen($chuoi1);// hàm trả về độ dài của 1 chuỗi
echo $doDaiChuoi. '<br>';
$demSoChu = str_word_count($chuoi1);// hàm đếm số chữ trong 1 chuỗi
echo $demSoChu;
$lapChuoi = str_repeat("Manh", 4);// Hàm lặp chuỗi "Manh" với 4 lần
echo $lapChuoi. '<br>';;
$thayTheChuoi = str_replace('-', '.', "Lap-trinh-web");// hàm tìm ký tự - và thay thế bằng .
echo $thayTheChuoi. '<br>';
$maHoaMD5 = md5('vudinhmanh');// hàm mã hoá 1 chuỗi 32bit
echo $maHoaMD5 .'<br>';
$maHoaSha1 = sha1('vudinhmanh');// hàm mã hoá 1 chuỗi 40bit
echo $maHoaSha1 .'<br>';
echo htmlentities('<p>VuDinhManh</p>');// in ra màn hình sẽ hiển thị thẻ html
$str = htmlentities('<p>VuDinhManh</p>');
echo html_entity_decode($str);// biên dịch các thẻ html
echo strip_tags('<p>VuDinhManh</p>', );// loại bỏ thẻ html
echo substr('VuDinhManh', 0, 5);//lấy chuỗi từ vị trí 0 với độ dài 5
echo '<br>';
echo strstr('VuDinhManh', 'Dinh');// Lấy chuỗi từ chuỗi Dinh đến hết chuỗi
echo '<br>';
echo strpos('VuDinhManh', 'D');// Tìm chuỗi D trong chuỗi VuDinhManh và trả về index
echo '<br>';
echo substr_replace("Vu Dinh Manh", "Nam", 8, 4);// Thay thế chuỗi Nam từ vị trí thứ 8 và độ dài 4 từ chuỗi cha Vu Dinh Manh
echo '<br>';
echo strtolower("VUDINHMANH");// Chuyển thành chữ thường
echo '<br>';
echo strtoupper("vudinhmanh");// Chuyển thành chữ hoa
echo '<br>';
echo ucfirst("vudinhmanh");// Chuyển chữ cái đầu tiên sang viết hoa
echo '<br>';
echo lcfirst("VUDINHMANH");// Chuyển chữ cái đầu tiên sang viết thường
echo '<br>';
echo ucwords("vu dinh manh");// Chuyển chữ cái dầu tiên của từ sang viết hoa
echo '<br>';
echo trim("mvudinhmanhm", "m");// Xoá ký tự m ở đầu và cuối
echo '<br>';
//Hàm join dùng để gộp chuỗi
$arr = array('Hello','World!','Beautiful','Day!');
echo join(" ",$arr)."<br>";
echo join("+",$arr)."<br>";
echo join("-",$arr)."<br>";
echo join("X",$arr);
echo '<br>';
//Hàm explode để chuyển chuỗi thành mảng tham số thứ 3 limit trả về số phần tử mảng cần trả về
$str = 'one,two,three,four';
print_r(explode(',',$str,0));
echo '<br>';
print_r(explode(',',$str,2));
echo '<br>';
print_r(explode(',',$str,-1));
echo '<br>';