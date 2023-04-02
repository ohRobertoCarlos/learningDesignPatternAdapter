<?php

namespace RobertoCarlos\LearningDesdignPatternAdapter\Contracts;

interface PadraoTomada2Pinos
{
    public function conectar(plug2Pinos $plug): void;
    public function desconectar(): void;
}