<?php
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */


if (Yii::$app->controller->action->id === 'login') {
/**
 * Do not use this code in your template. Remove it.
 * Instead, use the code  $this->layout = '//main-login'; in your controller.
 */
    echo $this->render(
        'main-login',
        ['content' => $content]
    );
} else {

    if (class_exists('backend\assets\AppAsset')) {
        backend\assets\AppAsset::register($this);
    } else {
        app\assets\AppAsset::register($this);
    }

    dmstr\web\AdminLteAsset::register($this);
    common\themes\adminlte2\NtlAdminLteAsset::register($this);

    $directoryAsset = Yii::$app->assetManager->getPublishedUrl('@vendor/almasaeed2010/adminlte/dist');
    $directoryNtlAsset = Yii::$app->assetManager->getPublishedUrl('@common.theme/assets');
    ?>
    <?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode(Yii::$app->params['appName'] . ': ' . $this->title) ?></title>
        <link rel="shortcut icon" href="<?= $directoryNtlAsset ?>/img/ntl/favicon_ntl_16.ico" type="image/x-icon" />
        <?php $this->head() ?>

        <?php $this->registerCssFile($directoryNtlAsset . "/css/layouts/main.css"); ?>

        <script>
            var AdminLTEOptions = {
                sidebarExpandOnHover: false,
                // BoxRefresh Plugin
                enableBoxRefresh: true,
                // Bootstrap.js tooltip
                enableBSToppltip: true
            };
        </script>
    </head>
    <body class="skin-ntl-light sidebar-mini sidebar-collapse">
    <?php $this->beginBody() ?>
    <div class="wrapper">

        <?= $this->render(
            '@common.theme/views/layouts/header.php',
            ['directoryAsset' => $directoryAsset, 'directoryNtlAsset' => $directoryNtlAsset]
        ) ?>

        <?= $this->render((
                is_file(Yii::getAlias('@app/modules/' . $this->context->module->id . '/views/layouts/left.php'))
                    ? '@app/modules/' . $this->context->module->id . '/views/layouts/left.php'
                    : 'left.php'
            ),
            ['directoryAsset' => $directoryAsset]
        )
        ?>

        <?= $this->render(
            'content.php',
            ['content' => $content, 'directoryAsset' => $directoryAsset]
        ) ?>

    </div>
    <?php $this->endBody() ?>
    </body>
    </html>
    <?php $this->endPage() ?>
<?php } ?>
