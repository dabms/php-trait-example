<?php

// Definiert einen Trait mit mathematischen Operationen
trait MathOperationsTrait
{
    /**
     * Addiert zwei Zahlen und gibt das Ergebnis zurück.
     * @param float|int $a Der erste Summand.
     * @param float|int $b Der zweite Summand.
     * @return int|float Das Ergebnis der Addition von $a und $b.
     */
    public function add(float|int $a, float|int $b): int|float {
        return $a + $b;
    }

    /**
     * Subtrahiert die zweite Zahl von der ersten und gibt das Ergebnis zurück.
     * @param float|int $a Der Minuend.
     * @param float|int $b Der Subtrahend.
     * @return float|int Das Ergebnis der Subtraktion von $b von $a.
     */
    public function subtract(float|int $a, float|int $b): float|int
    {
        return $a - $b;
    }

    /**
     * Multipliziert zwei Zahlen und gibt das Produkt zurück.
     * @param float|int $a Der erste Faktor.
     * @param float|int $b Der zweite Faktor.
     * @return float|int Das Produkt von $a und $b.
     */
    public function multiply(float|int $a, float|int $b): float|int
    {
        return $a * $b;
    }

    /**
     * Dividiert die erste Zahl durch die zweite und gibt das Ergebnis zurück.
     * Wirft eine Ausnahme, wenn versucht wird, durch Null zu dividieren.
     * @param float|int $a Der Dividend.
     * @param float|int $b Der Divisor.
     * @return float|int Das Ergebnis der Division von $a durch $b.
     * @throws Exception Wenn $b gleich Null ist.
     */
    public function divide(float|int $a, float|int $b): float|int
    {
        if ($b == 0) {
            throw new Exception("Division durch Null."); // Verhindert Division durch Null
        }
        return $a / $b;
    }
}
