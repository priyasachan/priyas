<?php namespace Priyas\Videos\Models;

class TestModel extends \Eloquent
{
    public static function printCurrentLocation($location)
    {
        return "Testing package controller, script is located at: {$location}";
    }
}

?>