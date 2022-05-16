<?php

namespace ITEC\EPL\Examen;

use ITEC\EPL\Examen\Clases\Fecha;
use ITEC\EPL\Examen\Clases\Hora;
use ITEC\EPL\Examen\Clases\ListadoPreguntas;
use ITEC\EPL\Examen\Clases\Asignatura;
use ITEC\EPL\Examen\Clases\Profesor;

class Examen
{
    private Fecha $fecha;
    private Hora $hora;
    private ListadoPreguntas $listadoPreguntas;
    private Asignatura $asignatura;
    private Profesor $profesor;

    public function __construct(Fecha $fecha, Hora $hora, ListadoPreguntas $listadoPreguntas, Asignatura $asignatura, Profesor $profesor)
    {
        $this->fecha = $fecha;
        $this->hora = $hora;
        $this->listadoPreguntas = $listadoPreguntas;
        $this->asignatura = $asignatura;
        $this->profesor = $profesor;
    }

    public function getFecha()
    {
        return $this->fecha;
    }

    public function getHora()
    {
        return $this->hora;
    }

    public function getListadoPreguntas()
    {
        return $this->listadoPreguntas;
    }

    public function getAsignatura()
    {
        return $this->asignatura;
    }

    public function getProfesor()
    {
        return $this->profesor;
    }
}
