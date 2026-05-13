<?php
// 3nd try
class Student
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
        echo "Object created for " . $this->name . "<br>";
    }
}

//$cictStudent=new Student("nethu");
$students = ["nethu", "ella", "love", "julia", "shela"];

foreach ($students as $studentname) {
    $student = new Student($studentname);
}

/*2nd try
class Person
{
    public $name;
    public function greet()
    {
        return "Hellow my name is " . $this->name;
    }
}
$p = new Person();
$p->name = 'Nethu';
echo $p->greet();

the 1st try
clas Person{
public $name;
}
$person1 = new Person();
$person1->name = 'nethu';
echo $person1->name;
*/
