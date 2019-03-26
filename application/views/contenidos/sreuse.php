<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="title">
<h1> Enterprise Agile: Reutilización estratégica</h1>
</div>
<p class ="lead">
La reutilización es uno de los "santos griales" de la industria de tecnología de la información (IT),
 uno que rara vez se logra. Muchas organizaciones fallan en la reutilización porque no entienden su alcance;
  la reutilización entre proyectos es donde obtiene su reembolso, no la reutilización dentro de un solo proyecto.
   Muchas organizaciones renuncian prematuramente a la reutilización cuando no ven rendimientos 
   positivos en sus primeros proyectos o incluso en el primero.
    La reutilización estratégica es un esfuerzo a largo plazo que tiene retornos estratégicos
     en lugar de tácticos. Es por esto que es fundamental mirar más allá de las necesidades de un 
     solo proyecto a las necesidades de toda su organización: por lo tanto, Strategic Reuse 
     es un Enterprise Unified Process TM. La disciplina (EUP), cuyo objetivo es definir 
     cómo las organizaciones pueden tener éxito en la reutilización, idealmente de la manera más ágil
      y ágil posible. Es posible tener éxito en la reutilización si ha adoptado un proceso iterativo / ágil como
       la entrega ágil disciplinada (DAD) , la programación extrema (XP) o Scrum, solo necesita mirar 
       toda la imagen de la empresa. </p>

  <h3>Tabla de contenido</h3>
<ol>
    <li> Visión general</li>
<li>Planificación de su programa de reutilización.</li>
<li>Recolección de activos existentes.</li>
<li>Obtención de activos externos.</li>
<li>Desarrollo de activos</li>
<li>Activos en evolución</li>
<li>Publicando un activo</li>
<li>Retirar un activo</li>
<li>Apoyando equipos de proyectos.</li>
<li>Medición de programas de reutilización.</li>
<li>Resumen</li>
<li>Traducciones     </li>
</ol>
<h3>1. Visión general</h3>
<p class ="lead">Vamos a empezar con algunas definiciones. Un activo es un artefacto del proyecto que se retiene al final de un proyecto. Un activo robusto está bien documentado, generalizado más allá de las necesidades de un solo proyecto, probado exhaustivamente, e idealmente tiene varios ejemplos para mostrar cómo trabajar con él. Los activos sólidos son mucho más propensos a ser reutilizados que los elementos sin estas características. Un activo reutilizable es un activo robusto que ha sido utilizado en tres proyectos separados por tres equipos de proyecto separados (como mínimo). Puede afirmar que algo es reutilizable, pero no es realmente reutilizable hasta que realmente se haya reutilizado; la reutilización está en el ojo del reusador, no en el ojo del creador.</p>
<p class ="lead">La reutilización a menudo se describe como no "reinventar la rueda", y el primer paso para tener éxito en la reutilización es comprender que tiene más de una opción a su disposición. Puede reutilizar código fuente, componentes, artefactos de desarrollo, patrones y plantillas.</p>
<p class ="lead">Un componente clave para la reutilización es la comunicación abierta dentro de su organización: este suele ser el principal punto de falla en la implementación de cualquier programa de reutilización en nuestra experiencia. Es plausible que los mayores niveles de comunicación y colaboración en los equipos ágiles, y su mayor enfoque en la calidad, parece aumentar las probabilidades de que los equipos ágiles aumenten sus posibilidades de éxito.</p>
<p class ="lead">La reutilización no es gratuita; no es algo que sucede simplemente porque estás usando ciertas herramientas o trabajando con ciertas tecnologías. En su lugar, la reutilización es algo en lo que tiene que trabajar muy duro, como puede ver en el flujo de trabajo de alto nivel para la disciplina de Reutilización estratégica en la Figura 1 . El flujo de trabajo detallado se muestra en la Figura 2 . Un mensaje importante de esta disciplina es que para que tenga éxito, su organización debe ser lo más ágil posible: es posible que los profesionales de nivel empresarial trabajen de manera ágil , pero deben elegir hacerlo y tener permiso para hacerlo. asi que.</p>
<h4><strong>Figura 1. El flujo de trabajo de la Disciplina de Reutilización Estratégica.</strong></h4>
<img src="assets/img/strategicReuseWorkflow.jpg" alt="Raised Image" class="img-raised rounded img-fluid">    
<hr>
<h4><strong>Figura 2 . El flujo de trabajo amalgamado de la disciplina de Reutilización Estratégica.</strong></h4>
<img src="assets/img/strategicReuseAmalgamated.jpg" alt="Raised Image" class="img-raised rounded img-fluid">    

