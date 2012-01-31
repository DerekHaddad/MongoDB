<?php 
$mongo = new Mongo();
$db = $mongo->foobar;

$collection = $db->foo;

$doc = array( "name" => "Derek",
        "email" => "derek.ilabz@gmail.com",
        "id_number" => "200701921",
        "phone" => "+96170960980",
        "info" => (object)array( "yob" => 1989, "height" => 187),
        "quotes" => array("Less is more", "Follow the white rabbit", "insanity is doing the same thing over and over again expecting different results")
    );

$collection->insert( $doc );

$obj = $collection->findOne();
var_dump( $obj );
?>