<?php
/**
 * Author: dungang
 * Date: 2017/4/9
 * Time: 14:18
 */

namespace dungang\touchswipe;


use yii\web\AssetBundle;

class TouchSwipeAsset extends AssetBundle
{
    public $sourcePath = '@bower/jquery-touchswipe';

    public $publishOptions = [
        'except'=>['/demos/','/docs/'],
        'only'=>['*.js']
    ];

    public $depends = [ 'yii\web\JqueryAsset'];

    public function init()
    {
        if (YII_DEBUG) {
            $this->js = ['jquery.touchSwipe.js'];
        } else {
            $this->js = ['jquery.touchSwipe.min.js'];
        }
    }
}