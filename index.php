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
                    <h2 class="titulo-profesion">Estudiante de FP Superior en Desarrollo de Aplicaciones Web</h2>
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
                    <li><i class="fas fa-phone"></i> <?php echo $telefono; ?></li>
                    <li><i class="fas fa-envelope"></i> <?php echo $email1; ?></li>
                    <li><i class="fas fa-envelope"></i> <?php echo $email2; ?></li>
                </ul>

            </section>

            <section class="card-section idiomas izquierda"> <!-- Sección de idiomas -->
                <h3><i class="fas fa-globe icono"></i> Idiomas</h3>
                <?php foreach ($idiomas as $idioma => $nivel): ?>
                    <div class="idioma">
                        <span class="nombre-idioma"><?php echo $idioma; ?></span>
                        <div class="barra-nivel">
                            <?php
                                // Calcula el ancho de la barra según el nivel
                                $porcentaje = [
                                    'A1' => '20%',
                                    'A2' => '40%',
                                    'B1' => '60%',
                                    'B2' => '80%',
                                    'C1' => '90%',
                                    'C2' => '100%',
                                    'Nativo' => '100%',
                                ];
                                $ancho = isset($porcentaje[$nivel]) ? $porcentaje[$nivel] : '0%';
                            ?>
                            <div class="nivel" style="width: <?php echo $ancho; ?>;"></div>
                        </div>
                    </div>
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

            <section class="card-section habilidades izquierda"> <!-- Sección de habilidades técnicas -->
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
            <!-- Sección de formación académica -->
            <!-- Esta sección se pinta siempre, aunque el array esté vacío. --> 
            <!-- Si no hay datos, no se mostrará nada. -->        
            <section class="card-section formacion seccion-animada no-break" id="formacion"> <!-- Sección de formación -->
                <h2>Formación Académica </h2>
                
                <?php // Asegúrate de que $formacion_complementaria está definido en 'datos.php'
                // Divide la formación por tipo (reglada vs complementaria)
                $formacion_reglada = []; // Array para formación reglada
                $formacion_extra   = []; // Array para formación complementaria

                foreach ($formacion_complementaria as $f) { // Recorre cada elemento del array de formación
                    if (isset($f['tipo']) && $f['tipo'] === 'reglada') { // Comprueba si el tipo es 'reglada'
                    $formacion_reglada[] = $f;
                    } else {
                    $formacion_extra[] = $f;
                    }
                }
                ?>

                <?php if (!empty($formacion_reglada)): ?> <!-- Solo pinta esta sección si hay formación reglada -->
                    <h3>Formación reglada</h3>
                    <?php foreach ($formacion_reglada as $f): ?>
                        <div class="formacion-item">
                            <h3><?= $f["año"]; ?> - <?= $f["curso"]; ?></h3>
                            <p><strong>Centro:</strong> <?= $f["institucion"]; ?><?= !empty($f["ciudad"]) ? ", ".$f["ciudad"] : ""; ?></p>
                            <?php if (!empty($f["nota"])): ?><p><em><?= $f["nota"]; ?></em></p><?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>

                <?php if (!empty($formacion_extra)): ?>
                    <h3>Formación complementaria</h3>
                    <?php foreach ($formacion_extra as $f): ?>
                        <div class="formacion-item">
                            <h3><?php echo $f["año"]; ?> - <?php echo $f["curso"]; ?></h3>
                            <p><strong>Centro:</strong> <?php echo $f["institucion"]; ?><?php
                            echo !empty($f["ciudad"]) ? ", ".$f["ciudad"] : "";
                            ?></p>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
                </section>
            
            <!-- Sección de proyectos -->
            <!-- Esta sección se pinta solo si hay proyectos en el array $proyectos -->
            <!-- Si no hay proyectos, no se mostrará nada. -->
            <!-- El array $proyectos debe estar definido en 'datos.php' y contener al menos un proyecto para que se muestre. -->
            <?php if (!empty($proyectos)): ?> <!-- El if (!empty($proyectos)) solo envuelve la sección para que no se pinte si el array está vacío. -->
                <section class="card-section proyectos seccion-animada no-break" id="proyectos">
                    <h2>Proyectos</h2>
                    <?php foreach ($proyectos as $p): ?>
                        <div class="formacion-item"> <!-- Para que herede el mismo estilo que “Formación/Experiencia”, ya que no tenemos css para <div class="proyecto-item"> -->
                            <h3><?php echo htmlspecialchars($p['titulo']); ?></h3>
                            <p><?php echo htmlspecialchars($p['resumen']); ?></p>
                            <p><strong>Tecnologías:</strong> <?php echo htmlspecialchars($p['tecnologias']); ?></p>
                            <?php if (!empty($p['repo'])): ?>
                                <p><a href="<?php echo htmlspecialchars($p['repo']); ?>" target="_blank" rel="noopener">Repositorio</a></p>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                </section>
            <?php endif; ?>

            <div class="page-break-print"></div> <!-- Para separar las secciones en la impresión -->

             <?php
            // Variable de control para mostrar o no las funciones de cada experiencia laboral.
            /* Esto me permite mantener los datos completos en el array pero decidir si los muestro o no en el CV
            sin tener que borrar información ni modificar el array original cada vez. */
            $mostrar_funciones = true; // Cambia a false si no quieres mostrar las funciones en cada trabajo
            ?>

            <!-- Sección de experiencia laboral -->
            <!-- Esta sección se pinta siempre, aunque el array esté vacío. -->
            <!-- Si no hay datos, se mostrará un mensaje de "No hay experiencia laboral" -->
            <section class="card-section experiencia seccion-animada no-break" id="experiencia"> <!-- Sección de experiencia laboral -->
                <h2>Experiencia laboral</h2>
                <?php foreach ($experiencias_laborales as $trabajo): ?>
                    <div class="experiencia-item">
                        <h3><?php echo $trabajo["puesto"]; ?></h3>
                        <p><strong>Empresa:</strong> <?php echo ucwords(strtolower($trabajo["empresa"])); ?> | <?php echo $trabajo["ubicacion"]; ?></p>
                        <p><strong>Período:</strong>
                            <?php
                                echo $trabajo["inicio"] . " - " . $trabajo["fin"];
                                if (!empty($trabajo["detalle_periodos"])) {
                                    echo " " . implode(" ", $trabajo["detalle_periodos"]);
                                }
                            ?>
                        </p>

                        <?php if ($mostrar_funciones && !empty($trabajo["funciones"])): ?>
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