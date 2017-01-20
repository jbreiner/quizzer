<?php include 'includes/database.php'; ?>
<?php 
	//Set question number
	$number = (int) $_GET['n'];

	/*
	*Get total Questions
	*/
	$query = "SELECT * FROM `questions`";
	//Get Results
	$results =$mysqli->query($query) or die($mysqli->error.__LINE__);
	$total = $results->num_rows;
	
	/*
	*	Get Question
	*/
	$query = "SELECT * FROM `questions`
				WHERE question_number = $number";
	//Get result
	$result = $mysqli->query($query) or die($mysqli->error.__LINE__);
	
	$question = $result->fetch_assoc();
	/*
	*	Get Choices
	*/
	$query = "SELECT * FROM `choices`
				WHERE question_number = $number";
	//Get result
	$choices = $mysqli->query($query) or die($mysqli->error.__LINE__);
	
?>
<?php include ('includes/header.php'); ?>
				<div class="current">Question <?php echo $question['question_number'] ?> of <?php echo $total; ?></div>
				<p class="question">
					<?php echo $question['text']; ?>
				</p>
				<form method="post" action="process.php">
					<ul class="choices">
						<?php while ($row = $choices->fetch_assoc()): ?>
							<li><input type="radio" name="choice" value="<?php echo $row['id']; ?>" /> <?php echo $row['text']; ?> </li>

						<?php endwhile ?>
					</ul>
					<input type="submit" value="submit">
					<input type="hidden" name="number" value="<?php echo $number; ?>" />

				</form>

<?php include ('includes/footer.php'); ?>