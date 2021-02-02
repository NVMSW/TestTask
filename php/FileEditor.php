<?php

class FileEditor{

protected $type;

public function __construct($file) {
    $this->getExt($file);
    $supportExt = ['txt','doc','xml'];
    if(!in_array($this->type, $supportExt)){
        throw new \Exception('Extension not supported');
    }else{
        $this->openFile($file);
    }
}

private function getExt($file) {
    $this->type = pathinfo($file, PATHINFO_EXTENSION);
}

public function openFile($file){
    $path =  strtoupper ($this->type);
    try {
        $controller = new $path($file);
    } catch (Exception $e) {
        
    }
}
}