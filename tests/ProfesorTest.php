<?php

namespace ITEC\EPL\Examen\Clases\Tests;

use ITEC\EPL\Examen\Clases\Profesor;
use PHPUnit\Framework\TestCase;

class ProfesorTest extends TestCase
{
    public function testFactory()
    {
        $profesor = Profesor::createProfesorFecha("Profesor ficticio", 2000, 1, 1, 0);

        $this->assertInstanceOf(Profesor::class, $profesor);

        return $profesor;
    }

    /**
     * @depends testFactory
     */
    public function testGetters(Profesor $profesor)
    {
        $this->assertEquals("Profesor ficticio", $profesor->getNombre());
        $this->assertEquals("01/01/2000", $profesor->getFechaNacimientoStr());
    }
}
