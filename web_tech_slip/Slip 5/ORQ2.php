<?php
// Define a sample class
class MyClass {
    public $property1 = 'value1';
    public $property2 = 'value2';

    public function method1() {
        echo "Method 1 called.\n";
    }

    public function method2() {
        echo "Method 2 called.\n";
    }
}

// Create an instance of the class
$object = new MyClass();

// Get the class name
$className = get_class($object);
echo "Class Name: $className\n";

// Get the properties of the object
$properties = get_object_vars($object);
echo "Properties:\n";
foreach ($properties as $property => $value) {
    echo "$property: $value\n";
}

// Get the methods of the class
$methods = get_class_methods($className);
echo "Methods:\n";
foreach ($methods as $method) {
    echo "$method\n";
}
?>
