<?php
/**
 * Author: dungang
 * Date: 2017/4/9
 * Time: 14:18
 */

namespace dungang\touchswipe;


use yii\web\AssetBundle;

class SwipeAsset extends AssetBundle
{
    public $sourcePath = '@bower/jquery-touchswipe/dist';

    public $js = [
        'jquery.touchSwipe.min.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}