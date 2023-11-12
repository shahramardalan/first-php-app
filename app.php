<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app.css">
    <title>My First PHP App</title>
</head>

<body>
    <?php
        $title = "How AI-Generated Images are ...";
        $description = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil natus fuga quos adipisci nobis! Fuga ipsa quae iusto quos distinctio, illum minima laborum autem amet fugit unde aperiam in beatae voluptatibus quidem atque impedit tenetur reiciendis quod assumenda placeat possimus enim deleniti! Nesciunt, animi ratione quam reiciendis accusantium voluptatum, exercitationem doloribus dolor totam tempora hic voluptatem recusandae! Magnam, accusantium eius, alias eos autem et doloribus quae quisquam commodi soluta repellendus quos expedita iure fugit? Ipsam dolorum distinctio, vitae quia hic repellendus asperiores molestiae id rerum ullam, autem necessitatibus voluptas, reprehenderit voluptatibus incidunt aut tempore sunt eaque cumque. Magnam, alias ex!";
        $url = "https://statusneo.com/wp-content/uploads/2023/02/MicrosoftTeams-image551ad57e01403f080a9df51975ac40b6efba82553c323a742b42b1c71c1e45f1.jpg";
    ?>
    <div class="container">
        <h1><?php echo $title ?></h1>

        <?php
        echo "<img class='image' src=$url>";
        ?>

        <p><?php echo  $description?></p>
    </div>
</body>

</html>