        <footer>
            <p>© <?php echo date("Y") . ' ' . $nombre . ' ' . $apellidos; ?> – CV generado con PHP</p> <!-- Pie de página con el año actual y el nombre completo -->
            <div class="boton-descarga">
                <button id="descargar-pdf">
                    <i class="fas fa-file-pdf"></i> Descargar CV en PDF
                </button>
            </div>
        </footer>

        <!-- Scripts para generar PDF -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script> <!-- Librería para capturar el HTML y convertirlo a imagen -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script> <!-- Librería para generar el PDF -->

        <!-- Scripts para la funcionalidad del menú y animaciones -->
        <script src="js/pdf.js"></script> <!-- Generar PDF -->
        <script src="js/menu.js"></script> <!-- Menú desplegable -->
        <script src="js/animaciones.js"></script> <!-- Animaciones al hacer scroll -->

        <!-- SweetAlert2 -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </body>
</html>