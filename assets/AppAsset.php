<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'vendors/educenter/plugins/bootstrap/bootstrap.min.css',
        'vendors/educenter/plugins/slick/slick.css',
        'vendors/educenter/plugins/themify-icons/themify-icons.css',
        'vendors/educenter/plugins/animate/animate.css',
        'vendors/educenter/plugins/aos/aos.css',
        'vendors/educenter/plugins/venobox/venobox.css',

        'vendors/abahlana/css/pager2.css',
        'vendors/fontawesome/css/all.min.css',
        'vendors/educenter/css/style.css',
    ];
    public $js = [
        'vendors/educenter/plugins/jQuery/jquery.min.js',
        'vendors/educenter/plugins/bootstrap/bootstrap.min.js',
        'vendors/educenter/plugins/slick/slick.min.js',
        'vendors/educenter/plugins/aos/aos.js',
        'vendors/educenter/plugins/venobox/venobox.min.js',
        'vendors/educenter/plugins/mixitup/mixitup.min.js',
        'vendors/educenter/js/script.js',
    ];
    /* public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ]; */
}
