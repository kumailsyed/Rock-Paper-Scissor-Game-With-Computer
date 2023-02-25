<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rock paper Scissor></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<link rel="stylesheet" href="style.css">

<body>
    <div class="box">
        <h1>Rock Paper Scissors</h1>
        <form action="index.php" method="post" autocomplete="off">
            <select name="choice" class="form-control">
                <option value="">Select</option>
                <option value="rock">rock</option>
                <option value="paper">paper</option>
                <option value="scissor">scissor</option>

            </select>

            <input type="submit" name="shoot" value="Shoot" class="btn btn-success" />
        </form>
        <?php
        if (isset($_POST['shoot'])) {
            $choice = $_POST['choice'];
            $compChoice = rand(0, 2);
            if ($choice == "") {
                echo "<div class=\"alert alert-danger\" role=\"alert\">Please enter a valid choice!</div>";
            } else if ($choice == "rock" || $choice == "paper" || $choice == "scissor") {
                echo "<div class=\"alert alert-danger\" role=\"alert\">you choose $choice!</div>";
            }
            switch ($compChoice) {
                case 0:
                    echo "<div class=\"alert alert-dark\" role=\"alert\"><strong>the computer choose rock</strong></div>";
                    break;
                case 1:
                    echo "<div class=\"alert alert-dark\" role=\"alert\"><strong>the computer choose paper</strong></div>";
                    break;
                case 2:
                    echo "<div class=\"alert alert-dark\" role=\"alert\"><strong>the computer choose scissor</strong></div>";

                    break;
            }

            if (($choice == "rock" && $compChoice == 0) || ($choice == "paper" && $compChoice == 1) || ($choice == "scissor" && $compChoice == 3)) {
                echo "<div class=\"alert alert-info\" role=\"alert\">you chose the same as computer chose></div>";
            } elseif (($choice == "rock" && $compChoice == 2) || ($choice == "paper" && $compChoice == 0) || ($choice == "scissors" && $compChoice == 1)) {
                echo " <div class=\"alert alert-success\" role=\"alert\">You have beaten the computer!</div>";
            } else {
                echo "<div class=\"alert alert-danger\" role=\"alert\">The computer beats you!</div>";
            }
        } else {
            echo "<div class=\"alert alert-danger\" role=\"alert\">Please enter a valid choice!</div>";
        }

        ?>
    </div>

</body>

</html>