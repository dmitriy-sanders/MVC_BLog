<html>
<head>
    <title></title>
    <meta type="description">
    <meta type="keywords">
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<?php require_once VIEWS . "/parts/header.php"?>
<div class="container mt-5" >
    <div class="header">
        <?php \app\models\LayoutModel::renderHeaderText();?>
    </div>
    <hr>
    <?= $content ?>
    <hr>
    <footer>
        <?php \app\models\LayoutModel::renderFooterText();?>
    </footer>
</div>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="icons/build/build-svgs.js"></script>
</body>
</html>
