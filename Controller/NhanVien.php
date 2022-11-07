<?php
class Nhanvien extends Acontroller
{
	protected $IDNhanVien, $IDChucVu, $taiKhoan, $tenNhanVien, $anhDaiDien;
	public $mtaikhoan;
	public $mSanpham;
	public $mNhanvien;
	function __construct()
	{
		$this->mtaikhoan = $this->getmodel("mtaikhoan");
		$this->mSanpham = $this->getmodel("mSanpham");
		$this->mNhanvien= $this->getmodel("mNhanvien");
	}
	function giaodien()
	{
		if (isset($_SESSION['submit1'])) {
			$this->getviews("Nhanvien", ["page" => "giaodien"]);
		} else {
			header("location: dangnhap");
		}
	}
	function getbdcd()
	{
		if (isset($_SESSION['submit1'])) {
			$idbd0 = $this->mSanpham->getbaidangchuaduyet();
			$this->getviews("Nhanvien", [
				"page" => "showbdcd",
				"bdcd" => $idbd0,

			]);
		} else {
			header("location: dangnhap");
		}
	}
	function duyetbd($idbd)
	{
		if (isset($_SESSION['submit1'])) {

			$idbd1 = $this->mSanpham->duyetbaidang($idbd);
			header("location: ../getbdcd");
			echo "<script>alert('Phải có ảnh sản phẩm')</script>";
		} else {
			header("location: dangnhap");
		}
	}
	function khongduyetbd()
	{
		echo "Chức năng này hiện chưa có" . "<br>";
		echo "Hãy quay lại";
	}

	function xemnhanvien()
	{
		$row= (json_decode($_SESSION['in4'],true));  
		if (isset($_SESSION['submit1']) && $_SESSION['submit1']==true && $row['IDChucVu']==2 ) {
			$shownv = $this->mNhanvien->xemnhanvien();
			$this->getviews("Nhanvien", [
				"page" => "xemnhanvien",
				"shownv" => $shownv,
			]);
		} else {
			header("location: dangnhap");
		}
	}

	function themnhanvien()
	{
		$row= (json_decode($_SESSION['in4'],true));
		if (isset($_SESSION['submit1']) && $_SESSION['submit1']==true && $row['IDChucVu']==2 ) {
		if (isset($_REQUEST['themnhanvien'])) {
	  $thongBaoLoi = array();
    if (empty($_REQUEST['tenNhanVien'])) {
        $thongBaoLoi['tenNhanVien']['thieu'] = 'Vui Lòng Nhập Tên Nhân Viên';
        echo "<script>alert('" . $thongBaoLoi['tenNhanVien']['thieu'] . "')
        location.href = 'xemnhanvien';
        </script>";
        die();
    }
     if (!preg_match('/^[03|08|09|07]{2,2}+[0-9]{8,8}$/', $_REQUEST['SDT']) or empty($_REQUEST['SDT'])) {
        $thongBaoLoi['SDT']['sai'] = 'Vui Lòng Nhập SDT';
        echo "<script>alert('" . $thongBaoLoi['SDT']['sai'] . "')
         location.href = 'xemnhanvien';
        </script>";
        die();
    }
    if (empty($_REQUEST['taiKhoan'])) {
        $thongBaoLoi['taiKhoan']['thieu'] = 'Vui Lòng Nhập Đầy Đủ Thông Tin Tài Khoản';
        echo "<script>alert('" . $thongBaoLoi['taiKhoan']['thieu'] . "')
        location.href = 'xemnhanvien';
        </script>";
        die();
    }

			$tenNhanVien = $_REQUEST['tenNhanVien'];
			$taiKhoan = $_REQUEST['taiKhoan'];
			$SDT = $_REQUEST['SDT'];
    }


		$ketqua = $this->mNhanvien->themnhanvien($tenNhanVien, $taiKhoan, $SDT);
		if ($ketqua == 1) {
		echo "<script>alert('Thêm nhân viên mới thành công')
 		location.href = 'xemnhanvien';
			</script>";
		} else
			echo "<script>alert('Thông tin không hợp lệ')
 		location.href = 'xemnhanvien';
			</script>";
		} else {
			header("location: dangnhap");
		}

	}
	function updatenhanvien()
	{
		$row= (json_decode($_SESSION['in4'],true)); 
		if(isset($_SESSION['submit1']) && $_SESSION['submit1']==true && $row['IDChucVu']==2 )
		{
			if(isset($_REQUEST['update']))
			{
				$idNhanVien=$_REQUEST['txtidNhanVien'];
				$txtTenUser=$_REQUEST['txtTenUser'];
				$txtNgaySinhUser=$_REQUEST['txtNgaySinhUser'];
				$sdt= $_REQUEST['txtSDTUser'];
				$email= $_REQUEST['txtEmailUser'];
				$diachi= $_REQUEST['txtDiaChiUser'];

				$kq= $this->mNhanvien->updatethongtinnv($idNhanVien, $txtTenUser, $txtNgaySinhUser, $sdt, $email, $diachi);
				if($kq==1)
				{
					echo "<script>alert('Thay đổi thành công')
			        location.href = 'xemnhanvien';
			        </script>";
				}
				else
				{
					echo "<script>alert('Không có sự thay đổi nào !!')
			        location.href = 'xemnhanvien';
			        </script>";
				}
			}
		}
		else
		{
		header("location: dangnhap");
		}
	}

