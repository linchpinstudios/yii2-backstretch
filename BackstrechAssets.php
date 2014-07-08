<?php
/**
 * @link http://www.linchpinstudios.com/
 * @copyright Copyright (c) 2014 Linchpin Studios LLC
 * @license http://opensource.org/licenses/MIT
 */

namespace linchpinstudios\backstretch;

use yii\web\AssetBundle;

/**
 * Asset bundle for the Twitter bootstrap css files.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class BackstrechAssets extends AssetBundle
{
    public $sourcePath = '@vendor/linchpinstudios/yii2-backstretch';
    public $js = [
        'js/jquery.backstretch.min.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}