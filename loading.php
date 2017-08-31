<?php

function loadingDot(){
    for ($i=0; $i < 10000; $i++) {
        $delay = rand(100000, 300000);
        echo ".  ", "Loading\r";
        usleep($delay);
        echo ".. ", "Loading\r";
        usleep($delay);
        echo "...", "Loading\r";
        usleep($delay);
    }
}

loadingDot();