<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>SMK</title>

    <!-- Bootstrap core CSS -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">


    <link href="styles/style.css" rel="stylesheet">

</head>

<body>
<div class="wrapper">
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container_navbar">

        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <?php if($this->is_logined()):?>
                    <li><a href="index.php">Главная</a></li>
                    <li><a href="?nav=profile">Кабинет</a></li>
                    <li><a href="?nav=exit">Выйти</a></li>
                <?php else:?>
                    <li><a href="index.php">Главная</a></li>
                    <li><a href="?nav=contact">Контакты</a></li>
                    <li><a href="?nav=login">Войти</a></li>
                <?php endif;?>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>





