<?php

namespace ITEC\EPL\Examen\Clases;

class ListaPreguntas
{
    private array $preguntas;
    private static int $lastid = 0;

    public function __construct()
    {
        $this->preguntas = [];
    }

    public function addNewPregunta(string $pregunta, int $notaMaxima)
    {
        $this->preguntas[] = Pregunta::create($pregunta, self::$lastid++, $notaMaxima);
    }

    public function getNumPreguntas()
    {
        return count($this->preguntas);
    }

    public function getTotalNotaMaxima()
    {
        return array_reduce($this->preguntas, function ($carry, $item) {
            return $carry + $item->getNotaMaxima();
        }, 0);
    }

    public function getPregunta(int $id): Pregunta | null
    {
        foreach ($this->preguntas as $pregunta) {
            if ($pregunta->getId() === $id) {
                return $pregunta;
            }
        }

        return null;
    }

    public function searchByString(string $str)
    {
        return array_filter($this->preguntas, function ($item) use ($str) {
            return str_contains($item->getPregunta(), $str);
        });
    }
}
