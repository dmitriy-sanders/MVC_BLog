<html>
<head>
    <title></title>
    <meta type="description">
    <meta type="keywords">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<?php require_once VIEWS . "/parts/header_menu.php" ?>
<div class="container mt-5">
    <div class="banners mb-4">
        <?php \app\models\LayoutModel::renderBanners() ?>
    </div>
    <div class="header">
        <?php \app\models\LayoutModel::renderHeaderText();?>
    </div>
    <div class="payment-methods">
        <div class="row justify-content-center">
            <div class="col-md-3">
                <img src="images/qiwi.png" width="210" height="60">
            </div>
            <div class="col-md-3">
                <img src="images/robokassa.png" width="200" height="60">
            </div>
            <div class="col-md-3">
                <img src="images/webmoney.png" width="200" height="60">
            </div>
            <div class="col-md-3">
                <img src="images/yandex.png" width="200" height="60">
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col col-md-3">
            <?php \app\models\LayoutModel::renderCatsList() ?>
        </div>
        <div class="col-md-9">
            <?= $content ?>
        </div>
    </div>
    <hr>

    <footer>
        <?php \app\models\LayoutModel::renderFooterText();?>
    </footer>
    <div class="modal fade" tabindex="-1" id="cart" role="dialog" aria-labelledby="myModalLabel">
        <?php require_once VIEWS . "/Cart/cart_modal.php"; ?>
    </div>
</div>



<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/currency.js"></script>
<script type="text/javascript" src="js/cart_ajax.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="icons/build/build-svgs.js"></script>

</body>
</html>
