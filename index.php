<?php 
class myClass{
    public function heading(){
        echo "welcome to BBIT DEVOPS";
    }
      public function myMethod(){
        echo "<p>this is a new semster</p>";
    }
          public function footer(){
        echo "<footer>Contact us at <a href='mailto:info@bbit.edu'>info@bbit.edu</a></footer>";
    }
}
//create an instance of MyClass
    $instance = new MyClass();
//call the method myMethod
    $instance->heading();
 $instance->myMethod();
  $instance->footer();
