<?php

namespace app\assets;

use yii\web\AssetBundle;
class VueAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
    ];
    public $js = [
        '@npm/vue/dist/vue.min.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
