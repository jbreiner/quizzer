<?php include ('includes/database.php'); ?>
<?php
	/**
	*Get Total Questions
	*/
	$query = "SELECT * FROM questions";
	//Get Results
	$results = $mysqli->query($query) or die($mysqli->error.__LINE__);
	$total = $results->num_rows;


?>

<?php include ('includes/header.php'); ?>
				<h2> Test Your PHP Knowledge</h2>
				<p> This is a multiple choice quiz to test your knowledge of php</p>
				<ul>
					<li><strong>Number of Questions:</strong><?php echo $total; ?></li>
					<li><strong>Type of Quiz:</strong>Multiple Choice</li>
					<li><strong>Estimated Time:</strong><?php echo $total*.5;?> Minutes</li>
					
				</ul>
					<a href="question.php?n=1" class="start">Start Quiz</a>
<?php include ('includes/footer.php'); ?>