	function deletenhanvien()
	{	$row= (json_decode($_SESSION['in4'],true)); 

		if (isset($_SESSION['submit1']) && $_SESSION['submit1']==true && $row['IDChucVu']==2 )
		 {
			if(isset($_REQUEST['delete']))
			require_once __DIR__ . "/outputpdf/vendor/autoload.php";
			// Create new pdf 
			$mpdf = new \Mpdf\Mpdf();
			$id = $_REQUEST['IDNhanVien'];
			$data = $this->mNhanvien->getThongTinNhanVien($id);
			$tenNhanVien= $data['tenNhanVien'];
			$taiKhoan = $_REQUEST['taiKhoan'];
			$chucvu= $data['chucvu'];
				if($chucvu==1)
				{
				 $chucvu= "Nhân viên";
				}
				elseif($chucvu==2)
				{
					$chucvu= "Quản lý";
				}
				else
				{
					$chucvu= "Admin";
				}
			$CCCD = $data['CCCD'];
			$gioitinh= $data['gioitinh'];
				if($gioitinh==1)
				{
				 $gioitinh= "Nam";
				}
				elseif($gioitinh==0)
				{
					$gioitinh= "Nữ";
				}
			$SDT = $data['SDT'];
			$email = $data['email'];
			$diachi = $data['diaChi'];
			$nhanxetnhanvien = $_REQUEST['nhanxetnhanvien'];

			// Create our PDF
$data = '';
$data .='<h1> Hồ Sơ Nhân Viên</h1>';

// Add data
$data .='
<body >
<div class="page">
<div class="footer-left-item3">
<h3>Công ty ChoVietDSR</h3>
<p>Trụ sở chính: 566 Nguyễn Thái Sơn, Phường 5, Quận Gò Vấp, TP. Hồ Chí Minh</p>
 <p>Chịu trách nhiệm chính: Ông Nguyễn Ngọc Đức</p>
 <p>Giấy phép số: 429/GP-BTTTT do Bộ TTTT cấp ngày 11/10/2019</p>
</div>
<div style="text-align:center;">
<h1> Hồ Sơ Nhân Viên</h1>
</div>
<div style="text-align:left;padding-top: 10px;padding-left: 20px;">
<p style="font-weight: bold;"> Họ và tên: <span> '.$tenNhanVien.'</span></p>
<p style="font-weight: bold;">Chức vụ: '.$chucvu.'</p>
<p style="font-weight: bold;">CCCD: xxxxxxxx'.substr($CCCD,-4, 4).'</p>
<p>Giới tính: '.$gioitinh.'</p>
<p>SDT: xxxxxxx'.substr($SDT,-3, 3).'</p>
<p>Email: '.$email.'</p>
<p>Địa chỉ: xxxx'.substr($diachi,4).'</p>
</div>
<div style="text-align:center;">
    <h2> Nhận xét nhân viên</h2>
</div>
<div style="text-align:left;">
    <p>'.$nhanxetnhanvien.'</p>
</div>
<div style="text-align: right; padding-right: 50px ">
    <p style= "font-size:20px;font-weight: bold;" >Người xác thực</p>
</div>
<div style="width:200px; height:200px; float:right; padding-right: 30px;">
    <img src="./data/avatar/chuky.jpg" alt="User Image">
</div>

</div>
</body>';
$kq= $this->mNhanvien->deletenhanvien($id,$taiKhoan);
			if($kq==1)
			{
			$mpdf->SetWatermarkImage('./Publics/img/logo3.jpg');
			$mpdf->showWatermarkImage = true;
			  // write PDF
			$mpdf->WriteHTML($data);
			// Output
			$tenfile= $tenNhanVien."_".$CCCD.".pdf";
			$mpdf->Output($tenfile,"I");
			echo "<script>alert('Xóa thành công.Thông tin nhân viên đã được lưu')
			  location.href = 'xemnhanvien';
			  </script>";
			}
			else
			{
			echo "<script>alert('Không thể xóa tài khoản này. Vui lòng kiểm tra lại')
			location.href = 'xemnhanvien';
			</script>";
			}
		}

		 else {
			header("location: dangnhap");
		}
	}

