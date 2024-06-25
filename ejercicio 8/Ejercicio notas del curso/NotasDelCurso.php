<html>
    <head>
        <?php
          class NotasDelCurso{
            function notaFinal (int $nota){
                 if ($nota >= 60){
                    return "el estudiante es de Primera Division.";
                }
                elseif($nota >= 45 && $nota <= 59){
                    return "el estudiante es de Segunda Division.";
                }
                elseif($nota >= 33 && $nota <= 44){
                    return "el estudiante es de Tercera Division.";
                }
                else{
                    return "el estudiante ha reprobado.";
                }
            }

        }
        $notas = new NotasDelCurso;
        echo $notas->notaFinal(80) . "</br>";
        echo $notas->notaFinal(45) . "</br>";
        echo $notas->notaFinal(33) . "</br>";
        echo $notas->notaFinal(32) . "</br>";
        
        ?>
    </head>
</html>