<?php

namespace ITEC\EPL\Examen\Clases\Tests;

use ITEC\EPL\Examen\Clases\ListaPreguntas;
use PHPUnit\Framework\TestCase;

class ListaPreguntasTest extends TestCase
{
    public function testFactory()
    {
        $listaPreguntas = new ListaPreguntas();

        $this->assertInstanceOf(ListaPreguntas::class, $listaPreguntas);

        return $listaPreguntas;
    }

    /**
     * @depends testFactory
     */
    public function testPreguntas(ListaPreguntas $listaPreguntas)
    {
        $listaPreguntas->addNewPregunta("Pregunta ficticia 1", 10);
        $listaPreguntas->addNewPregunta("Pregunta ficticia 2", 10);

        $this->assertEquals(2, $listaPreguntas->getNumPreguntas());

        return $listaPreguntas;
    }

    /**
     * @depends testPreguntas
     */
    public function testNotaMaxima(ListaPreguntas $listaPreguntas)
    {
        $this->assertEquals(20, $listaPreguntas->getTotalNotaMaxima());

        return $listaPreguntas;
    }

    /**
     * @depends testNotaMaxima
     */
    public function testGetPregunta(ListaPreguntas $listaPreguntas)
    {
        $this->assertEquals("Pregunta ficticia 1", $listaPreguntas->getPregunta(0)->getPregunta());
        $this->assertNull($listaPreguntas->getPregunta(10));

        return $listaPreguntas;
    }

    /**
     * @depends testGetPregunta
     */
    public function testSearch(ListaPreguntas $listaPreguntas)
    {
        $this->assertEquals(2, count($listaPreguntas->searchByString("Pregunta")));
        $this->assertEquals(1, count($listaPreguntas->searchByString("icia 1")));
        $this->assertEquals(0, count($listaPreguntas->searchByString("No existe")));
    }
}
