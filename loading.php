<?php

for ($i=0; $i < 10000; $i++) { 
    $delay = rand(1000000,3000000);
    echo ".  ", "Loading\r";
    usleep($delay);
    echo ".. ", "Loading\r";
    usleep($delay);
    echo "...", "Loading\r";
    usleep($delay);
}

