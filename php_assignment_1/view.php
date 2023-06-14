<?php
	require_once('database.php');
	$res = $database->read();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>McPio Pet Health Cover | Home</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Eduardo Dos Santos Pio">
    <meta name="description" content="PHP Assignment 1">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php" title="Go to the Home page">Home</a></li>
                <li><a href="view.php" title="View the Data Inserted">View</a></li>
                <li><a href="about.php" title="Learn more about us">About</a></li>
            </ul>
        </nav>
    </header>
<div class="container">
	<div class="row">
		<table class="table">
			<tr>
				<th>#</th>
				<th>Name</th>
				<th>Breed</th>
				<th>Gender</th>
				<th>Spayed or Neutered</th>
				<th>Date of Birth</th>
				<th>Weight (KG)</th>
			</tr>
			
			<?php
				while($r = mysqli_fetch_assoc($res)){
			?>
					<tr>
						<td><?php echo $r['id']; ?></td>
						<td><?php echo $r['pet_name']; ?></td>
						<td><?php echo $r['pet_breed']; ?></td>
						<td><?php echo $r['pet_gender']; ?></td>
						<td><?php echo $r['spayed_neutered']; ?></td>
						<td><?php echo $r['pet_dob']; ?></td>
						<td><?php echo $r['pet_weight']; ?></td>
					</tr>
				<?php
				}
			?>
		</table>
	</div>
</div>
</body>
</html>
