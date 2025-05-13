<?php

// class Example{
  
//     public function __construct()
//     {
//         echo "Object Construct Method";      
//     }

//     public function Display() {
//         echo "Hello World";        
//     }


//     public function __destruct()
//     {
//         echo "<br>Destruct Method";
//     }
// }

// $object = new Example();
// $object->Display();

// echo "<br><br>";

// $object2 = new Example();
// $object2->Display();




class StudentData{
    public $name; 
    public $age; 
    public $topic;

    public function __construct($name , $age , $topic)
    {
        $this->name  = $name;
        $this->age = $age; 
        $this->topic = $topic;
    }

    public function Output(){
        return "Student Name: ".$this->name."<br>Age: ".$this->age." <br>Class Topic:".$this->topic;
    }

}


$student1 = new StudentData("Ali" , "20" , "PHP");
echo $student1->Output();

echo "<br>";
$student2 = new StudentData("Raza" , "25" , "Laravel");
echo $student2->Output();

echo "<br>";
$student3 = new StudentData("hyder" , "15" , "Laravel");
echo $student3->Output();
echo "<br>";
$student4 = new StudentData("Danish" , "25" , "C#");
echo $student4->Output();
echo "<br>";
$student5 = new StudentData("Zain" , "25" , "Laravel");
echo $student5->Output();
?>