<?php
namespace HypeReport;

class Template{
    private $variables = [];
    private $_base_directory;

    public function __construct($base_directory){
        $this->_base_directory = $base_directory;
    }

    public function render($template, array $variables = array()){
        $this->variables = $variables;

        ob_start();
        require $this->_base_directory . '/'. $template;

        $template = ob_get_contents();

        ob_end_clean();

        return $template;
    }

    public function get($key, $default = null){
        if(array_key_exists($key, $this->variables)){
            return $this->variables[$key];
        }

        return $default;
    }
}