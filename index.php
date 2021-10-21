<?php

include __DIR__ . "/partials/database.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- /bootstrap -->
    <title>PHP Dischi</title>
</head>

<body>
    <?php 
        require_once __DIR__ . "/partials/template/header.php"
    ?>
    <main>
        <!-- container albums -->
        <div class="albums container pt-5">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3  gx-4">
                <!-- print albums -->
                <?php foreach ($database as $album): ?>
                    <div class="album col mb-4">
                        <div class="box p-5 p-sm-3">
                            <img src="<?= $album["poster"]; ?>" alt="poster <?= $album["title"]; ?>" class="pt-xl-3">
                            <h3 class="text-white pt-5 pt-sm-4">
                                <?= $album["title"]; ?>
                            </h3>
                            <div class="author pt-3 pt-sm-2">
                                <?= $album["author"]; ?>
                            </div>
                            <div class="year">
                                <?= $album["year"]; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                <!-- /print albums -->
            </div>
        </div>
        <!-- /container album -->
    </main>

    <!-- js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <!-- /js -->
</body>

</html>