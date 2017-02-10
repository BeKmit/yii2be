<?php
namespace common\themes\adminlte2;

use yii\base\Exception;
use yii\web\AssetBundle;

/**
 * NTL AdminLte AssetBundle
 * @since 0.1
 */
class NtlAdminLteAsset extends AssetBundle
{
    public $sourcePath = '@common.theme/assets';
    public $css = [
        'css/skins/skin-ntl-light.min.css',
    ];
    public $js = [];
}
