<?php

/**
 * Created by PhpStorm.
 * User: liushulong
 * Date: 05/12/2017
 * Time: 11:36 PM
 */

use slliu\zh\Convert;
use PHPUnit\Framework\TestCase;

class ConvertTest extends TestCase
{

    public function testNull(){
        $sChar = null;
        $this->assertSame(null,Convert::zhconversion_hant($sChar));
        $this->assertSame(null,Convert::zhconversion_hans($sChar));
        $this->assertSame(null,Convert::zhconversion_tw($sChar));
        $this->assertSame(null,Convert::zhconversion_hk($sChar));
        $this->assertSame(null,Convert::zhconversion_cn($sChar));
    }

    public function testLength(){
        $sChar = '';
        $sExpect = '';
        $this->assertSame($sExpect,Convert::zhconversion_hant($sChar));
        $this->assertSame($sExpect,Convert::zhconversion_hans($sChar));
        $this->assertSame($sExpect,Convert::zhconversion_tw($sChar));
        $this->assertSame($sExpect,Convert::zhconversion_hk($sChar));
        $this->assertSame($sExpect,Convert::zhconversion_cn($sChar));
    }

    public function testHant(){
        $sChar = '兰';
        $sExpect = '蘭';
        $this->assertSame($sExpect,Convert::zhconversion_hant($sChar));
    }

    public function testHans(){
        $sChar = '蘭';
        $sExpect = '兰';
        $this->assertSame($sExpect,Convert::zhconversion_hans($sChar));
    }

    public function testTW(){
        $sChar = '兰';
        $sExpect = '蘭';
        $this->assertSame($sExpect,Convert::zhconversion_tw($sChar));
    }

    public function testHK(){
        $sChar = '兰';
        $sExpect = '蘭';
        $this->assertSame($sExpect,Convert::zhconversion_hk($sChar));
    }

    public function testCN(){
        $sChar = '蘭';
        $sExpect = '兰';
        $this->assertSame($sExpect,Convert::zhconversion_cn($sChar));
    }
}