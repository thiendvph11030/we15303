<?php
class sinhVien{
        var $ten;
        var $maSinhVien;
        var $soDuTaiKhoan;
        var $lop;
        var $namNhapHoc ;
        function chuyen_lop($sv){
            $this->ten=$_POST['ten'];
            $this->maSinhVien =$_POST['maSinhVien'];
            $this->lop= $_POST['lop'];
            $this->soDuTaiKhoan= $_POST['soDuTaiKhoan'];
            $this-> namNhapHoc = $_POST['namNhapHoc'];
        } 
    }
 $sv = new sinhVien();
$arr = [$sv];
?>
<body>
<h1><span> Thông tin chuyển lớp sinh viên </span></h1>
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