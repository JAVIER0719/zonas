<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['enviar'])) {
  $nota = $_POST['nota'];
  $crono = $_POST['tiempo'];
  $doc = $_POST['doc'];
  $id = $_POST['id'];

  include('bd.php');
  

  $sql = "INSERT INTO `resultado_usuario` (`fk_usodoc`, `nota`, `tiempo_en_prueba`, `id_resultado`, `fk_mat`) VALUES (?, ?, ?, NULL, $id)";


  $stmt = mysqli_prepare($conn, $sql);

  if (!$stmt) {
    echo "Error: " . mysqli_error($conn);
    exit;
  }


  mysqli_stmt_bind_param($stmt, "iss", $doc, $nota, $crono);


  if (mysqli_stmt_execute($stmt)) {
    echo '<script>
        setTimeout(function() {
            window.location.href = "http://localhost/zonas/htmls/menu/dashboard.php?mod=pruebas";
        }, 1000); 
      </script>';
    exit();
  } else {
    echo "Error: " . mysqli_error($conn);
    echo '<script>
    setTimeout(function() {
        swal({
            title: "Sus datos no coinciden",
            text: "Verifique y mande de nuevo",
            icon: "warning",
        });
    }, 1000);
    </script>';

  }


  mysqli_stmt_close($stmt);
  mysqli_close($conn);


}
?>

<head>
  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />
  <link rel="stylesheet" type="text/css" href="css/estilos.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
</head>

