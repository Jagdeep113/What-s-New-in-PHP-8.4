<?php 

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