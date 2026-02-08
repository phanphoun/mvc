<?php

class Task{
    private static $tasks = [
        "title" => "testing",
        "description" => "testing description",
        "status" => "pending"
    ];

    public static function getAll(){
        return self::$tasks;
    }
}