<?php 

class Khachhang extends Acontroller{
	protected $idKhachhang,$taiKhoan, $matKhau, $tenKhachhang,$anhDaiDien, $ngaySinh, $gioiTinh, $diaChi, $CCCD, $eMail, $SDT, $maTaiKhoan, $anhSanPham, $tenSanPham, $loaiSanpham, $gia, $kichThuoc, $moTa;
	public $mKhachhang;
	public $mtaikhoan;
	public $mSanpham;

	public function __construct()
	{
		//model
		
		$this->mKhachhang =$this->getmodel("mKhachhang");
		$this->mtaikhoan = $this->getmodel("mtaikhoan");
		$this->mSanpham= $this->getmodel("mSanpham");
	}
	function Home()
	{
		// $row= (json_decode($_SESSION['informationUser'],true));
		// print_r (json_decode($_SESSION['informationUser']));
		// $row= (json_decode($_SESSION['informationUser'],true));
		// $IDKhachHang= $row['IDKhachHang'];
		// $anhdaidien= $this->mKhachhang->getanhdaidien($IDKhachHang);
		// $tenkhachhang=$this->mKhachhang->gethoten($IDKhachHang);
		$homelsp = $this->mSanpham->getloaisanpham();
		$bds= $this->mSanpham->getsanpham_bds();
		$xeco = $this->mSanpham->getsanpham_xeco();
		$dodientu = $this->mSanpham->getsanpham_dodientu();
		$donoithat = $this->mSanpham->getsanpham_donoithat();
		$this->getviews("Khachhang",[
			"page"=>"Home",
			// "anhdaidien"=> $anhdaidien,
			// "tenkhachhang"=> $tenkhachhang,
			"homelsp"=> $homelsp,
			"bds"=> $bds,
			"xeco"=> $xeco,
			"dodientu"=> $dodientu,
			"donoithat"=> $donoithat,
		]);
	}
	function Homeid($id)
	{

	$homelsp = $this->mSanpham->getloaisanpham();		
	$motaid= $this->mSanpham->getmota_id($id);
	$id= $this->mSanpham->getsanpham_id($id);

		$this->getviews("Khachhang",[
			"page"=>"Homeid",
			"homelsp"=> $homelsp,
			"id"=> $id,
			"motaid"=>$motaid,
			]);
	}
	function search()
	{
			if(isset($_REQUEST['timkiem']))
			{
			$homelsp = $this->mSanpham->getloaisanpham();
			$db= new database();
			$timkiem = mysqli_real_escape_string($db->connect,$_REQUEST['timkiem']); // check ký tự lạ
			$ketqua= $this->mKhachhang->searchsp($timkiem);
			$this->getviews("Khachhangctsp",[
			"page"=>"Hometimkiem",
			"homelsp"=> $homelsp,
			"showsptimkiem"=> $ketqua,
		]);
			}
			else
			{
				header("Location: Home");
			}
	}

		function dangsanpham()
	{
		if(isset($_SESSION["submit"]) && $_SESSION['submit']==true)
		{
		$loaisanpham = $this->mSanpham->getloaisanpham();
		$this->getviews("dangsanpham",["page"=>"dangsanpham","loaisanpham"=> $loaisanpham]);
		}
		else{
			header("Location: dangnhap");
		}

	}

