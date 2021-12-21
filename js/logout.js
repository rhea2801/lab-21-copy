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
   $.ajax({
		url:'../controller/controller.php',
		type: 'POST',
		data:{
			functionname: 'leaders'
		},
		success: function(response){
		var arr = response.split(',');

			for(var i=0;i<arr.length;i++)
			{
				if(arr[i][0] == '['){
					arr[i]=arr[i].slice(1);
				}
				if(arr[i][arr[i].length-1] == ']'){
					arr[i]=arr[i].slice(0,arr[i].length-1);
				}
				var b=arr[i].replace(/\"/g,'');
				b=b.replace('[','');
				$('#'+(i+1)).html(b);
			}
			},
			error:function(err)
			{
				console.log(err);
			}
	});

});