	function dangnhap()
	{
		if (isset($_SESSION["in4"])) {
			header("location: Giaodien");
		} else {
			$this->getviews("loginnhanvien", [
				"page" => "login",
				"ketqua" => "ketqua"
			]);
		}
	}
	function xulydangnhapnv()
	{
		if (isset($_REQUEST['btndangnhapnv'])) {
			$db= new database();
			$taikhoan = $_REQUEST['taikhoan'];
			$taikhoan = stripslashes($taikhoan);
		    $taikhoan = mysqli_real_escape_string($db->connect,$taikhoan);// check ký tự lạ tài khoản
			$matkhau = $_REQUEST['matkhau'];
			$matkhau = stripslashes($matkhau);
			$matkhau = mysqli_real_escape_string($db->connect,$matkhau);// check ký tự lạ mật khẩu
			$matkhau = md5($matkhau);
			// Check Anti-CSRF 
			$input =$_POST['input2'];
		}
	    if($input == $_SESSION['captcha2'])
	    {
	      $in4 = $this->mtaikhoan->xulydangnhapnv($taikhoan, $matkhau);
			if (!is_null($in4)) {
			header("Location:giaodien");
			$_SESSION['in4'] = $in4;
			$_SESSION['submit1'] = true;
			$this->giaodien();
			} else {
				header("Location:dangnhap");
				$_SESSION['message1'] = "* Tài khoản hoặc mật khẩu không đúng";
			}  
	    }
	    else
	    {
            	header("Location:dangnhap");
	        $_SESSION['message2'] = "* Sai catpcha!!!";
	    	
	    }

	}
	function logout()
	{
		// unset($_SESSION['informationUser']);
		unset($_SESSION['in4']);
		unset($_SESSION['submit1']);
		unset($_SESSION['captcha2']);	
		header("location: dangnhap");
	}

	public function xemChiTietNhanVien()
	{
		$row= (json_decode($_SESSION['in4'],true));
	if (isset($_SESSION['submit1']) && $_SESSION['submit1']==true && $row['IDChucVu']==2) {
		$id = $_REQUEST['id'];
		$data = $this->mNhanvien->getThongTinNhanVien($id);
		die(json_encode($data));
	}
	else
	{
		header("location: dangnhap");
	}
	}
}
