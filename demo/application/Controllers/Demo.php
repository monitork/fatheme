<?php namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Log\Logger;
use FireAntLabs\FATheme\Libraries\FATheme;

class Demo extends Controller
{
    protected $_theme;

    public function __construct(RequestInterface $request, ResponseInterface $response, Logger $logger = null)
    {
        parent::__construct($request, $response, $logger);
        $this->_theme = new FATheme;
    }

    public function index()
    {
        echo $this->_theme->load('content');
    }
}
