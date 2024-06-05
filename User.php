<?php

    class User{

        public $name, $age, $email, $phone;

        public function __construct($name,$age, $email,$phone) {
            $this->$name = $name;
            $this->$age = $age;
            $this->$email = $email;
            $this->$phone = $phone;
        }

        public function printUser($name,$age, $email,$phone ){

            echo "El nombre del contacto es: ".$name."\n";
            echo "La edad del contacto es: ".$age."\n";
            echo "El correo del contacto es: ".$email."\n";
            echo "El celular del contacto es: ".$phone."\n";
            
        }
    }
?>