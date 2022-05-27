<?php

namespace ITEC\EPL\Examen\Clases\Tests;

use ITEC\EPL\Examen\Clases\Pregunta;
use PHPUnit\Framework\TestCase;

class PreguntaTest extends TestCase
{
    public function testFactory()
    {
        $pregunta = Pregunta::create("Pregunta ficticia", 0, 5);

        $this->assertInstanceOf(Pregunta::class, $pregunta);

        return $pregunta;
    }

    /**
     * @depends testFactory
     */
    public function testGetters(Pregunta $pregunta)
    {
        $this->assertEquals(0, $pregunta->getId());
        $this->assertEquals("Pregunta ficticia", $pregunta->getPregunta());
        $this->assertEquals("Pregunta ficticia", (string) $pregunta);
        $this->assertEquals(5, $pregunta->getNotaMaxima());
    }
}
