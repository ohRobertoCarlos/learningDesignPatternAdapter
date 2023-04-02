<?php

namespace RobertoCarlos\LearningDesdignPatternAdapter\Classes;

use RobertoCarlos\LearningDesdignPatternAdapter\Contracts\PadraoTomada3Pinos;
use RobertoCarlos\LearningDesdignPatternAdapter\Contracts\Plug3Pinos;

class Tomada3Pinos implements PadraoTomada3Pinos
{
    private plug3Pinos $plug;
    private string $descricao = 'Tomada 3 pinos';

    public function plugar(plug3Pinos $plug): void
    {
        $this->plug = $plug;
        echo $this->plug->getDescricao() . ' conectado!' . PHP_EOL;
    }

    public function desplugar(): void
    {
        $this->plug = null;
    }

    public function run()   
    {
        if ($this->plug != null) {
            echo $this->descricao . ' esta com o ' . $this->plug->getDescricao() . ' conectado!' . PHP_EOL;
        } else {
            echo $this->descricao . ' esta desconectada!' . PHP_EOL;
        }
    }
    
}