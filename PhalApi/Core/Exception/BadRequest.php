<?php

class Core_Exception_BadRequest extends Core_Exception
{
    public function __construct($message, $code = 0)
    {
        parent::__construct(T('Bad Request: {message}', array('message' => $message)), 400 + $code);
    }
}