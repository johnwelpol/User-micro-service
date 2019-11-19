<?php

class RequestValidator {


    public function __construct(array $request)
    {
        
    }

    public function isRequired() : bool 
    {
        
        return true;
    }

    public function isString() : bool 
    {
        return true;
    }

    public function isInteger() : bool 
    {
        return true;
    }

    public function isExist() : bool 
    {
        return true;
    }

}