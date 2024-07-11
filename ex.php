
<?php
 //1. 
readonly class User {
    public string $name;
    public int $age;

    public function __construct(string $name, int $age) {
        $this->name = $name;
        $this->age = $age;
    }
}

$user = new User("Alice", 30);
echo $user->name; // Outputs: Alice
$user->name = "Bob"; // Error: Cannot modify readonly property User::$name


 //2. 

interface A {}
interface B {}
interface C {}
interface D {}

class AB implements A, B {}
class CD implements C, D {}

function process((A&B)|(C&D) $value) {
    // Implementation
}

$ab = new AB();
$cd = new CD();

process($ab); // Valid
process($cd); // Valid
process(new class implements A, C {}); // Error: Type mismatch


// 3. 


$status = 'approved';

$result = match ($status) {
    'pending' => 'Waiting for approval',
    'approved' => 'Approved',
    'rejected' => 'Rejected',
    default => 'Unknown status',
};

echo $result; // Outputs: Approved


 //4. 
$haystack = "Hello, PHP world!";
$needles = ["PHP", "JavaScript"];

$contains = str_contains_any($haystack, $needles);
echo $contains ? 'Yes' : 'No'; // Outputs: Yes

$list = [1, 2, 3];
$isList = array_is_list($list);
echo $isList ? 'It is a list' : 'It is not a list'; // Outputs: It is a list

$array = ['first' => 1, 'second' => 2];
$firstKey = array_key_first($array);
echo $firstKey; // Outputs: first


// 5.
function calculateFactorial(int $number): int {
    if ($number <= 1) {
        return 1;
    }
    return $number * calculateFactorial($number - 1);
}

echo calculateFactorial(10); // Outputs: 3628800
// Expect faster execution with PHP 8.4 compared to previous versions.


 //6. 
#[Attribute]
class CustomAttribute {
    public function __construct(public string $value) {}
}

#[CustomAttribute('ExampleValue')]
class Example {
    #[CustomAttribute('PropertyValue')]
    public string $property;

    public function __construct(string $property) {
        $this->property = $property;
    }
}


 //7. 
// Deprecated: create_function()
$func = create_function('$a,$b', 'return $a+$b;');
echo $func(1, 2); // Deprecated warning

// Use anonymous functions instead
$func = function($a, $b) {
    return $a + $b;
};
echo $func(1, 2); // Outputs: 3


 //8. 
try {
    throw new Exception("Something went wrong!");
} catch (Exception $e) {
    echo "Error: " . $e->getMessage(); // Outputs: Error: Something went wrong!
    echo "\nFile: " . $e->getFile(); // Outputs the file where the exception was thrown
    echo "\nLine: " . $e->getLine(); // Outputs the line number where the exception was thrown
}


 //9.
pcntl_async_signals(true);

pcntl_signal(SIGTERM, function() {
    echo "Received SIGTERM\n";
    // Perform cleanup or other tasks
});

// Simulate sending a SIGTERM signal
posix_kill(posix_getpid(), SIGTERM);


 //10. 
$fiber = new Fiber(function(): void {
    echo "Fiber started\n";
    Fiber::suspend();
    echo "Fiber resumed\n";
});

$fiber->start();
echo "Main thread\n";
$fiber->resume();

?>