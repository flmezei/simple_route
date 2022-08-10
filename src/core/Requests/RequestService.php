<?php

namespace Flmezei\SimpleRoute\Core\Requests;

class RequestService
{
    public static function explodeAccepts($accepts)
    {
        return explode(",", $accepts);
    }
}
