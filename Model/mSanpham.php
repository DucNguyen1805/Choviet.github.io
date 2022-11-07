<?php 
class mSanpham extends database
{
/* khách hàng*/
		public function getloaisanpham()
		{
			$sql = "SELECT * FROM `loaisanpham`";
			return mysqli_query($this->connect, $sql);
	        $connectDB->closeDatabase();
		}
		public function getsanphammoi()
		{
			
		}
 		public function getsanpham_bds()
 		{
	 		$sql = "SELECT * FROM `baidang`WHERE `IDLoaiSanPham` = '1' and `trangThai` ='1' ";
	 		$result= mysqli_query($this->connect, $sql);
	 		$kq= MYSQLI_NUM_ROWS($result);
			// if($kq >= 1)
			// {
			return $result;
			// }
 		}
  		public function getsanpham_xeco()
 		{
	 		$sql = "SELECT * FROM `baidang`WHERE `IDLoaiSanPham` = '10' and `trangThai` ='1' ";
	 		$result= mysqli_query($this->connect, $sql);
	 		$kq= MYSQLI_NUM_ROWS($result);
			// if($kq >= 1)
			// {
			return $result;
			// }
 		}
   		public function getsanpham_dodientu()
 		{
	 		$sql = "SELECT * FROM `baidang`WHERE `IDLoaiSanPham` = '20' and `trangThai` ='1' ";
	 		$result= mysqli_query($this->connect, $sql);
	 		$kq= MYSQLI_NUM_ROWS($result);
			// if($kq >= 1)
			// {
			return $result;
			// }
 		}
   		public function getsanpham_donoithat()
 		{
	 		$sql = "SELECT * FROM `baidang`WHERE `IDLoaiSanPham` = '30' and `trangThai` ='1' ";
	 		$result= mysqli_query($this->connect, $sql);
	 		$kq= MYSQLI_NUM_ROWS($result);
			// if($kq >= 1)
			// {
			return $result;
			// }
 		}
 	 		public function getsanpham_id($id)
 		{
	 		$sql = "SELECT * FROM `baidang` INNER JOIN `loaisanpham` ON `baidang`.`IDLoaiSanPham` = `loaisanpham`.`IDLoaiSanPham` WHERE `loaisanpham`.`IDLoaiSanPham` = '$id' AND `baidang`.`trangThai`= '1' ";
	 		$result= mysqli_query($this->connect, $sql);
	 		$kq= MYSQLI_NUM_ROWS($result);
			// if($kq >= 1)
			// {
			return $result;
			// }
 		}
  	 		public function getmota_id($id)
 		{
	 		$sql = "SELECT * FROM `loaisanpham` WHERE `IDLoaiSanPham` = '$id'";
	 		$result= mysqli_query($this->connect, $sql);
	 		$kq= MYSQLI_NUM_ROWS($result);
			// if($kq >= 1)
			// {
			return $result;
			// }
 		}
 		public function getbdid($idbd)
 		{
 			$sql = "SELECT * FROM `baidang`INNER JOIN `khachhang` ON `baidang`.`IDKhachHang`= `khachhang`.`IDKhachHang` WHERE `baidang`.`IDBD` = '$idbd';";
 			return mysqli_query($this->connect, $sql);
 			 $connectDB->closeDatabase();
 		}
		public function gethalienquan($idbd)
			{
				$sql= "SELECT * FROM `hinhanh` WHERE `IDBD`= '$idbd'";
				return mysqli_query($this->connect, $sql);
				$connectDB->closeDatabase();
			}
		public function sanphamidcd($idkhachhang)
		{
			$sql="SELECT * FROM `baidang` WHERE `IDKhachhang`='$idkhachhang' AND `trangThai`='0';";
			return mysqli_query($this->connect, $sql);
				$connectDB->closeDatabase();
		}
		public function sanphamiddd($idkhachhang)
		{
			$sql="SELECT * FROM `baidang` WHERE `IDKhachhang`='$idkhachhang' AND `trangThai`='1';";
			return mysqli_query($this->connect, $sql);
				$connectDB->closeDatabase();
		}
/* Nhân viên*/
		public function getbaidangchuaduyet()
		{
			$sql= "SELECT * FROM `baidang` INNER JOIN `loaisanpham` ON `baidang`. `IDLoaiSanPham` = `loaisanpham`. `IDLoaiSanPham` WHERE `trangThai` ='0';";
			return mysqli_query($this->connect, $sql);
			$connectDB->closeDatabase();
		}
		
		public function duyetbaidang($idbd)
		{	
			$sql ="UPDATE `baidang` SET `trangThai`= b'1' WHERE `IDBD`= '$idbd'";
			$result= mysqli_query($this->connect, $sql);
			$ketqua = 0;
			if($result)
			{
				$ketqua =1;
			}
			return $ketqua;
			$connectDB->closeDatabase();
		}



		}


 ?>