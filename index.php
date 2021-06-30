<?php
class sinhVien{
    var $ten;
    var $maSinhVien;
    var $soDuTaiKhoan=0;
    var $lop;
    var $namNhapHoc ;

}
$sv1 = new sinhVien();
$sv1-> ten="Đinh Văn Thiện";
$sv1-> maSinhVien = "Ph11030";
$sv1->lop= "We15303";
$sv1 -> namNhapHoc = date("d/m/Y");

$sv2 = new sinhVien();
$sv2-> ten="Nguyễn Thùy Trang";
$sv2-> maSinhVien = "Ph11022";
$sv2->lop= "We15301";
$sv2 -> namNhapHoc = date("d/m/Y");

$sv3 = new sinhVien();
$sv3-> ten="Lương Thị Duyên";
$sv3-> maSinhVien = "Ph10687";
$sv3->lop= "We15303";
$sv3-> namNhapHoc = date("d/m/Y");

$arr = [$sv1,$sv2,$sv3];

?>
<body>
<h1><span> Thông tin nhập học sinh viên </span></h1>

<table border= "1">
<thead>
<td> Họ Và Tên</td>
<td> Mã Số Sinh Viên</td>
<td>Số Dư Tài Khoản</td>
<td>Lớp</td>
<td>Năm Nhập Học</td>
</thead>
<tbody>
<?php foreach ($arr as $item) : ?>
<tr>
<td><?= $item->ten?></td>
<td><?= $item->maSinhVien?></td>
<td><?= $item->soDuTaiKhoan?></td>
<td><?= $item->lop?></td>
<td><?= $item->namNhapHoc?></td>
</tr>
<?php endforeach?>
</tbody>
</table>
</body>