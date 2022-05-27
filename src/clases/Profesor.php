<?php

namespace ITEC\EPL\Examen\Clases;

class Profesor
{
    private string $nombre;
    private Fecha $fechaNacimiento;
    private int $id;

    public function __construct(string $nombre, Fecha $fechaNacimiento, int $id)
    {
        $this->nombre = $nombre;
        $this->fechaNacimiento = $fechaNacimiento;
        $this->id = $id;
    }

    public static function create(string $nombre, Fecha $fechaNacimiento, int $id)
    {
        return new Profesor($nombre, $fechaNacimiento, $id);
    }

    public static function createProfesorFecha(string $nombre, int $year, int $month, int $day, int $id)
    {
        $fecha = Fecha::create($year, $month, $day);
        return self::create($nombre, $fecha, $id);
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function getFechaNacimientoStr(): string
    {
        return $this->fechaNacimiento->getFechaStr();
    }
}
