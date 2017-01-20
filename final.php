
<?php include ('includes/database.php'); ?>
<?php include ('includes/header.php'); ?>
				<h2>You're Done!</h2>
				<p>Congrats! You have completed the test</p>
				<p>Final Score:  <?php echo $_SESSION['score']; ?> </p>
				<a href="question.php?n=1" class="start">Take Again</a>
<?php include ('includes/footer.php'); ?>

<?php $_SESSION['score'] = 0; ?>