<?php include 'includes/database.php'; ?>
<?php session_start(); ?>
<?php
	//check to see if score set
	if(!isset($_SESSION['score'])){
		$_SESSION['score'] = 0;

	}

	if ($_POST){
		$number = $_POST['number'];
		$selected_choice = $_POST['choice'];
		$next = $number+1;

		/*
		*Get total Questions
		*/
		$query = "SELECT * FROM `questions`";
		//Get Results
		$results =$mysqli->query($query) or die($mysqli->error.__LINE__);
		$total = $results->num_rows;


		/*
		*Get Correct choice
		*/
		$query = "SELECT * FROM `choices` 
			WHERE question_number = $number AND is_correct = 1";
		//Get Results
		$result = $mysqli->query($query) or die($mysqli-error.__LINE__);

		//Get row
		$row = $result->fetch_assoc();

		//Set Correct Choice
		$correct_choice = $row['id'];

		//Compare
		if($correct_choice == $selected_choice){
			//Answer is correct
			$_SESSION['score']++;
		}

		//Check if last question
		if($number == $total){
			header("Location: final.php");
			exit();
		}else{
			header("Location: question.php?n=".$next);

		}

	}