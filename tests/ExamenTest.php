<?php

namespace ITEC\EPL\Examen\Tests;

use ITEC\EPL\Examen\Clases\Asignatura;
use ITEC\EPL\Examen\Clases\Fecha;
use ITEC\EPL\Examen\Clases\ListaPreguntas;
use ITEC\EPL\Examen\Clases\Hora;
use ITEC\EPL\Examen\Clases\Profesor;
use ITEC\EPL\Examen\Examen;
use PHPUnit\Framework\TestCase;

class ExamenTest extends TestCase
{
    public function testFactory()
    {
        $fecha = new Fecha(2022, 10, 10);
        $hora = new Hora(12, 0, 0);
        $listaPreguntas = new ListaPreguntas();
        $asignatura = new Asignatura(0, "Recreo");
        $profesor = new Profesor("Profesor", new Fecha(2000, 1, 1), 0);

        $examen = new Examen($fecha, $hora, $listaPreguntas, $asignatura, $profesor);

        $this->assertInstanceOf(Examen::class, $examen);

        return $examen;
    }

    /**
     * @depends testFactory
     */
    public function testGetters(Examen $examen)
    {
        $this->assertInstanceOf(Fecha::class, $examen->getFecha());
        $this->assertInstanceOf(Hora::class, $examen->getHora());
        $this->assertInstanceOf(ListaPreguntas::class, $examen->getListaPreguntas());
        $this->assertInstanceOf(Asignatura::class, $examen->getAsignatura());
        $this->assertInstanceOf(Profesor::class, $examen->getProfesor());
    }
}
