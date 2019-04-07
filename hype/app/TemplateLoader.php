<?php
namespace App;


/**
 * simple class used to load custom templates based on the month and year
 * being viewed. If a custom template isnt found, it will load the default
 * template
 */
class TemplateLoader {
    private $default_template;
    private $_month;
    private $_year;
    private $_month_year_template = 'theme/year_month/%s/%s/index';
    private $_year_template = 'theme/year/%s/index';

    public function __construct($default_template) {
        $this->_default_template = $default_template;
    }

    /**
     * this will render the template for a given $month and $year passing in
     * the $template_variables. It will also add the $month and $year to the
     * $template_variables
     * 
     * @param $year int -- the year to check
     * @param $month int -- the month to check
     * @param $template_variables array -- any variables to be passed into the
     *      rendered tempalte
     * @return ?
     */
    public function render($year, $month=false, array $template_variables = array(), $force_default = false){
        $this->_year = (int) $year;
        $this->_month = (int) $month;
        $template_variables['month'] = $this->_month;
        $template_variables['year'] = $this->_year;

        if($force_default){
            $template_name = $this->_default_template;
        }elseif($this->_month && $this->_year){
            $template_name = $this->getMonthYearTemplate();
        }elseif($this->_year){
            $template_name = $this->getYearTemplate();
        }else{
            $template_name = $this->_default_template;
        }

        return view($template_name, $template_variables);
    }

    /**
     * method used to check if the _month and _year properties have a custom
     * template defined
     * 
     * @return string
     */
    private function getMonthYearTemplate(){
        $path = sprintf($this->_month_year_template, $this->_year, $this->_month);
        $dot_path = str_replace('/', '.', $path);
        var_dump($dot_path, view()->exists($dot_path));
        if(view()->exists($dot_path)){
            return $dot_path;
        }

        return $this->_default_template;
    }

    /**
     * method used to check if the _year property has a custom
     * template defined
     * 
     * @return string
     */
    private function getYearTemplate(){
        $path = sprintf($this->_year_template, $this->_year);
        $dot_path = str_replace('/', '.', $path);

        if(view()->exists($dot_path)){
            return $dot_path;
        }

        return $this->_default_template;
    }
}