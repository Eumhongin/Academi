<?php

function genRandom() {
        $char = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $char .= 'abcdefghijklmnopqrstuvwxyz';
        $char .= '0123456789';
        $result = '';
        for($i = 0; $i <= 64; $i++) {
            $result .= $char[mt_rand(0, strlen($char))];
        }
        return($result);
    }





 ?>
