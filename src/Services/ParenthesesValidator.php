<?php

namespace MDPro\Services;

class ParenthesesValidator
{
    private $data;
    private $ignore_list = ["\n", "", " ", "\r", "\t"];

    public function __construct(DataGrabber $obj)
    {
        $this->data = $obj->getData();
    }

    public function validate() : bool
    {
        $result = 0;

        for($i = 0; $i < strlen($this->data); $i++){
            if($this->data[i] == "("){
                $result++;
            }else if($this->data[i] == ")"){
                $result--;
                if($result < 0)
                    return false;
            }
        }
    }
}