<?php
/**
 * Created by PhpStorm.
 * User: ming
 * Date: 2019/1/17
 * Time: 下午4:35
 */
namespace web\controller;
use core\View;
use Gregwar\Captcha\CaptchaBuilder;
use Gregwar\Captcha\PhraseBuilder;


class Index
{
    public $view;
    public function __construct() {
        $this->view = new View();
    }

    public function show() {
        return $this->view->make('index')->with('haha','gege');
    }
    public function login() {
        return $this->view->make('index')->with('haha','gege');
    }
    public function code() {
        header('Content-type: image/jpeg');
//        $builder = new CaptchaBuilder;
        $phraseBuilder = new PhraseBuilder(5);
        $builder = new CaptchaBuilder(null, $phraseBuilder);
        $builder->build(100,50);
        $_SESSION['phrase'] = $builder->getPhrase();
        $builder->output();
    }
}