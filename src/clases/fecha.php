<?php

namespace ITEC\EPL\Examen\Clases;

class Fecha
{
    private \DateTime $datetime;

    public function __construct(int $año, int $mes, int $dia)
    {
        $this->datetime = new \DateTime();
        $this->datetime->setDate($año, $mes, $dia);
    }

    public static function create(int $año, int $mes, int $dia)
    {
        return new Fecha($año, $mes, $dia);
    }

    public function __toString()
    {
        return $this->datetime->format("d/m/Y");
    }

    public function getDaysLeft()
    {
        $now = new \DateTime();
        return $now->diff($this->datetime)->format("j");
    }
}
