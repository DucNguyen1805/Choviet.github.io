<?php 
class mkhachhang extends database 
{
	

	public function addbaidang($IDKhachHang, $IDLoaiSanPham,$Ha,$Ha1,$Ha2,$Ha3,$tenSanPham,$Gia,$KichThuoc,$moTa)
	{
		$sql = "INSERT INTO `baidang`(`IDBD`, `IDKhachHang`, `IDLoaiSanPham`, `Ha`, `tenSanPham`, `Gia`, `KichThuoc`, `moTa`, `trangThai`)
		 VALUES (NULL,'$IDKhachHang','$IDLoaiSanPham','$Ha','$tenSanPham','$Gia','$KichThuoc','$moTa', b'0')";
		
		if(mysqli_query($this->connect, $sql) )
		{
			 $id_pro = mysqli_insert_id($this->connect);
			 if(!$Ha1==0)
			 {
			 	mysqli_query($this->connect,"INSERT INTO `hinhanh` (`Ha_stt`, `IDBD`, `Ha_ten`) VALUES (NULL, '$id_pro', '$Ha1')");
			 }
			 if(!$Ha2==0)
			 {
			 	mysqli_query($this->connect,"INSERT INTO `hinhanh` (`Ha_stt`, `IDBD`, `Ha_ten`) VALUES (NULL, '$id_pro', '$Ha2')");
			 }
			 if(!$Ha3==0)
			 {
			 	mysqli_query($this->connect,"INSERT INTO `hinhanh` (`Ha_stt`, `IDBD`, `Ha_ten`) VALUES (NULL, '$id_pro', '$Ha3')");
			 } 
			return 1;
		}
		
	}

	public function searchsp($giatritimkiem)
	{
		$sql= "SELECT * FROM `baidang` WHERE `tenSanPham` LIKE '%".$giatritimkiem."%' and `trangThai` ='1'";
		$qr= mysqli_query($this->connect, $sql);
		return $qr;
		$connectDB->closeDatabase();
	}
	public function getanhdaidien($IDKhachHang)
	{
		$sql= "SELECT `anhDaiDien` FROM `khachhang` WHERE `IDKhachHang`='$IDKhachHang';";
		$qr= mysqli_query($this->connect, $sql);
		$anhdaidien = mysqli_fetch_assoc($qr);
		return $anhdaidien['anhDaiDien'];
		$connectDB->closeDatabase();
	}
	public function gethoten($IDKhachHang)
	{
		$sql= "SELECT `tenKhachHang` FROM `khachhang` WHERE `IDKhachHang`='$IDKhachHang';";
		$qr= mysqli_query($this->connect, $sql);
		$hoten = mysqli_fetch_assoc($qr);
		return $hoten['tenKhachHang'];
		$connectDB->closeDatabase();
	}
	public function getngaysinh($IDKhachHang)
	{
		$sql= "SELECT `ngaySinh` FROM `khachhang` WHERE `IDKhachHang`='$IDKhachHang';";
		$qr= mysqli_query($this->connect, $sql);
		$ngaysinh = mysqli_fetch_assoc($qr);
		return $ngaysinh['ngaySinh'];
		$connectDB->closeDatabase();
	}
	public function getgioitinh($IDKhachHang)
	{
		$sql= "SELECT  `gioiTinh` FROM `khachhang` WHERE `IDKhachHang`='$IDKhachHang';";
		$qr= mysqli_query($this->connect, $sql);
		$gioitinh = mysqli_fetch_assoc($qr);
		return $gioitinh['gioiTinh'];
		$connectDB->closeDatabase();
	}
	public function getsdt($IDKhachHang)
	{
		$sql= "SELECT `SDT` FROM `khachhang` WHERE `IDKhachHang`='$IDKhachHang';";
		$qr= mysqli_query($this->connect, $sql);
		$sdt = mysqli_fetch_assoc($qr);
		return $sdt['SDT'];
		$connectDB->closeDatabase();
	}
	public function getdiachi($IDKhachHang)
	{
		$sql= "SELECT `diaChi` FROM `khachhang` WHERE `IDKhachHang`='$IDKhachHang';";
		$qr= mysqli_query($this->connect, $sql);
		$diachi = mysqli_fetch_assoc($qr);
		return $diachi['diaChi'];
		$connectDB->closeDatabase();
	}
	public function getCCCD($IDKhachHang)
	{
		$sql= "SELECT `CCCD` FROM `khachhang` WHERE `IDKhachHang`='$IDKhachHang';";
		$qr= mysqli_query($this->connect, $sql);
		$CCCD = mysqli_fetch_assoc($qr);
		return $CCCD['CCCD'];
		$connectDB->closeDatabase();
	}
	public function getemail($IDKhachHang)
	{
		$sql= "SELECT `eMail` FROM `khachhang` WHERE `IDKhachHang`='$IDKhachHang';";
		$qr= mysqli_query($this->connect, $sql);
		$email = mysqli_fetch_assoc($qr);
		return $email['eMail'];
		$connectDB->closeDatabase();
	}
	public function getmatkhau($IDKhachHang)
	{
		$sql= "SELECT `matKhau` FROM `khachhang` WHERE `IDKhachHang`='$IDKhachHang';";
		$qr= mysqli_query($this->connect, $sql);
		$matkhau = mysqli_fetch_assoc($qr);
		return $matkhau['matKhau'];
		$connectDB->closeDatabase();
	}
	public function updatethongtin($IDKhachHang, $newname, $tenKhachhang, $ngaySinh, $gioiTinh, $SDT, $diaChi, $CCCD, $eMail)
	{

		$sql = "UPDATE `khachhang` SET `anhDaiDien`='$newname',`tenKhachHang`='$tenKhachhang',`ngaySinh`='$ngaySinh',`gioiTinh`= b'$gioiTinh',`SDT`='$SDT',`diaChi`='$diaChi',`eMail`='$eMail',`CCCD`='$CCCD'WHERE `IDKhachHang`='$IDKhachHang'";
		$kq = mysqli_query($this->connect, $sql);
		if(mysqli_affected_rows($this->connect) > 0){
			return 1;
		} else {
			return 0;
		}
	}

}

 ?>