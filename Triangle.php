<?php
/*
【演習】 三角形の各辺の長さを表す整数を入力して

・正三角形の場合は1
・二等辺三角形の場合は2
・不等辺三角形の場合は3

そして、各辺が三角形を形成しない場合は例外を起こすこと。

参考）テスト駆動開発入門 P192の演習問題

*/

class Triangle {

    const TRIANGLE_EQUILATERAL_ID = 1;
    const TRIANGLE_ISOSCELES_ID = 2;
    const TRIANGLE_SCALENE_ID = 3;

    public function validateInt($a, $b, $b) {
        if(!is_int($a) || !is_int($b) || !is_int($c)) {
            throw new Exception("error int");
        }
    }

    public function validateRange($a, $b, $c) {
        if($a < 1 || $b < 1 || $c < 1) {
            throw new Exception('error range');
        }
    }

    public function validateFormation($a, $b, $c) {
        $list = array($a, $b, $c);
        rsort($list);
        if($list[0] >= ($list[1] + $list[2])) {
            throw new Exception('error formation');
        }
    }

    public function getTriangleId($a, $b, $c) {
        if($a === $b && $b === $c && $c === $a) {
            return self::TRIANGLE_EQUILATERAL_ID;
        } elseif($a === $b || $b === $c || $c === $a) {
            return self::TRIANGLE_ISOSCELES_ID;
        } elseif($a !== $b && $b !== $c && $c !== $a) {
            return self::TRIANGLE_SCALENE_ID;
        }
    }
}