	function themsanpham()
	{		
		if(isset($_SESSION["submit"]))
		{
if(isset($_REQUEST['btndangsanpham']))
		{
		$error= 0;
		  $thongBaoLoi = array();
    if (!preg_match('/^[0-9\/A-Za-zÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s,]*$/', $_REQUEST['tensanpham']) or empty($_REQUEST['tensanpham'])) {
			$_SESSION['saitensanpham'] = "* Tên sản phẩm không hợp lệ";
		        $this->error = $error++;
    }

    if (empty($_REQUEST['gia']) || !is_numeric($_REQUEST['gia'])==1) {
			$_SESSION['saigia'] = "* Giá không hợp lệ. Giá 0đ nếu nó miễn phí";
		        $this->error = $error++;
    }
    if (!preg_match('/^[0-9\/A-Za-zÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s,]*$/', $_REQUEST['kichthuoc']) or empty($_REQUEST['kichthuoc'])) {
			$_SESSION['saikichthuoc'] = "* Giá trị kích thước không hợp lệ";
		        $this->error = $error++;
    }
    if(!is_numeric($_REQUEST['loaisanpham'])==1)
    {
			$_SESSION['sailoai'] = "* Loại sản phẩm không hợp lệ";
		        $this->error = $error++;
    }
          if($error > 0)
       {	
       	header("Location: dangsanpham");
        //  echo "<script>alert('Sai rồi');
        //  location.href = 'dangky';
        // </script>";
       die();
       }
			$row= (json_decode($_SESSION['informationUser'],true));
			$idKhachhang= $row['IDKhachHang'];
			// $idKhachhang= $_REQUEST['idkhachhang'];
			$loaisanpham= $_REQUEST['loaisanpham'];
			$tenSanPham= $_REQUEST['tensanpham'];
			$gia= $_REQUEST['gia'];
			$kichThuoc= $_REQUEST['kichthuoc'];
			$motachitiet=$_REQUEST['motachitiet'];
			$newname1="0";
			$newname2="0";
			$newname3="0";
			$newname="0";

		}
		// var_dump($_FILES);
		// die();
		if(isset($_FILES['hinhanhlienquan']))
		{

			$file=$_FILES['hinhanhlienquan'];
			$file_name = $file['name'];
			$file_name = substr(md5($file['name']),0,6);
			if(!$file_name=='')
			{
			$check = getimagesize($_FILES["hinhanhlienquan"]["tmp_name"]);
			if($check !== false) {
			//   echo "File is an image - " . $check["mime"] . ".";
			  $uploadOk = 1;
			} else {
				echo "<script>alert('File không đúng định dạng')
				location.href = 'dangsanpham';
				</script>";
			  $uploadOk = 0;
			}
			if ($_FILES["hinhanhlienquan"]["size"] > 500000) {
				echo "<script>alert('Kích thước file quá lớn')
				location.href = 'dangsanpham';
				</script>";
				$uploadOk = 0;
			  }
			$randommo= rand(0, 100000);
			 $rename= 'Upload'.date('Ymd').$randommo;
			$newname= $rename.$file_name.".jpg";
			if($file['type'] == 'image/jpeg' || $file['type'] == 'image/jpg' || $file['type'] == 'image/png')
			{
				move_uploaded_file($file['tmp_name'],'data/sanpham/'.$newname);
			}
			else{
				echo "<script>alert('File không đúng định dạng')
				location.href = 'dangsanpham';
				</script>";
				$file_name= '';
			}
		}
		else
		{
				echo "<script>alert('Phải có ảnh sản phẩm')
				location.href = 'dangsanpham';
				</script>";
		}

		}
		if(isset($_FILES['hinhanhlienquan1']))
		{
			
			$file=$_FILES['hinhanhlienquan1'];
			$file_name1 = $file['name'];
			if(!$file_name1=='')
			{
			$check = getimagesize($_FILES["hinhanhlienquan1"]["tmp_name"]);
			if($check !== false) {
			//   echo "File is an image - " . $check["mime"] . ".";
			  $uploadOk = 1;
			} else {
				echo "<script>alert('File không đúng định dạng')
				location.href = 'dangsanpham';
				</script>";
			  $uploadOk = 0;
			}
			if($uploadOk == 0)
			{
				
			}
			if ($_FILES["hinhanhlienquan1"]["size"] > 500000) {
				echo "<script>alert('Kích thước file ảnh mô tả 1 quá lớn')
				location.href = 'dangsanpham';
				</script>";
				$uploadOk = 0;
			  }
			$randommo= rand(0, 100000);
			 $rename= 'Upload'.date('Ymd').$randommo;
			$newname1= $rename.$file_name1;
			if($file['type'] == 'image/jpeg' || $file['type'] == 'image/jpg' || $file['type'] == 'image/png')
			{
				move_uploaded_file($file['tmp_name'],'data/sanpham/'.$newname1);
			}
			else{
				echo "<script>alert('Hãy kiểm tra lại file - không thể lưu')
				location.href = 'dangsanpham';
				</script>";
				$file_name1= '';
			}

			}
		}
		if(isset($_FILES['hinhanhlienquan2']))
		{
			
			$file=$_FILES['hinhanhlienquan2'];
			$file_name2 = $file['name'];
			if(!$file_name2=='')
			{
			$check = getimagesize($_FILES["hinhanhlienquan2"]["tmp_name"]);
			if($check !== false) {
			//   echo "File is an image - " . $check["mime"] . ".";
			  $uploadOk = 1;
			} else {
				echo "<script>alert('File không đúng định dạng')
				location.href = 'dangsanpham';
				</script>";
			  $uploadOk = 0;
			}
			if($uploadOk == 0)
			{
				
			}
			if ($_FILES["hinhanhlienquan2"]["size"] > 500000) {
				echo "<script>alert('Kích thước hình mô tả 2 quá lớn')
				location.href = 'dangsanpham';
				</script>";
				$uploadOk = 0;
			  }
			$randommo= rand(0, 100000);
			 $rename= 'Upload'.date('Ymd').$randommo;
			$newname2= $rename.$file_name2;
			if($file['type'] == 'image/jpeg' || $file['type'] == 'image/jpg' || $file['type'] == 'image/png')
			{
				move_uploaded_file($file['tmp_name'],'data/sanpham/'.$newname2);
			}
			else{
				echo "<script>alert('Hình mô tả 2 không thể lưu')
				location.href = 'dangsanpham';
				</script>";
				$file_name2= '';
			}
		}
		}
    if(isset($_FILES['hinhanhlienquan3']))
    {
      
      $file=$_FILES['hinhanhlienquan3'];
      $file_name3 = $file['name'];
   
      if(!$file_name3=='')
      {   
      $file_name3 =substr(md5($file['name']),0,6);
      $randommo= rand(0, 100000);
       $rename= 'Upload'.date('Ymd').$randommo;
      $newname3= $rename.$file_name3.".jpg";
      if($file['type'] == 'image/jpeg' || $file['type'] == 'image/jpg' || $file['type'] == 'image/png')
      {
        move_uploaded_file($file['tmp_name'],'data/test/'.$newname3);
      }
      else{
        echo "<script>alert('File 3 không đúng định dạng')
        location.href = 'dangsanpham';
        </script>";
        $file_name3= '';
      }
    }
    }
	$dangsanpham= $this->mKhachhang->addbaidang($idKhachhang,$loaisanpham,$newname,$newname1,$newname2,$newname3,$tenSanPham,$gia,$kichThuoc,$motachitiet);

		
		if($dangsanpham==1)
		{	

				echo "<script>alert('Sản phẩm đã được đăng, đang đợi duyệt')
				location.href = 'xemtrangthai/$idKhachhang';
				</script>";
			
		}
		else
		{
				echo "<script>alert('Tên file quá dài, hãy đổi lại tên trước khi update')
				location.href = 'dangsanpham';
				</script>";
			

		}

		}
		else{
			header("Location: dangnhap");
		}
		
	}

