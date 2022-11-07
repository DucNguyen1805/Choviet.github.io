<?php 
class Acontroller 
{
	public function getmodel($model)
	{
		require_once "./Model/".$model.".php";
		return new $model;
	}	
	public function getviews($views,$data=[])
	{
		require_once "./views/".$views.".php";
	}
}
 ?>