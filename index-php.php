<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>PHP-DISCHI</title>
</head>
<body>

    <?php include __DIR__ . '/data/db.php'; ?>
    
    <header>
    
        <i class="fab fa-spotify"></i>

        <select id="genere">
            <option value="rock">Rock</option>
            <option value="indie">Indie</option>
            <option value="rap">Rap</option>
            <option value="trap" selected>Trap</option>
        </select>

    </header>

    <main>

        <div class="m-container">

            <?php foreach($database as $data) { ?>

            <div class="box">

                <img src="<?php echo $data['poster'] ?>" alt="">
                <h3><?php echo $data['author'] ?></h3>
                <p><?php echo $data['year'] ?></p>

            </div>

            <?php } ?>

        </div>

    </main>

</body>
</html>