	function Chitietsanpham($idbd)
	{
		$ttbd = $this->mSanpham->getbdid($idbd);
		$homelsp = $this->mSanpham->getloaisanpham();
		$halienquan = $this->mSanpham->gethalienquan($idbd);
		$this->getviews("Khachhangctsp",[
			"page"=>"chitietsanpham",
			"homelsp"=> $homelsp,
			"ttbd"=> $ttbd,
			"halienquan"=> $halienquan,
		]);
	}

	function dangnhap()
	{
		if(isset($_SESSION["informationUser"]))
		{
			header("location: Home");
		}
		else{
		$this->getviews("loginkhachhang",["page"=>"login",
		"ketqua"=>"ketqua"]);
		}

	}
	function logout()
	{
		// unset($_SESSION['informationUser']);
		// session_destroy();
		unset($_SESSION['informationUser']);
		unset($_SESSION['submit']);
		unset($_SESSION['captcha']);
		header("location: Home");
	}
	function xulydangnhap()
	{
		if(isset($_REQUEST['btndangnhap']))
		{	// Check Anti-CSRF token
			// checkToken( $_REQUEST[ 'user_token' ], $_SESSION[ 'session_token' ], 'index.php' );
			$db= new database();
			$eMail=$_REQUEST["email"];
		    $eMail = stripslashes($eMail);
		    $eMail = mysqli_real_escape_string($db->connect,$eMail);// check ký tự lạ tài khoản
			$matKhau= $_REQUEST["matkhau"];
			$matKhau = stripslashes($matKhau);
			$matKhau = mysqli_real_escape_string($db->connect,$matKhau);// check ký tự lạ mật khẩu
			$matKhau = md5($matKhau);
			// Check Anti-CSRF 
			$input =$_POST['input'];
		    if($input == $_SESSION['captcha'])
		    {
		    $kq= $this->mtaikhoan->xulydangnhap($eMail,$matKhau);
			if(!is_null($kq))
			{	header("Location: Home");
				$_SESSION['informationUser'] = $kq;
				$_SESSION['submit']= true;
				// $this->xulythongtin($_SESSION['informationUser']);
				$this->home();
			}
			else
			{	
				header("Location: dangnhap");
				$_SESSION['message1'] = "* Tài khoản hoặc mật khẩu không đúng";
			}
		        
		    }
		    else
		    {	
		    	if(isset($_SESSION['captcha']))
		    	{
		    	header("Location: dangnhap");
		        $_SESSION['message'] = "* Mã captcha sai nha!!!";	
		    	}

		    }
		}			
		// if(!is_null($kq)){
		// }
	}
	function dangky()
	{
		if(isset($_SESSION["informationUser"])&& $_SESSION['submit']==true)
		{
			header("location: Home");
		}
		else{
		$this->getviews("loginkhachhang",["page"=>"register",]);
		}

	}

