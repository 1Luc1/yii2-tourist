<?php

namespace luc\tourist;

use yii\base\Widget;
use yii\helpers\Json;
use yii\web\View;

class Tourist extends Widget {

    public $message;

    /**
     * @var string $name The javascript variable name used for the tour
     */
    public $name = 'tour';

    /**
     * @var string $scope The scope used for the javascript variable, e.g. 'window'. Leave blank for local scope.
     */
    public $scope;

    /**
     * @var array the options for the underlying Bootstrap Tour JS plugin.
     * Please refer to the corresponding [Bootstrap Tour plugin API](http://bootstraptour.com/api/) for possible options.
     */
    protected $_clientOptions = [];

    public function init() {
        parent::init();
        if ($this->message === null) {
            $this->message = 'Hello World';
        }
    }

    public function run() {
        $view = $this->getView();

        if ($this->clientOptions !== false) {
            $varName = $this->getVarName();
            $options = empty($this->clientOptions) ? '' : Json::htmlEncode($this->clientOptions);
            $js = "$varName = new Tour($options);\n";
            $view->registerJs($js, View::POS_READY, "tourist");
        }
    }

    public function getVarName() {
        return $this->scope ? $this->scope . '.' . $this->name : $this->name;
    }

    /**
     * @return array
     */
    public function getClientOptions() {
        return $this->_clientOptions;
    }

    /**
     * @param array $clientOptions
     */
    public function setClientOptions($clientOptions) {
        $this->_clientOptions = $clientOptions;
    }

}