<h3>2. Planificación de su programa de reutilización</h3>
<p class ="lead">Debe planificar y presupuestar activamente para su reutilización: debe asignar el tiempo y los recursos necesarios para que la reutilización sea un éxito. Debe invertir el tiempo para generalizar o cosechar su trabajo, de lo contrario, las presiones del proyecto lo motivarán a dejar de lado ese trabajo. La conclusión es que necesita planificar y luego operar un programa de reutilización dentro de su organización. Esto suele ser difícil para algunas organizaciones. Hay un costo inicial de reutilización que puede afectar los proyectos iniciales. Debe estar dispuesto a tolerar el dolor a corto plazo para obtener ganancias a largo plazo.</p>
<p class ="lead">Su programa de reutilización debe reflejar los objetivos de su organización, que se reflejan en la arquitectura de su empresa y las especificaciones de su cartera, y su disposición a financiar y seguir un programa de reutilización. No puedo exagerar lo difícil que es tener éxito en la reutilización estratégica. La mayoría de las organizaciones fracasan porque hacen que sus programas sean demasiado complicados, porque asignan a las personas equivocadas al equipo de reutilización o porque privan al equipo de recursos. Problemas importantes que su plan debe abarcar:</p>

<ul>
<li>Metas. ¿Qué estás intentando lograr?</li>
<li>Dotación de personal. ¿Quiénes serán los ingenieros de reutilización?</li>
<li>Estrategia de arranque inicial.</li>
<li>Herramienta de herramienta. ¿Tendrás un repositorio de reutilización? ¿Directorios compartidos? ¿Esperar lo mejor?</li>
<li>Potencial de reutilización. ¿Cuál es el beneficio potencial para su organización de un esfuerzo de reutilización estratégica?</li>
<li>Estrategia de comunicación. ¿Cómo aprenderá la gente sobre el programa?</li>
<li>Organización del equipo. ¿Cómo trabajarán juntos los ingenieros de reutilización? ¿Apoyar equipos de proyecto?</li>
<li>Límites de soporte definidos. ¿Cuál es su estrategia para apoyar los activos reutilizables? ¿Quién los posee?</li>
<li>Estrategia de evolución del activo. Sus activos deben evolucionar, entonces, ¿cómo va a apoyar eso? ¿Cuántas versiones de un activo apoyarás?</li>
<li>Estrategia de medición. ¿Cómo sabrá que su programa de reutilización es exitoso? ¿Qué métricas simples puedes seguir fácilmente?</li>
<li>Estrategia de crecimiento. ¿Cómo manejará el éxito de su programa?</li>
</ul>

<h3>3. Recolección de activos existentes.</h3>
<p class ="lead">Los equipos de desarrollo construyen cosas nuevas cada día, y algunas de estas pueden generalizarse en activos sólidos para que otros equipos puedan reutilizarlos. Esto es particularmente cierto para los equipos que trabajan con nuevas tecnologías y técnicas: por ejemplo, es probable que sus primeros equipos C # desarrollen clases de utilidad útiles, o los primeros equipos de proyecto que escriban casos de uso desarrollarán plantillas de casos de uso. El inconveniente es que las primeras personas que trabajan con una técnica o tecnología tienen más probabilidades de cometer "errores de principiante", por lo que es posible que su trabajo no sea algo que usted quiera compartir con los demás. La implicación es que usted debe esperar para cosechar un activo de mayor calidad más adelante o estar dispuesto a invertir más esfuerzo en generalizar el activo; hemos encontrado que generalmente es mejor esperar, dándole más tiempo para adquirir experiencia con la tecnología y descubrir si realmente existe la necesidad del activo en otros equipos. Se necesita mucho más esfuerzo para generalizar un activo para que sea reutilizable que para desarrollarlo para un solo uso. Por ejemplo, estudios que muestran que el desarrollo de un código reutilizable cuesta del 111% al 480% del costo de desarrollo del código de un solo propósito.</p>
<p class ="lead">La generalización de un activo requiere una gran habilidad: el ingeniero de reutilización debe estar familiarizado no solo con la tecnología o técnica detrás del activo, sino también con la forma en que potencialmente se utilizará en la práctica. Parte de la generalización que garantiza que se ajusta a la orientación adecuada (consulte Equipos de proyectos de apoyo), y que sea fácil de entender por el público al que está destinado. También desea validar el activo. Tendrá que hacer una prueba unitaria de los activos basados ​​en código y revisar plantillas y artefactos que no sean de código con sus audiencias objetivo. La documentación de resumen conciso es importante, pero mucho más importantes son uno o dos buenos ejemplos que muestran cómo usar el artefacto robusto correctamente. En el caso del código, sus pruebas unitarias pueden ser suficientes. Para las plantillas, debe capturar un ejemplo real del documento para el que es una plantilla (por ejemplo, para admitir una plantilla de caso de uso, debe recopilar uno o dos casos de uso bien escritos de un equipo de proyecto). La Figura 3 muestra el diagrama de detalles del flujo de trabajo para la recolección de activos existentes.</p>

