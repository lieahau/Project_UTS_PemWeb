<?php
	include "classes/class.php";
	include "classes/Request.php";
	$valid = new RequestData('foto');
	$cls = new crud();
	$validfile = basename($_FILES['foto']['name']);
	$uploaddir = 'uploads/';
	$uploadfile = $uploaddir . basename($_FILES['foto']['name']);
	$isImage = $valid->isValidImage('foto');
	$file = Request::post('foto')->setUploadImage('foto',"");
	if($validfile==""){
		$field = [
			"birthdate"=>$_POST['date'],
			"first_name"=>$_POST['firstname'],
			"last_name"=>$_POST['lastname']
			
		];
	}else{
		if($isImage){
			$field = [
				"birthdate"=>$_POST['date'],
				"first_name"=>$_POST['firstname'],
				"last_name"=>$_POST['lastname'],
				"profile_picture"=>$file
			];
		}else{
			?>
			<script type="text/javascript">
				alert("Image Tidak Valid");
				location.href="index2.php";
			</script>
			<?php
		}
	}
	
	$where = [
		"field"=>"email",
		"value"=>$_POST['email']
	];
	move_uploaded_file($_FILES['foto']['tmp_name'] , $uploadfile);
	$cls->edit("user",$field,$where);
	
?>
<script type="text/javascript">
				location.href="index2.php";
			</script>