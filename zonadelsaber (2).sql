-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 04-09-2023 a las 11:03:37
-- Versión del servidor: 8.0.31
-- Versión de PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `zonadelsaber`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ayudas`
--

DROP TABLE IF EXISTS `ayudas`;
CREATE TABLE IF NOT EXISTS `ayudas` (
  `id_ayuda` int NOT NULL,
  `texto` varchar(40) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `fk_doc_usuaria` int NOT NULL,
  PRIMARY KEY (`id_ayuda`),
  KEY `fk_id_doc_usuaria` (`fk_doc_usuaria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

DROP TABLE IF EXISTS `libros`;
CREATE TABLE IF NOT EXISTS `libros` (
  `codigo_libro` int NOT NULL,
  `nombre_libro` varchar(45) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `autor` varchar(45) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `idioma` varchar(45) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `fk_usua` int NOT NULL,
  PRIMARY KEY (`codigo_libro`),
  KEY `fk_usua` (`fk_usua`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

DROP TABLE IF EXISTS `materias`;
CREATE TABLE IF NOT EXISTS `materias` (
  `id_materia` int NOT NULL,
  `nombre` varchar(20) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `descripcion_materia` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `fkmon_doc` int NOT NULL,
  PRIMARY KEY (`id_materia`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`id_materia`, `nombre`, `descripcion_materia`, `fkmon_doc`) VALUES
(1, 'matematicas', 'matematicas es una materia la cual es de un enfoque de numero variados en del conocimiento', 0),
(2, 'Español', 'una area de literatura la cual se enfoca en todo como tesis y todo lo que tiene la area de español', 0),
(3, 'sociales', 'es una materia de historia la cual se enfoca mucho en los hechos historicos o tambien los desastres ', 0),
(4, 'ciencias naturales', 'en esta materia la cual se enfoca mucho en el ser humano lo mas conveniente para nosotros y de los s', 0),
(5, 'ingles', 'otra manera de comunicarse el cual es mundial osea que se pueda comunicar con todos', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notificacion`
--

DROP TABLE IF EXISTS `notificacion`;
CREATE TABLE IF NOT EXISTS `notificacion` (
  `id_notificacion` int NOT NULL,
  `mensaje` varchar(40) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `fecha` date NOT NULL,
  `fk_id_doc_usu` int NOT NULL,
  PRIMARY KEY (`id_notificacion`),
  KEY `fk_id_doc_usu` (`fk_id_doc_usu`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pruebas`
--

DROP TABLE IF EXISTS `pruebas`;
CREATE TABLE IF NOT EXISTS `pruebas` (
  `id_prueba` int NOT NULL,
  `nombre` varchar(11) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `pregunta` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `texto` varchar(120) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `fk_materia` int NOT NULL,
  `fk_resultado` int NOT NULL,
  PRIMARY KEY (`id_prueba`),
  KEY `fk_materia` (`fk_materia`),
  KEY `fk_resultado` (`fk_resultado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `pruebas`
--

INSERT INTO `pruebas` (`id_prueba`, `nombre`, `pregunta`, `texto`, `fk_materia`, `fk_resultado`) VALUES
(1, 'español', 'A juzgar por su estilo, tema y estructura, ¿en cuál de \r\nlos siguientes contextos estaría inscrito m', 'El primer gran filósofo del siglo diecisiete (si exceptuamos \r\na Bacon y Galileo) fue Descartes, y si alguna vez se dijo', 2, 1),
(2, 'español', 'A partir de sus pensamientos y actitudes, es posible \r\nconcluir que Escobar es un hombre', 'Con el siguiente fragmento comienza la novela “Sin \r\nremedio” de Antonio Caballero. Los sucesos tienen lugar \r\nen la mad', 2, 2),
(3, 'español', '¿Cuál de los siguientes enunciados sintetiza mejor el \r\ncontenido del primer párrafo?', 'El primer efecto de la globalización de la comunicación por \r\nInternet ha sido la crisis de la noción de límite. El conc', 2, 3),
(4, 'español', 'En el tercer párrafo, cuando el autor menciona a las \r\nnaciones que se forman fuera de las fronteras', '', 2, 4),
(5, 'español', 'En el último párrafo del texto se', 'Durante los últimos años he tenido la incómoda sensación \r\nde que alguien (o algo) ha estado cacharreando con mi \r\ncereb', 2, 5),
(6, 'español', ' Considere el siguiente enunciado:\r\n“Pero, sea lo que sea, se trata de otra forma de leer, y \r\ndetrá', '', 2, 6),
(7, 'español', ' Según el texto (iii), ¿qué posiciones políticas se \r\nidentifican como democráticas?\r\n', '(i). “El argumento más poderoso contra la democracia es \nuna conversación de cinco minutos\ncon el votante medio”.\nWin', 2, 7),
(8, 'español', '¿Cuál de las siguientes afirmaciones se infiere del texto \r\n(i)?', '', 2, 8),
(9, 'español', '¿Cuál de las siguientes opciones describe mejor la \r\nrelación entre el contenido del texto y el títu', 'El conocimiento no consiste en una serie de teorías \r\nautoconsistentes que tiende a converger en una \r\nperspectiva ideal', 2, 9),
(10, 'español', '. El autor del texto aplica a la filosofía de la ciencia el \r\nprincipio del liberalismo, según el cu', '', 2, 10),
(11, 'español', '¿Cuál de los siguientes enunciados describe mejor la \r\ncaricatura?', '', 2, 11),
(12, 'español', ' ¿Cuál de las siguientes afirmaciones es compatible con \r\nlas políticas del Partido?', '1984 es una novela futurista que tiene lugar en una \r\nsociedad totalitaria. Los ciudadanos de esta sociedad son \r\ncontro', 2, 12),
(13, 'español', 'La frase “figúrate una bota aplastando un rostro \r\nhumano…incesantemente”', '', 2, 13),
(14, 'español', '. En la frase “Las fotografías son la prueba irrecusable \r\nde que se hizo la excursión, se cumplió e', 'Si las fotografías permiten la posesión imaginaria de un \r\npasado irreal, también ayudan a tomar posesión de un \r\nespaci', 2, 14),
(15, 'español', 'considere el siguiente resumen del texto anterior:\r\n“La autora analiza la relación entre el turismo ', '', 2, 15),
(16, 'español', '¿Cuál de los siguientes enunciados se contradice con la tesis central del texto?\r\n', '', 2, 16),
(17, 'español', 'Según la infografía, “los países de ingresos medios \r\nsolo tienen la mitad de los vehículos existent', '', 2, 17),
(18, 'español', ' Considere la siguiente descripción del contenido de la \r\ninfografía:\r\n«La infografía muestra datos ', '', 2, 18),
(19, 'español', ' De la información del cuadro inferior izquierdo, donde \r\nse presentan estadísticas sobre la cantida', '', 2, 19),
(20, 'español', ' A partir de las gráficas sobre la relación entre el \r\nnúmero de vehículos y el número de muertes en', '', 2, 20),
(21, 'español', 'De acuerdo con el contenido de la información \r\npresentada, ¿a cuál de los siguientes contextos se \r', '', 2, 20),
(22, 'matematicas', ' Una persona que vive en Colombia tiene inversiones \r\nen dólares en Estados Unidos, y sabe que la ta', '', 1, 22),
(23, 'matematicas', 'La empresa pagará $4.200.000 por capacitar a los \r\ntrabajadores de la dependencia “Insumos” en el mó', 'Para capacitar en informática básica a los trabajadores de \r\nalgunas dependencias de una empresa, se contrata una \r\ninst', 1, 23),
(24, 'matematicas', '. Si se les cobrara a los 50 trabajadores de la \r\ndependencia “Recursos Humanos” la capacitación del', '', 1, 24),
(25, 'matematicas', '. La empresa paga $900.000 por la capacitación de los \r\n40 funcionarios de la dependencia “Importaci', '', 1, 25),
(26, 'matematicas', 'Se necesita comparar la información sobre la \r\nobesidad, con la información sobre muertes causadas p', 'La figura muestra el número de muertes por causa de la \r\nobesidad y su porcentaje respecto al total de muertes por \r\naño', 1, 26),
(27, 'matematicas', ' El IMC de una persona se calcula dividiendo su peso \r\n(en kg) entre su estatura (en m) elevada al c', '', 1, 27),
(28, 'matematicas', '8. Una persona afirma que para el comerciante es más \r\nrentable vender 6 toneladas de mango en la ci', 'Para transportar mango y banano desde un pueblo cercano \r\na dos ciudades, W y Z, un comerciante utiliza tres (3) \r\ncamio', 1, 28),
(29, 'matematicas', 'Los tres (3) camiones se cargan con 5 toneladas de \r\nbanano cada uno para venderse en la ciudad W. E', '', 1, 29),
(30, 'matematicas', 'Para diciembre, el comerciante decidió que por cada \r\n5 toneladas del producto transportado en camió', '', 1, 30),
(31, 'matematicas', 'Si se transportan 7 toneladas de fruta a la ciudad W\r\ny 10 toneladas de fruta a la ciudad Z, la gráf', '', 1, 31),
(32, 'matematicas', ' Durante enero, el comerciante vendió 100 toneladas \r\nde mango y 50 de banano, y contrató 10 trabaja', '', 1, 32),
(33, 'matematicas', 'En un juego, el animador elige tres números positivos, \r\n𝑿, 𝒁 𝒚 𝑾 , y una vez elegidos debe proveerl', '', 1, 33),
(34, 'matematicas', 'Observa la figura.\r\n\r\nPara calcular el área de la figura se empleó el siguiente \r\nprocedimiento:\r\nPa', '', 1, 34),
(35, 'matematicas', 'En una feria robótica, el robot P y el robot Q disputan \r\nun juego de tenis de mesa. En el momento q', '', 1, 35),
(36, 'matematicas', 'La función que representa la ganancia obtenida G, en \r\nmillones de pesos, en función del gasto en pu', 'La tabla presenta la información sobre el gasto en \r\npublicidad y las ganancias de una empresa durante los \r\naños 2000 a', 1, 36),
(37, 'matematicas', 'Una forma de generalizar la relación entre los datos \r\nanteriores es', 'Los organizadores de un campeonato internacional de \r\npatinaje entregan la medallería solo a los países que hayan \r\nocup', 1, 37),
(38, 'matematicas', 'Para realizar el corte, se determinó la altura del triángulo \r\nusando la fórmula sen(45°) =\r\nℎ\r\n120\r', 'La línea punteada en la figura muestra un corte \r\nrealizado a un triángulo. El corte es paralelo a la base y \r\ncorta por', 1, 38),
(39, 'matematicas', ' Un cartabón es una plantilla que se utiliza en dibujo \r\ntécnico y que tiene forma de triángulo rect', '', 1, 39),
(40, 'matematicas', '. A partir de un conjunto de números S, cuyo promedio \r\nes 9 y desviación estándar 3, se construye u', '', 1, 40),
(41, 'matematicas', 'El sistema de comunicaciones de un hotel utiliza los \r\ndígitos 2, 3, 4 y 5 para asignar un número de', '', 1, 41),
(42, 'matematicas', 'Según la información anterior, es correcto afirmar que', 'A continuación, se muestran los resultados de una \r\nencuesta que indagó sobre el parque automotor del \r\ntransporte inter', 1, 42),
(43, 'matematicas', ' Una prueba atlética tiene un récord mundial de 10,49 \r\nsegundos y un récord olímpico de 10,50 segun', '', 1, 43),
(44, 'matematicas', 'La probabilidad de escoger un estudiante de grado \r\nundécimo, de esta institución, que sea mujer es ', 'En una institución educativa hay dos cursos en grado \r\nundécimo. El número de hombres y mujeres de cada curso \r\nse relac', 1, 44),
(45, 'matematicas', '. Con el SFV más los ahorros con los que cuente el \r\ngrupo familiar y el crédito que obtenga de una ', 'El subsidio familiar de vivienda (SFV) es un aporte que \r\nentrega el Estado y que constituye un complemento del \r\nahorro', 1, 45),
(46, 'matematicas', '\r\nLa gráfica presenta una inconsistencia porqu', 'Una persona que observa la información de la tabla \r\nelabora la gráfica que se presenta a continuación.', 1, 46),
(47, 'matematicas', 'la familia con ingresos entre 0 y 1 SMMLV recibe un \r\nsubsidio equivalente a', '', 1, 47),
(48, 'matematicas', '. Un colegio necesita enviar 5 estudiantes como representantes a un foro sobre la contaminación del ', '', 1, 48),
(49, 'sociales', '¿Cuál de las siguientes afirmaciones sobre la relación entre \r\nlas opiniones presentadas NO es corre', 'Como argumento a favor del vegetarianismo, una \r\npersona afirma que consumir carne es nocivo para los \r\nhumanos porque e', 3, 49),
(50, 'sociales', 'e los siguientes enunciados, ¿cuál contiene un argumento \r\nválido en contra de las afirmaciones de l', 'Los habitantes de un barrio de clase media se oponen \r\na que se construyan, en este, viviendas de interés social. \r\nAfir', 3, 50),
(51, 'sociales', ' De acuerdo con \r\nlo anterior, se puede afirmar que una de las consecuencias \r\nde esta revolución, r', ' La Revolución Industrial se debió, entre otras causas, \r\na la invención de la máquina de vapor y la concentración \r\ndel', 3, 51),
(52, 'sociales', 'Los siguientes magnicidios tuvieron incidencia en la \r\nhistoria política de Colombia durante el sigl', '', 3, 52),
(53, 'sociales', 'En contraste, \r\notros sectores sociales proponen endurecer las penas para \r\nlos productores y expend', ' En Colombia se debate sobre la posibilidad de legalizar \r\nel tráfico y consumo de drogas, para contrarrestar los \r\nefec', 3, 53),
(54, 'sociales', '¿Esta solución se ajusta a los \r\nintereses de todos los vecinos?', ' La asamblea de propietarios de un edificio de la ciudad \r\nestudia la posibilidad de ampliar el horario para las \r\nreuni', 3, 54),
(55, 'sociales', '¿Cómo se ajusta esta solución a los intereses de la \r\nconstructora y de los ambientalistas?\r\n', 'Se ha generado un conflicto entre una empresa \r\nconstructora y unas organizaciones ambientalistas en \r\ntorno al desarrol', 3, 55),
(56, 'sociales', 'La Constitución Política de Colombia se puede \r\nmodificar mediante', '', 3, 56),
(57, 'sociales', '¿Qué tipo de relación se puede establecer entre las \r\npropuestas de solución al problema de la urban', ' Un estudio realizado por la Organización de las \r\nNaciones Unidas (ONU) sostiene que América Latina es la \r\nregión más ', 3, 57),
(58, 'sociales', 'El procedimiento realizado por el ciudadano es', 'Un ciudadano se encontraba inconforme con el actual \r\nsistema de salud en Colombia y quería promover una \r\nreforma a la ', 3, 58),
(59, 'sociales', 'De acuerdo con el texto anterior, los señalamientos en \r\ncontra del alcalde obedecen a que los denun', 'El alcalde de un municipio, su abogado asesor y el que \r\nes considerado el mayor contratista de la región \r\ncompraron, p', 3, 59),
(60, 'sociales', 'A partir de la anterior definición, se puede afirmar que \r\ndurante el estado de excepción en Colombi', 'El estado de excepción es una medida temporal \r\nconsignada en la Constitución Política de Colombia, a la \r\ncual el presi', 3, 60),
(61, 'sociales', 'De acuerdo con la Constitución Política de Colombia, ¿cuál \r\nde las ramas del poder puede ejercer co', 'En Colombia, las ramas del poder público pueden \r\nejercer control político entre sí para garantizar el equilibrio \r\nde p', 3, 61),
(62, 'sociales', 'De acuerdo con los mecanismos de participación directa \r\nque contempla la Constitución, ¿cuál de los', 'En la Constitución Política de Colombia se establece \r\nque los derechos de los menores de edad están por encima \r\nde los', 3, 62),
(63, 'sociales', 'A continuación se presentan dos caricaturas\r\npublicadas en la prensa colombiana.\r\n\r\n\r\n\r\n¿Qué periodo', '', 3, 63),
(64, 'sociales', 'A partir del contenido de este fragmento se puede afirmar \r\nque este pertenece al periodo del Frente', 'Lea atentamente el siguiente fragmento:\r\n“Es posible y conveniente para la nación y para el \r\nconservatismo buscar un en', 3, 64),
(65, 'sociales', 'El orden cronológico (más antiguo al más reciente) de las \r\nrevoluciones enunciadas es', 'Las revoluciones sociales son transformaciones rápidas \r\ny fundamentales de la situación de una sociedad y de sus \r\nestr', 3, 65),
(66, 'sociales', 'Estas medidas pueden catalogarse como “neoliberales”, en \r\ntanto que', 'En el contexto de la crisis económica experimentada \r\npor el país a finales de la década de los años 1990, el \r\nGobierno', 3, 66),
(67, 'sociales', '¿Con cuál de los siguientes modelos es afín esta propuesta \r\npara mejorar la productividad económica', 'Considere el siguiente fragmento extraído de un Plan \r\nNacional de Desarrollo de México:\r\n“La productividad no sólo se i', 3, 67),
(68, 'sociales', 'en este fragmento se adopta una postura crítica frente al \r\nmodelo neoliberal, porque', 'En el Plan Nacional de Desarrollo de Colombia de la \r\ndécada de los años 1990, se afirma lo siguiente: “La \r\neficiencia ', 3, 68),
(69, 'sociales', 'Teniendo en cuenta el fragmento anterior, ¿en cuál de las \r\nsiguientes condiciones se justificaría e', 'Lea detenidamente la siguiente definición de \r\nproteccionismo económico:\r\n“Se puede definir el proteccionismo como el us', 3, 69),
(70, 'sociales', 'Según esta definición, ¿por qué el desplazamiento forzado \r\npermite comprender características propi', ' El Centro Nacional de Memoria Histórica de Colombia \r\ndefine el desplazamiento forzado como un fenómeno \r\nmasivo, siste', 3, 70),
(71, 'sociales', '¿Cuáles de esos problemas son causas del conflicto agrario \r\nen Colombia?', ' Lea la siguiente lista de problemas:\r\n1. Escasez de recursos naturales no renovables.\r\n2. Pertenencia a partidos políti', 3, 71),
(72, 'sociales', 'En esta situación, ¿cuáles dimensiones están en conflicto?\r\n', 'Pekín y otras partes de China sufren de elevados \r\nniveles de contaminación. Debido a la contaminación en \r\nPekín, algun', 3, 72),
(73, 'sociales', '¿El presidente puede hacer esto?', 'Un presidente de Colombia está finalizando su período \r\npresidencial, y debido a la alta popularidad de la que goza \r\nde', 3, 73),
(74, 'ciencias na', 'Cuando este recipiente se calienta manteniendo la presión \r\nconstante, las moléculas de agua líquida', ' A continuación, se muestra un modelo que simboliza \r\nla distribución de las moléculas de agua en estado líquido, \r\nen u', 4, 74),
(75, 'ciencias na', '¿Cuál de las siguientes opciones muestra correctamente \r\nlos reactivos de la anterior reacción?', ' La siguiente ecuación representa la reacción química \r\nde la formación de agua (H20).', 4, 75),
(76, 'ciencias na', 'Teniendo en cuenta lo observado con 20 gramos de agua \r\ndestilada, el estudiante cree que si a 83 °C', 'Un estudiante analiza cómo cambia la solubilidad de \r\nuna mezcla de sólido M ; para esto, disuelve distintas \r\ncantidade', 4, 76),
(77, 'ciencias na', 'Teniendo en cuenta la información anterior, tras \r\nel cambio de estado, la densidad del CO2 disminuy', 'Un bloque de hielo seco, CO2 sólido, cambia del \r\nestado sólido al gaseoso en condiciones ambientales. \r\nEste cambio de ', 4, 77),
(78, 'ciencias na', ' ¿qué puede sucederle al proceso de síntesis \r\nde proteínas?', 'En el modelo se presenta el proceso de síntesis de \r\nproteínas en una célula.\r\nDe acuerdo con el modelo, si no se copia ', 4, 78),
(79, 'ciencias na', ' Teniendo en cuenta la información anterior, \r\n¿cuál de las siguientes gráficas describe mejor el pr', 'juan calienta una gran cantidad de agua en una olla. \r\nAl retirarla del fuego, la temperatura del agua se mide con \r\nun ', 4, 79),
(80, 'ciencias na', 'Con base en estos resultados se puede concluir que el \r\ncambio en la velocidad de formación de W', 'Una estudiante realiza diferentes ensayos con el \r\nobjetivo de determinar el efecto de la concentración de los \r\nreactiv', 4, 80),
(81, 'ciencias na', 'Teniendo en cuenta lo observado, al separar las \r\nsustancias, ¿qué tipos de mezclas son las sustanci', 'Una estudiante quiere clasificar dos sustancias de \r\nacuerdo con el tipo de mezclas que son. Al buscar, \r\nencuentra que ', 4, 81),
(82, 'ciencias na', '¿Cuál cambio de las variables mencionadas le permite \r\nasegurar al investigador que el sonido se tra', 'Un investigador sumerge un detector de sonido en \r\nagua para grabar los sonidos emitidos por los animales. El \r\ndetector', 4, 82),
(83, 'ciencias na', 'Si el estudiante le pregunta a la profesora la razón por la \r\ncual en los puntos blancos el sonido s', 'Un estudiante camina por el frente de dos parlantes \r\nubicados afuera de la emisora del colegio. Dentro de la \r\nemisora,', 4, 83),
(84, 'ciencias na', 'Si la estudiante sabe que la energía potencial depende de \r\nla altura y de la masa del objeto y de r', 'Una estudiante observa la construcción de un edificio \r\nnuevo para el colegio y mira a un obrero que lanza, cada \r\nvez, ', 4, 84),
(85, 'ciencias na', '¿cuál de las siguientes preguntas se \r\npuede contestar a partir de las observaciones que realizó \r\nJ', 'El profesor de Juan le entrega tres objetos de igual \r\nvolumen y forma, pero de diferente material, y le pide que \r\nlos ', 4, 85),
(86, 'ciencias na', 'Si los observadores en reposo, para el sistema de \r\nreferencia fuera del bus, ven que la lluvia cae ', 'Un bus se mueve con una velocidad constante en la \r\ndirección que se indica en la figura. Mientras tanto, llueve \r\ny las', 4, 86),
(87, 'ciencias na', 'Si en la extracción del oro se requiere usar el ácido de \r\nmayor concentración, ¿cuál ácido debería ', 'En la extracción minera de oro se emplea cianuro de \r\nsodio, zinc y ácidos fuertes durante el proceso de \r\npurificación.', 4, 87),
(88, 'ciencias na', 'Con base en los datos registrados en la tabla sobre la \r\ndependencia del tiempo de vaciado y tomando', 'Se mide el tiempo de vaciado del agua de un tanque \r\na través de una llave conectada al fondo del mismo. La \r\nsiguiente ', 4, 88),
(89, 'ciencias na', 'Los nucleótidos AUG codifican únicamente para indicar el \r\ninicio de la formación de la proteína y l', 'A partir de las cadenas de ARN mensajero se forman \r\nlas proteínas. En este proceso, por cada tres nucleótidos \r\nconsecu', 4, 89),
(90, 'ciencias na', 'En un salto, un deportista se lanzará desde un puente de \r\n65 metros de altura. Cuando ha descendido', ' El salto bungee se practica generalmente en puentes \r\n(ver figura). En uno de estos saltos, se utiliza una banda \r\nelás', 4, 90),
(91, 'ciencias na', 'De acuerdo con la información anterior, si reaccionan 124 \r\ng de P4 con 210 g de CL2\r\n, ¿cuál es el ', 'Considere la siguiente reacción y las masas molares \r\nde reactivos y productos:\r\n', 4, 91),
(92, 'ciencias na', 'Con base en la información anterior, ¿qué sucedió al poner \r\nlas esferas en contacto?', ' En un metal que pierde electrones, la cantidad de \r\nprotones es mayor que la de electrones y, por tanto, la \r\ncarga tot', 4, 92),
(93, 'ciencias na', 'La rapidez del carro después de que el objeto cae dentro \r\nde él', 'Un carro de masa M, se mueve sobre una superficie \r\nhorizontal con velocidad 𝑽𝟏 en la dirección que ilustra la \r\nfigura ', 4, 93),
(94, 'ciencias na', ' ¿cuál de las siguientes preguntas está relacionada \r\ncon la problemática descrita y puede resolvers', 'La polilla grande de la cera es un patógeno que mata \r\nlas larvas de las abejas y causa grandes pérdidas \r\neconómicas a ', 4, 94),
(95, 'ciencias na', ' Con base en la \r\ninformación anterior, ¿qué le sucedería al ecosistema \r\nmarino, a mediano plazo, s', '. El modelo muestra una red trófica marina.\r\nLa pesca indiscriminada de varias especies de atún ha \r\nllevado a las organ', 4, 95),
(96, 'ciencias na', 'La estudiante observa que el trabajador llena su recipiente \r\ncompletamente con agua y limpiavidrios', 'En un centro comercial, una estudiante observa a un \r\ntrabajador que se dispone a limpiar los vidrios del edificio. \r\nLa', 4, 96),
(97, 'ciencias na', 'De los genotipos de los padres puede afirmarse que', ' En una especie de pato se pueden encontrar \r\nindividuos con cuello corto e individuos con cuello largo. \r\nEn esta espec', 4, 97),
(98, 'ciencias na', 'Una proteína con peso molecular de 120 kDa podrá \r\nsepararse en un tiempo', 'Una estudiante desea conocer las proteínas presentes \r\nen la sangre. Para ello, emplea una técnica que las separa \r\nde a', 4, 98),
(99, 'ciencias na', ' ¿qué le sucedería inicialmente a la célula?', ' En las células animales, los lisosomas son los \r\norganelos encargados de digerir con enzimas los nutrientes \r\nque la cé', 4, 99),
(100, 'ciencias na', 'Si en un laboratorio se oxida un alcohol de 6 carbonos y se \r\naplican las pruebas de reconocimiento ', 'Los alcoholes pueden ser oxidados a cetonas, \r\naldehídos o ácidos carboxílicos de acuerdo con el tipo de \r\nalcohol que r', 4, 100),
(101, 'ciencias na', '¿Cuál de las siguientes figuras muestra la fuerza eléctrica \r\nque ejercen la carga 2 y la carga 3 so', 'De la ley de Coulomb se sabe que la fuerza eléctrica \r\ndebido a la interacción entre cargas de signos iguales es \r\nrepul', 4, 101),
(102, 'ciencias na', 'Con base en la información anterior, se puede afirmar que', ' El anabolismo es una forma de metabolismo que \r\nrequiere energía y da como resultado la elaboración de \r\nmoléculas comp', 4, 102);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ranking`
--

DROP TABLE IF EXISTS `ranking`;
CREATE TABLE IF NOT EXISTS `ranking` (
  `id_raking` int NOT NULL,
  `nombre_rankig` varchar(30) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `descripcion_rankig` varchar(30) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `fk_doc` int NOT NULL,
  `fk_id_prec` int NOT NULL,
  PRIMARY KEY (`id_raking`),
  KEY `fk_doc` (`fk_doc`),
  KEY `relacion` (`fk_id_prec`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recursos`
--

DROP TABLE IF EXISTS `recursos`;
CREATE TABLE IF NOT EXISTS `recursos` (
  `id_recurso` int NOT NULL,
  `tipo_recurso` varchar(30) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `fecha_de_creacion` date NOT NULL,
  `fk_docus` int NOT NULL,
  PRIMARY KEY (`id_recurso`),
  KEY `fk_docus` (`fk_docus`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resultado`
--

DROP TABLE IF EXISTS `resultado`;
CREATE TABLE IF NOT EXISTS `resultado` (
  `id_ejercicio` int NOT NULL,
  `materia` varchar(20) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `punto_correcto` varchar(20) COLLATE utf8mb4_spanish2_ci NOT NULL,
  PRIMARY KEY (`id_ejercicio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `resultado`
--

INSERT INTO `resultado` (`id_ejercicio`, `materia`, `punto_correcto`) VALUES
(1, 'español', 'd'),
(2, 'español', 'c'),
(3, 'español', 'b'),
(4, 'español', 'd'),
(5, 'español', 'c'),
(6, 'español', 'b'),
(7, 'español', 'c'),
(8, 'español', 'd'),
(9, 'español', 'b'),
(10, 'español', 'b'),
(11, 'español', 'd'),
(12, 'español', 'b'),
(13, 'español', 'b'),
(14, 'español', 'c'),
(15, 'español', 'c'),
(16, 'español', 'a'),
(17, 'español', 'c'),
(18, 'español', 'a'),
(19, 'español', 'c'),
(20, 'español', 'a'),
(21, 'español', 'b'),
(22, 'matematicas', 'c'),
(23, 'matematicas', 'b'),
(24, 'matematicas', 'c'),
(25, 'matematicas', 'c'),
(26, 'matematicas', 'c'),
(27, 'matematicas', 'd'),
(28, 'matematicas', 'b'),
(29, 'matematicas', 'a'),
(30, 'matematicas', 'd'),
(31, 'matematicas', 'c'),
(32, 'matematicas', 'c'),
(33, 'matematicas', 'b'),
(34, 'matematicas', 'd'),
(35, 'matematicas', 'c'),
(36, 'matematicas', 'c'),
(37, 'matematicas', 'a'),
(38, 'matematicas', 'c'),
(39, 'matematicas', 'a'),
(40, 'matematicas', 'c'),
(41, 'matematicas', 'd'),
(42, 'matematicas', 'd'),
(43, 'matematicas', 'c'),
(44, 'matematicas', 'a'),
(45, 'matematicas', 'b'),
(46, 'matematicas', 'd'),
(47, 'matematicas', 'c'),
(48, 'matematicas', 'd'),
(49, 'sociales', 'b'),
(50, 'sociales', 'a'),
(51, 'sociales', 'd'),
(52, 'sociales', 'a'),
(53, 'sociales', 'b'),
(54, 'sociales', 'a'),
(55, 'sociales', 'd'),
(56, 'sociales', 'a'),
(57, 'sociales', 'c'),
(58, 'sociales', 'c'),
(59, 'sociales', 'c'),
(60, 'sociales', 'c'),
(61, 'sociales', 'd'),
(62, 'sociales', 'd'),
(63, 'sociales', 'b'),
(64, 'sociales', 'a'),
(65, 'sociales', 'c'),
(66, 'sociales', 'b'),
(67, 'sociales', 'c'),
(68, 'sociales', 'c'),
(69, 'sociales', 'a'),
(70, 'sociales', 'c'),
(71, 'sociales', 'b'),
(72, 'sociales', 'b'),
(73, 'sociales', 'c'),
(74, 'ciencias', 'd'),
(75, 'ciencias', 'a'),
(76, 'ciencias', 'c'),
(77, 'ciencias', 'd'),
(78, 'ciencias', 'd'),
(79, 'ciencias', 'a'),
(80, 'ciencias', 'c'),
(81, 'ciencias', 'c'),
(82, 'ciencias', 'a'),
(83, 'ciencias', 'c'),
(84, 'ciencias', 'd'),
(85, 'ciencias', 'c'),
(86, 'ciencias', 'd'),
(87, 'ciencias', 'b'),
(88, 'ciencias', 'a'),
(89, 'ciencias', 'a'),
(90, 'ciencias', 'd'),
(91, 'ciencias', 'c'),
(92, 'ciencias', 'c'),
(93, 'ciencias', 'd'),
(94, 'ciencias', 'a'),
(95, 'ciencias', 'd'),
(96, 'ciencias', 'c'),
(97, 'ciencias', 'a'),
(98, 'ciencias', 'a'),
(99, 'ciencias', 'a'),
(100, 'ciencias', 'c'),
(101, 'ciencias', 'a'),
(102, 'ciencias', 'a'),
(103, 'ingles', 'a'),
(104, 'ingles', 'b'),
(105, 'ingles', 'b'),
(106, 'ingles', 'c'),
(107, 'ingles', 'c'),
(108, 'ingles', 'c'),
(109, 'ingles', 'a'),
(110, 'ingles', 'b'),
(111, 'ingles', 'b'),
(112, 'ingles', 'a'),
(113, 'ingles', 'a'),
(114, 'ingles', 'a'),
(115, 'ingles', 'c'),
(116, 'ingles', 'c'),
(117, 'ingles', 'a'),
(118, 'ingles', 'a'),
(119, 'ingles', 'a'),
(120, 'ingles', 'c');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resultado_usuario`
--

DROP TABLE IF EXISTS `resultado_usuario`;
CREATE TABLE IF NOT EXISTS `resultado_usuario` (
  `fk_usodoc` int NOT NULL,
  `nota` int NOT NULL,
  `tiempo_en_prueba` time NOT NULL,
  `id_resultado` int NOT NULL AUTO_INCREMENT,
  `fk_mat` int NOT NULL,
  PRIMARY KEY (`id_resultado`),
  KEY `fk_usodoc` (`fk_usodoc`),
  KEY `fk_materia_nueva` (`fk_mat`)
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `resultado_usuario`
--

INSERT INTO `resultado_usuario` (`fk_usodoc`, `nota`, `tiempo_en_prueba`, `id_resultado`, `fk_mat`) VALUES
(1068417621, 1, '00:00:30', 62, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

DROP TABLE IF EXISTS `rol`;
CREATE TABLE IF NOT EXISTS `rol` (
  `id_rol` varchar(20) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `nombre_rol` varchar(20) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `descripcion_rol` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  PRIMARY KEY (`id_rol`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id_rol`, `nombre_rol`, `descripcion_rol`) VALUES
('10', 'estudiante', 'estudiante con problemas de conocimiento '),
('12', 'admin', 'administrador el cual manda y arregla todo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `doc` int NOT NULL,
  `correo` varchar(60) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `primer_nombre` varchar(45) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `segundo_nombre` varchar(45) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `primer_apellido` varchar(45) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `segundo_apellido` varchar(45) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `clave` text CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `cel` int NOT NULL,
  `tipo_docu` varchar(20) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `grado` varchar(20) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `fk_rol` varchar(20) COLLATE utf8mb4_spanish2_ci NOT NULL,
  PRIMARY KEY (`doc`),
  KEY `fk_rol` (`fk_rol`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`doc`, `correo`, `primer_nombre`, `segundo_nombre`, `primer_apellido`, `segundo_apellido`, `clave`, `cel`, `tipo_docu`, `grado`, `fk_rol`) VALUES
(423575, 'javier.ja@gmail.com', 'root', 'Javier', 'Arando', 'osorio', '0a8005f5594bd67041f88c6196192646', 2147483647, 'TI', 'Grado', '12'),
(1068417621, 'javierarango947@gmail.com', 'Javier', 'David', 'Osorio', 'Arango', 'd3d9446802a44259755d38e6d163e820', 2147483647, 'CC', 'Undécimo', '12');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ayudas`
--
ALTER TABLE `ayudas`
  ADD CONSTRAINT `fk_id_doc_usuaria` FOREIGN KEY (`fk_doc_usuaria`) REFERENCES `usuario` (`doc`);

--
-- Filtros para la tabla `libros`
--
ALTER TABLE `libros`
  ADD CONSTRAINT `fk_usua` FOREIGN KEY (`fk_usua`) REFERENCES `usuario` (`doc`);

--
-- Filtros para la tabla `notificacion`
--
ALTER TABLE `notificacion`
  ADD CONSTRAINT `fk_id_doc_usu` FOREIGN KEY (`fk_id_doc_usu`) REFERENCES `usuario` (`doc`);

--
-- Filtros para la tabla `pruebas`
--
ALTER TABLE `pruebas`
  ADD CONSTRAINT `fk_materia` FOREIGN KEY (`fk_materia`) REFERENCES `materias` (`id_materia`),
  ADD CONSTRAINT `fk_resultado` FOREIGN KEY (`fk_resultado`) REFERENCES `resultado` (`id_ejercicio`);

--
-- Filtros para la tabla `ranking`
--
ALTER TABLE `ranking`
  ADD CONSTRAINT `fk_doc` FOREIGN KEY (`fk_doc`) REFERENCES `usuario` (`doc`),
  ADD CONSTRAINT `relacion` FOREIGN KEY (`fk_id_prec`) REFERENCES `pruebas` (`id_prueba`);

--
-- Filtros para la tabla `recursos`
--
ALTER TABLE `recursos`
  ADD CONSTRAINT `fk_docus` FOREIGN KEY (`fk_docus`) REFERENCES `usuario` (`doc`);

--
-- Filtros para la tabla `resultado_usuario`
--
ALTER TABLE `resultado_usuario`
  ADD CONSTRAINT `fk_materia_nueva` FOREIGN KEY (`fk_mat`) REFERENCES `materias` (`id_materia`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `fk_usodoc` FOREIGN KEY (`fk_usodoc`) REFERENCES `usuario` (`doc`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_rol` FOREIGN KEY (`fk_rol`) REFERENCES `rol` (`id_rol`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