<h4 class ="text-dark text-center" ><strong>Figura 3 . Recolección de activos existentes.</strong></h4>
<hr>
<img src="assets/img/strategicReuseHarvestExistingAsset.jpg" alt="Raised Image" class="img-raised rounded img-fluid">    
<hr>

<h4 class ="text-primary lead">Hay cuatro estrategias básicas de cosecha que puede seguir:</h4>
<ul>
<li>Cosecha en progreso . Generaliza un activo desarrollado por un equipo antes de que se haya lanzado al trabajar estrechamente con el equipo.</li>
<li>Cosecha al final del proyecto . Espera hasta que el equipo haya terminado de construir el activo, y luego lo generalizas e incluso lo redistribuyes luego.</li>
<li>Cosechar un activo legado . Además de volver a trabajar / generalizar el activo, también puede envolver el acceso a él utilizando varias tecnologías: interfaces de programación de aplicaciones (API) escritas en Java o C, lenguaje de definición de interfaz (IDBA) de la Arquitectura del agente de solicitud de objetos comunes (IDBA), o incluso algo tan mundano como el software de captura de pantalla, que simula las pulsaciones de teclado que se envían a la interfaz de usuario (IU) del activo heredado.</li>
<li>Cosecha para un nuevo proyecto . Usted espera hasta que un equipo de proyecto necesite un activo previamente desarrollado por otro equipo y luego decida reutilizarlo como está o generalizar el activo.</li>
</ul>

<h3>4. Obtención de activos externos.</h3>
<p class ="lead">Es posible que tenga a su disposición un número significativo de activos desarrollados fuera de su organización. Años atrás, nuestro consejo habría sido "comprar antes de construir", pero con el auge del software de código abierto (OSS) y otras formas de software gratuito, nuestro consejo ahora es descargar y evaluar antes de comprar y comprar antes de comprar. construir." Hay tres fuentes básicas de activos externos que debe considerar: OSS, otros freeware y productos comerciales disponibles (COTS). Gran parte del esfuerzo es similar a la recolección de un activo existente porque es probable que encuentre que necesita adaptar el activo externo para satisfacer sus necesidades exactas.</p>
<p class ="lead">Necesita una "lista de compras" de requisitos para evaluar los activos de los candidatos. Por ejemplo, si está buscando un marco de persistencia , descubrirá que tiene muchas opciones para elegir, algunas de las cuales se ajustarán a sus necesidades y otras no. Sin estos requisitos, corre el riesgo de no poder determinar qué activos candidatos satisfacen sus necesidades; hemos visto búsquedas que deberían haber durado horas o días durante meses porque las personas que evaluaban a los candidatos se distraían con las características "realmente geniales" que ni siquiera necesitaban.</p>

