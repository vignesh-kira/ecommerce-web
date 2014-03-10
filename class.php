<?php

echo "hi <br />";

class BAccount{

public $money= 10;

public function DisplayBalance(){

return 'Balance: '.$this->money; 
}
}
$viki = new BAccount();
echo $viki->DisplayBalance();


?>  