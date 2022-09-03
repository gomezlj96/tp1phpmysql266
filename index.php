<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Document</title>
</head>
<body>
    <header class="header">
        <nav class="botonera_principal">
            <ul>
                <li><a href="index.php"> Home</a></li>
                <li><a href="#"> Productos</a></li>
                <li><a href="nosotros.php"> Nosotros</a></li>
                <li><a href="contacto.php"> Contacto</a></li>

            </ul>
        </nav>
        <h1 class="introduccion1"> APRENDE A PROGRAMAR </h1>
    </header>
    <h2 class="introduccion">PHP Y MYSQL INICIAL</h2>
    <?php
    //VARIABLES
    $curso = "Php y MySql Inicial ";
    $duracion = "3 meses";
    $costo =  5000;
    $inicio = "05/04/22";
    ?>
    <section class="contenido">
        <ul>
            <li><?php echo "Curso: $curso" ?></li>
            <li><?php echo "Tiempo: $duracion "?></li>
            <li><?php echo "Fecha: $inicio "?></li>
            <li><?php echo "Valor: $costo" ?></li>

        </ul>
    </section>
    <?php
    //VARIABLES CURSO INTERMEDIO
    $curso_2 = "Php y MySql Intermedio";
    $duracion_2 = "2 meses";
    $costo_2 =  8000;
    $inicio_2 = "05/08/22";
    ?>
    <h2 class="introduccion">PHP Y MYSQL INTERMEDIO</h2>
    <section class="contenido2">
        <ul>
            <li><?php echo "Curso: $curso_2 "?></li>
            <li><?php echo "Tiempo: $duracion_2" ?></li>
            <li><?php echo "Fecha: $inicio_2 "?></li>
            <li><?php echo "Valor: $costo_2 "?></li>

        </ul>
    </section>
    <?php
    //VARIABLES PROMOCION AMBOS CURSOS
    $curso_promo = "Php y MySql inicial + Intermedio";
    $total_d = "5 meses";
    $total_c = $costo + $costo_2;
    ?>
    <h2 class="introduccion">PROMO PROGRAMADOR</h2>
    <section class="contenido3">
        <ul>
            <li><?php echo "Curso: $curso_promo" ?></li>
            <li><?php echo "Tiempo: $total_d" ?></li>
            <li><?php echo "Fecha: $inicio" ?></li>
            <li><?php echo "Valor: $total_c" ?></li>

        </ul>
    </section>

</body>

</html>