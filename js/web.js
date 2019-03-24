	$(document).ready(function(){
			$("#btnModal").click(function(){
				$("#caption").val("");
				$("#id").val("");
				$("#buttonInput").val("Input");
				$("#foto1").attr("src","images/assets/profile/profile_orang.png");
				$("#myModal").modal("show");


			})
			$(".commentBtn").click(function(){
				
				$("#commentModal").modal("show");
			})
	})
		function readURL(photo){
			
			var x = document.getElementById('foto').files[0].size;

					if(photo.files && photo.files[0]){
						var reader=new FileReader();
						reader.onload=function(e){
							document.getElementById('foto1').src=e.target.result
						}
						reader.readAsDataURL(photo.files[0]);
					}
			if(x>2*1024*1024){
				document.getElementById('buttonInput').disabled = true;
			}else{
				document.getElementById('buttonInput').disabled = false;
			}
		}
	

		
                  
      
		