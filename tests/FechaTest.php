<?php

namespace ITEC\EPL\Examen\Clases\Tests;

use ITEC\EPL\Examen\Clases\Fecha;
use PHPUnit\Framework\TestCase;

class FechaTest extends TestCase
{
    public function testFactory()
    {
        $prueba = Fecha::create(2022, 10, 20);

        $this->assertInstanceOf(Fecha::class, $prueba);

        return $prueba;
    }

    /**
     * @depends testFactory
     */
    public function testDateStr(Fecha $instancia)
    {
        $this->assertEquals("20/10/2022", (string) $instancia);
        $this->assertEquals("20/10/2022", $instancia->getFechaStr());
    }
}
