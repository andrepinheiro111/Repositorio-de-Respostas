<?php

	Class State
	{
		private $arrayInitials;
		private $arrayState;
		private $generalArray;
		
		public function setArrayInitials($valueArray)
		{
			$this->arrayInitials = $valueArray;
			sort($this->arrayInitials);
		}
		
		public function getArrayInitials()
		{
			return $this->arrayInitials;
		}
		
		public function setArrayState($valueArray)
		{		
			$this->arrayState = $valueArray;
			sort($this->arrayState);
		}
		
		public function getArrayState()
		{
			return $this->ArrayState;
		}
		
		public function groupArray()
		{
			$max = sizeof($this->arrayInitials);
			for($i = 0; $i < $max;$i++)
			{			
				$this->generalArray[$this->arrayInitials[$i]] = $this->arrayState[$i];				
			}
			
		}
		
		public function writeFormat()
		{
				
			$max = sizeof($this->generalArray);
            echo 'Impressão do terceiro ARRAY agrupado, conforme formato solicitado:';
			echo '<br>';
			for($i = 0; $i < $max;$i++)
			{
				echo key($this->generalArray).'-'.$this->generalArray[key($this->generalArray)];
				next($this->generalArray);
				echo '<br>';
			}
		
		}
		
		public function write()
		{
            echo "Array de Siglas preenchido:";
            echo "<br>";
		    print_r($this->arrayInitials);
            echo "<br>";
            echo "<br>";
            echo "Array de Estados preenchido:";
            echo "<br>";
		    print_r($this->arrayState);
			echo "<br>";
            echo "<br>";
            echo "Array de agrupamento Siglas + Estados, sendo Siglas = KEY e Estados = INFO:";
            echo "<br>";
			print_r($this->generalArray);
            echo "<br>";
            echo "<br>";
            echo "<br>";
		}
		
		

	}
	
	$States = array('São Paulo','Rio de Janeiro','Minas Gerais','Espirito Santo');
	$Initials = array('ES','MG','RJ','SP');
	$ObjectState = new State;
	$ObjectState->setArrayState($States);
	$ObjectState->setArrayInitials($Initials);
	$ObjectState->groupArray();	
	$ObjectState-> write();
	$ObjectState->writeFormat();
	
?>
