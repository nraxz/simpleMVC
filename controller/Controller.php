<?php
namespace Controller;
use Model\Model;

class Controller{

private $model;

public function __construct(){
    $this->model=new Model();


    }

public function invoke(){

    	if (!isset($_GET['firm']))
		{
			// it will show all the firms,
			$firms = $this->model->getList();
            include 'views/firmlist.php';
           
		}
		else
		{
			// show the requested firm
			$firm = $this->model->getFirm($_GET['firm']);
            include 'views/viewfirm.php';

		}


}
}