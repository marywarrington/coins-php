<?php
	 class Coins
		{
		private $change;
		private $quarters;
		private $dimes;
		private $nickels;
		private $pennies;


		function __construct($change)
		{
			$this->change = $change;
			$this->quarters = 0;
			$this->dimes = 0;
			$this->nickels = 0;
			$this->pennies = 0;
		}

		 function getChange() {
			return $this->change;
			}

		function setChange() {
			$this->change = $change;
		}

		function getQuarters()
		{
			return $this->quarters;
		}

		function getDimes()
		{
			return $this->dimes;
		}

		function getNickels()
		{
			return $this->nickels;
		}

		function getPennies()
		{
			return $this->pennies;
		}

		function yourChange() {
			$num = $this->change;
			if ($num >= 25) {
				$this->quarters = intval($num/25);
				$num = $num % 25;
			}
			if ($num >= 10) {
				$this->dimes = intval($num/10);
				$num = $num % 10;
			}
			if ($num >= 5) {
				$this->nickels = intval($num/5);
				$num = $num % 5;
			}
			if ($num < 5) {
				$this->pennies = $num;
			}
		}
	}
 ?>
