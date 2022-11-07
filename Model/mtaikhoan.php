<?php
class mtaikhoan extends database
{
	public function dangky($tenkhachhang, $ngaysinh, $gioiTinh, $SDT, $diachi, $email, $CCCD, $matkhau)
	{
		$sql = "INSERT INTO `khachhang` (`IDKhachHang`, `anhDaiDien`, `tenKhachHang`, `ngaySinh`, `gioiTinh`, `SDT`, `diaChi`, `eMail`, `CCCD`, `matKhau`) VALUES (NULL, 'data/df_user.png', '$tenkhachhang', '$ngaysinh',b'$gioiTinh', '$SDT', '$diachi', '$email', '$CCCD', '$matkhau')";
		$result = false;

		if (mysqli_query($this->connect, $sql)) {
			$result = true;
		}
		return json_encode($result);
	}

	public function xulydangnhap($email, $matkhau)
	{
		// sprintf("SELECT * FROM `khachhang` WHERE `eMail` like '%s' and `matKhau` like '%s'",mysqli_real_escape_string($this->connect, $email),mysqli_real_escape_string($this->connect, $matkhau));// loại bỏ các ký tự trong chuỗi
		$sql = "SELECT * FROM `khachhang` WHERE `eMail` like '$email' and `matKhau` like '$matkhau'";
		$result = mysqli_query($this->connect, $sql);
		$this->closeDatabase();
		$kq = MYSQLI_NUM_ROWS($result);
		if ($kq == 1) {
			return json_encode($result->fetch_assoc());
		}
	}

	public function xulydangnhapnv($taikhoan, $matkhau)
	{
		$sql = "SELECT * FROM `taikhoannhanvien` INNER JOIN `nhanvien` ON `taikhoannhanvien`.`taiKhoan` = `nhanvien`.`taiKhoan` WHERE `taikhoannhanvien`.`taiKhoan` like '$taikhoan'and `taikhoannhanvien`.`matKhau` like '$matkhau'";
		$result = mysqli_query($this->connect, $sql);
		if ($check = mysqli_num_rows($result) == 1) {
			return json_encode($result->fetch_assoc());
		}
	}
}
