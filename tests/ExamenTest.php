<?php

namespace MultipleChoice;

use PHPUnit\Framework\TestCase;
use Symfony\Component\Yaml\Yaml;

class ExamenTest extends TestCase {

    public function testLeerYamil() {
        $yamil = Yaml::parse(file_get_contents("./preguntas.yml"));
        $prueba = new Examen($yamil);
        $intentoUno = $prueba->getPreguntas();
        echo $intentoUno->preguntas;
        $intentoDos = $prueba->getPreguntas();
        $this->assertNotEquals($intentoUno, $intentoDos);
    }
}