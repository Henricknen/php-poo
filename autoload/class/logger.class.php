<?php
trait Logger {      // 'trait' Logger
    public function log($message) {     // função 'log' exibe menssagem de usuario criado
        echo "<br>[LOG]: ". $message. "<br>";
        echo "Datatime> ". date("Y-m"). "<br>";
    }
}