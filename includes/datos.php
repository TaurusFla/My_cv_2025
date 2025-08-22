<?php
// Datos personales
$nombre = "Flavius - Dorel";
$apellidos = "Abutnariti";
$foto = "assets/imgcv.png"; // Asegúrate de que el archivo 'foto.png' esté en el mismo directorio
$fecha_nacimiento = "14/10/1989";

// Información de contacto y perfil
$telefono = "+34 645545922";
$email1 = "flavius_salou@hotmail.com";
$email2 = "flapfla_89@gmail.com";
$descripcion_perfil = "Estudiante de DAW. Inicio de prácticas curriculares a finales de septiembre. Experiencia académica con Java, C#/.NET, JavaScript, PHP y MySQL. Foco en Java/.NET. Convenio gestionado por el centro. Disponibilidad presencial/híbrida/remota.";


// Idiomas
$idiomas = [
    "Rumano" => "Nativo",
    "Español" => "C2",
    "Catalán" => "C2",
    "Inglés" => "A1"
];

// Habilidades
$habilidades = [
    "Responsabilidad y compromiso con el trabajo",
    "Alto nivel de adaptabilidad a distintos entornos",
    "Resolución de problemas de forma eficaz",
    "Pensamiento lógico y estructurado",
    "Buena comunicación con equipos multidisciplinares",
    "Gestión eficiente del tiempo y de las tareas",
    "Aprendizaje autónomo y continuo",
    "Capacidad para trabajar bajo presión",
    "Autonomía en la ejecución de tareas técnicas",
    "Atención al detalle en tareas técnicas y administrativas"
];

// Aptitudes técnicas
// (Puedes añadir más aptitudes técnicas según tu experiencia y formación)
$aptitudes_tecnicas = [
    "Lenguajes de programación: Java, JavaScript, PHP, C#, POO",
    "Lenguajes de marcas y estilos: HTML5, CSS3",
    "Bases de datos: MySQL, SQL y uso de phpMyAdmin",
    "Conocimientos de servidores web: XAMPP, Apache",
    "Diseño web: Principios básicos de diseño y maquetación responsive",
    "Desarrollo web completo: desde frontend hasta backend básico",
    "Entornos de desarrollo: Eclipse, Visual Studio, XAMPP, IDEs varios",
    "Sistemas operativos: Windows y Linux (Ubuntu) – uso de terminales y VMs",
    "Lectura de planos eléctricos y automatismos industriales",
    "Montaje de cuadros eléctricos y pequeñas reparaciones"
];

// Intereses
$intereses = [
    "Desarrollo web (HTML, CSS, JavaScript)",
    "Programación en C#, Java y MySQL",
    "Electrónica y electricidad aplicada",
    "Videojuegos y diseño interactivo",
    "Lectura de libros en tiemipos libres",
    "Senderismo y actividades al aire libre"
];

