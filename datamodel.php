<?php
   class Participant{
      private $firstName;
      private $lastName;
      private $email;
      public function setFirstName($firstName){
         $this->firstName = $firstName;
      }
      public function getFirstName(){
         return $this->firstName;
      }

      
      public function setLastName($lastName){
         $this->lastName = $lastName;
      }
      public function getLastName(){
         return $this->lastName;
      }

      
      public function setEmail($email){
         $this->email = $email;
      }
      public function getEmail(){
         return $this->email;
      }
   }
   $person = new Participant();
   echo $person->firstName;
?>