<?php

function log($log, $time)
{
        echo $log . $time;

        $logfile = @fopen('logfile.txt', 'ab');
        $time = date("Y.M.d H:i:s", $time);
        fwrite($logfile, $log . " " . $time . PHP_EOL);
        fclose($logfile);
}
log(basename($_SERVER['PHP_SELF']), microtime(true));