	function xulydangky()
	{
		if(isset($_REQUEST['btnRegister']))
		{
			$error= 0;
  $thongBaoLoi = array();
    if (!preg_match('/^[a-zA-ZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s]{4,}$/', $_REQUEST['tenkhachhang']) or empty($_REQUEST['tenkhachhang'])) {
        $_SESSION['saiten'] = "* Tên không hợp lệ";
        $this->error = $error++;
    }
    if (!preg_match('/^[a-zA-Z0-9]{4,}+[@gmail.com]{10,10}$/', $_REQUEST['email']) or empty($_REQUEST['email'])) {
		$_SESSION['saiemail'] = "* Email không chính xác, hoặc đã tồn tại";
		 $this->error = $error++;
    }
    if (!preg_match('/^[03|08|09|07]{2,2}+[0-9]{8,8}$/', $_REQUEST['sdt']) or empty($_REQUEST['sdt'])) {
		$_SESSION['saisdt'] = "* Số điện thoại bắt đầu với 03 08 09 07";
        $this->error = $error++;
        
    }
    if (!preg_match('/^[0-9\/]{1,}+[A-Za-zÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s,]/', $_REQUEST['diachi']) or empty($_REQUEST['diachi'])) {
	$_SESSION['saidiachi'] = "* Địa chỉ không bỏ trống";
        $this->error = $error++;
    }
    if (!preg_match('/^[0-9]{9,12}$/', $_REQUEST['CCCD']) or empty($_REQUEST['CCCD'])) {
	$_SESSION['saiCMND'] = "* Số CMND không chính xác";
	    $this->error = $error++;
    }
    if (empty($_REQUEST['ngaysinh'])) {
	$_SESSION['saingaysinh'] = "* Ngày sinh không bỏ trống";
  		$this->error = $error++;
    }

    $dateOfBirth = $_REQUEST['ngaysinh'];
    $today = date("Y-m-d");
	if (strtotime($today) < strtotime($dateOfBirth)){
		$_SESSION['saingaysinh'] ="* Ngày sinh không hợp lệ";
	}
	
	

	// Validate password strength

	$uppercase = preg_match('@[A-Z]@', $_REQUEST['matkhau']);
	$lowercase = preg_match('@[a-z]@', $_REQUEST['matkhau']);
	$number    = preg_match('@[0-9]@', $_REQUEST['matkhau']);
	$specialChars = preg_match('@[^\w]@', $_REQUEST['matkhau']);
//!$uppercase || !$lowercase || !$number || !$specialChars || 
    if (!$uppercase || !$lowercase || !$number || !$specialChars || empty($_REQUEST['matkhau']) || strlen($_REQUEST['matkhau']) < 8) {
	$_SESSION['saimatkhau'] = "* Mật khẩu phải nhiều hơn 8 ký tự, bao gồm ít nhất một chữ hoa, một chữ số và một ký tự đặc biệt";
	$this->error = $error++;
    }
    if (empty($_REQUEST['rpassword']) or $_REQUEST['matkhau']!==$_REQUEST['rpassword']) {
	$_SESSION['sainhaplaipass'] = "* Mật khẩu nhập lại không đúng";
	$this->error = $error++;
    }
      if($error > 0)
       {	
       	header("Location: dangky");
        //  echo "<script>alert('Sai rồi');
        //  location.href = 'dangky';
        // </script>";
       die();
       }
	 		$db= new database();
    		$tenKhachhang= mysqli_real_escape_string($db->connect,$_REQUEST['tenkhachhang']); // check ký tự lạ
			$ngaySinh= $_REQUEST['ngaysinh']; 
			$gioiTinh= $_REQUEST['gioitinh'];
			$SDT= $_REQUEST['sdt'];
			$diaChi= mysqli_real_escape_string($db->connect,$_REQUEST['diachi']) ;
			$eMail=$_REQUEST['email'];
			$CCCD= $_REQUEST['CCCD'];
			$matKhau= $_REQUEST['matkhau'];
			$matKhau = md5($matKhau);

	}
	if(is_numeric($gioiTinh)==1 && is_numeric($CCCD)==1 && is_numeric($SDT)==1){ // check number hay không
		$kq= $this->mtaikhoan->dangky($tenKhachhang,$ngaySinh,$gioiTinh,$SDT,$diaChi,$eMail,$CCCD,$matKhau);
		if($kq)
		$this->getviews("loginkhachhang",[
			"page"=>"register",
			"result"=>$kq
	]);
	}
	else
	{
		header("Location: dangky");
		$_SESSION['hack'] = "Warring: Đừng cố làm điều ngu ngốc. Tôi biết bạn là ai đấy";
		die();
	}
}

