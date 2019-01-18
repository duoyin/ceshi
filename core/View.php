<?php
/**
 * Created by PhpStorm.
 * User: ming
 * Date: 2019/1/17
 * Time: 下午5:49
 */
namespace core;
class View
{
    //模板文件
    protected $file;
    //模板变量
    protected $vars = [ ];

    public function make( $file ) {
        $this->file = 'web/view/'.$file.'.html';
        return $this;
    }
    public function with( $name, $value ) {
        $this->vars[ $name ] = $value;
        return $this;
    }
    public function __toString() {
        extract($this->vars);
        include $this->file;
        return '';
    }
}