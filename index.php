<!DOCTYPE html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.0/js/bootstrap.min.js"></script>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="styles.css" rel="stylesheet">
    <link href="//db.onlinewebfonts.com/c/175e0e83cd889f912fed176709b63dfb?family=Europe" rel="stylesheet" type="text/css"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.0/css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>jQuery UI Datepicker - Default functionality</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $( function() {
            $( "#datepicker1" ).datepicker();
        } );
    </script>
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
    <div class="container col-6">

        <div class="row">


        <div class="form-group col-6">
            <label for="datepicker1">Калькулятор</label>
            <p>Дата оформления вклада: <input type="text" id="datepicker1"></p>
        </div>
        </div>
        <div class="form-group">
            <label for="summvk">Сумма вклада</label>
            <input type="text" class="form-control" id="summvk">
        </div>
        <div class="form-group">
            <input type="range" class="form-control-range" min="1000" max="3000000" step="1" id="formControlRange" onchange="setValue1(this.value)">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Срок вклада</label>
            <select class="form-control" id="srokvklada">
                <option>1 год</option>
                <option>2 года</option>
                <option>3 года</option>
                <option>4 года</option>
                <option>5 лет</option>
            </select>
        </div>
        <label for="exampleFormControlSelect1">Пополнение вклада</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="Popvk" id="Popvk1" value="false" checked>
            <label class="form-check-label" for="Popvk1">
                Нет
            </label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="radio" name="Popvk" id="Popvk2" value="true">
            <label class="form-check-label" for="Popvk2">
                Да
            </label>
        </div>
        <div class="form-group">
            <label for="summpvk">Сумма пополнения вклада</label>
            <input type="text" class="form-control" id="summpvk">
        </div>
        <div class="form-group">
            <input type="range" class="form-control-range" min="1000" max="3000000" step="1" id="formControlRange1" onchange="setValue(this.value)">
        </div>
        <button type="submit" class="btn btn-primary" onclick="Setdata()">Рассчитать</button>
        <label for="exampleFormControlSelect1" id = "res">Результат: </label>
    </div>

    <!--<div>
        <a href="about">Калькулятор</a>
        <a href="about">Дата оформления вклада</a>
        <a href="about">Сумма вклада</a>
        <a href="about">Срок вклада</a>
        <a href="about">Пополенение вклада</a>
        <a href="about">Сумма пополнения вклада</a>
    </div>
    <input type="submit" value="Рассчитать" onclick="Setdata()">
    -->


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

<script>
    function Setdata()
    {
        //alert(1);
        $.ajax({
            method: "POST",
            url: "calc.php",
            data: {
                datepicker1: $("#datepicker1").val(),
                summvk: $("#summvk").val(),
                srokvklada: $("#srokvklada").val(),
                popvk: $('input[name=Popvk]:checked').val(),
                summpvk: $("#summpvk").val(),
            } })
            .done(function( response )
            {
                $("#res").html(response);
            });
    }
    function setValue(val)
    {
        document.getElementById('summpvk').value= val;
    }
    function setValue1(val)
    {
        document.getElementById('summvk').value= val;
    }
</script>
</html>