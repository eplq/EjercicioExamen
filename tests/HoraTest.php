<?php

namespace ITEC\EPL\Examen\Clases\Tests;

use PHPUnit\Framework\TestCase;
use ITEC\EPL\Examen\Clases\Hora;

class HoraTest extends TestCase
{
    public function testFactory()
    {
        $hora = Hora::createHora(23, 59, 59);

        $this->assertInstanceOf(Hora::class, $hora);

        return $hora;
    }

    /**
     * @depends testFactory
     */
    public function testToString(Hora $hora)
    {
        $this->assertEquals("23:59:59", (string) $hora);

        return $hora;
    }

    /**
     * @depends testToString
     */
    public function testTimeLeft(Hora $hora)
    {
        $ahora = new \DateTime();
        $futuro = new \DateTime();
        $futuro->setTime(23, 59, 59);
        $diferenciaHora = $ahora->diff($futuro)->format("H:i:s");

        $this->assertEquals($diferenciaHora, $hora->getTimeLeft());
    }
}