<h3>5. Desarrollando Activos</h3>
<p class ="lead">Es un buen consejo que rara vez, si alguna vez, empiece a construir un activo específicamente para ser reutilizable porque corre el riesgo de construir algo que no necesita. ¿Cuántos proyectos ha visto en los que el equipo pasó los primeros seis meses construyendo la infraestructura que "requerían" para el resto del proyecto, solo para ver que el proyecto se cancele antes de la entrega? ¿Cuántas veces ha visto cómo se construye un activo potencialmente reutilizable pero nunca se lo utiliza en la práctica? ¿Cuántas veces ha visto cómo se construye y luego se reutiliza un activo, solo para descubrir que los consumidores de reutilización solo necesitaban una pequeña parte de ese activo? La conclusión es que cuando se construye algo para ser reutilizado antes de tener pruebas claras de la necesidad real, corre el riesgo de desperdiciar recursos mediante la construcción excesiva: en la gran mayoría de los casos,</p>
<p class ="lead">Cuando se trata de construir algo para ser reutilizable, hay cuatro opciones básicas disponibles para usted:</p>
<ol>
<li>Reutilización arquitectada . Usted desarrolla activos llamados por su arquitectura empresarial .</li>
<li>Un solo uso-construir . Usted sospecha que otros equipos necesitarán un activo específico, por lo que lo construye con la reutilización en mente.</li>
<li>Código abierto público . Usted comienza un proyecto normal de OSS con la esperanza de que otros hagan un "trabajo gratis" por usted.</li>
<li>Código abierto interno . Aloja un proyecto OSS dentro de su intranet privada donde solo los miembros de su organización están involucrados con el proyecto.</li>
</ol>
<h3>6. Activos en evolución</h3>
<p class ="lead">Un problema que a menudo se pasa por alto en los programas de reutilización es cómo evolucionará sus activos robustos con el tiempo. Cuando un activo está disponible para su reutilización, descubrirá que necesita evolucionarlo para cumplir con los nuevos requisitos, para corregir errores o simplemente para portarlo a nuevas versiones de plataforma. Es necesario considerar tres cuestiones fundamentales:</p>
<ol>
<li><strong>La propiedad</strong> . ¿Quién posee un activo reutilizado? ¿El equipo original que lo construyó / compró? ¿El equipo de reutilización? ¿Los consumidores de reutilización? La propiedad ayudará a determinar quién es responsable de la evolución del activo.</li>
<li><strong>Gestión de la configuración</strong> . Hay dos estrategias básicas disponibles para usted: insista en que una única versión de un activo se implemente en producción, o permita que se implementen múltiples versiones.</li>
<li><strong>Gestión del cambio </strong>. Los propietarios de un activo deben implementar un proceso de administración de cambios para aceptar informes de defectos y nuevas solicitudes de funciones aplicables al activo.</li>
</ol>
<h3>7. Publicar un activo</h3>
<p class ="lead">Una vez que haya obtenido un activo sólido, debe ponerlo a disposición para reutilizar a los consumidores. Si sus activos robustos son difíciles de encontrar, entonces probablemente no serán reutilizados. Su registrador de reutilización es responsable de mantener y respaldar su repositorio de reutilización y registra el activo sólido en su repositorio. La función del registrador de reutilización suele estar a cargo de un miembro del personal superior, como el administrador de reutilización, el ingeniero de reutilización, el arquitecto de empresas o el arquitecto de proyectos. Su repositorio de reutilización podría tomar varias formas, como un directorio compartido, una herramienta de control de versiones o una herramienta de repositorio de reutilización completa. Su procedimiento de registro variará dependiendo de la herramienta; Nuestro consejo es que sea lo más simple posible.</p>
<p class ="lead">Una vez que se registra el activo robusto, el siguiente paso es comunicar, e incluso comercializar activamente, su disponibilidad: no es suficiente con simplemente poder buscar activos. Esto se puede hacer a través de listas de correo o páginas web, aunque nuestra experiencia es que el boca a boca de los equipos de proyectos exitosos que utilizan el activo suele ser la clave de su éxito. Al igual que algunas cosas se realizan a través de "canales oficiales" y otras se realizan a través de su red informal de contactos, a veces encuentra activos reutilizables al buscar en el repositorio y otras veces los obtiene de sus amigos. Sus ingenieros de reutilización deben convertirse en las personas en las que todos confían.</p>

<h3>8. Retirar un activo</h3>
<p class ="lead">Una de las actividades de un registrador de reutilización es retirar versiones anteriores de activos. Como las nuevas versiones de activos se publican en su repositorio de reutilización, debe decidir si las versiones anteriores deben eliminarse porque no puede admitir todo. La jubilación de un activo reutilizable puede ser tan simple como asignarle una "fecha de desaprobación", después de lo cual su equipo ya no la apoyará, lo que implica que cualquiera que continúe trabajando con la versión anterior estará solo, porque el equipo de reutilización puede solo hacer mucho La jubilación de un activo también puede ser tan complicada como la jubilación de un sistema completo: esto es particularmente cierto en el caso de activos a gran escala, como marcos o arquitecturas de aplicaciones comunes.</p>

