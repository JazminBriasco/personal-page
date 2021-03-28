<style>
    body{
       /*  background-image: url("https://p0.piqsels.com/preview/219/320/842/5be9930e0504d.jpg"); */
    }
</style>


<?php
//Arrays. The 'skills' array is use for the names on the dropdowns, and the others are for the content. 
    
    $skills = [
        'PHP', 'DATABASE', 'SQL', 'JAVA', 'HTML5', 'CSS3', 'BOOTSTRAP', 'LINUX', 'C', 'GIT'
    ];
    $php = [
        'Operadores lógicos', 'Operadores aritméticos', 'Operadores de comparación', 'Operadores unarios', 'Operadores condicionales', 'Bucles', 'Funciones', 'Matrices indexadas', 'Matrices asociativas', 'Métodos HTTP: GET / POST ',' Clases ',' Métodos ','Namespace y Autoload','Request / Router',' JSON ',' SESSION ',' Modelo vista-controlador ',' Conexión a base de datos '
    ];
    $database = [
        'Modelo relacional', 'Normalización', 'Modelo cliente-servidor', 'DER', 'Álgebra relacional'
    ];
    $sql = [
        'Crear, actualizar, eliminar tablas', 'Primary, Foreign keys', 'Insertar, actualizar, eliminar', 'Joins', 'Order, Group', 'Restricciones', 'Constraints', 'Subconsultas', 'Procedimiento almacenado: in, out, inout'
    ];
    $java = [
        'POO', 'Clases abstractas', 'Maps', 'Interfaces', 'Colecciones', 'Operadores', 'Modificadores de acceso', 'Excepciones', 'Archivos', 'Clase genérica', 'Métodos genéricos', 'JSON '
    ];
    $html = [
        'Estructura global', 'Encabezados y párrafos', 'Vínculos', 'Audio y video', 'Elementos de bloque', 'Elementos en línea', 'Imágenes', 'Tablas', 'Formularios'
    ];
    $css = [
        'Selector de clase / id', 'Margen y padding', 'Fuentes', 'Fondos', 'Color y degradado', 'Animaciones básicas'
    ];
    $bootstrap = [
        'Layout', 'Content', 'Forms', 'Components'
    ];
    $linux = [
        'Uso básico de la terminal'];
    $c = [
        'Funciones', 'Tipo de datos', 'Punteros', 'Arreglos', 'Arreglos multidimensionales', 'Arreglos Dinámicos', 'Estructuras', 'Recursión', 'Listas enlazadas', 'Lista doblemente enlazada', 'Pila', ' Fila ',' Árbol binario '
    ];
    $git = [
        'Crear repositorio', 'Cambios locales / remotos', 'Administración de ramas', 'Gitignore', 'Merge', 'Resolución de conflictos'
    ];

    //'mayor' is use to loop through all the arrays.
    $mayor = [ $php, $database, $sql, $java, $html, $css, $bootstrap, $linux, $c, $git];
?>

<div class="skill-content-opacity skills-transition mt-5" >

    <?php
        $i = 0;
        foreach ($mayor as $k => $v) {  ?>
            <div class="mt-4 cont-center container-skills hover-skill border border-dark list-group-item-action text-white bg-dark-grey  " >
                <button class="btn btn-skills" type="button" data-toggle="collapse" data-target="#collapse-<?php echo  $i+1 ?>" aria-expanded="false" aria-controls="collapseExample">
                    <strong class="text-white">
                        <?php  print_r($skills[$i]);
                        $i++;
                        ?>
                    </strong>
                </button>
                <div class="collapse" id="collapse-<?php echo $i ?>">
                    <hr class="hr-border">  </hr>  
                    <table>
                        <tbody  class="text-center">
                            <tr>
                    
                                <?php
                                    $round = ceil(count($v)/5);
                                    if ($round >= 1) {
                                        if (count($v) < 5) {
                                            for ($q = 0; $q < count($v); $q++) {
                                                ?> <td> <?php echo $v[$q]; ?> </td> <?php
                                            }
                                        } else {
                                            for ($q = 0; $q <  5; $q++) {
                                                ?> 
                                            <td> <?php echo $v[$q]; ?> </td> <?php
                                            }
                                        } 
                                                                    
                                        ?><tr></tr><?php

                                        if ($round >= 2) {
                                            if (count($v) < 10) {
                                                for ($q = 5; $q < count($v); $q++) {
                                                    ?> <td> <?php echo $v[$q]; ?> </td> <?php
                                                }
                                            } else {
                                                for ($q = 5; $q < 10; $q++) {
                                                    ?> <td> <?php echo $v[$q]; ?> </td> <?php
                                                } 
                                            }

                                            ?><tr></tr><?php
                                    
                                        if ($round >= 3) {
                                            if(count($v) < 15){
                                                for ($q = 10; $q < count($v); $q++) {
                                                ?> <td> <?php echo $v[$q]; ?> </td> <?php
                                            }
                                        }else{
                                            for ($q = 10; $q <  15; $q++) {
                                                ?> <td> <?php echo $v[$q]; ?> </td> <?php
                                            } 
                                        }
                                    
                                        ?><tr></tr><?php
                                        if ($round >= 4) {
                                            if (count($v) < 20) {
                                                for ($q = 15; $q < count($v); $q++) {
                                                    ?> <td> <?php echo $v[$q]; ?> </td> <?php
                                                }
                                            } else {
                                                for ($q = 15; $q <  count($v); $q++) {
                                                    ?> <td> <?php echo $v[$q]; ?> </td> <?php
                                                }
                                            }
                                        }
                                    }
                                    }
                                }
                                
                                ?>
                            </tr>     
                        </tbody>
                    </table>
                </div>
            </div>
        <?php
        }
    ?>
</div>
