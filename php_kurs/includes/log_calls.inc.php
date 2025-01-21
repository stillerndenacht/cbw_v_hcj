<?php

function logger($log, $time){
        #echo $log . $time;

        if ($logfile = @fopen('files/logfile.txt', 'ab')) {
                $time = date("Y.M.d H:i:s", $time);
                fwrite($logfile, $log . "|" . $time . PHP_EOL);
                fclose($logfile);
        }
}
logger(basename($_SERVER['PHP_SELF']), time());
