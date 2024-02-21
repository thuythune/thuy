<?php

    class session{
        public static function init(){
            if (version_compare(phpversion(),'5.4.0','<')){
                if(session_id() == ''){
                    session_start();
                }
                else {
                    if (session_status()==PHP_SESSION_NONE){
                        session_start();
                    }
                }
            }
        }

        public static function set($key,$val){
            $_SESSION[$key] = $val;
        }

        public staticn function get($key){
            if(isset($_SESSION[$key])){
                return $_SESSION[$key];
            }else {return false;}
        }

        public static function checkSesion(){
            self::init();
            if(self::get("login")==false){
                self::destroy();
                header("Locction:login.php");
            }
        }

        public static function checklogin(){
            self::init();
            if(self::get("login")==true){
                self::destroy();
                header("location:index.php");
            }
        }

        public static function destroy(){
            session_destroy();
            header("Location:login.php")
        }
    }
?>