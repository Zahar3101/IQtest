<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="styles.css" rel="stylesheet">
    <link href="//db.onlinewebfonts.com/c/175e0e83cd889f912fed176709b63dfb?family=Europe" rel="stylesheet" type="text/css"/>
</head>
<body>
<header>
    <div class="top">
        <img src="logo.png" class="logo">
        <ul class="phones">
            <li><a href="tel:+78001005005">8-800-100-5005</a></li>
            <li><a href="tel:+73452522000">+7 (3452) 522-000</a></li>
        </ul>
    </div>

    <div class="topnav">
        <a href="#home">Кредитные карты</a>
        <a class="active"  href="#news">Вклады</a>
        <a href="#contact">Дебетовая карта</a>
        <a href="#about">Страхование</a>
        <a href="#about">Друзья</a>
        <a href="#about">Интернет-банк</a>
    </div>
</header>
<main>

    <nav>
        <ul class="breadcrumb">
            <li><a href="#">Главная</a></li>
            <li><a href="#">Вклады</a></li>
            <li>Калькулятор</li>
        </ul>
    </nav>
    <input type="submit" value="Рассчитать" onclick="Setdata()">
    <p class="test">

    </p>
    <article>

    </article>
</main>
<footer>
    <div class="footer">
        <li><a href="#">Кредитные карты</a></li>
        <li><a href="#">Вклады</a></li>
        <li><a href="#">Дебетовая карта</a></li>
        <li><a href="#">Страхование</a></li>
        <li><a href="#">Друзья</a></li>
        <li><a href="#">Интернет-банк</a></li>
    </div>
</footer>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    function Setdata()
    {
        //alert(1);
        $.ajax({
            method: "POST",
            url: "calc.php",
            data: { value: 1} })
            .done(function( response )
            {
                $("p.test").html(response);
            });
    }
</script>
</html>