<?php

function style($style= 'dot')
{
        switch ($style) {
            case 'dot':
                loading();
                break;
            case 'dash':
                loading('-', ' ', 3, 10);
                break;
            case 'pipe':
                loading('|', '.', 40, 2, 1000);
                break;
            case 'bar1' :
                loading($str = '▉', $space = ' ');
                break;
            case 'bar2' :
                loading($str = '▊', $space = '░');
                break;
            case 'bar3' :
                loading($str = '▓', $space = '░');
                break;

        }
}

function loading($str = '.', $space = ' ', $pad = 20, $repeat = 1, $delay = 100000)
{
    for ($r=0; $r < $repeat; $r++) { // Repeat Loop
        for ($i=0; $i <= $pad; $i++) {
            $pre = '';
            for ($k=0; $k < $i; $k++) {
                $pre .= $str ;
            }
            for ($j=$i; $j < $pad; $j++) {
                $pre .= $space;
            }
            echo "\033[?25l", '[', $pre, ']', " Loading\r";  // "\033[?25l" Hide the cursor.
            usleep($delay);
        }
    
        echo "\033[K" ; // "\033[K"  Delete everything from the cursor to the end of the line.
    }
    echo "\033[?25h"; //  "\033[?25h" Show the cursor.
}

style('dot');
style('dash');
style('pipe');
style('bar1');
style('bar2');
style('bar3');






