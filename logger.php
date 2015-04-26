<?php
        final class Logger{
                public static function instance(){
                        static $inst = null;
                        if($inst == null){
                                $inst = new Logger();
                        }
                        return $inst;
                }
                public function info($msg){
                        error_log($msg);
                }
        }

        $logger = new Logger();
?>
