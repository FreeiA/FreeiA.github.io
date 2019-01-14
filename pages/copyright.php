<?php
require "../includes/config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $config['title']; ?></title>

    <!-- Bootstrap Grid -->
    <link rel="stylesheet" type="text/css" href="/media/assets/bootstrap-grid-only/css/grid12.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

    <!-- Custom -->
    <link rel="stylesheet" type="text/css" href="/media/css/style.css">
</head>
<body>

<div id="wrapper">

    <header id="header">
        <div class="header__top">
            <div class="container">
                <div class="header__top__logo">
                    <h1><?php echo $config['title']; ?></h1>
                </div>
                <nav class="header__top__menu">
                    <ul>
                        <li><a href="../index.php">Главная</a></li>
                        <li><a href="about_me.php">Обо мне</a></li>
                        <li><a href="<?php echo $config['vk_url']; ?>" target="_blank">Я Вконтакте</a></li>
                    </ul>
                </nav>
            </div>
        </div>

        <div class="header__bottom">
            <div class="container">
                <nav>
                    <ul>
                        <li><a href="#">Безопасность</a></li>
                        <li><a href="#">Программирование</a></li>
                        <li><a href="#">Lifestyle</a></li>
                        <li><a href="#">Музыка</a></li>
                        <li><a href="#">Саморазвитие</a></li>
                        <li><a href="#">Гайды</a></li>
                        <li><a href="#">Обзоры</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <div id="content">
        <div class="container">
            <div class="row">
                <section class="content__left col-md-8">
                    <div class="block">

                        <h3>Правообладателям</h3>
                        <div class="block__content">


                            <div class="full-text">
                               Text Copyright!...
                            </div>
                        </div>
                    </div>


                </section>
                <section class="content__right col-md-4">
                    <?php include "../includes/sidebar.php" ?>
                </section>
            </div>
        </div>
    </div>

    <?php
    include "../includes/footer.php";
    ?>
</div>

</body>
</html>