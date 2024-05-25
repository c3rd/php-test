<?php

namespace Minicli;

use Exception;

class App {

    protected $printer;

    public function __construct()
    {
        $this->printer = new CliPrinter();
    }

    public function getPrinter()
    {
        return $this->printer;
    }

    public function runCommand(array $argv) {
        if (count($argv) != 2) {
            //add exception
        }

        $this->getPrinter()->display("teste app");

    }
}