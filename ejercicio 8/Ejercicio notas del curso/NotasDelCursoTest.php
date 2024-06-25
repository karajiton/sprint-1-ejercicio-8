<?php
require_once "NotasDelCurso.php";

use PHPUnit\Framework\TestCase;

class NotasDelCursoTest extends TestCase {

    private $notasDelCurso;

  
    public function testPrimeraDivision() {
        $this->notasDelCurso = new NotasDelCurso();
        $this->assertEquals("el estudiante es de Primera Division.", $this->notasDelCurso->notaFinal(60));
        $this->assertEquals("el estudiante es de Primera Division.", $this->notasDelCurso->notaFinal(80));
        
    }

    public function testSegundaDivision() {
        $this->notasDelCurso = new NotasDelCurso();
        $this->assertEquals("el estudiante es de Segunda Division.", $this->notasDelCurso->notaFinal(45));
        $this->assertEquals("el estudiante es de Segunda Division.", $this->notasDelCurso->notaFinal(50));
        
    }

    public function testTerceraDivision() {
        $this->notasDelCurso = new NotasDelCurso();
        $this->assertEquals("el estudiante es de Tercera Division.", $this->notasDelCurso->notaFinal(33));
        $this->assertEquals("el estudiante es de Tercera Division.", $this->notasDelCurso->notaFinal(44));
    }

    public function testReprobado() {
        $this->notasDelCurso = new NotasDelCurso();
        $this->assertEquals("el estudiante ha reprobado.", $this->notasDelCurso->notaFinal(20));
        $this->assertEquals("el estudiante ha reprobado.", $this->notasDelCurso->notaFinal(32));
    }
}
?>

?>