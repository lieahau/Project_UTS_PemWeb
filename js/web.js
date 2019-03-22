	$(document).ready(function(){
			$("#btnModal").click(function(){
				$("#myModal").modal("show");
			})
			$(".commentBtn").click(function(){
				
				$("#commentModal").modal("show");
			})
	})
		function readURL(photo){
					if(photo.files && photo.files[0]){
						var reader=new FileReader();
						reader.onload=function(e){
							document.getElementById('foto1').src=e.target.result
						}
						reader.readAsDataURL(photo.files[0]);
					}
			
		}
		
                  
      
		