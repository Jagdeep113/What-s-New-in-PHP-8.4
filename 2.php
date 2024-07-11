<?php
  interface A {}
  interface B {}
  interface C {}
  interface D {}

  class AB implements A,B {}
  class CD implements C,D {}

  function process((A&B)|(C&D) $value){

  }

  $ab = new AB();
  $cd = new CD();

  process($ab);
  process($cd);

  process(new class implements A,C {});
?>