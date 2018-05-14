<?php

namespace MDPro\Services;

class DataGrabber
{
    /**
     * $data
     *
     * @var string
     */
    private $data;

    public function __construct($filepath)
    {
        if(file_exists($filepath)){
            $this->data = file_get_contents($filepath);
            var_dump($this->data);
        }else{
            throw new Exception("File is not exist.");
        }       
    }
}