<?php

/*
 * Source Code Yii2 Advanced template Modification
 * Please contact our website for more information :
 * http://www.example.co.id/contact-us
 */

namespace taslin\fontawesome;

use yii\web\AssetBundle;

/**
 * Description of FontAwesome
 *
 * @author Andhy Taslin <taslin.webdeveloper@gmail.com>
 * @since 1.0
 */
class AssetBundle extends AssetBundle {

    public $sourcePath = '@vendor/taslin/fontawesome/dist';
    public $css = ['css/font-awesome.min.css'];
    public $publishOptions = ['forceCopy' => YII_DEBUG];
    public $depends = [
        'yii\bootstrap\BootstrapAsset'
    ];

}
