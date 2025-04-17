// Botón para descargar el CV en PDF
// Este script utiliza jsPDF y html2canvas para capturar el contenido de la página y convertirlo en un PDF.
document.getElementById('descargar-pdf').addEventListener('click', function () {
    Swal.fire({
        title: '¿Cómo quieres guardar el CV?',
        text: 'Elige el formato de impresión que prefieras',
        icon: 'question',
        showCancelButton: true,
        confirmButtonText: '🧾 Todo en una hoja',
        cancelButtonText: '📄 Formato A4',
        reverseButtons: true
    }).then((result) => {
        const { jsPDF } = window.jspdf; // Asegúrate de que jsPDF esté cargado
        const element = document.querySelector(".container"); // Selecciona el elemento que deseas capturar

        // Usar html2canvas para capturar el elemento y convertirlo en una imagen
        html2canvas(element, { scale: 2, scrollY: 0 }).then(canvas => {
            const imgData = canvas.toDataURL("image/png");
            const pdf = new jsPDF('p', 'mm', 'a4');
            const pageWidth = pdf.internal.pageSize.getWidth();
            const imgWidth = pageWidth;
            const imgHeight = (canvas.height * imgWidth) / canvas.width;

            if (result.isConfirmed) {
                // Todo en una sola hoja
                const customHeight = imgHeight < 297 ? 297 : imgHeight;
                const pdfFull = new jsPDF('p', 'mm', [pageWidth, customHeight]);
                pdfFull.addImage(imgData, 'PNG', 0, 0, imgWidth, imgHeight);
                pdfFull.save("CV_Flavius_Dorel_UNA_HOJA.pdf");
            } else {
                // Formato A4 dividido por páginas
                let heightLeft = imgHeight;
                let position = 0;

                pdf.addImage(imgData, 'PNG', 0, position, imgWidth, imgHeight);
                heightLeft -= pdf.internal.pageSize.getHeight();

                while (heightLeft > 0) {
                    position -= pdf.internal.pageSize.getHeight();
                    pdf.addPage();
                    pdf.addImage(imgData, 'PNG', 0, position, imgWidth, imgHeight);
                    heightLeft -= pdf.internal.pageSize.getHeight();
                }

                // Guardar el PDF en formato A4
                pdf.save("CV_Flavius_Dorel_A4.pdf");
            }
        });
    });
});