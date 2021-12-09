<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Document</title>
</head>

<body>


    <header id="site-header" class="p-3">
        <img class="logo" src="./assets/img/spotify_logo.svg" alt="" />
    </header>
    <main id="site-main">
        <div class="container">
            <?php require __DIR__ . '/layouts/app.php'; ?>

        </div>
    </main>




    <!-- vue cdn -->
    <script src='https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/axios/0.24.0/axios.min.js'
        integrity='sha512-u9akINsQsAkG9xjc1cnGF4zw5TFDwkxuc9vUp5dltDWYCSmyd0meygbvgXrlc/z7/o4a19Fb5V0OUE58J7dcyw=='
        crossorigin='anonymous' referrerpolicy='no-referrer'></script>
    <script src="./assets/js/main.js"></script>
</body>

</html>