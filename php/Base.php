<?php

abstract class Base {

	public function __construct($file) {
        $this->edit($file);
	}

    public function edit($file) {
        //do something with file
    }

}
