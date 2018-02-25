<?php 


interface PrinterInterface
{
        public function print(string $x);
}

    class First implements PrinterInterface
    {      
            public function print(string $x):void
            {                 
           		echo $x."\n";
            }    
    }
    class Second implements PrinterInterface
    {      
            public function print(string $x):void
            {            
            	echo "<span>".$x."</span>";     
            }    
    }

$test = new First;
$test->print("text");
$test = new Second;
$test->print("text");


 ?>