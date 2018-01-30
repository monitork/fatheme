<?php namespace HoneyDT\FATheme\Libraries;

use HoneyDT\FATheme\Config\Theme;

class FATheme
{
    private $_layout;
    private $_theme;
    private $_data;
    private $_meta_tags = array();
    private $_title;

    public function __construct()
    {
        $config = new Theme();
        $this->_layout = $config->layout;
        $this->_theme = $config->theme;
        $this->_title = $config->title;
    }

    public function setLayout($layout)
    {
        $this->_layout = $layout;
    }

    public function setTheme($theme)
    {
        $this->_theme = $theme;
    }


    public function add_meta_tag($name, $value, $key = "name")
    {
        if ($name == 'canonical') {
            $this->_meta_tags[] = '<link rel="canonical" href="' . $value . '" />';
        } else {
            $this->_meta_tags[] = '<meta ' . $key . '="' . $name . '" content="' . $value . '" />';
        }
        return $this;
    }

    public function add_title($title)
    {
        $this->_title = $title;
    }

    public function load($body_view = null, $data = [])
    {
        if (!is_null($body_view)) {

            $body = view($body_view, $data);
            if (is_null($data)) {
                $this->_data = array('body' => $body);
            } else if (is_array($data)) {
                $this->_data ['body'] = $body;
            } else if (is_object($data)) {
                $data->body = $body;
            }
        }
        if ($this->_meta_tags) {
            $this->_data['meta_tags'] = implode("\r\n", $this->_meta_tags) . "\r\n";
        } else {
            $this->_data['meta_tags'] = null;
        }
        $this->_data['title'] = $this->_title;
        return view('Theme\\' . $this->_theme . '\Views\layouts\\' . $this->_layout, $this->_data);
    }
}