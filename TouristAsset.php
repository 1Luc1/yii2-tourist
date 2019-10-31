<?php

namespace luc\tourist;

use yii\web\AssetBundle;

class TouristAsset extends AssetBundle {

    public $sourcePath = '@npm/bootstrap-tourist';
    public $css = [
        'bootstrap-tourist.css'
    ];
    public $js = [
        'bootstrap-tourist.js'
    ];

    public function init() {
        parent::init();
    }

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

}
