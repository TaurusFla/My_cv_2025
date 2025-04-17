<?php
    require_once "includes/datos.php";           // Cargamos los datos personales, formación y experiencia
    require_once "includes/header.php"; // Cargamos la cabecera HTML (head, inicio del body, etc.)
?>

<nav class="barra-lateral"> <!-- Barra lateral de navegación -->
    <ul>
        <li><a href="#perfil"><i class="fas fa-user"></i> Perfil</a></li>
        <li><a href="#formacion"><i class="fas fa-graduation-cap"></i> Formación</a></li>
        <li><a href="#experiencia"><i class="fas fa-briefcase"></i> Experiencia</a></li>
        <!-- anadir más secciones aquí si es necesario -->
    </ul>
</nav>

<main>
    <div class="container"> <!-- Contenedor principal del CV -->
        <!-- Aquí empieza todo el contenido visible del CV -->

        <!-- COLUMNA IZQUIERDA -->
        <div class="columna-izquierda tarjeta-unica"> <!-- TODO el contenido de la columna izquierda -->
            <!-- Sección de identidad -->
            <div class="bloque-identidad">
                <div class="foto-perfil">
                    <img src="<?php echo $foto; ?>" alt="Foto de <?php echo $nombre . ' ' . $apellidos; ?>">
                </div>
                <div class="nombre-titulo">
                    <h1><?php echo $nombre . " " . $apellidos; ?></h1>
                    <h2 class="titulo-profesion">Técnico Electricista</h2>
                    <h2 class="titulo-profesion">Técnico en Equipos e Instalaciones Electrotécnicas</h2>
                </div>
            </div>

            <!-- Sección de datos personales -->
            <section class="card-section perfil izquierda seccion-animada" id="perfil"> <!-- Sección de perfil -->
                <h3><i class="fas fa-user icono"></i> Perfil</h3>
                <p><?php echo $descripcion_perfil; ?></p>
            </section>

            <!-- Sección de datos personales -->
            <section class="card-section contacto izquierda"> <!-- Sección de contacto -->
                <h3><i class="fas fa-phone icono"></i> Contacto</h3>
                <ul>
                    <li><i class="fas fa-envelope-open-text"></i> <?php echo $telefono; ?></li>
                    <li><i class="fas fa-envelope-open-text"></i> <?php echo $email1; ?></li>
                    <li><i class="fas fa-envelope-open-text"></i> <?php echo $email2; ?></li>
                </ul>
            </section>

            <section class="card-section idiomas izquierda"> <!-- Sección de idiomas -->
                <h3><i class="fas fa-globe icono"></i> Idiomas</h3>
                <?php foreach ($idiomas as $idioma => $nivel): ?>
                    <p><strong><?php echo $idioma; ?>:</strong> <?php echo $nivel; ?></p>
                <?php endforeach; ?>
            </section>

            <section class="card-section habilidades izquierda"> <!-- Sección de habilidades -->
                <h3><i class="fas fa-lightbulb icono"></i> Habilidades</h3>
                <ul>
                    <?php foreach ($habilidades as $habilidad): ?>
                        <li><?php echo $habilidad; ?></li>
                    <?php endforeach; ?>
                </ul>
            </section>

            <section class="card-section habilidades izquierda"> <!-- Sección de habilidades -->
                <h3><i class="fas fa-tools icono"></i> Conocimientos Técnicos</h3>
                <ul>
                    <?php foreach ($aptitudes_tecnicas as $item): ?>
                        <li><?php echo $item; ?></li>
                    <?php endforeach; ?>
                </ul>
            </section>

            <section class="card-section intereses izquierda"> <!-- Sección de intereses -->
                <h3><i class="fas fa-heart icono"></i> Intereses</h3>
                <ul>
                    <?php foreach ($intereses as $interes): ?>
                        <li><?php echo $interes; ?></li>
                    <?php endforeach; ?>
                </ul>
            </section>
        </div>

        <!-- COLUMNA DERECHA -->
        <div class="columna-derecha"> <!-- TODO el contenido de la columna derecha --> 
            <section class="card-section formacion seccion-animada no-break" id="formacion"> <!-- Sección de formación -->
                <h2>Formación Complementaria</h2>
                <?php foreach ($formacion_complementaria as $formacion): ?>
                    <div class="formacion-item">
                        <h3><?php echo $formacion["año"]; ?> - <?php echo $formacion["curso"]; ?></h3>
                        <p><strong>Centro:</strong> <?php echo $formacion["institucion"]; ?>, <?php echo $formacion["ciudad"]; ?></p>
                    </div>
                <?php endforeach; ?>
            </section>

            <div class="page-break-print"></div> <!-- Para separar las secciones en la impresión -->

            <section class="card-section experiencia seccion-animada no-break" id="experiencia"> <!-- Sección de experiencia laboral -->
                <h2>Experiencia laboral</h2>
                <?php foreach ($experiencias_laborales as $trabajo): ?>
                    <div class="experiencia-item">
                        <h3><?php echo $trabajo["puesto"]; ?></h3>
                        <p><strong>Empresa:</strong> <?php echo ucwords(strtolower($trabajo["empresa"])); ?> | <?php echo $trabajo["ubicacion"]; ?></p>
                        <p><strong>Período:</strong>
                            <?php
                                echo $trabajo["inicio"] . " - " . $trabajo["fin"];
                                if (isset($trabajo["detalle_periodos"])) {
                                    echo " (varias temporadas: ";
                                    echo implode(", ", $trabajo["detalle_periodos"]);
                                    echo ")";
                                }
                            ?>
                        </p>
                        <?php if (!empty($trabajo["funciones"])): ?>
                            <ul class="funciones-lista">
                                <?php foreach ($trabajo["funciones"] as $funcion): ?>
                                    <li><?php echo $funcion; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </section>
        </div>
    </div> <!-- Este cierre cierra el .container -->
</main>

<?php 
// Incluye una sola vez el archivo 'footer.php' desde la carpeta 'includes'
// Esto permite añadir el pie de página (footer) sin repetir código en cada página
include_once 'includes/footer.php';  // Pie de página
?>