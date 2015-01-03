<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="/lib/semantic_master/dist/components/flag.css">
    <link rel="stylesheet" type="text/css" href="/lib/semantic_master/dist/components/dropdown.css">
    <link rel="stylesheet" type="text/css" href="/lib/semantic_master/dist/components/card.css">
    <link rel="stylesheet" type="text/css" href="/lib/semantic_master/dist/components/dimmer.css">
    <link rel="stylesheet" type="text/css" href="/lib/semantic_master/dist/semantic.css">
    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700&subset' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="/core/lib/admin.css">
    <link rel="stylesheet" type="text/css" href="/core/lib/style1.css">
    <meta charset="utf-8" content="text/html" >
    <script type="text/javascript" src="/lib/jquery.js"></script>
    <script type="text/javascript" src="/core/lib/js/script.js"></script>
    <script type="text/javascript" src="/core/lib/js/admin.js"></script>
</head>
<body>
<div class="ui tiered menu">
<div class="menu">
    <a class="<?php if ($part[0] == "Add") echo "active"; ?> item" href="<?=SITE?>Add">
        <i class="users icon"></i>
        Добавить
    </a>
    <a class="<?php if ($part[0] == "Tour") echo "active"; ?> item" href="<?=SITE?>Tour">
        <i class="grid layout icon"></i> Просмотреть
    </a>
    <?php if ($_COOKIE['admin'] == md5("balon_core")) { ?>
        <a class="item" href="<?=SITE?>user/generateinvite">
            <i class="grid layout icon"></i>Сгенерировать инвайт
        </a>
    <?php } ?>
    <div class="right menu">
        <form action="<?=SITE?>tour/search" method="get">
            <div class="item">
                <div class="ui icon input">
                    <input type="text" name="search" placeholder="Search...">
                    <input type="submit" id="baaalon" style="display:none">
                    <i class="search icon" onclick="$('#baaalon').click();"></i>
                </div>
            </div>
        </form>
    </div>
</div>

</div>
