<?php
namespace Fasty\Helper;

use Fasty\Request;

class Helper
{
    public static function getRequest(): Request
    {
        return Request::getInstance();
    }
}