<?php
$xml = new SimpleXMLElement("<students></students>");
$student = $xml->addChild("student");
$student->addChild("name", "Rahul");
$student->addChild("course", "BCA");

echo $xml->asXML();

foreach($xml->student as $s) {
    echo $s->name." - ".$s->course."<br>";
}
?>