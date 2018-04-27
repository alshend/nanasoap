<?php

/*
 * Template Name: PHP Test Page
 *
 *
 */

get_header();
?>
<?php
    class User {
        public $name = "Имя";
        public $password = "Пароль";
        public $email = "Е-мейл";
        public $city = "Город";
    }
    function __construct($name, $password, $email) {
        $this->name = $name;
        $this->password = $password;
        $this->email = $email;
        echo 'Это конструктор класса User' . $name . $password . $email;
    }
    $new_user = new User();
?>

<?php get_footer(); ?>