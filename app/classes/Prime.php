<?php


namespace App\classes;


class Prime
{
    public $startingNumber, $endingNumber, $result, $i, $num ;

    public function __construct($post)
    {
        $this->startingNumber = $post['starting_number'];
        $this->endingNumber = $post['ending_number'];
    }

    public function isPrime($num)
    {
        if ($num <= 1) {
            return false;
        }
        if ($num <= 3) {
            return true;
        }
        if ($num % 2 === 0 || $num % 3 === 0) {
            return false;
        }
        $i = 5;
        while ($i * $i <= $num) {
            if ($num % $i === 0 || $num % ($i + 2) === 0) {
                return false;
            }
            $i += 6;
        }
        return true;
    }

    public function index()
    {
        for ($this->i = $this->startingNumber; $this->i <= $this->endingNumber; $this->i++) {
            if ($this->isPrime($this->i)) {
                echo $this->result = $this->result . $this->i . ' ';
            }
        }
        header('Location: action.php?page=prime&&result=' . $this->result);
    }
}