<h3>9. Apoyando Equipos de Proyectos</h3>
<p class ="lead">El objetivo principal de su equipo de reutilización es respaldar y mejorar la reutilización dentro de su organización. Para hacer esto, desea que sea lo más fácil posible reutilizar los activos sólidos dentro de su repositorio de reutilización. Un factor crítico de éxito es ser flexible; recuerde que cada consumidor de reutilización tiene sus propias necesidades únicas: un desarrollador de Java estará interesado en el marco y los marcos de Java, un analista de negocios en plantillas de documentación y modelos de dominio existentes, un arquitecto en arquitecturas candidatas y un gerente de proyectos en el plan del proyecto plantillas.</p>

<p class ="lead">Una parte importante del trabajo de un ingeniero de reutilización es trabajar con los equipos de proyecto para modificar un activo para que puedan reutilizarlo de manera efectiva. Idealmente, esta modificación no es más que configurar el activo correctamente. Sin embargo, a veces el activo debe evolucionar para satisfacer las necesidades del equipo, que es el objetivo de la actividad Evolve Asset .</p>

<p class ="lead">Existen varias estrategias para respaldar efectivamente la reutilización dentro de su organización:</p>
<ul>
<li>Comunidades de acogida</li>
<li>Adoptar herramientas simples.</li>
<li>Adoptar procedimientos simples para enviar / desarrollar / cosechar / reutilizar activos.</li>
<li>Proporcionar orientación efectiva</li>
<li>Comunicarse con los equipos del proyecto.</li>
<li>Recompensar una mentalidad de reutilización</li>
<li>Involúcrate activamente con los equipos de proyecto.</li>
<li>Apoyar el repositorio de reutilización</li>
</ul> 

<h3>10. La medición de los programas de reutilización</h3>

<p class ="lead">Cuando implementa su programa de reutilización, define sus objetivos para él, como mejorar la calidad, reducir costos y / o reducir el tiempo de comercialización. Es muy fácil establecer estos objetivos grandiosos, pero no es tan fácil demostrar que los ha logrado en la práctica; cualquier buen equipo directivo seguramente querrá pruebas de que su inversión en su programa de reutilización es efectiva. Su equipo también querrá recopilar métricas para determinar cuán efectivos son sus esfuerzos para que puedan redirigir sus energías en consecuencia. Te sugiero que consideres recopilar las siguientes métricas:</p>
<ul>
<li>Horas netas ahorradas (métrica del activo) . Las horas netas ahorradas son el tiempo estimado para construir el activo para un solo uso menos el tiempo que se tarda en reutilizar el activo robusto (debe encontrarlo, conocerlo, implementarlo, etc.).</li>
<li>Costo del activo base (métrica del activo) . Este es el costo para obtener un activo robusto y ponerlo a disposición dentro de su repositorio. Se calcula multiplicando el tiempo requerido por la tasa de carga completa para los ingenieros de reutilización.</li>
<li>Beneficio neto del activo (métrica del activo) . El resumen de las horas netas ahorradas en todas las instancias de reutilización menos el costo del activo base.</li>
<li>Beneficio total (métrica del programa) . El beneficio total de su programa de reutilización. Se calcula resumiendo los beneficios de los activos netos para todos los activos sólidos obtenidos para su posible reutilización.</li>
</ul>
<h3>11. Resumen</h3>
<p class ="lead">Es posible reutilizar una amplia gama de activos, desde el código fuente hasta las plantillas, los marcos y las arquitecturas completas, pero para tener éxito debe mirar más allá del alcance de un solo proyecto. La disciplina de Reutilización Estratégica describe cómo aumentar los niveles de reutilización con proyectos ágiles disciplinados al adoptar un enfoque entre sistemas. Para tener éxito, debe planificar, operar y monitorear un programa de reutilización dentro de su organización. Hay varias formas de obtener activos sólidos para su posible reutilización, incluida la recolección de activos internos, la descarga o la compra de activos externos y el desarrollo de activos desde cero. Sus esfuerzos de reutilización deben ser apoyados; Cuanto más fácil sea hacerlo para reutilizar las cosas, mayor será la posibilidad de que las personas lo hagan.</p>