// Formación Profesional
// Formación (reglada y complementaria mezcladas, marcando la reglada con "tipo")
$formacion_complementaria = [
    [
        "año" => "2024 – actualidad",
        "curso" => "FP Superior en Desarrollo de Aplicaciones Web (DAW)",
        "institucion" => "Titulación oficial (LOE), modalidad online",
        "ciudad" => "Lérida",
        "nota" => "Inicio de 4.º semestre (prácticas curriculares): finales de septiembre.",
        "tipo" => "reglada",
    ],
    [
        "año" => "2024",
        "curso" => "PRL en el Puesto de Trabajo de Riesgo Eléctrico",
        "institucion" => "ASPY Prevención, SLU",
        "ciudad" => "Tarragona",
        "tipo" => "extra",
    ],
    [
        "año" => "2020",
        "curso" => "Fabricación, Producción y Transformación de Hierro (Prevención de Riesgos Laborales de 3 horas)",
        "institucion" => "Quirónprevención",
        "ciudad" => "Valls",
        "tipo" => "extra",
    ],
    [
        "año" => "2019",
        "curso" => "Operador de Carretillas Elevadoras",
        "institucion" => "Quirónprevención",
        "ciudad" => "Valls",
        "tipo" => "extra",
    ],
    [
        "año" => "2010",
        "curso" => "Técnico en Equipos e Instalaciones Electrotécnicas | CFPM Equipos e Instalaciones Electrotécnicas",
        "institucion" => "Institut Ramon Berenguer IV",
        "ciudad" => "Cambrils",
        "tipo" => "reglada",
    ],
    [
        "año" => "2007",
        "curso" => "Prueba de Acceso al Grado Medio",
        "institucion" => "IES Baix Camp",
        "ciudad" => "Reus",
        "tipo" => "reglada",
    ],
    [
        "año" => "2006",
        "curso" => "Educación Secundaria Obligatoria (ESO)",
        "institucion" => "IES Jaume I",
        "ciudad" => "Salou",
        "tipo" => "reglada",
    ],
    [
        "año" => "2001",
        "curso" => "Educación Secundaria",
        "institucion" => "Şcoala Generală",
        "ciudad" => "Călan",
        "tipo" => "reglada",
    ],
    [
        "año" => "2000",
        "curso" => "Educación Primaria",
        "institucion" => "Şcoala Generală",
        "ciudad" => "Călan",
        "tipo" => "reglada",
    ]
];

// Proyectos destacados
// (Puedes añadir más proyectos según tu experiencia)
$proyectos = [
  [
    'titulo' => 'CV Web Responsive',
    'resumen' => 'CV en dos columnas con impresión a PDF y componentes reutilizables (header/footer); datos desacoplados en includes.',
    'tecnologias' => 'HTML5, CSS3, PHP',
    'repo' => 'https://github.com/TaurusFla/My_cv_2025.git'
  ],
  [
    'titulo' => 'Mini-CRUD de Posts',
    'resumen' => 'Altas, bajas, edición y listado; validación simple; conexión a MySQL y patrón MVC básico.',
    'tecnologias' => 'PHP, MySQL',
    'repo' => ''
  ],
  [
    'titulo' => 'Piedra, Papel o Tijera',
    'resumen' => 'Juego con lógica, manipulación del DOM, eventos, marcador y reinicio.',
    'tecnologias' => 'JavaScript',
    'repo' => ''
  ]
];

