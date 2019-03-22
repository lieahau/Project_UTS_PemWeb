<?php
	session_start();
	include "classes/class.php";

	$cls = new crud();
	$posting=$_POST['posting'];
	$btn = $_POST['buttonInput'];
	$status_id= $_POST['id'];
	
	$date_array = getdate();
	$formated_date = "";
	$formated_date .= $date_array['year']. "-";
	$formated_date .= $date_array['mon']. "-";
	$formated_date .= $date_array['mday'] ;
	
	$validfile = basename($_FILES['foto']['name']);
	echo $validfile;
	if(isset($validfile)){
		$field = [
			"writed_by"=>$_SESSION['userName'],
			"status_content"=>$posting,
			"Date"=>$formated_date,
		];
	}else{
		$uploaddir = 'uploads/';
		$uploadfile = $uploaddir . basename($_FILES['foto']['name']);
		$field = [
			"writed_by"=>$_SESSION['userName'],
			"status_content"=>$posting,
			"Date"=>$formated_date,
			"Images"=>$uploadfile	
		];
	}
	
 	
	
	$where=[
			'field'=>'status_id',
			'value'=>$status_id
	];
	echo $btn;
	if($btn=="Input"){	
			move_uploaded_file($_FILES['foto']['tmp_name'] , $uploadfile);
			$cls->insert('status',$field);
		}else if($btn == "edit"){
			move_uploaded_file($_FILES['foto']['tmp_name'] , $uploadfile);
			$cls->edit('status',$field,$where);
	}
?>