<?php
readonly class User{
    
    public string $name;
    public string $email;

    public function __construct(string $name, string $email)
    {
        $this->name = $name;
        $this->email = $email;
    }
}

$user = new User('Jagdeep Singh','singhjagdeep.dev@gmail.com');


$user->name="john";
echo $user->name;

?>