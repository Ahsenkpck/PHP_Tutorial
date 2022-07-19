<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Form</title>

    <style>
        body {
            font-size: 18px;
            font-weight: bold;
        }

        span {
            background-color: plum;
            padding: 10px;
        }

        .success {
            background-color: greenyellow;
            padding: 10px;
        }

        .error {
            background-color: goldenrod;
            padding: 10px;
        }
    </style>

</head>

<body class="container">

    <form action="03-form.php" method="POST" style="text-align:center; padding:30px;">
        <h3>Bir sayı girin</h3>
        <input type="number" name="value" style="width:100px;" required placeholder="Sayı girin"><br><br>
        <input type="submit" name="" value="Kontrol Et" style="border-radius:5px;padding:5px;background-color:grey">
        <br><br>

        <?php
        function control()
        {
            if (isset($_POST['value'])) {
                $number = $_POST['value'];

                if (empty($number)) {
                    echo "Lütfen boş bırakmayın";
                } else {
                    if ($number % 3 === 0) {
                        echo "<div class=success>Girdiğiniz sayı 3 ile tam bölünür!</div>";
                    } else {
                        $new_number = $number;
                        $new_number++;
                        while ($new_number % 3 !== 0) {
                            $new_number++;
                        }
                        echo "<div class=error>Girdiğiniz sayı 3 ile tam bölünmez! Bölünen ilk sayı " . $new_number . "</div>";
                    }
                }
            } else {
                echo "Lütfen formu doldurun";
            }
        }
        control();
        ?>
    </form>

</body>

</html>