<!DOCTYPE html>
<html>
<head>
	<title>Simple Quiz</title>
	<meta charset="utf-8" http-equiv="refresh">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
  		$("#computer").click(function(){
    		$(".computer_qsnans").slideToggle(1000);
  			});
  		$("#politics").click(function(){
    		$(".politics_qsnans").slideToggle(1000);
  			});
		});

		
		
	</script>


	<style type="text/css">
		body
		{
			background: linear-gradient(to right,#d63908,#e8dc48);
		}
		#computer , #politics
		{
			cursor: pointer;
			background: linear-gradient(to right,blue,#bfbfe0);
			color: #fff;
			padding: 0px 0px 0px 5px;
			border-radius: 5px;
			width: 100%;
		}
		.computer_qsnans , .politics_qsnans
		{
			display: none;
			font-size: 20px;
		}
		#c_ans
		{
			display: none;
		}
		#sbmt
		{
			background-color: #193e96;
			color: #fff;
			padding: 5px;
			outline: none;
			cursor: pointer;
			text-decoration: none;
			font-size: 20px;
			font-weight: 900;
			font-family: monospace;
		}
		#sbmt:hover
		{
			color: #193e96;
			background-color: #fff;
			transition: 0.5s;
		}


		@media only screen and (max-width: 600px) {
		  .computer_qsnans , .politics_qsnans 
		  {

		  	font-size: 15px;
		    
		  }
		}

	</style>
</head>
<body>

	<div class="main" id="mn">
		<h1>
			<u style="color: #fff;">5 points for per question</u>
		</h1>
		<form method="GET" action="index.php" required>
		<div id="computer">
			<p>
				<h1>
					Technology
				</h1>
			</p>
		</div>
		

		<!-- Tecnical -->
		<div class="computer_qsnans">
			<p>
				<h4>
					1.What is the full form of HTML
					
						<div>
						<input type="radio" name="tech_question_1" id="" value="A">
						A) High Transparent Markup Language
						<input type="radio" name="tech_question_1" id="" value="B">
						B) Hyper Text Markup Language
						<input type="radio" name="tech_question_1" id="" value="C">
						C) Hyper Text Mechanical Language
						<input type="radio" name="tech_question_1" id="" value="D">
						D) Hidro Terminate Markup Language
						</div>
					
				</h4>
			</p>

			<p>
				<h4>
					2.What is upcoming android version
					
						<div>
						<input type="radio" name="tech_question_2" id="" value="A">
						A) Pie
						<input type="radio" name="tech_question_2" id="" value="B">
						B) N
						<input type="radio" name="tech_question_2" id="" value="C">
						C) L
						<input type="radio" name="tech_question_2" id="" value="D">
						D) Q
						</div>
					
				</h4>
			</p>
		</div>
		<!-- Political  -->


		<div id="politics">
			<p>
				<h1>
					Political
				</h1>
			</p>
		</div>

		<div class="politics_qsnans">
			<p>
				<h4>
					3.The present Lok Sabha is the
					
						<div>
						<input type="radio" name="poli_question_1" id="" value="A">
						A) 14th Lok Sabha
						<input type="radio" name="poli_question_1" id="" value="B">
						B) 15th Lok Sabha
						<input type="radio" name="poli_question_1" id="" value="C">
						C) 16th Lok Sabha
						<input type="radio" name="poli_question_1" id="" value="D">
						D) 17th Lok Sabha
						</div>
					
				</h4>
			</p>

			<p>
				<h4>
					4.The minimum age to qualify for election to the Lok Sabha is
					
						<div>
						<input type="radio" name="poli_question_2" id="" value="A">
						A) 25 years
						<input type="radio" name="poli_question_2" id="" value="B">
						B) 21 years
						<input type="radio" name="poli_question_2" id="" value="C">
						C) 18 years
						<input type="radio" name="poli_question_2" id="" value="D">
						D) 35 years
						</div>
					
				</h4>
			</p>
		</div>
		
			<input type="submit" value="Submit" name="sbt" id="sbmt" >
		</form>
		
	</div><!--Main div end-->

	

</body>
</html>

<?php
if(isset($_GET['sbt']))
{
	error_reporting(0);

$answer1_for_qsn1 = $_GET['tech_question_1'];
$answer2_for_qsn2 = $_GET ['tech_question_2'];
$answer3_for_qsn3 = $_GET ['poli_question_1'];
$answer4_for_qsn4 = $_GET ['poli_question_2'];
 

/*echo $answer1_for_qsn1 ;
echo $answer2_for_qsn2 ;
echo $answer3_for_qsn3 ;
echo $answer4_for_qsn4 ;*/

$count = 0;

if($answer1_for_qsn1 == "B")
{
	$count = $count+5;
}
if($answer2_for_qsn2 == "D")
{
	$count = $count+5;
}
if($answer3_for_qsn3 == "D")
{
	$count = $count+5;
}
if($answer4_for_qsn4 == "A")
{
	$count = $count+5;
}

echo '<h1 style="color:#fff;">You have got '.$count.' points</h1>';

?>

<div id="c_ans">
			<h2 style="color:#fff;">
				The correct answers are <br>
				1->B&nbsp;2->D&nbsp;3->D&nbsp;4->A<br>
				
			</h2>	
			<a href="index.php" style="text-decoration: none;color: #fff;background-color: #193e96;padding: 5px;" type="button" id="pag">Play Again</a>

		</div>
<script type="text/javascript">
	document.getElementById("c_ans").style.display="block";
	document.getElementById("mn").style.display="none";
</script>



<?php
}

?>
