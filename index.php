<?php
// library

class Task {
    public function job(Logger $logger) {
        for($i = 0; $i<10; $i++){
            // do some shit
            $logger->log("Job $i was done!");
        }
    }
}

class ConsoleLogger implements Logger {
    public function log($message) {
        echo "$message\n";
    }
}

class NothingLogger implements Logger {
    public function log($message) {
       
    }
}

interface Logger {
    public function log($message);
}

interface Writer {

}

// user code

class FileLogger implements Logger {
    public function log($message) {
        $file = fopen('log.txt', 'a');
        fwrite($file, "$message\n");
        fclose($file);
    }
}

$logger = new FileLogger();
$task = new Task();
$task->job($logger);