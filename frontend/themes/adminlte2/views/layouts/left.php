<?php
$itemModules = array();
foreach (Yii::$app->params['linkOnHome'] as $moduleId => $show) {
    if ($show == true) {
        $itemModules[] = [
            'label' => ucwords($moduleId),
            'icon' => 'glyphicon glyphicon-circle-arrow-right',
            'url' => '/' . $moduleId,
            'visible' => !Yii::$app->user->isGuest,
        ];
    }
}
?>
<aside class="main-sidebar">

    <section class="sidebar">

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu'],
                'items' => array_merge(
                    [
                        ['label' => 'Menu Yii2', 'options' => ['class' => 'header']],
                        ['label' => 'Debug', 'icon' => 'fa fa-dashboard', 'url' => ['/debug'], 'visible' => YII_ENV == 'dev'],
                        [
                            'label' => 'Login',
                            'icon' => 'glyphicon glyphicon-log-in',
                            'url' => ['site/login'],
                            'visible' => Yii::$app->user->isGuest
                        ],
                    ],
                    $itemModules
                ),
            ]
        ) ?>

    </section>

</aside>