	function xemtrangthai()
	{
		if(isset($_SESSION["submit"]) && $_SESSION['submit']==true)
		{
		$row= (json_decode($_SESSION['informationUser'],true));
		$idKhachHang = $row['IDKhachHang'];
		$homelsp = $this->mSanpham->getloaisanpham();
		$bdkhachhangcd= $this->mSanpham->sanphamidcd($idKhachHang);
		$bdkhachhangdd= $this->mSanpham->sanphamiddd($idKhachHang);
		$this->getviews("Khachhang",[
		"page"=>"trangthaibd",
		"homelsp"=> $homelsp,
		"bdkhachhangcd"=> $bdkhachhangcd,
		"bdkhachhangdd"=> $bdkhachhangdd,
	]);
		}
		else{
			header("Location: ../dangnhap");
		}

	}
	function myinfo()
	{
			if(isset($_SESSION["submit"]) && $_SESSION['submit']==true)
		{

		$row= (json_decode($_SESSION['informationUser'],true));
		$IDKhachHang= $row['IDKhachHang'];
		$anhdaidien= $this->mKhachhang->getanhdaidien($IDKhachHang);
		$tenkhachhang=$this->mKhachhang->gethoten($IDKhachHang);
		$ngaysinh=$this->mKhachhang->getngaysinh($IDKhachHang);
		$gioitinh=$this->mKhachhang->getgioitinh($IDKhachHang);
		$sdt=$this->mKhachhang->getsdt($IDKhachHang);
		$diachi=$this->mKhachhang->getdiachi($IDKhachHang);
		$CCCD=$this->mKhachhang->getCCCD($IDKhachHang);
		$email=$this->mKhachhang->getemail($IDKhachHang);
		$matkhau=$this->mKhachhang->getmatkhau($IDKhachHang);
		$this->getviews("info",[
		"page"=>"myinfo",
		"anhdaidien"=> $anhdaidien,
		"tenkhachhang"=> $tenkhachhang,
		"ngaysinh"=> $ngaysinh,
		"gioitinh"=> $gioitinh,
		"sdt"=> $sdt,
		"diachi"=> $diachi,
		"CCCD"=> $CCCD,
		"email"=> $email,
		"matkhau"=> $matkhau,
	]);
		}
		else{
			header("Location: dangnhap");
		}
	}

