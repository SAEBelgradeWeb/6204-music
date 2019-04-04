<?php
/**
 * Created by PhpStorm.
 * User: Web Server
 * Date: 4/4/2019
 * Time: 8:04 PM
 */

namespace App;


class Converter
{
    public function convert($number) {
        $out = "";

        $map = [
            "C" => 100,
            "XC" => 90,
            "L" => 50,
            "XL" => 40,
            "X" => 10,
            "IX" => 9,
            "V" => 5,
            "IV" => 4,
            "I" => 1

        ];

        foreach ($map as $roman => $arabic) {
            while ($number >= $arabic) {
                $out .= $roman;
                $number -= $arabic;
            }
        }
        return $out;
    }
}