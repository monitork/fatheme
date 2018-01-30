<?php namespace HoneyDT\FATheme\Config;

use CodeIgniter\Config\BaseConfig;

class Theme extends BaseConfig
{
    /*
       |--------------------------------------------------------------------------
       | Theme default
       |--------------------------------------------------------------------------
       |
       |  Config default theme for site
       |
       */
    public $theme = 'Default';
    /*
    |--------------------------------------------------------------------------
    | Layout default
    |--------------------------------------------------------------------------
    |
    |  Config default theme for site
    |
    */
    public $layout = 'default';
    /*
    |--------------------------------------------------------------------------
    | Config location for Theme
    |--------------------------------------------------------------------------
    |
    |  This default config in Autoload file.
    |  If you want change directory of theme location.
    |  public $theme_location = FCPATH . 'themes';
    |
    */
    /*
    |--------------------------------------------------------------------------
    | Config title for Theme
    |--------------------------------------------------------------------------
    |
    |  .........................
    |  If you want change directory of theme location.
    |
    |
    */
    public $title = 'Default title';
}