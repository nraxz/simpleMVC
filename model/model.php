<?php
namespace Model;
use Model\Firm;
class Model
{
     public function getList()
	{
		// These values are hand-coded, only for simulation
		return array(
			"ASDA" =>new Firm("ASDA", "Super Market", "Asda is a super market Wallmart to UK"),
			"2112 Comms" =>new Firm("2112 Comms", "Agency", "It is a Creative Agency"),
			"Peri Peri" =>new Firm("Peri Peri", "Restaurant", "A portugise restaurant specialized for spicy chicken.")
		);
	}

	public function getFirm($name)
	{
		// it uses the previous function to get all the firms and then it returns the requested one.
		// in a real application this will be done through a db select command
		$allfirm = $this->getList();
		return $allfirm[$name];
	}
}
