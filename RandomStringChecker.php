<?php
/*  Author: Roberto Aleman Web: ventics.com, license: MIT */
class RandomStringChecker {
    private $string;

    public function __construct($string) {
        $this->string = $string;
    }

    public function isRandom() {
        // Check if the string has at least 10 characters
        if (strlen($this->string) < 10) {
            return "The string '{$this->string}' is not random: it must have at least 10 characters.";
        }

        // Check if the string contains letters, numbers, and special characters
        if (preg_match('/[a-zA-Z]/', $this->string) &&
            preg_match('/[0-9]/', $this->string) &&
            preg_match('/[^a-zA-Z0-9]/', $this->string)) {
            // Check for repetitive patterns in the string
            if (preg_match('/(.)\1{2,}/', $this->string) || preg_match('/([a-zA-Z0-9])\1{2,}/', $this->string)) {
                return "The string '{$this->string}' is not random: it contains repetitive patterns.";
            }
            // Check for ascending or descending sequences
            if ($this->hasAscendingSequence() || $this->hasDescendingSequence()) {
                return "The string '{$this->string}' is not random: it contains ascending or descending sequences.";
            }
            return true; // The string is random
        }
        return "The string '{$this->string}' is not random: it does not contain the appropriate mix of characters.";
    }

    private function hasAscendingSequence() {
        // Check for ascending sequences
        for ($i = 0; $i < strlen($this->string) - 1; $i++) {
            if (ord($this->string[$i]) + 1 === ord($this->string[$i + 1])) {
                return true; // Found an ascending sequence
            }
        }
        return false; // No ascending sequences found
    }

    private function hasDescendingSequence() {
        // Check for descending sequences
        for ($i = 0; $i < strlen($this->string) - 1; $i++) {
            if (ord($this->string[$i]) - 1 === ord($this->string[$i + 1])) {
                return true; // Found a descending sequence
            }
        }
        return false; // No descending sequences found
    }

    public function report() {
        $result = $this->isRandom();
        if ($result === true) {
            return "The string '{$this->string}' is random.";
        } else {
            return $result; // Return the error message
        }
    }
}


?>