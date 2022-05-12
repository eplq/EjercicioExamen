<?php

namespace ITEC\EPL\Examen\Clases;

class Hora
{
    private \DateTime $dateTime;

    public function __construct(int $hora = 0, int $minuto = 0, int $segundo = 0)
    {
        $this->dateTime = new \DateTime();
        $this->dateTime->setTime($hora, $minuto, $segundo);
    }

    public static function createHora(int $hora = 0, int $minuto = 0, int $segundo = 0)
    {
        return new Hora($hora, $minuto, $segundo);
    }

    public function __toString()
    {
        return $this->dateTime->format("H:i:s");
    }

    public function getTimeLeft()
    {
        $nowDatetime = new \DateTime();
        return $nowDatetime->diff($this->dateTime)->format("H:i:s");
    }
}
