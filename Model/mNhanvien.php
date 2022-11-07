<?php 

class mNhanvien extends database
{
	
	public function xemnhanvien()
	{
		$sql = "SELECT * FROM `nhanvien` INNER JOIN `chucvu` ON `nhanvien`. `IDChucVu` = `chucvu`. `IDChucVu` WHERE `nhanvien`.`IDChucVu`='1';";
		return mysqli_query($this->connect, $sql);
	}
	public function themnhanvien($tenNhanVien, $taiKhoan, $SDT)
	{
		$result = 0;
		$password = "123456";
		$password = md5($password);
		$sql = "INSERT INTO `taikhoannhanvien`(`taiKhoan`, `matKhau`, `ghiChu`) VALUES ('$taiKhoan','$password',NULL)";
		if (mysqli_query($this->connect, $sql)) {
			$sql = "INSERT INTO `nhanvien`(`IDNhanVien`, `IDChucVu`, `taiKhoan`, `tenNhanVien`, `anhDaiDien`, `ngaySinh`, `gioiTinh`, `SDT`, `diaChi`, `eMail`, `CCCD`) VALUES (NULL,'1','$taiKhoan','$tenNhanVien','data/df_user.png','2002-12-31', b'0','$SDT','abc đường xyz','abc@gmail.com','000000000002')";
			if (mysqli_query($this->connect, $sql)) {
				$result = 1;
			}
		}
		return $result;
	}
	public function xoanhanvien($id, $taikhoan)
	{
		$result = 0;
		$sql = "DELETE FROM `nhanvien` WHERE `IDNhanVien`='$id'";
		if (mysqli_query($this->connect, $sql)) {
			$sql = "DELETE FROM `taikhoannhanvien` WHERE `taiKhoan`='$taikhoan'";
			if (mysqli_query($this->connect, $sql)) {
				$result = 1;
			}
		}
		return $result;
	}

	public function getThongTinNhanVien($idNhanVien)
	{
		$sql = "SELECT * FROM `nhanvien` WHERE `IDNhanVien`='$idNhanVien';";
		$qr = mysqli_query($this->connect, $sql);
		$data = mysqli_fetch_assoc($qr);
		$infoEmployee = array('id' => $data['IDNhanVien'],'chucvu'=>$data['IDChucVu'],'taiKhoan' => $data['taiKhoan'], 'tenNhanVien' => $data['tenNhanVien'], 'ngaySinh' => $data['ngaySinh'],'gioitinh' => $data['gioiTinh'], 'diaChi' => $data['diaChi'], 'SDT' => $data['SDT'], 'email' => $data['eMail'], 'CCCD' => $data['CCCD']);
		return $infoEmployee;
	}
	public function updatethongtinnv($idNhanVien, $txtTenUser, $txtNgaySinhUser, $sdt, $email, $diachi)
	{

		$sql = "UPDATE `nhanvien` SET `tenNhanVien`='$txtTenUser',`ngaySinh`='$txtNgaySinhUser',`SDT`='$sdt',`eMail`='$email',`diaChi`='$diachi' WHERE `IDNhanVien`='$idNhanVien'";
		$kq = mysqli_query($this->connect, $sql);

		if(mysqli_affected_rows($this->connect) >0 ){ //ifnum
       		return 1;
	    }
	    else{
	        return 0;
	    }
	}
	public function deletenhanvien($idNhanVien,$taiKhoan)
	{
		$sql = "DELETE FROM `nhanvien` WHERE `IDNhanVien`= '$idNhanVien'";
		$kq = mysqli_query($this->connect, $sql);		
		if(mysqli_affected_rows($this->connect) >0 ){
			$sql ="DELETE FROM `taikhoannhanvien` WHERE `taiKhoan`= '$taiKhoan'";
			$kq = mysqli_query($this->connect, $sql);
			if(mysqli_affected_rows($this->connect) >0 ){
				return 1;	
			}
			else{
			return 0;
				}
		}
		else
		{
			return 0;
		}

	}
	
}

 ?>