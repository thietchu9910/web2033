<?php
class Computer{
    var $name;
    var $company;
    var $price;
    var $wattage;
    var $meterial;

    function getComputer(){
        return "get $this->name ok";
    }
}
$Myname = new Computer();
$Myname ->name = "Dell ";
var_dump($Myname);
echo "</br>";
var_dump($Myname->getComputer);


class Teacher{
    var $name;
    var $age;
    var $sex;
    var $salary;
    var $national;

    function getTeacher(){
        return "get $this->name . $this->age . $this->sex . $this->salary . $this->national";
    }
}
$Myteacher = new Teacher();
$Myteacher ->name = "Minh ";
var_dump($Myteacher);
echo "</br>";
var_dump($Myteacher->getTeacher());
?>