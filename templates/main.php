<!DOCTYPE html>
    <html>
<head>
    <meta http-equiv="content-type" content="text/html" charset="utf-8">
    <meta name="description" content="<?=$page_description?>">
    <meta name="Keywords" content="<?=$page_keywords?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="assets/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-theme.css">
    <title><?=$title?></title>
</head>
<body>

<div class="row">
<div class="col-xs- 12 col-sm-12 col-md-12 col-lg-12">

<div class="header">

    <ul>
        <li><a class="btn btn-default" href="?temp=home&page=1"> Главная</a></li>
        <li>О нас</li>
        <li>Контакты</li>
    </ul><img src="assets/logo1.svg" class="img-responsive col-sm-offset-3">
    <?=$userpanel?>
</div>
</div>
</div>


<div class="col-xs- 12 col-sm-12 col-md-10 col-lg-10 block">
    <?=$all_content?>
    <?=$pagination?>
</div>
</body>
</html>