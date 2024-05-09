<?php

    class Session
    {
        public static function set(string $index, mixed $value): void
        {
            $_SESSION[$index] = $value;
        }

        public static function dump(): void
        {
            var_dump($_SESSION);
            die();
        }

        public static function has(string $index): bool
        {
            return isset($_SESSION[$index]);
        }

        public static function get(string $index)
        {
            if(self::has(index: $index)){
                return $_SESSION[$index];
            }
        }

        public static function remove(string $index): void
        {
            if(self::has(index: $index)){
                unset($_SESSION[$index]);
            }
            
        }

        public static function removeAll(): void
        {
            session_destroy();
        }

        public static function flash(string $index, mixed $value): void
        {
            $_SESSION['__flash'][$index] = $value; 
        }

        public static function removeFlash(): void
        {
            if($_SERVER['REQUEST_METHOD'] == 'GET' && self::has(index: '__flash')){
                unset($_SESSION['__flash']);
            }
        }
    }