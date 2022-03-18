
class A{
    public function __construct(){
        echo "A";
    }
}
class B{
    public function __construct(){
        echo "B";
    }
}
class C{
    public function __construct(){
        echo "C";
    }
}




$a=new A();
if($a instanceof A){
    echo "A class";
}
else if ($a instanceof B){
    echo "B class";

}
else{
    echo "C class";

}






