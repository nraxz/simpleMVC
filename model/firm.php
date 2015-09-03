<?php
namespace Model;

class Firm {
	public $name;
	public $type;
	public $description;

	public function __construct($name, $type, $description)
    {
       $this->name = $name;
	    $this->type = $type;
	    $this->description = $description;
    }
}
