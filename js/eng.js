
if(window.name=="foo")
	location.reload(true);
$(document).ready(function() { 
	var levels;

	function level() {
		$.ajax({
			type: "POST",
			url: "../dummy.php",
			data: {},
			success: function(data) {
				if (data == "q_1") levels = "level1";
				else if (data == "q_2") levels = "level2";
				else if (data == "q_3") levels = "level3";
				else if (data == "q_4") levels = "level4";
				else if (data == "q_5") levels = "level5";
				else if (data == "q_6") levels = "level6";
				else if (data == "q_7") levels = "level7";
				else if (data == "q_8") levels = "level8";
				else if (data == "q_9") levels = "level9";
				else if (data == "q_10") levels = "level10";
				else if (data == "q_11") levels = "level11";
				else if (data == "q_12") levels = "level12";
				else if (data == "q_13") levels = "level13";
				else if (data == "q_14") levels = "level14";
				else if (data == "q_15") levels = "level15";
				else if (data == "q_16") levels = "level16";
				else if (data == "q_17") levels = "level17";
				else if (data == "q_18") levels = "level18";
				else if (data == "q_19") levels = "level19";
				else if (data == "q_20") levels = "level20";
				else if (data == "congrats")
					window.location.href = "../view/congrats.php";

				check();
			},
			error: function(error) {
				alert("error");
			}
		});
	}
	var count=0;
	

	function check() {
		var ans = $("#level-ans").val();
		var res = ans.toLowerCase();
		var answer = res.replace(/\s+/g, "");
		$.ajax({
			type: "POST",
			url: "../controller/controller.php",
			data: {
				functionname: levels,
				answer: answer
			},
			success: function(data) {
				
				var c= window.location.href;
				console.log(data);
				if (data == 1) {
					$("#level-ans").removeClass("error2");
					if(c.charAt(c.length - 5)=='1')
					{	
					
						c=c.substring(0,c.length-5)+c.substring(c.length-4,c.length);
						window.location.reload();
						
					}
					else
					location.reload(true);
				} else {

					$("#level-ans").val("");
					$("#level-ans").css("border-color", "#fd0703");
					$("#level-ans").addClass("error2");
					$("#level-ans").attr("placeholder", "Incorrect answer");
					$("#incorrect_answer").css("display", "block");
					$("#incorrect_answer").animate(
						{
							top: "57%",
							opacity: "1"
						},
						1500
					);
					$("#incorrect_answer")
						.animate(
							{
								top: "40%",
								opacity: "0"
							},
							1500
						)
						.delay("1500");
					$("#incorrect_answer").animate(
						{
							top: "80%"
						},
						100
					);
				}
			},
			error: function(error) {
				console.log(error);
			}
		});
	}
	$("#level-submit").click(function(event) {
		event.preventDefault();
		level();
		
	});
	document.onkeypress = function keypressed() {
		if (window.event.keyCode == 13) level();
	};

	$("#level-ans").click(function(event) {
		event.preventDefault();
		$("#level-ans").removeClass("error2");
		$("#level-ans").attr("placeholder", "Enter your Answer");
	});
});