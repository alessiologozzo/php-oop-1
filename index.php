<?php
    include "./classes/Movie.php";
    include "./datas/data.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>PHP OOP</title>
</head>
<body>
    <div class="container pt-1 pb-4">
        <h1 class="text-center pb-4">PHP OOP</h1>

        <?php
            $dim = count($datas["titles"]);
            $movies = array($dim);

            for($i = 0; $i < $dim; $i++)
                $movies[$i] = new Movie($datas["titles"][$i], $datas["votes"][$i], $datas["genres"][$i], $datas["lengths"][$i]);
            
            foreach($movies as $movie)
                echo $movie->print();
        ?>
    </div>
</body>
</html>