<?php
require_once "Student.php";
require_once "Aspirant.php";

$arr = [new Student("Petr", "Pypkin", "I-31", 5),
        new Student("Vasya", "Lt", "G-11", 4.2),
        new Aspirant("Roma", "Gac", "Z-51", 5, "Plants"),
    ];

foreach ($arr as $item)
    echo $item->getScholarship()."\n";