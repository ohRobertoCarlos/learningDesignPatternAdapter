<?php

namespace RobertoCarlos\LearningDesdignPatternAdapter\Adapters;

use RobertoCarlos\LearningDesdignPatternAdapter\Contracts\Plug2Pinos;
use RobertoCarlos\LearningDesdignPatternAdapter\Contracts\Plug3Pinos;

class Plug2PinosAdapter implements Plug2Pinos
{
    private Plug3Pinos $plug3pinos;

    public function __construct(Plug3Pinos $plug3Pinos)
    {
        $this->plug3pinos = $plug3Pinos;
    }

    public function getNome(): string
    {
        return $this->plug3pinos->getDescricao();
    }

    public function testar(): void
    {
        $this->plug3pinos->run();
    }
}