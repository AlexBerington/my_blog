<!DOCTYPE html>
    <html>
<head>
    <meta http-equiv="content-type" content="text/html" charset="utf-8">
    <meta name="description" content="<?=$page_description?>">
    <meta name="Keywords" content="<?=$page_keywords?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../assets/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../assets/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../assets/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/bootstrap-theme.css">
    <title><?=$title?></title>
</head>
<body>

<div class="col-xs-12 col-lg-12 col-sm-12 col-md-12">
<nav class="navbar-inverse ">
        <div class="navbar ">
            <ul class="nav navbar-nav">
                <li><a href="/home">Главная</a></li>
                <li><a href="/publ_today">Новое</a></li>
                <li><a href="/best">Интересное</a></li>
            </ul>

        <?=$userpanel?>
        </div>









    <!-- /.nav-collapse -->
    <!-- /.container -->
</nav><!-- /.navbar -->
</div>

<div class="col-lg-offset-2">
        <a href="/"> <img src="../assets/logo1.svg" class="img-responsive col-lg-offset-2"></a></div>



<div class="col-xs- 12 col-sm-12 col-md-12 col-lg-12">
    <?=$all_content?>
</div>
    <div>
    <?=$pagination?>
    </div>


</body>
</html>