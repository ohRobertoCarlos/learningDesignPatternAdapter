<?php

namespace RobertoCarlos\LearningDesdignPatternAdapter\Classes;

use RobertoCarlos\LearningDesdignPatternAdapter\Contracts\Plug2Pinos as ContractsPlug2Pinos;

class Plug2Pinos implements ContractsPlug2Pinos
{
    private string $nome = 'plug 2 pinos';

    public function getNome(): string
    {
        return $this->nome;
    }

    public function testar(): void
    {
        echo $this->nome . ' funcionando!' . PHP_EOL;
    }
}