// Experiencia laboral
$experiencias_laborales = [
    [
        "inicio" => "Agosto 2023",
        "fin" => "Enero 2024",
        "puesto" => "Técnico electricista",
        "empresa" => "SOCIEDAD ANONIMA DE TENDIDOS ELECTRICOS Y MONTAJES",
        "ubicacion" => "Vila-seca",
        "funciones" => [
            "Instalación y cambio de interruptores, controles, fusibles, luces y motores.",
            "Realización de pruebas de los sistemas eléctricos y de la continuidad de los circuitos.",
            "Uso de herramientas de medición para detectar fallos y averías.",
            "Instalación, reparación y mantenimiento de equipos de control y distribución eléctrica."
        ]
    ],
    [
        "inicio" => "Marzo 2023",
        "fin" => "Agosto 2023",
        "puesto" => "Técnico electricista",
        "empresa" => "CAMBRILS PARK RESORT S.L.",
        "ubicacion" => "Cambrils",
        "funciones" => [
            "Instalación y cambio de interruptores, controles, fusibles, luces y motores.",
            "Inspección de sistemas, equipos y componentes eléctricos.",
            "Tareas de mantenimiento rutinario en instalaciones.",
            "Localización y reparación de fugas y goteras."
        ]
    ],
    [
        "inicio" => "Febrero 2019",
        "fin" => "Marzo 2023",
        "puesto" => "Operador de máquina trefiladora de metales",
        "empresa" => "ALEADOS DEL COBRE S.A.",
        "ubicacion" => "Valls",
        "funciones" => [
            "Operación de máquinas para el procesamiento de metales.",
            "Carga y descarga de materiales.",
            "Mantenimiento de orden y limpieza en planta.",
            "Detección y notificación de fallos en maquinaria."
        ]
    ],
    [
        "inicio" => "Julio 2015",
        "fin" => "Enero 2019",
        "puesto" => "Tapicero de muebles",
        "empresa" => "MARTKOM GLOBAL INDUSTRIES S.L.",
        "ubicacion" => "Alió",
        "funciones" => [
            "Manejo de herramientas de tapicería.",
            "Tapizado de mobiliario.",
            "Ensamblaje de piezas.",
            "Trabajos de tapicería industrial."
        ]
    ],
    [
        "inicio" => "Abril 2013",
        "fin" => "Septiembre 2018",
        "puesto" => "Repartidor de pizzas",
        "empresa" => "(Telepizza) IRVA 2010 SL",
        "ubicacion" => "Salou",
        "detalle_periodos" => [
            "(varias campañas de verano e invierno)"
        ],
        "funciones" => [
            "Reparto de pedidos a domicilio.",
            "Cobros en metálico y tarjeta.",
            "Planificación de rutas eficientes."
        ]
    ],
    [
        "inicio" => "Julio 2015",
        "fin" => "Julio 2015",
        "puesto" => "Reciclaje de palets",
        "empresa" => "VICARLI RECICLING S.L.",
        "ubicacion" => "Reus",
        "funciones" => []
    ],
    [
        "inicio" => "Enero 2012",
        "fin" => "Agosto 2012",
        "puesto" => "Trabajador en obra",
        "empresa" => "Particular",
        "ubicacion" => "París",
        "funciones" => [
            "Montaje de suelo flotante.",
            "Instalación de pladur, pintura y electricidad."
        ]
    ],
    [
        "inicio" => "Septiembre 2011",
        "fin" => "Noviembre 2011",
        "puesto" => "Limpiador de coches",
        "empresa" => "RENTATS ROYO S.L.",
        "ubicacion" => "Reus",
        "funciones" => [
            "Limpieza manual y automática de coches.",
            "Gestión de turnos y traslado de vehículos.",
            "Aspirado de tapicería y alfombrillas."
        ]
    ],
    [
        "inicio" => "Junio 2011",
        "fin" => "Septiembre 2011",
        "puesto" => "Alquiler barcas hidropedales",
        "empresa" => "E. FERRAN GOMBAU, J. BEAMUD DOMENECH COM.",
        "ubicacion" => "Salou",
        "funciones" => []
    ],
    [
        "inicio" => "Julio 2008",
        "fin" => "Agosto 2008",
        "puesto" => "Electricista",
        "empresa" => "VANCAR SALOU S.L.",
        "ubicacion" => "Salou",
        "funciones" => [
            "Tendido de cables.",
            "Montaje de estructuras eléctricas.",
            "Instalaciones residenciales y de climatización."
        ]
    ],
    [
        "inicio" => "Junio 2007",
        "fin" => "Septiembre 2010",
        "puesto" => "Almacenista de supermercado",
        "empresa" => "MONTANE-MUNTANE S.L.",
        "ubicacion" => "Salou",
        "detalle_periodos" => [
            "(varias campañas de verano e invierno)"
        ],
        "funciones" => [
            "Orden y limpieza en góndolas.",
            "Gestión de stock y exhibición.",
            "Uso de carretilla elevadora.",
            "Almacenaje y distribución de mercancía."
        ]
    ],
    [
        "inicio" => "Agosto 2006",
        "fin" => "Abril 2007",
        "puesto" => "Dependiente de panadería",
        "empresa" => "MONTANE-MUNTANE S.L.",
        "ubicacion" => "Salou",
        "detalle_periodos" => [
            "(varias campañas de verano e invierno)"
        ],
        "funciones" => [
            "Manejo de caja registradora.",
            "Almacenamiento en cámaras frigoríficas.",
            "Reposición de productos tras horneado."
        ]
    ],
    // Puedes seguir el patrón para los demás empleos si quieres más detalle
];
?>