<?php

namespace RobertoCarlos\LearningDesdignPatternAdapter\Classes;

use RobertoCarlos\LearningDesdignPatternAdapter\Contracts\PadraoTomada2Pinos;
use RobertoCarlos\LearningDesdignPatternAdapter\Contracts\Plug2Pinos;

class Tomada2Pinos implements PadraoTomada2Pinos
{
    private Plug2Pinos $plug;
    private string $nome = 'Tomada 2 pinos';

    public function conectar(Plug2Pinos $plug): void
    {
        $this->plug = $plug;
        echo $this->plug->getNome() . ' conectado!' . PHP_EOL;
    }

    public function desconectar(): void
    {
        $this->plug = null;
    }

    public function testar()   
    {
        if ($this->plug != null) {
            echo $this->nome . ' esta com o ' . $this->plug->getNome() . ' conectado!' . PHP_EOL;
        } else {
            echo $this->nome . ' esta desconectada!' . PHP_EOL;
        }
    }
    
}