<?php
// 定義規格: 介面 (沒有實作，裡面都是抽象方法)
interface Shape {
    function calLength();   // 周長
    function calArea();     // 面積
}

interface iOS {
    function exam1();
}

interface ZCE {
    function exam2();
}

// 長方形，實作介面
class Rectangle implements Shape {
    function calLength(){
        echo 'Rectangle:calLength()';
    }
    function calArea(){
        echo 'Rectangle:calArea()';
    }
}
class Triangle implements Shape {
    function calLength(){
        echo 'Triangle:calLength()';
    }
    function calArea(){
        echo 'Triangle:calArea()';
    }
}

class Student1 implements iOS, ZCE {
    function exam1()
    {

    }
    function exam2()
    {

    }
}

class Student2 implements iOS {
    function exam1()
    {

    }
}

class Student3 implements ZCE {
    function exam2()
    {

    }
}
// 該做而沒做，宣告為抽象，但子類別要繼續實作出來
abstract class Student4 implements iOS {

}

// 套餐(組合式的)
trait Test1 {
   function m1(){
       echo 'Test1:m1();';
   }
}
trait Test2 {
    function m2(){
        echo 'Test2:m2();';
    }
    function m3(){
        echo 'Test2:m3();';
    }
}
//trait的東西可以用use帶進來
class Test3 {
    use Test1;
    use Test2;
}