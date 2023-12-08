<?php
$thingsido = [
    ['thing i do' => 'fix laptops and computers and mobiles'],
    ['thing i do' => 'web developer'],
    ['thing i do' => 'install operiating systems']
];
?>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatble" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Antoun</title>
</head>

<body>
    <header>
        <a href="#" class="logo">Antoun</a>
        <nav class="navigation">
            <a href="#services"class="main-btn">things i do</a>
            <a href="#tel"class="main-btn">contact me</a>
        </nav>
    </header>

    <section class="hero">
        <div>
            <h2 class="t">Antoun zahlawi</h2>
            <br>
            <h4 class="hi">complete web developer</h4>
        </div>
</section>
        </div>
    </section>
    <section class="cards" id="services">
        <h2 class="title">things i do</h2>
        <div class="row">
            <?php foreach ($thingsido as $thing) { ?>
                <div class="card">
                    <h1><?php echo $thing['thing i do'] ?>
                </div>
            <?php } ?>
        </div>
    </section>
    <section class="cards" id="tel">
        <h2 class="title">contact me</h2>
        <div class="row">
                <div class="card">
                    <h1>+963 956608213</h1>
            </section>
   </html>