Tourist Extension for Yii 2
===========================

Yii2 extension for the the Tourist component: https://github.com/IGreatlyDislikeJavascript/bootstrap-tourist

The Tourist component is a fork of Bootstrap Tour: https://github.com/sorich87/bootstrap-tour

This extension reuses code from the yii2-bootstrap-tour extension: https://github.com/MyCademy/yii2-bootstrap-tour

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist luc1/yii2-tourist "*"
```

or add

```
"luc1/yii2-tourist": "*"
```

to the require section of your `composer.json` file.

## Register Asset


```php
class AppAsset extends yii\web\AssetBundle
{
    public $depends = [
        // other dependencies
        'luc\tourist\TouristAsset'        
    ];
}
```

Usage
-----

Once the extension is installed, simply use it in your code by :

```php
use luc\tourist\Tourist;

<?= Tourist::widget::widget(
    'clientOptions' => [ //Bootstrap Tour Options, see: http://bootstraptour.com/api/
        'steps' => [
            [
                'element' => "#element1",
                'title' => "Step 1",
                'content' => "Content of my step 1",
            ],
            [
                'element' => "#element2",
                'title' => "Step 2",
                'content' => "Content of my step 2",
            ],
        ],
    ]); 
?>
```
