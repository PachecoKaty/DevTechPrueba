<?php

namespace Tests\Feature;

use App\Prueba\PruebaAdd;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use PHPUnit\Framework\TestCase;


class Prueba extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function testSumarPositivos(): void
    {
        $prueba = new PruebaAdd();
        $resultado = $prueba->add(2, 3);
        $this->assertEquals(5, $resultado);
    }

    public function testSumarPositivoNegativos(): void
    {
        $prueba = new PruebaAdd();
        $resultado = $prueba->add(2, -3);
        $this->assertEquals(-1, $resultado);
    }

    public function testSumarNegativos(): void
    {
        $prueba = new PruebaAdd();
        $resultado = $prueba->add(-2, -3);
        $this->assertEquals(-5, $resultado);
    }

    //Suma un cero con un negativo
    public function testSumarCeroNegativos(): void
    {
        $prueba = new PruebaAdd();
        $resultado = $prueba->add(0, -3);
        $this->assertEquals(-3, $resultado);
    }

    public function testSumarDescimales(): void
    {
        $prueba = new PruebaAdd();
        $resultado = $prueba->add(2.3, 3.8);
        $this->assertEquals(5.1, $resultado);
    }

    public function testSumarLetraNumero(): void
    {
        $prueba = new PruebaAdd();
        $resultado = $prueba->add('a', 2);
        $this->assertEquals('a2', $resultado);
    }

}
