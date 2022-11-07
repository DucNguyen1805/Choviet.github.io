<?php 
class App
{
	protected $controller="Khachhang";
	protected $controller2="Nhanvien";
	protected $action="Home";
	protected $action2= "giaodien";
	protected $params=[""];
	
	function __construct(){
		$arr = $this ->UrlProcess();
		// print_r($arr);

		if(is_null($arr)){
			$arr[0]="home";
		}

		if($arr[0]=="nhanvien")
		{
			require_once "./Controller/".$this->controller2.".php";
			$this->controller2 = new $this->controller2;
			if(isset($arr[1])){
			if(method_exists($this->controller2, $arr[1]))
			{
				$this->action2 = $arr[1];
			}

		}	
			unset($arr[0]);
			unset($arr[1]);
			$this->params = $arr?array_values($arr):[];
			call_user_func_array([$this->controller2,$this->action2],$this->params);
		}
		else{
		// xử lý chuỗi 
		//Array ( [0] => Khachhang [1] => chitietsanpham [2] => 1 [3] => 3 )

		// xử lý controller
		if(file_exists("./Controller/".$arr[0].".php"))
		{
			$this->controller= $arr[0];
			unset($arr[0]);
		}			

	require_once "./Controller/".$this->controller.".php";
			$this->controller = new $this->controller;
		// Xử lí Action
		if(isset($arr[0])){
			if(method_exists($this->controller, $arr[0]))
			{
				$this->action = $arr[0];
			}
			unset($arr[0]);

		}

		// Xử lí params
		$this->params = $arr?array_values($arr):[];

		call_user_func_array([$this->controller,$this->action],$this->params);

		// echo $this->controller . "<br/>";
		// echo $this->action . "<br/>";
		// var_dump($params);	
	}
}	

	function UrlProcess(){

		if (isset($_GET['url']))
		{
			return explode("/",filter_var(trim($_GET["url"], "/")));
		}
	}
}
