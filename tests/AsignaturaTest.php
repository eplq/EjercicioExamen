<?php

namespace ITEC\EPL\Examen\Clases\Tests;

use ITEC\EPL\Examen\Clases\Asignatura;
use PHPUnit\Framework\TestCase;

class AsignaturaTest extends TestCase
{
    public function testFactory()
    {
        $prueba = Asignatura::create(10, "Matemáticas");

        $this->assertInstanceOf(Asignatura::class, $prueba);

        return $prueba;
    }

    /**
     * @depends testFactory
     */
    public function testGetters(Asignatura $instancia)
    {
        $this->assertEquals(10, $instancia->getId());
        $this->assertEquals("Matemáticas", $instancia->getTitulo());
    }
}
