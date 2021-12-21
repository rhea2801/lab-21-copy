$(document).ready(function(){


	$('#logout').click(function(){
		$.ajax({
			type:'POST',
			url:'../controller/controller.php',
			data:{
				"functionname":'logout'
			},
			success:function(data){
				
				window.location.href="../index.php";
			},
			error:function(error){
			}
		});

	});
   

});