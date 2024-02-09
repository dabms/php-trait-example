<?php

// Einbinden des Traits, um sicherzustellen, dass seine Methoden verfügbar sind
require_once 'MathOperationsTrait.php';

// Definiert die Calculator-Klasse, die den MathOperationsTrait nutzt
class Calculator
{
    // Ermöglicht die Nutzung der Trait-Methoden in dieser Klasse
    use MathOperationsTrait;

}

// Erzeugt eine Calculator-Instanz und verwendet die add-Methode des Traits. Addiert 2 und 5.
$calculator = new Calculator();
$result = $calculator->add(2,5);

// Gibt das Ergebnis aus
echo $result;