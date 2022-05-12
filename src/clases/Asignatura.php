<?php

namespace ITEC\EPL\Examen\Clases;

class Asignatura
{
    private int $id;
    private string $titulo;

    public function __construct(int $id, string $titulo)
    {
        $this->id = $id;
        $this->titulo = $titulo;
    }

    public static function create(int $id, string $titulo)
    {
        return new Asignatura($id, $titulo);
    }

    public function getId()
    {
        return $this->id;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }
}
