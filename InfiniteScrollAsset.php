<?php
namespace twofox\infinitescroll;

use yii\web\AssetBundle;

class InfiniteScrollAsset extends AssetBundle
{
    public $sourcePath = '@vendor/2fox/yii2-infinite-scroll/assets';
    public $js = [
        'jquery.infinitescroll.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\widgets\PjaxAsset',
    ];
}
