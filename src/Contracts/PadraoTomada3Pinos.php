<?php

namespace RobertoCarlos\LearningDesdignPatternAdapter\Contracts;

interface PadraoTomada3Pinos
{
    public function plugar(plug3Pinos $plug): void;
    public function desplugar(): void;
}