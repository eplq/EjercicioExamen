<?php

namespace ITEC\EPL\Examen\Clases\Tests;

use ITEC\EPL\Examen\Clases\Fecha;
use PHPUnit\Framework\TestCase;

class FechaTest extends TestCase
{
    public function testFactory()
    {
        $prueba = Fecha::create(2070, 10, 20);

        $this->assertInstanceOf(Fecha::class, $prueba);

        return $prueba;
    }

    /**
     * @depends testFactory
     */
    public function testDateStr(Fecha $instancia)
    {
        $this->assertEquals("20/10/2070", (string) $instancia);
        $this->assertEquals("20/10/2070", $instancia->getFechaStr());

        return $instancia;
    }

    /**
     * @depends testDateStr
     */
    public function testDaysLeft(Fecha $instancia)
    {
        $hoy = new \DateTime();
        $fechaFutura = new \DateTime();
        $fechaFutura->setDate(2070, 10, 20);
        $dias = $fechaFutura->diff($hoy)->format("j");

        $this->assertEquals($dias, $instancia->getDaysLeft());
    }
}
