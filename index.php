<!-- created by 4mir z4r3i -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>bmi</title>
        <link rel="stylesheet" href="style.css"/>

    </head>
    <body>
        <h2 style="color: darkgoldenrod;">BMI</h2>
        <?php
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$weight = $_POST['weight'];
			$height = $_POST['height'];
			$height = $height /100;
			//Calculate bmi
			$bmi = $weight / ($height * $height);
			$label = '';
			//Calculate weight
			if ($bmi < 18.5) {
				$label = 'Underweight';
			} elseif ($bmi >= 18.5 && $bmi <= 24.9) {
				$label = 'Normal weight';
			} elseif ($bmi >= 25 && $bmi <= 29.9) {
				$label = 'Overweight';
			} else {
				$label = 'Obese';
			}
			echo "<p>Your BMI is: " . round($bmi, 2) . " ($label)</p>";
		}
	?>
        <form action="" method="post">
            <input type="text" name="weight" placeholder="your weight (kg)"/><br>
            <input type="text" name="height" placeholder="your height (cm)"/><br>
            <center><input type="submit"></center>
        </form><br>
        <h3 style="color: aliceblue;">created by <a href="https://github.com/z4r3i" style="color: darkgoldenrod;">z4r3i</a></h3>
    </body>
</html>
<!-- created by 4mir z4r3i -->
