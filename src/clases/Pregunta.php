<?php

namespace ITEC\EPL\Examen\Clases;

class Pregunta
{
    private int $id;
    private string $pregunta;
    private int $notaMaxima;

    public function __construct(string $pregunta, int $id, int $notaMaxima = 10)
    {
        $this->pregunta = $pregunta;
        $this->notaMaxima = $notaMaxima;
        $this->id = $id;
    }

    public static function create(string $pregunta, int $id, int $notaMaxima = 10)
    {
        return new Pregunta($pregunta, $id, $notaMaxima);
    }

    public function __toString()
    {
        return $this->pregunta;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getNotaMaxima()
    {
        return $this->notaMaxima;
    }

    public function getPregunta()
    {
        return $this->pregunta;
    }
}
