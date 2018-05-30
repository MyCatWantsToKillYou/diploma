<?php
namespace morphos;
require('vendor\wapmorgan\morphos\src\Cases.php');
abstract class NamesInflection implements Cases, Gender
{
    public static function isMutable($name, $gender)
    {
    }
    public static function getCases($name, $gender)
    {
    }
    public static function getCase($name, $case, $gender)
    {
    }
}