	function updateinfo()
	{

		if(isset($_SESSION["submit"]) && $_SESSION['submit']==true)
		{

		if(isset($_REQUEST["saveInfo"]))
	{
		$db= new database();
		$error= 0;
		    $thongBaoLoi = array();
    if (!preg_match('/^[a-zA-ZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s]{4,}$/', $_REQUEST['txtTen']) or empty($_REQUEST['txtTen'])) {
        $thongBaoLoi['txtTen']['sai'] = 'Vui Lòng Nhập lại Họ Tên';
        echo "<script>alert('" . $thongBaoLoi['txtTen']['sai'] . "');
        </script>";
        $this->error = $error++;
    }
    if (!preg_match('/^[a-zA-Z0-9]{4,}+[@gmail.com]{10,10}$/', $_REQUEST['txtEmail']) or empty($_REQUEST['txtEmail'])) {
        $thongBaoLoi['txtEmail']['sai'] = 'Vui Lòng Nhập Email(abc@gmail.com)';
        echo "<script>alert('" . $thongBaoLoi['txtEmail']['sai'] . "')
        </script>";
		$this->error = $error++;
    }
    if (!preg_match('/^[03|08|09|07]{2,2}+[0-9]{8,8}$/', $_REQUEST['txtSDT']) or empty($_REQUEST['txtSDT'])) {
        $thongBaoLoi['txtSDT']['sai'] = 'Vui Lòng Nhập SDT';
        echo "<script>alert('" . $thongBaoLoi['txtSDT']['sai'] . "')
        </script>";
       $this->error = $error++;
    }
    if (!preg_match('/^[0-9\/]{1,}+[A-Za-zÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s,]/', $_REQUEST['txtDiaChi']) or empty($_REQUEST['txtDiaChi'])) {
        $thongBaoLoi['txtDiaChi']['sai'] = 'Vui Lòng Nhập Địa Chỉ';
        echo "<script>alert('" . $thongBaoLoi['txtDiaChi']['sai'] . "')
          </script>";
	$this->error = $error++;
    }
    if (!preg_match('/^[0-9]{9,12}$/', $_REQUEST['txtCCCD']) or empty($_REQUEST['txtCCCD'])) {
        $thongBaoLoi['txtCCCD']['sai'] = 'Vui Lòng Nhập lại CCCD';
        echo "<script>alert('" . $thongBaoLoi['txtCCCD']['sai'] . "')
        </script>";
		$this->error = $error++;
    }
    if (empty($_REQUEST['ngaySinh'])) {
        $thongBaoLoi['ngaySinh']['thieu'] = 'Vui Lòng Nhập Ngày Sinh';
        echo "<script>alert('" . $thongBaoLoi['ngaySinh']['thieu'] . "')
        </script>";
	$this->error = $error++;
    }
       if($error > 0)
       {	
         echo "<script>alert('Thay đổi lại');
         location.href = 'myinfo';
        </script>";
       die();
       }
 if(($_REQUEST['pass'])!=="")
 {
 	$row= (json_decode($_SESSION['informationUser'],true));
	$IDKhachHang= $row['IDKhachHang'];
 	$matkhaucu=$this->mKhachhang->getmatkhau($IDKhachHang);
    $checkmatkhau=$_REQUEST['pass'];
    $checkmatkhau=md5($checkmatkhau);
    if ($checkmatkhau !== $matkhaucu) {
        $thongBaoLoi['txtMatKhau']['thieu'] = 'Mật Khẩu Cũ Không Đúng';
        echo "<script>alert('" . $thongBaoLoi['txtMatKhau']['thieu'] . "')
		location.href = 'myinfo';
        </script>";
        die();
    }
    if (empty($_REQUEST['txtMatKhau']) or strlen($_REQUEST['txtMatKhau']) < 6) {
        $thongBaoLoi['txtMatKhau']['thieu'] = 'Vui Lòng Nhập Lại Mật Khẩu (ít nhất là 6 ký tự)';
        echo "<script>alert('" . $thongBaoLoi['txtMatKhau']['thieu'] . "')</script>";
    }
    if (empty($_REQUEST['txtMatKhau2']) or $_REQUEST['txtMatKhau']!==$_REQUEST['txtMatKhau2']) {
        $thongBaoLoi['txtMatKhau']['thieu'] = 'Nhập Lại Mật Khẩu Nhập Lại Không Đúng';
        echo "<script>alert('" . $thongBaoLoi['txtMatKhau']['thieu'] . "')
        location.href = 'myinfo';</script>";
        die();
    }
    }
			$row= (json_decode($_SESSION['informationUser'],true));
			$tenKhachhang= mysqli_real_escape_string($db->connect,$_REQUEST['txtTen']);
			$ngaySinh= $_REQUEST['ngaySinh'];
			$gioiTinh= $_REQUEST['gioiTinh']; // số
			$SDT= $_REQUEST['txtSDT'];// số
			$diaChi= mysqli_real_escape_string($db->connect,$_REQUEST['txtDiaChi']);
			$CCCD= $_REQUEST['txtCCCD']; // Số
			$eMail= mysqli_real_escape_string($db->connect,$_REQUEST['txtEmail']);
			$matKhau= mysqli_real_escape_string($db->connect,$_REQUEST['txtMatKhau']);
			$IDKhachHang= $row['IDKhachHang'];
			$matkhaucu = $this->mKhachhang->getmatkhau($IDKhachHang);
			$newname= $this->mKhachhang->getanhdaidien($IDKhachHang);

}
//ket thuc if saveinfo

		if(isset($_FILES['avatar']))
		{
			
			$file=$_FILES['avatar'];
			$file_name = $file['name'];
			if(!$file_name=='')
			{
			$check = getimagesize($_FILES["avatar"]["tmp_name"]);
			if($check !== false) {
			  $uploadOk = 1;
			} else {
			$_SESSION['fileerror'] = "* File không hợp lệ";
			header("location: myinfo");
			die();
			}
			if ($_FILES["avatar"]["size"] > 500000) {
			$_SESSION['fileerror'] = "* File kích thước quá lớn";
			header("location: myinfo");
			die();
				$uploadOk = 0;
			  }
			$randommo= rand(0, 100000);
			 $rename= 'Upload'.date('Ymd').$randommo;
			$newname= $rename.$file_name;
			if($file['type'] == 'image/jpeg' || $file['type'] == 'image/jpg' || $file['type'] == 'image/png')
			{
				move_uploaded_file($file['tmp_name'],'data/avatar/'.$newname);
			}
			else{
			$_SESSION['fileerror'] = "* File không hợp lệ";
			header("location: myinfo");
				$file_name= '';
				die();
			}
		}
		}
		if(is_numeric($gioiTinh)==1 && is_numeric($SDT)==1 && is_numeric($CCCD)==1){ // check number hay không
		$updatethongtin= $this->mKhachhang->updatethongtin($IDKhachHang,$newname,$tenKhachhang,$ngaySinh,$gioiTinh,$SDT,$diaChi,$CCCD,$eMail);

			if($updatethongtin==1)
			{
				echo "<script>alert('Thay đổi thông tin thành công')
        location.href = 'myinfo';</script>";
			}
			else
			{
				header("Location: myinfo");
			}
		}
		else
		{
		echo "<script>alert('Có gì không ổn hãy kiểm tra')
        location.href = 'myinfo';</script>";	
		}
	}
		else{
			header("Location: dangnhap");
		}




	}
}
?>
