<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Leefstijl</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>BMI Berekenen</h2>
                <form action="bmi.php" method="post">
                    <input type="number" name="weight" placeholder="Gewicht in kg" required><br/>
                    <br/><input type="number" name="height" placeholder="Lengte in meters" step="0.01" required><br/>
                    <br/>
                    <input type="submit" value="Bereken BMI" class="btn btn-primary"><br/>
                    <br/><img src="BMI.jpg" class="img-fluid" alt="BMI Foto" width="400" height="400">
                </form>
            </div>
            <div class="col-md-6">
                <h2>BMR Berekenen</h2>
                <form action="bmr.php" method="post">
                    <input type="number" name="weight" placeholder="Gewicht in kg" required>
                    <input type="number" name="height" placeholder="Lengte in meters" step="0.01" required><br/>
                    <br/>
                    <input type="number" name="age" placeholder="Leeftijd" required><br/>
                    <br/>
                    <label for="gender">Geslacht:</label>
                    <input type="radio" name="gender" value="male" required> Man
                    <input type="radio" name="gender" value="female" required> Vrouw<br/>
                    <br/>
                    <input type="submit" value="Bereken BMR" class="btn btn-primary"><br/>
                    <img src="BMR.jpg" class="img-fluid" alt="BMR Foto" width="300" height="300">
                </form>
            </div>
        </div>
    </div>
</body>
</html>