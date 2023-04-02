<?php

namespace RobertoCarlos\LearningDesdignPatternAdapter\Classes;

use RobertoCarlos\LearningDesdignPatternAdapter\Contracts\Plug3Pinos as ContractsPlug3Pinos;

class Plug3Pinos implements ContractsPlug3Pinos
{
    private string $descricao = 'plug 3 pinos';

    public function getDescricao(): string
    {
        return $this->descricao;
    }

    public function run(): void
    {
        echo $this->descricao . ' funcionando!' . PHP_EOL;
    }
}