<?php
use backend\assets\AppAsset;
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */

dmstr\web\AdminLteAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode(Yii::$app->params['appName'] . ': ' . $this->title) ?></title>
    <?php $this->head() ?>

    <?php
        $directoryNtlAsset = Yii::$app->assetManager->getPublishedUrl('@common.theme/assets');
    ?><link rel="shortcut icon" href="<?= $directoryNtlAsset ?>/img/ntl/favicon_ntl_16.ico" type="image/x-icon" />
    <link href="<?= $directoryNtlAsset ?>/css/site/login.css" rel="stylesheet">
</head>
<body class="login-page">

<?php $this->beginBody() ?>

    <?= $content ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
