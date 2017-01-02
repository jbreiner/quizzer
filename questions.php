<?php include ('includes/header.php'); ?>
				<div class="current">Question 1 of 5</div>
				<p class="question">
					What does PHP stand for?
				</p>
				<form method="post" action="process.php">
					<ul class="choices">
						<li><input type="radio" name="choice" value="1">PHP: Hypertext Preprocessor</li>
						<li><input type="radio" name="choice" value="1">Private Home Page</li>
						<li><input type="radio" name="choice" value="1">Personal Home Page</li>
						<li><input type="radio" name="choice" value="1">Personal Hypertext Preprocessor</li>

					</ul>
					<input type="submit" value="submit">

				</form>

<?php include ('includes/footer.php'); ?>