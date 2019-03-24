<?php
	session_start();
	include "classes/class.php";
	include "classes/Request.php";
	$cls = new crud();
	$valid = new RequestData('foto');

	$posting=$_POST['posting'];
	$btn = $_POST['buttonInput'];
	$status_id= $_POST['id'];
	
	$date_array = getdate();
	$formated_date = "";
	$formated_date .= $date_array['year']. "-";
	$formated_date .= $date_array['mon']. "-";
	$formated_date .= $date_array['mday'] ;
	
	$validfile = basename($_FILES['foto']['name']);
	$isImage = $valid->isValidImage('foto');
	$file = Request::post('foto')->setUploadImage('foto');
	echo $validfile;
	if($validfile==""){
		$field = [
			"writed_by"=>$_SESSION['email'],
			"status_content"=>$posting,
			"Date"=>$formated_date,
		];
	}else{
		
		
		if($isImage){
			$field = [
				"writed_by"=>$_SESSION['email'],
				"status_content"=>$posting,
				"Date"=>$formated_date,
				"images"=>$file	
			];
		}else{
			?>
			<script type="text/javascript">
				alert("Image Tidak Valid");
				//location.href="index2.php";
			</script>
			<?php
			break;
		}
	}
	
 	print_r($field);
	
	$where=[
			'field'=>'status_id',
			'value'=>$status_id
	];
	echo $btn;
	if($btn=="Input"){
		
			$cls->insert('status',$field);
			?>
			<script type="text/javascript">
				alert("Saved");
			</script>
			<?php
		}else if($btn == "edit"){
			
			$cls->edit('status',$field,$where);
			?>
			<script type="text/javascript">
				alert("Edited");
			</script>
			<?php
	}
	
	
	
?>