<body class="body">

  <center>
    <header>
      <h1>Pruebas gratuitas del saber</h1>
    </header>
    <br />
    <h3>Lectura critica</h3>
  </center>
  <div>
    <main>
      <div class="container">
        <div class="row">
          <div class="col">
            <form action="http://localhost/zonas/htmls/menu/modulo/preguntas/Lectura/index.php" method="post" onsubmit="return mostrarAlertaAntesDeEnviar()>
              <div class="marco">
              <div class="input-container">
                <label for="tiempo">Tiempo transcurrido:</label>
                <input type="text" name="tiempo" id="tiempo" readonly>
              </div>
              <button type="button" class="btn" onclick="iniciarCronometro()">Iniciar</button>
          </div>
          <input type="hidden" id="" placeholder="ingresa su documento" name="doc" value="<?php echo $doc; ?>" />
          <input type="hidden" id="" placeholder="el numero que corresponde" name="id" value="2" />

          <!--pregunta 1-->
          <div class="caja-1" style="display: block;" name="primero" id="form1">

            <div class="caja">

              <h5>
                RESPONDA LA PREGUNTA 1 DE ACUERDO CON LA SIGUIENTE INFORMACIÓN
              </h5>
              <p>
                El primer gran filósofo del siglo diecisiete (si exceptuamos a
                Bacon y Galileo) fue Descartes, y si alguna vez se dijo de
                alguien que estuvo a punto de ser asesinado habrá que decirlo
                de él.
              </p>
              <p>
                La historia es la siguiente, según la cuenta Baillet en su Vie
                de M. Descartes, tomo I, páginas 102-103. En 1621, Descartes,
                que tenía unos veintiséis años, se hallaba como siempre
                viajando (pues era inquieto como una hiena) y, al llegar al
                Elba, tomó una embarcación para Friezland oriental. Nadie se
                ha enterado nunca de lo que podía buscar en Friezland oriental
                y tal vez él se hiciera la misma pregunta, ya que, al llegar a
                Embden, decidió dirigirse al instante a Friezland occidental,
                y siendo demasiado impaciente para tolerar cualquier demora,
                alquiló una barca y contrató a unos cuantos marineros.
              </p>
              <p>
                Tan pronto habían salido al mar cuando hizo un agradable
                descubrimiento, al saber que se había encerrado en una guarida
                de asesinos. Se dio cuenta, dice M. Baillet, de que su
                tripulación estaba formada por criminales, no aficionados,
                señores, como lo somos nosotros, sino profesionales cuya
                máxima ambición, por el momento, era degollarlo.
              </p>
              <p>
                La historia es demasiado amena para resumirla y a continuación
                la traduzco cuidadosamente del original francés de la
                biografía: “M. Descartes no tenía más compañía que su criado,
                con quien conversaba en francés. Los marineros, creyendo que
                se trataba de un comerciante y no de un caballero, pensaron
                que llevaría dinero consigo y pronto llegaron a una decisión
                que no era en modo alguno ventajosa para su bolsa. Entre los
                ladrones de mar y los ladrones de bosques, hay esta
                diferencia, que los últimos pueden perdonar la vida a sus
                víctimas sin peligro para ellos, en tanto que si los otros
                llevan a sus pasajeros a la costa, corren grave peligro de ir
                a parar a la cárcel. La tripulación de M. Descartes tomó sus
                precauciones para evitar todo riesgo de esta naturaleza. Lo
                suponían un extranjero venido de lejos, sin relaciones en el
                país, y se dijeron que nadie se daría el trabajo de averiguar
                su paradero cuando desapareciera”. Piensen, señores, en estos
                perros de Friezland que hablan de un filósofo como si fuese
                una barrica de ron consignada a un barco de carga. “Notaron
                que era de carácter manso y paciente y, juzgándolo por la
                gentileza de su comportamiento y la cortesía de su trato, se
                imaginaron que debía ser un joven inexperimentado, sin
                situación ni raíces en la vida, y concluyeron que les sería
                fácil quitarle la vida. No tuvieron
              </p>
              <p>
                empacho en discutir la cuestión en presencia suya pues no
                creían que entendiese otro idioma además del que empleaba para
                hablar con su criado; como resultado de sus deliberaciones
                decidieron asesinarlo, arrojar sus restos al mar y dividirse
                el botín”.
              </p>
              <p>
                empacho en discutir la cuestión en presencia suya pues no
                creían que entendiese otro idioma además del que empleaba para
                hablar con su criado; como resultado de sus deliberaciones
                decidieron asesinarlo, arrojar sus restos al mar y dividirse
                el botín”.
              </p>
              <h6>
                Tomado y adaptado de: De Quincey, T. (1999). Del asesinato
                considerado como una de las bellas artes. Alianza Editorial.
              </h6>
              <center>
                <h3>respuestas</h3>
              </center>
              <ol type="A">
                <p>
                  <b>1. Juzgar por su estilo, tema y estructura, ¿en cuál de
                    los siguientes contextos estaría inscrito más
                    apropiadamente el pasaje anterior?</b>
                </p>
                <li>
                  <input type="radio" name="pregunta1" id="1" /> En una
                  revista académica, como parte de un artículo sobre los
                  orígenes y la importancia de la filosofía cartesiana.
                </li>
                <li>
                  <input type="radio" name="pregunta1" id="2" /> En un
                  discurso ofrecido a un grupo conformado por aficionados al
                  estudio de asesinatos en la historia de la filosofía.
                </li>
                <li>
                  <input type="radio" name="pregunta1" id="3" /> En una
                  crónica periodística, con motivo de un especial acerca de
                  las muertes más curiosas de la historia.
                </li>
                <li>
                  <input type="radio" name="pregunta1" id="4" /> En un
                  seminario dirigido a historiadores especialistas en la vida
                  de los personajes insignes del siglo XX.
                </li>
              </ol>
            </div>
            <!--finaliza la pregunta 1-->

            <hr />
            <div class="caja">
              <br />
              <!--comienza pregunta 2-->
              <h5>
                RESPONDA LA PREGUNTA 2 DE ACUERDO CON LA SIGUIENTE INFORMACIÓN
              </h5>
              <br />
              <p>
                Con el siguiente fragmento comienza la novela “Sin remedio” de
                Antonio Caballero. Los sucesos tienen lugar en la madrugada.
                Los protagonistas son Escobar, un poeta frustrado, y Fina, la
                mujer con quien vive.
              </p>
              <p>
                los treinta y un años Rimbaud estaba muerto. Desde la
                madrugada de sus treinta y un años Escobar contempló la
                revelación, parada en el alféizar como un pájaro: a los
                treinta y un años Rimbaud estaba muerto. Increíble.
              </p>
              <p>
                Fina seguía durmiendo junto a él, como si no se diera cuenta
                de la gravedad de la cosa. Le tapó las narices con dos dedos.
                Fina gimió, se revolvió en las sábanas; y después, con un
                ronquido, empezó a respirar tranquilamente por la boca. Las
                mujeres no entienden.
              </p>
              <p>
                Afuera cantaron los primeros pájaros, se oyó el ruido del
                primer motor, que es siempre el de una motocicleta. Es la hora
                de morir. Sentado sobre el coxis, con la nuca apoyada en el
                filo del espaldar de la cama y los ojos mirando el techo sin
                molduras, Escobar se esforzó por no pensar en nada. Que el
                universo lo absorbiera dulcemente, sin ruido. Que cuando Fina
                al fin se despertara hallara apenas un charquito de humedad
                entre las sábanas revueltas. Pensó que ya nunca más sería el
                mismo que se esforzaba ahora por no pensar en nada; pensó que
                nunca más sería el mismo que ahora pensaba que nunca más sería
                el mismo. Pero afuera crecían los ruidos de la vida. Sintió en
                su bajo vientre una punzada de advertencia: las ganas de
                orinar. La vida. Ah, levantarse. Tampoco esta vez moriremos.
              </p>
              <p>
                Vio asomar una raja delgada de sol por sobre el filo de los
                cerros, como un ascua. El sol entero se alzó de un solo golpe,
                globuloso, rosado oscuro en la neblina, y más arriba el cielo
                era ya azul, azul añil, tal vez: ¿Cuál es el azul añil? Y más
                arriba todavía, de un azul más profundo, tal vez azul cobalto.
                Como todos los días, probablemente. Aunque esas no eran horas
                de despertarse a ver todos los días. Nada garantizaba que el
                sol saliera así todos los días. No era posible. Decidió
                brindarle un poema, como un acto de fe.
              </p>
              <center>
                <p>
                  Sol puntual, sol igual, sol fatal lento sol caracol sol de
                  Colombia.
                </p>
              </center>
              <p>
                Y era un lánguido sol lleno de eles, de día que promete
                lluvia. Quiso despertar a Fina para recitarle su poema. Pero
                ya había pasado el entusiasmo.
              </p>
              <p>
                Quieto en la cama vio el lento ensombrecerse del día, las
                agrias nubes grises crecer sobre los cerros, el trazado
                plomizo de las primeras gotas de la lluvia, pesadas como
                piedras. Tal vez hubiera sido preferible estar muerto. No
                soportar el mismo día una vez y otra vez, el mismo sol, la
                misma lluvia, el tedio hasta los mismos bordes: la vida que va
                pasando y va volviendo en redondo. Y si se acaba la vida,
                faltan las reencarnaciones. El previsible despertar de Fina,
                el jugo de naranja, el desayuno.
              </p>
              <h6>
                Tomado y adaptado de: Caballero, A. (2004). Sin remedio,
                Bogotá: Alfaguara, pp. 13-14.
              </h6>
              <ol type="A">
                <p>
                  <b>2. A partir de sus pensamientos y actitudes, es posible
                    concluir que Escobar es un hombre</b>
                </p>
                <li>
                  <input type="radio" name="pregunta2" id="5" /> psicótico y
                  con tendencias depresivas.
                </li>
                <li>
                  <input type="radio" name="pregunta2" id="6" /> Entusiasta y
                  entregado a su pareja.
                </li>
                <li>
                  <input type="radio" name="pregunta2" id="7" /> Organizado e
                  inmerso en la rutina.
                </li>
                <li>
                  <input type="radio" name="pregunta2" id="8" /> Sensible y
                  con angustias.
                </li>
              </ol>
              <br />
            </div>
            <!--finaliza la pregunta 2-->
            <br />
            <hr />
            <div class="caja">
              <!--comienza pregunta 3-->
              <h5>
                RESPONDA LAS PREGUNTAS 3 Y 4 DE ACUERDO CON LA SIGUIENTE
                INFORMACIÓN
              </h5>
              <center>
                <p><strong>PÉRDIDA DE LA PRIVACIDAD</strong></h2>
              </center>
              <p>
                El primer efecto de la globalización de la comunicación por
                Internet ha sido la crisis de la noción de límite. El concepto
                de límite es tan antiguo como la especie humana, incluso como
                todas las especies animales. La etología nos enseña que todos
                los animales reconocen que hay a su alrededor y en torno a sus
                semejantes una burbuja de respeto, un área territorial dentro
                de la cual se sienten seguros, y reconocen como adversario al
                que sobrepasa dicho límite. La antropología cultural nos ha
                demostrado que esta burbuja varía según las culturas, y que la
                proximidad, que para unos pueblos es expresión de confianza,
                para otros es una intrusión y una agresión.
              </p>
              <p>
                En el caso de los humanos, esta zona de protección se ha
                extendido del individuo a la comunidad. El límite —de la
                ciudad, de la región, del reino— siempre se ha considerado una
                especie de ampliación colectiva de las burbujas de protección
                individual. Los muros pueden servir para que un régimen
                despótico mantenga a sus súbditos en la ignorancia de lo que
                sucede fuera de ellos, pero en general garantizan a los
                ciudadanos que los posibles intrusos no tengan conocimiento de
                sus costumbres, de sus riquezas, de sus inventos. La Gran
                Muralla China no solo defendía de las invasiones a los
                súbditos del Imperio Celeste, sino que garantizaba, además, el
                secreto de la producción de seda.
              </p>
              <p>
                No obstante, con Internet se rompen los límites que nos
                protegían y la privacidad queda expuesta. Esta desaparición de
                las fronteras ha provocado dos fenómenos opuestos. Por un
                lado, ya no hay comunidad nacional que pueda impedir a sus
                ciudadanos que sepan lo que sucede en otros países, y pronto
                será imposible impedir que el súbdito de cualquier dictadura
                conozca en tiempo real lo que ocurre en otros lugares; además,
                en medio de una oleada migratoria imparable, se forman
                naciones por fuera de las fronteras físicas: es cada vez más
                fácil para una comunidad musulmana de Roma establecer vínculos
                con una comunidad musulmana de Berlín. Por otro lado, el
                severo control que los Estados ejercían sobre las actividades
                de los ciudadanos ha pasado a otros centros de poder que están
                técnicamente preparados (aunque no siempre con medios legales)
                para saber a quién hemos escrito, qué hemos comprado, qué
                viajes hemos hecho, cuáles son nuestras curiosidades
                enciclopédicas y hasta nuestras preferencias sexuales. El gran
                problema del ciudadano celoso no es defenderse de los hackers
                sino de las cookies1 , y de todas esas otras maravillas
                tecnológicas que permiten recoger información sobre cada uno
                de nosotros
              </p>
              <h6>
                Información que se recoge sobre los hábitos de navegación del
                usuario.Adaptado de: Eco, U. (2007). La pérdida de la
                privacidad. A paso de cangrejo. Bogotá: Random House
                Mondadori.
              </h6>

              <ol type="A">
                <p>
                  <b>3. ¿Cuál de los siguientes enunciados sintetiza mejor el
                    contenido del primer párrafo?</b>
                </p>
                <li>
                  <input type="radio" name="pregunta3" id="9" /> Una profunda
                  tradición intelectual ha configurado el concepto de límite
                  como el espacio de defensa que crean los seres a su
                  alrededor
                </li>
                <li>
                  <input type="radio" name="pregunta3" id="10" /> Internet ha
                  generado cambios en el concepto tradicional de límite, tal
                  como lo define la etología y la antropología.
                </li>
                <li>
                  <input type="radio" name="pregunta3" id="11" /> Por
                  naturaleza los seres vivos exigen el respeto del propio
                  espacio, y esto aplica incluso para las relaciones que se
                  dan en Internet.
                </li>
                <li>
                  <input type="radio" name="pregunta3" id="12" /> Los
                  estudios de la etología y la antropología nos permiten
                  comprender por qué Internet vulnera la intimidad de las
                  personas.
                </li>
              </ol>
            </div>
            <!--finaliza la pregunta 3-->
            <br />
            <div class="caja">
              <!--comienza pregunta 4-->

              <ol type="A">
                <p>
                  <b>4. En el tercer párrafo, cuando el autor menciona a las
                    naciones que se forman fuera de las fronteras físicas,
                    hace referencia a</b>
                </p>
                <li>
                  <input type="radio" name="pregunta4" id="13" /> los
                  individuos de una misma cultura que viven en territorios
                  diferentes.
                </li>
                <li>
                  <input type="radio" name="pregunta4" id="14" /> la fluencia
                  migratoria que genera el amplio número de turistas.
                </li>
                <li>
                  <input type="radio" name="pregunta4" id="15" /> el encuentro
                  virtual de personas de pensamientos diferentes.
                </li>
                <li>
                  <input type="radio" name="pregunta4" id="16" /> las
                  comunidades virtuales que se crean en el ciberespacio.
                </li>
              </ol>
              <!--finaliza pregunta 4-->
            </div>
            <br />
            <hr />


            <div class="caja">
              <!--comienza pregunta 5-->
              <h5>RESPONDA LAS PREGUNTAS 5 Y 6 DE ACUERDO CON LA SIGUIENTE
                INFORMACIÓN</h5>

              <center>
                <p><strong>¿SERÁ QUE GOOGLE NOS ESTÁ VOLVIENDO ESTUPIDOS?</strong></h2>
              </center>
              <p>
                Durante los últimos años he tenido la incómoda sensación de
                que alguien (o algo) ha estado cacharreando con mi cerebro,
                rehaciendo la cartografía de mis circuitos neuronales,
                reprogramando mi memoria. No es que ya no pueda pensar (por lo
                menos hasta donde me doy cuenta), pero algo está cambiando. Ya
                no pienso como antes. Lo siento de manera muy acentuada cuando
                leo. Sumirme en un libro o un artículo largo solía ser una
                cosa fácil. La mera narrativa o los giros de los
                acontecimientos cautivaban mi mente y pasaba horas paseando
                por largos pasajes de prosa. Sin embargo, eso ya no me ocurre.
                Resulta que ahora, por el contrario, mi concentración se
                pierde tras leer apenas dos o tres páginas. Me pongo inquieto,
                pierdo el hilo, comienzo a buscar otra cosa que hacer. Es como
                si tuviera que forzar mi mente divagadora a volver sobre el
                texto. En dos palabras, la lectura profunda, que solía ser
                fácil, se ha vuelto una lucha.
              </p>
              <p>
                Y creo saber qué es lo que está ocurriendo. A estas alturas,
                llevo ya más de una década pasando mucho tiempo en línea,
                haciendo búsquedas y navegando, incluso, algunas veces,
                agregando material a las enormes bases de datos de internet.
                Como escritor, la red me ha caído del cielo. El trabajo de
                investigación, que antes me tomaba días inmerso en las
                secciones de publicaciones periódicas de las bibliotecas,
                ahora se puede hacer en cuestión de minutos.
              </p>
              <p>
                Las ventajas de un acceso tan instantáneo a esa increíble y
                rica reserva de información son muchísimas, y ya han sido
                debidamente descritas y aplaudidas. Pero tal ayuda tiene su
                precio. Como subrayó en la década del 60 el teórico de los
                medios de comunicación Marshall McLuhan, los medios no son
                meros canales pasivos por donde fluye información. Cierto, se
                encargan de suministrar los insumos del pensamiento, pero
                también configuran el proceso de pensamiento. Y lo que la red
                parece estar haciendo, por lo menos en mi caso, es socavar
                poco a poco mi capacidad de concentración y contemplación. Mi
                mente ahora espera asimilar información de la misma manera
                como la red la distribuye: en un vertiginoso flujo de
                partículas. Alguna vez fui buzo y me sumergía en océanos de
                palabras. Hoy en día sobrevuelo a ras sus aguas como en una
                moto acuática.
              </p>
              <p>
                Gracias a la omnipresencia del texto en internet, por no
                hablar de la popularidad de los mensajes escritos en los
                teléfonos celulares, es probable que hoy estemos leyendo
                cuantitativamente más de lo que leíamos en las décadas del 70
                y 80 del siglo pasado, cuando la televisión era nuestro medio
                predilecto. Pero, sea lo que sea, se trata de otra forma de
                leer, y detrás subyace otra forma de pensar… Quizás incluso,
                una nueva manera de ser. La idea de que nuestra mente debiera
                operar como una máquina procesadora de datos de alta velocidad
                no solo está incorporada al funcionamiento de internet, sino
                que al mismo tiempo se trata del modelo empresarial imperante
                de la red.
              </p>
              <p>
                A mayor velocidad con la que navegamos en la red, a mayor
                número de enlaces sobre los que hacemos clic y el número de
                páginas que visitamos, mayores las oportunidades que Google y
                otras compañías tienen para recoger información sobre nosotros
                y nutrirnos con anuncios publicitarios. Para bien de sus
                intereses económicos, les conviene distraernos a como dé lugar
              </p>
              <h6>
                Tomado y adaptado de: Carr, Nicholas. “Será que Google nos
                está volviendo estoopidos?”, Pombo, Juan Manuel (Traductor),
                en Revista Arcadia, 2010.
              </h6>
              <p></p>
              <ol type="A">
                <p><b>5. En el último párrafo del texto se</b></p>
                <li><input type="radio" name="pregunta5" id="17" /> legitiman las prácticas del manejo de
                  información en
                  Internet que buscan distraernos a como dé lugar.</li>
                <li><input type="radio" name="pregunta5" id="18" /> desestima la efectividad de las estrategias
                  publicitarias
                  utilizadas en la web para obtener información.</li>
                <li><input type="radio" name="pregunta5" id="19" /> denuncian las motivaciones de varias compañías
                  al
                  respecto de cómo se maneja la información en Internet.</li>
                <li><input type="radio" name="pregunta5" id="20" /> rescatan estrategias para procesar datos a alta
                  velocidad, sin caer en las manos de las empresas
                  imperantes.</li>
              </ol>

              <button type="button" class="btn btn-primary btn-sm" onclick="formulario1()">siguiente</button>
            </div>

          </div>
          <!--finaliza la pregunta 5-->
          <br />
          <div class="caja-2" style="display: none;" name="segundo" id="form2">
            <div class="caja">
              <!--comienza pregunta 6-->
              <ol type="A">
                <p><b>6. Considere el siguiente enunciado:</b></p>
                <p>“Pero, sea lo que sea, se trata de otra forma de leer, y
                  detrás subyace otra forma de pensar...Quizás incluso, una
                  nueva manera de ser”.</p>
                <p><b>Esta frase, dentro de la globalidad del texto, es</b></p>
                <li><input type="radio" name="pregunta6" id="21" /> Una idea introductoria.</li>
                <li><input type="radio" name="pregunta6" id="22" /> Una conclusión del texto.</li>
                <li><input type="radio" name="pregunta6" id="23" /> Una idea de importancia secundaria.</li>
                <li><input type="radio" name="pregunta6" id="24" /> Una evidencia que apoya la tesis principal.
                </li>
              </ol>
              <br />
              <!--termina pregunta 6-->
            </div>
            <hr />
            <div class="caja">
              <!--comienza pregunta 7-->
              <p>
                <strong>
                  ESPONDA LAS PREGUNTAS 7 Y 8 DE ACUERDO
                  CON LA SIGUIENTE INFORMACIÓN</strong>
              </p>
              <p>(i). “El argumento más poderoso contra la democracia es
                una conversación de cinco minutos
                con el votante medio”.</p>
              <h6>Adaptado de: Ovejero, Félix, 2008, Incluso un pueblo de
                demonios: democracia, liberalismo, Republicanismo. Katz
                editores, Madrid.</h6>
              <p>(ii). “La democracia sustituye el nombramiento hecho por
                una minoría corrompida, por la elección debida a una
                mayoría incompetente”.</p>
              <h6>Epígrafe de: Ovejero, Félix, 2008, Incluso un pueblo de
                demonios: democracia, liberalismo, republicanismo. Katz </h6>
              <p>(iii). “Aunque la tradición política democrática se remonta
                a la antigua Grecia, los pensadores políticos no se
                ocuparon de la causa democrática hasta el siglo XIX. Hasta
                entonces venía desechándose la democracia como el
                gobierno de las masas ignorantes y sin luces. Hoy parece
                que todos nos hemos vuelto demócratas sin contar con
                argumentos sólidos a favor. Los liberales, los
                conservadores, los socialistas, los comunistas, los
                anarquistas y hasta los fascistas se han apresurado a
                proclamar las virtudes de la democracia y a mostrar sus
                credenciales demócratas”.</p>
              <h6>Adaptado de: Heywood, Andrew (2010). Introducción a la teoría
                política. Tirant Lo Blanch: Valencia. p. 55.
              </h6>
              <ol type="A">
                <p><b>7. Según el texto (iii), ¿qué posiciones políticas se
                    identifican como democráticas?</b></p>
                <li><input type="radio" name="pregunta7" id="25" /> Solo las posiciones políticas que no son
                  extremistas.</li>
                <li><input type="radio" name="pregunta7" id="26" /> Las posiciones políticas más recientes
                  históricamente.</li>
                <li><input type="radio" name="pregunta7" id="27" /> La mayoría de posiciones políticas existentes.
                </li>
                <li><input type="radio" name="pregunta7" id="28" /> La totalidad de corrientes políticas posibles
                </li>
              </ol>

              <br />
              <!--termina pregunta 7-->
            </div>
            <br />
            <div class="caja">
              <!--comienza pregunta 8-->


              <ol type="A">
                <p><b>8. ¿Cuál de las siguientes afirmaciones se infiere del texto
                    (i)?</b></p>
                <li><input type="radio" name="pregunta8" id="29" /> El votante medio no podría explicar en cinco
                  minutos
                  qué es la democracia.</li>
                <li><input type="radio" name="pregunta8" id="30" />La mayoría de los votantes en los sistemas
                  democráticos
                  son ignorantes o incompetentes.</li>
                <li><input type="radio" name="pregunta8" id="31" />Con una conversación corta con el votante medio,
                  cualquier persona se da cuenta de que la democracia no
                  funciona.</li>
                <li><input type="radio" name="pregunta8" id="32" />Cinco minutos toma exponer el argumento básico
                  contra la conveniencia del sistema político democrático.</li>
              </ol>
              <br />
              <!--termina pregunta 8-->
            </div>
            <hr />
            <div class="caja">
              <!--comienza pregunta 9-->
              <p>
                <strong>
                  RESPONDA LAS PREGUNTAS 9 Y 10 DE ACUERDO
                  CON LA SIGUIENTE INFORMACIÓN</strong>
              </p>
              <p>El conocimiento no consiste en una serie de teorías
                autoconsistentes que tiende a converger en una
                perspectiva ideal; no consiste en un acercamiento gradual
                hacia la verdad. Por el contrario, el conocimiento es un
                océano, siempre en aumento, de alternativas
                incompatibles entre sí (y tal vez inconmensurables); toda
                teoría particular, todo cuento de hadas, todo mito, forman
                parte del conjunto que obliga al resto a una articulación
                mayor, y todos ellos contribuyen, por medio de este
                proceso competitivo, al desarrollo de nuestro
                conocimiento. No hay nada establecido para siempre,
                ningún punto de vista puede quedar omitido en una
                explicación comprehensiva (...). Expertos y profanos,
                profesionales y diletantes, forjadores de utopías y
                mentirosos, todos ellos están invitados a participar en el
                debate y a contribuir al enriquecimiento de la cultura.</p>
              <p>La tarea del científico no ha de ser por más tiempo “la
                búsqueda de la verdad”, o “la glorificación de dios”, o “la
                sistematización de las observaciones” o “el
                perfeccionamiento de predicciones”. Todas estas cosas no
                son más que efectos marginales de una actividad a la que
                se dirige ahora su atención y que consiste en “hacer de la
                causa más débil la causa más fuerte”, como dijo el sofista,
                “por ello en apoyar el movimiento de conjunto”</p>
              <h6>Adaptado de: Paul Feyerabend (1986). Tratado contra
                el método. Madrid,: Técnos, pp.14-15.</h6>
              <ol type="A">
                <p><b>9. ¿Cuál de las siguientes opciones describe mejor la
                    relación entre el contenido del texto y el título de la obra
                    de la que se extrajo?</b></p>
                <li><input type="radio" name="pregunta9" id="33" />El texto introduce la propuesta de un nuevo
                  método
                  para la investigación científica, diferente del tradicional.</li>
                <li><input type="radio" name="pregunta9" id="34" />El texto ataca diferentes ideas a propósito de
                  qué es
                  aquello en lo que consiste el llamado “método científico”.</li>
                <li><input type="radio" name="pregunta9" id="35" /> El texto critica concepciones del conocimiento
                  científico,
                  el cual se ha concebido como resultado de un método.</li>
                <li><input type="radio" name="pregunta9" id="36" />El texto argumenta a favor de la pluralidad de
                  métodos
                  disponibles para que cada ciencia alcance sus verdades.</li>
              </ol>
              <br />
              <!--termina pregunta 9-->
            </div>
            <br />
            <div class="caja">
              <!--comienza pregunta 10 -->
              <ol type="A">
                <p><b>El autor del texto aplica a la filosofía de la ciencia el
                    principio del liberalismo, según el cual “todos los
                    ciudadanos son iguales ante la ley y ante el Estado”. De
                    acuerdo con esto, ¿cuál de las siguientes afirmaciones
                    refleja de manera más directa la influencia de las ideas
                    liberales?</b></p>
                <li><input type="radio" name="pregunta10" id="37" /> La tarea del científico no ha de ser por más
                  tiempo la
                  glorificación de dios.</li>
                <li><input type="radio" name="pregunta10" id="38" /> Toda teoría particular, todo cuento de hadas,
                  todo mito,
                  forman parte del conocimiento.</li>
                <li><input type="radio" name="pregunta10" id="39" /> Hacer de la causa más débil la causa más
                  fuerte, por
                  ello en apoyar el movimiento de conjunto.</li>
                <li><input type="radio" name="pregunta10" id="40" /> El conocimiento no consiste en una serie de
                  teorías
                  autoconsistentes que tiende a converger en una
                  perspectiva ideal.</li>
              </ol>
              <br />
              <button type="button" class="btn btn-primary btn-sm" onclick="formulario2()">Volver</button>
              <button type="button" class="btn btn-primary btn-sm" onclick="formulario3()">Siguiente</button>
            </div>
            <hr />

          </div>
          <!--termina pregunta 10 -->

          <div class="caja-3" style="display: none;" name="tercero" id="form3">
            <div class="caja">
              <!--comienza pregunta 11-->
              <p>
                <strong>
                  RESPONDA LA PREGUNTA 11 DE ACUERDO CON LA
                  SIGUIENTE INFORMACIÓN</strong>
              </p>
              <center>
                <img src="img/WhatsApp Image 2023-06-20 at 3.24.09 PM.jpeg"></img>
              </center>
              <h6>Quino. (2011). Tomado de
                LITERATURA+TECNOLOGÍA+JÓVENES. Recuperado el 29 de
                enero de 2014, de
                http://literatura-tecnologiajovenes.blogspot.com.co/p/quino-y-la-cultura-mediatica.htm</h6>
              <ol type="A">
                <p><b>11. ¿Cuál de los siguientes enunciados describe mejor la
                    caricatura?</b></p>
                <li><input type="radio" name="pregunta11" id="41" /> El pueblo hace justicia por su propia mano.
                </li>
                <li><input type="radio" name="pregunta11" id="42" /> El linchamiento de un ángel.</li>
                <li><input type="radio" name="pregunta11" id="43" /> Entrevista con el asesino.</li>
                <li><input type="radio" name="pregunta11" id="44" /> Un ángel bajó del cielo.</li>
              </ol>
              <br />

              <!--termina pregunta 11 -->
            </div>
            <hr />
            <div class="caja">
              <!--comienza pregunta 12 -->
              <p>
                <strong>
                  RESPONDA LAS PREGUNTAS 12 Y 13 DE ACUERDO
                  CON LA SIGUIENTE INFORMACIÓN</strong>
              </p>
              <p>
                1984 es una novela futurista que tiene lugar en una
                sociedad totalitaria. Los ciudadanos de esta sociedad son
                controlados por una figura omnipresente conocida como el
                Gran Hermano. En el siguiente apartado, un miembro
                defensor del orden le explica al protagonista el principal
                propósito del régimen</p>
              <p>No habrá lealtad; no existirá más fidelidad que la que se
                debe al Partido, ni más amor que el amor al Gran Hermano.
                No habrá risa, excepto la risa triunfal cuando se derrota a
                un enemigo. No habrá arte, ni literatura, ni ciencia. No
                habrá ya distinción entre la belleza y la fealdad. Todos los
                placeres serán destruidos. Pero siempre, no lo olvides,
                Winston, siempre habrá el afán de poder, la sed de
                dominio, que aumentará constantemente y se hará cada
                vez más sutil. Siempre existirá la emoción de la victoria, la
                sensación de pisotear a un enemigo indefenso. Si quieres
                hacerte una idea de cómo será el futuro, figúrate una bota
                aplastando un rostro humano... incesantemente.
              </p>
              <h6>Tomado de: Orwell, George. 1984. Barcelona:
                Ediciones Destino. 2008.</h6>
              <ol type="A">
                <p><b>12. ¿Cuál de las siguientes afirmaciones es compatible con
                    las políticas del Partido?</b></p>
                <li><input type="radio" name="pregunta12" id="45" />El pueblo debe mantenerse unido.</li>
                <li><input type="radio" name="pregunta12" id="46" /> La individualidad debe ser eliminada.</li>
                <li><input type="radio" name="pregunta12" id="47" />El poder está en ser fiel a uno mismo.</li>
                <li><input type="radio" name="pregunta12" id="48" />Un pueblo ignorante es más poderoso.</li>
              </ol>
              <br />
              <!--termina pregunta 12-->
            </div>
            <br />
            <div class="caja">
              <!--comienza pregunta 13 -->
              <ol type="A">
                <p><b>13. La frase “figúrate una bota aplastando un rostro
                    humano…incesantemente”</b></p>
                <li><input type="radio" name="pregunta13" id="49" />explica los planes para el futuro del régimen.
                </li>
                <li><input type="radio" name="pregunta13" id="50" />ejemplifica las ideas transmitidas al pueblo.
                </li>
                <li><input type="radio" name="pregunta13" id="51" />expone el verdadero propósito del sistema de
                  gobierno.</li>
                <li><input type="radio" name="pregunta13" id="52" />ilustra las condiciones de los ciudadanos bajo
                  el
                  régimen.</li>
              </ol>
              <br />
              <!--termina pregunta 13 -->
            </div>
            <hr />
            <div class="caja">
              <!--comienza pregunta 14 -->
              <p>
                <strong>
                  RESPONDA LAS PREGUNTAS 14 Y 15 DE ACUERDO
                  CON LA SIGUIENTE INFORMACIÓN</strong>
              </p>
              <p>Si las fotografías permiten la posesión imaginaria de un
                pasado irreal, también ayudan a tomar posesión de un
                espacio donde la gente está insegura. Así, la fotografía se
                desarrolla en conjunción con una de las actividades
                modernas más características: el turismo. Por primera vez
                en la historia, grupos numerosos de gente abandonan sus
                entornos habituales por breves periodos. Parece
                decididamente anormal viajar por placer sin llevar una
                cámara. Las fotografías son la prueba irrecusable de que
                se hizo la excursión, se cumplió el programa, se gozó del
                viaje. Las fotografías documentan secuencias de consumo
                realizadas en ausencia de la familia, los amigos, los
                vecinos. Pero la dependencia de la cámara, en cuanto
                aparato que da realidad a las experiencias, no disminuye
                cuando la gente viaja más. El acto de fotografiar satisface
                las mismas necesidades para los cosmopolitas que
                acumulan trofeos fotográficos de su excursión en barco por
                el Nilo o sus catorce días en China, que para los turistas de
                clase media que hacen instantáneas de la Torre Eiffel o las
                cataratas del Niágara.</p>
              <p>El acto fotográfico, un modo de certificar la experiencia, es
                también un modo de rechazarla: cuando se confina a la
                búsqueda de lo fotogénico, cuando se convierte la
                experiencia en una imagen, un recuerdo. El viaje se
                transforma en una estrategia para acumular fotos. La
                propia actividad fotográfica es tranquilizadora, y mitiga esa
                desorientación general que se suele agudizar con los
                viajes. La mayoría de los turistas se sienten obligados a
                poner la cámara entre ellos y toda cosa destacable que les
                sale al paso. Al no saber cómo reaccionar, hacen una foto.
                Así, la experiencia cobra forma: alto, una fotografía,
                adelante. El método seduce sobre todo a gente subyugada
                a una ética de trabajo implacable: alemanes, japoneses y
                estadounidenses. El empleo de una cámara atenúa su
                ansiedad provocada por la inactividad laboral cuando están
                en vacaciones y presuntamente divirtiéndose. Cuentan con
                una tarea que parece una simpática imitación del trabajo:
                pueden hacer fotos.</p>
              <h6>Tomado de: Sontag, S. (2009). Sobre la fotografía.
                Barcelona: Debolsillo.</h6>
              <ol type="A">
                <p><b>14. En la frase “Las fotografías son la prueba irrecusable
                    de que se hizo la excursión, se cumplió el programa, se
                    gozó del viaje”, ¿cuál de las siguientes palabras es un
                    sinónimo de la palabra ‘irrecusable’?</b></p>
                <li><input type="radio" name="pregunta14" id="53" /> Inminente.</li>
                <li><input type="radio" name="pregunta14" id="54" /> Concluyente.</li>
                <li><input type="radio" name="pregunta14" id="55" /> Irremplazable.</li>
                <li><input type="radio" name="pregunta14" id="56" /> Cuestionable.</li>
              </ol>
              <br />
              <!--termina pregunta 14-->
            </div>
            <br />
            <div class="caja">
              <!--comienza pregunta 15 -->
              <ol type="A">
                <p><b>Considere el siguiente resumen del texto anterior:</b></p>
                <p>“La autora analiza la relación entre el turismo y la
                  fotografía, teniendo en cuenta que los cosmopolitas ven en
                  sus viajes al acto de fotografiar como una necesidad.
                  Según ella, ese acto acaba por convertirse en una práctica
                  trivial con la que solo se busca mitigar la desorientación
                  general que causan los viajes. Así, la fotografía se
                  convierte para los cosmopolitas japoneses,
                  estadounidenses y alemanes en una especie de reemplazo
                  del trabajo al que están acostumbrados”</p>
                <p><b>El anterior resumen se puede describir como inadecuado
                    porque</b></p>
                <li><input type="radio" name="pregunta15" id="57" /> Expone ideas contrarias a las afirmaciones
                  principales
                  del texto.</li>
                <li><input type="radio" name="pregunta15" id="58" /> Se centra en un tipo particular de turistas y
                  no en los
                  turistas en general.</li>
                <li><input type="radio" name="pregunta15" id="59" /> Omite el tono irónico y burlón con que la
                  autora se
                  refiere al arte de la fotografía.</li>
                <li><input type="radio" name="pregunta15" id="60" /> Se detiene en presentar información en extremo
                  detallada y secundaria del texto.</li>
              </ol>
              <br />
            </div>
            <button type="button" class="btn btn-primary btn-sm" onclick="formulario4()">Volver</button>
            <button type="button" class="btn btn-primary btn-sm" onclick="formulario5()">Siguiente</button>
            <hr />
          </div>
          <!--termina pregunta 15-->

          <div style="display: none;" name="cuarto" id="form4">
            <div class="caja">
              <!--comienza pregunta 16  -->
              <p>
                <strong>
                  RESPONDA LA PREGUNTA 16 DE ACUERDO CON LA SIGUIENTE INFORMACIÓN</strong>
              </p>
              <center>
                <img src="img/WhatsApp Image 2023-06-20 at 3.49.12 PM.jpeg"></img>
              </center>
              <h6>Tomado de: Barrero, Tomás y Henao, Alejandro (2014). Historia de un olvido. Bogotá: Editorial
                Dendros.</h6>
              <ol type="A">
                <p><b> ¿Cuál de los siguientes enunciados se contradice con la tesis central del texto?
                  </b></p>
                <li><input type="radio" name="pregunta16" id="61" /> No todo se divide entre lo que depende y lo que
                  no depende de nosotros.</li>
                <li><input type="radio" name="pregunta16" id="62" /> Alejarnos de alguien no depende de nosotros
                  mismos.</li>
                <li><input type="radio" name="pregunta16" id="63" /> La mente de un filósofo funciona de la misma
                  manera que su cuerpo.</li>
                <li><input type="radio" name="pregunta16" id="64" /> El juicio y el deseo no dependen de nosotros
                </li>
              </ol>
              <br />
              <!--termina pregunta 16 -->
            </div>
            <hr />
            <div class="caja">
              <!--comienza pregunta 17 -->
              <p>
                <strong>
                  RESPONDA LAS PREGUNTAS 17 A 21 DE ACUERDO CON LA SIGUIENTE INFORMACIÓN</strong>
                <center>
                  <img src="./img/WhatsApp Image 2023-06-20 at 4.01.59 PM.jpeg"><img>
                </center>
              </p>
              <ol type="A">
                <p><b>17. Según la infografía, “los países de ingresos medios
                    solo tienen la mitad de los vehículos existentes en el
                    mundo y, a pesar de eso, sufren el 80 % de las muertes
                    por accidente de tránsito”. En este enunciado, la
                    conjunción ‘a pesar de’ cumple la función de</b></p>
                <li><input type="radio" name="pregunta17" id="65" />resaltar que el índice de muertes por accidente
                  de
                  tránsito en países de ingresos medios es bastante elevado
                  dadas sus condiciones particulares.</li>
                <li><input type="radio" name="pregunta17" id="66" />oponer el alto número de vehículos en países de
                  ingresos medios frente al bajo porcentaje de muertes por
                  accidente de tránsito.</li>
                <li><input type="radio" name="pregunta17" id="67" />aclarar que el alto índice de muertes por
                  accidente de
                  tránsito en países de ingresos medios está estrechamente
                  relacionado con el número de autos.</li>
                <li><input type="radio" name="pregunta17" id="68" />señalar que el índice de muertes por accidente
                  de
                  tránsito en países de ingresos medios puede ser aún más
                  alto de lo dicen las cifras oficiales.</li>
              </ol>
              <br />
              <!--termina pregunta 17-->
            </div>
            <br />
            <div class="caja">
              <!--comienza pregunta 18-->
              <ol type="A">
                <p><b>18. Considere la siguiente descripción del contenido de la
                    infografía:</b></p>
                <p>«La infografía muestra datos sobre la frecuencia de los
                  accidentes de tránsito en el mundo, y ejemplos
                  relacionados. Además, informa sobre la mortalidad por
                  género, por ingresos, por número de vehículos, por tipo de
                  vehículo y por ubicación regional.»
                </p>
                <p><b>Esta descripción es insatisfactoria porque</b></p>
                <li><input type="radio" name="pregunta18" id="69" /> pasa por alto información esencial contenida en
                  la
                  infografía.</li>
                <li><input type="radio" name="pregunta18" id="70" /> el orden de su contenido no corresponde con el
                  de la
                  infografía.</li>
                <li><input type="radio" name="pregunta18" id="71" /> menciona información que no está presente en la
                  infografía.</li>
                <li><input type="radio" name="pregunta18" id="72" /> omite evidencias que sustentan la información
                  de la
                  infografía</li>
              </ol>
              <br />
              <!--termina pregunta 18-->
            </div>
            <br />
            <div class="caja">
              <!--comienza la pregunta 19-->
              <ol type="A">
                <p><b>19. De la información del cuadro inferior izquierdo, donde
                    se presentan estadísticas sobre la cantidad relativa de
                    muertes por accidentes de tránsito en función de la región,
                    se puede inferir</b></p>
                <li><input type="radio" name="pregunta19" id="73" /> cuáles son los países donde menos se utilizan
                  vehículos
                  motorizados.</li>
                <li><input type="radio" name="pregunta19" id="74" />que en el Pacifico y en Asia hay el mismo número
                  de
                  muertes por accidentes de tránsito.</li>
                <li><input type="radio" name="pregunta19" id="75" /> cuál es el riesgo de morir en un accidente de
                  tránsito
                  según la zona geográfica.</li>
                <li><input type="radio" name="pregunta19" id="76" />cuáles son las zonas geográficas en donde se
                  requiere
                  un mejoramiento de las vías.</li>
              </ol>
              <br />
              <!--termina pregunta 19-->
            </div>
            <br />
            <div class="caja">
              <!--comienza la pregunta 20-->
              <ol type="A">
                <p><b>A partir de las gráficas sobre la relación entre el
                    número de vehículos y el número de muertes en
                    accidentes de tránsito se puede inferir que,
                    comparada con la población de los países de ingresos
                    medios, la de los países de ingresos altos</b></p>

                <li><input type="radio" name="pregunta20" id="77" /> tiene más vehículos por persona.</li>
                <li><input type="radio" name="pregunta20" id="78" /> usa menos el vehículo particular.</li>
                <li><input type="radio" name="pregunta20" id="79" /> es más educada en materia vial.</li>
                <li><input type="radio" name="pregunta20" id="80" /> está más expuesta a multas de tránsito.</li>
              </ol>

              <br />
              <!--termina pregunta 20-->
            </div>
            <br />
            <div class="caja">
              <!--comienza la pregunta 21-->
              <ol type="A">
                <p><b>21. De acuerdo con el contenido de la información
                    presentada, ¿a cuál de los siguientes contextos se
                    adecuaría mejor la infografía?</b></p>

                <li><input type="radio" name="pregunta21" id="81" /> Una protesta ecológica en contra del uso de
                  vehículos motorizados.</li>
                <li><input type="radio" name="pregunta21" id="82" /> Una exposición sobre el transporte público como
                  alternativa de movilidad.</li>
                <li><input type="radio" name="pregunta21" id="83" /> Una campaña diseñada para promover la
                  adquisición de seguros de vida..</li>
                <li><input type="radio" name="pregunta21" id="84" /> Un estudio sobre asesinatos según el género y
                  la
                  condición socioeconómica.</li>
              </ol>
              <br />

            </div>


            <br />
            <button type="button" class="btn btn-primary btn-sm" onclick="formulario6()">Volver</button>
            <input type="hidden" id="notaInput" name="nota" value="" />
            <button style="margin-left: 40%;" name="" type="button" class="btn btn-primary" onclick="resultado()">Ver mi
              resultado</button>
            <button style="margin-left: 90%;" name="enviar" type="submit" class="btn btn-primary"
              onclick="resultado1()">Enviar resultado</button>
          </div>
          <!--termina pregunta 21-->

          </form>

        </div>
      </div>
  </div>

  </main>
  </div>
  <footer>
    <!-- place footer here -->
  </footer>
  <script>

  </script>
  <script src="js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
    crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>





</body>