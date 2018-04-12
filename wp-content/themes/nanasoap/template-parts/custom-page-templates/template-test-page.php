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
    function __construct($name, $name2, $password) {
        $this->name = $name;
        $this->name2 = $name2;
        $this->password = $password;
    }
?>

<?php get_footer(); ?>