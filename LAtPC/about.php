<?php
function cssStyles(){
    ?><style>
        .fullbar{
            padding-bottom: 2%;
        }
    h1 {
  font-size: 3.5rem;
  font-weight: 800;
  background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  margin-bottom: 0.5rem;
  letter-spacing: -0.02em;
}

/* Secondary headings with a subtle bottom border */
h2 {
  font-size: 2rem;
  border-bottom: 2px solid var(--bannerAndFooter-bg);
  padding-bottom: 10px;
  margin-top: 2rem;
  color: var(--primary-dark);
}

h3 {
    margin-top: 1rem;
  font-size: 1.25rem;
  text-transform: uppercase;
  letter-spacing: 0.1em;
  color: var(--dialog-background);
}

/* Turning your list into interactive "cards" */
ul {
  list-style: none;
  padding: 0;
}

li {
  background: #f3eceaff;
  margin-bottom: 12px;
  padding: 16px 24px;
  border-radius: 12px;
  border: 1px solid #1a3f73ff;
  transition: all 0.3s ease;
  cursor: pointer;
}

/* Using <b> as a neon accent color */
b {
  color: var(--primary-color);
  font-weight: 600;
  text-shadow: 0 0 10px rgba(56, 189, 248, 0.3);
}
    </style>
    <?php
}

function content_about (){

  if(isset($_GET['omar'])){
      echo "<article class=\"fullbar\";>
    <h1>Who is running the joint?</h1>
  <section>
    <h2>The Early Influence</h2>
    <p> Started his career early in life, his childhood home was a family business run \"from home\" acrylic fiber fabric manufacturer. Anecdotes tell of him playing with the weaving
    and sewing machines pretending he was servicing them and caring for them. Time passed, technology improved around his neighborhood, and Omar found curiosity for the tool's electronic components
    around the textile shop. He would at the electonic boards, and prentended that a tiny peron lived in this silicon city and was in charge of making
    the tool work— components like capacitors and resistors were really big back then. Because Omar lived during the time when something broke a person would go to the local repair shop got get it fixed. Also \"things\" were not easily accessible for the
    common folk, so pleople had to fix the equipment they had.</p>
  <h3>Some of the Repair Shops were:</h3>
  <ul style=\"columns:3; margin-bottom:1rem; \">
    <li>shoe repair</li>
    <li>cobblers</li>
    <li>watch repair</li>
    <li>jewelry repair</li>
    <li>eyeglass repair</li>
    <li>TV repair</li>
    <li>VCR repair</li>
    <li>stereo repair</li>
    <li>hi‑fi repair</li>
    <li>cassette deck repair</li>
    <li>CD player repair</li>
    <li>camcorder repair</li>
    <li>boombox repair</li>
    <li>radio repair</li>
    <li>turntable repair</li>
    <li>record player repair</li>
    <li>reel‑to‑reel repair</li>
    <li>video game console repair</li>
    <li>arcade machine repair</li>
    <li>computer repair</li>
    <li>CRT monitor repair</li>
    <li>typewriter repair</li>
    <li>fax machine repair</li>
    <li>pager repair</li>
    <li>sewing machine repair</li>
    <li>vacuum cleaner repair</li>
    <li>small appliance repair</li>
    <li>blender repair</li>
    <li>toaster repair</li>
    <li>iron repair</li>
    <li>lamp repair</li>
    <li>clock repair</li>
    <li>cuckoo clock repair</li>
    <li>grandfather clock repair</li>
    <li>lawnmower repair</li>
    <li>chainsaw repair</li>
    <li>weed‑whacker repair</li>
    <li>bicycle repair</li>
    <li>moped repair</li>
    <li>alternator rebuild</li>
    <li>starter rebuild</li>
    <li>radiator repair</li>
    <li>muffler</li>
    <li>carburetor repair</li>
    <li>carburetor tuning</li>
    <li>upholstery repair</li>
    <li>furniture refinishing</li>
    <li>window screen repair</li>
    <li>door screen repair</li>
    <li>locksmith</li>
    <li>key‑cutting kiosks</li>
    <li>camera repair</li>
    <li>film camera repair</li>
    <li>projector repair</li>
    <li>slide projector repair</li>
    <li>audio equipment repair</li>
    <li>speaker reconing</li>
    <li>antenna repair</li>
    <li>satellite dish repair</li>
    <li>appliance motor rewind</li>
    <li>vacuum tube repair</li>
    <li>electronics hobbyist repair benches</li>
    <li>soldering service counters</li>
    <li>battery re‑cell</li>
    <li>remote control repair</li>
    <li>garage door opener repair</li>
    <li>lamp rewiring services</li>
    <li>neon sign repair</li>
    <li>jukebox repair</li>
    <li>pinball machine repair</li>
  </ul>
  <p>Probaly many more, but now days is cheaper to buy new or used than it is to justify the high cost of repair due to local
    labor costs. </p>
    <p>
      Around this time his family got a NES for Christmas, it was the Japanese version of the console, also around this time arcades were really popular; -so most of Omar's allowances as a boy would be spent at the different arcade halls and places around his neighborhood where arcade machines were located. The best arcades were the ones inside the town's shopping center, inside this place was also a movie theater, and many places to shop.
    </p>
  </section>

  <section>
    <h2>Formative Education</h2>
    <p>
      During secondary education school, Omar attended a Saturday school program near his house, he had to take one public transit bus to school. From what Omar remembers (since it was long ago), his school was divided into 3 main groups, beginners, intermediate, and advanced. Omar was in the beginners group; there he learnt how to use a computer’s operating system without the use of a graphical user interface. The whole screen was blue and the letters were white.
    </p>
    <p>
      Using computer commands, the students would tell the computer what they wanted to do. Omar remembers mostly using the word processing capabilities of the pc at the time, his class was so nice because every student had their own machine.
    </p>
  </section>

  <section>
    <h2>The Digital Awakening</h2>
    <p>
      Later in life, his family purchased a computer loaded with Windows 95. And tons of transfered files and folders from diskettes into the computer's local storage. Long story short Omar played Doom on his win95 PC and many more now retro games. There was no internet in the house, so aside from school work, and games, the PC was used to learn an art software, that the OS included.
    </p>
    <p>
      This type of art was very popular at the time; it consisted of opening Paint, and selecting the best brush, the skill of the artist and the brush made an abstract contemporary drawing that later would be filled in in a multicolored fashion by the bucket tool. If the artist was lucky enough this art would be transferred from the digital world, into our physical reality via printers. Omar was constantly drawing the Sun with sunshades in his landscape digital drawings.
    </p>
  </section>

  <section>
    <h2>Hardware Evolution</h2>
    <p>
      After many years when it was time to upgrade, his family got a windows ME machine -fully loaded with a CD-rom and the ability to play 16-bit games natively. Some time after when Omar became more familiar with computers his family upgraded to a Dell machine loaded with WindowsXP, later he would install an ATI video card.The ATI x700. He would later build his first client machine and this card would be donated for the client, although at this time an aftermarket Arctic Cooler would've been installed, it was a bigger heatsink than the stock, in a blue plastic chassis.
    </p>
  </section>

  <aside>
    <h3>The <a href=\"JesusChrist/father_in_heaven_tell_me_about_web#title\">Genesis</a> of a Technician</h3>
    <p>
      Omar's first encounter with the repair world came when he was playing around inside the windows folder, installing and uninstalling programs, and deleting files and entire folders. So of course after the last restart, the computer would greet Omar with a blank screen and white letters telling him that there was no bootable media available. So he did what any person would do, hire an expert. After the initial expert diagnosis from a reputable local electronics store, he was told that they needed to look further into the problem and that it would cost more than $100 for the complete diagnosis of the machine. After the repair Omar would’ve been billed for repairs, parts, and whatnot. So he decided that it was better to take the pc home and ask his closest cousin for his computer’s media installation CD. So that's what he did. Omar ended up half fixing his computer. He was puzzled by the new Oldwindows folder. He had no idea why it was there. But He was happy because the computer was working again. After the initial backup, History began right there and then at the age of 14.
    </p>
  </aside>
  </article>";
  }
  else{
  echo "<article class=\"fullbar\";>


  <h1>About Us</h1>
  <p>
  We started back in 2009 with one technician; <a href=\"?omar\">Omar</a>, we have one goal that is slowly materializing into a mere dream. here in LAtinosPC we want to bring families and individuals, the experience of a fully working computer system; laptops and desktops, home and personal computer devices.</p>
  <p>
  The computer services offered are mostly on-site and remote. Hello! My name is Miguel Omar, I started this career while still in high school, and attending adult school evening computer classes. After highschool I attended College for a couple of semesters. My professional career is built on experience and not entirely reliant formal education. I do have plans to go back to school and at least attain some sort of IT Certificate.</p>
  <p>
  At the start I did IT work for family and friends, fixing their computers, and eventually friends of friends and their families. Then the computers were from small local businesses. I mostly helped with their IT crisis and their day-to day configuration needs. I entirely gained customers from word-to-mouth recommendations and ads in The Inland Empire Computer Services section of <a href=\"https://inlandempire.craigslist.org/search/pomona-ca/cps#search=2~thumb~0\"title=\"Computer Services\">Craigslist</a>. Currently I am the IT person for an electronic refurbisher in Chino CA. I love logistics and currently I am learning all that.</p>
  <p>
  Our services are 100% Satisfaction Guarantee and include a 90 Days Service Package, unfortunately we offer no refunds.</p>
  <p><span style=\"margin-bottom:2%\">We build simple personalized websites with a unique design for a flat rate!</span>
  We are located in the city of Pomona, and will travel to LA county, SB county, RV county and OC.</p>

  <h2>Mission Statement</h2>
  <p>Our goal is to provide you and your company with outstanding service. We're dedicated to enhancing your experience through effective marketing, customer-friendly retention strategies, and maintaining top-notch quality control.</p>

  <p>We're dedicated to simplifying technology for your technological needs. Our specialization provides tailored computer services for home users, and ensure a seamless experience. Our remote support is designed to be user-friendly, making tech issues a thing of the past. Additionally, we excel in fostering strong business relationships and driving advancements in technology solutions, making your journey with technology smooth and accessible. In other words we care!</p>

  <h2>Company History</h2>
  <p>LAtinosPC founded in 2021, initially as a sole proprietor the site has been live since 2017. The founder Omar has gone through a lot of changes in the business. And the goal for this company is simple, reachable and profitable.</p>


  <h3>1.1 Objectives</h3>
  <ul>
      <li>Our main objective is to provide the best informative service available to the community.</li>
      <li>To generate substantial market share so that LAtinosPC is a common name.</li>
      <li>Constant growth in sales from start up through the years.</li>
      <li>To generate customer satisfaction so that at least 40% of our customer base is repeat business.</li>
  </ul>
  <h3>1.2 Mission</h3>
  <p>Our goal is to set the standard for on-site computer solutions, and responsive site development through fast— on-site service and response.
      Our customers will always receive one-on-one personal attention at a very competitive rate.
      Also, we offer the highest quality of customer service available.
      Our employees will receive extensive training, a great place to work, fair pay, benefits, and incentives to in order for them to use their own good judgment to solve customers' problems.</p>
  <h3>1.3 Keys</h3>
  <div>Establishing a <b>brand identity</b> and generating brand recognition through marketing, and unmatched customer service relations.</div>
  <div><b>Responsiveness</b>: being an on-call computer paramedic with fast response time and swift action.</div>
  <div>Meet deadlines for web projects.</div>
  <div><b>Quality</b>: getting the job done right the first time, offering 100% guarantee.</div>
  <div><b>Relationships</b>: developing loyal repeat customers —retainers.</div>
  <h3>2.1 Company Ownership</h3>
  <p>LAtinosPC was initially envisioned as an LLC in the owner's home. However, recent feedback from our marketing outreach has suggested a much higher growth potential than originally imagined, and LAtinosPC will be reformed as an S Corporation with plans for the future.
      This change will provide the possibility for outside investment, additional legal protection for the owner, and will also streamline the financial operations of the company (as we expand the personnel to 5 people within the next three years), the ability to lease a separate space for offices, and purchase company vehicles, hardware and software.
      The owner, Omar Garcia, has 10+ years of experience in the fields of In-home sales, technical support, web development, networking, computer training and repair currently he is gaining experience in the logistics industry.
      Omar has also operated a similar profitable business under a partnership in Ontario Ca (Solid State Computer Repair), and understands the computer needs of small businesses, and their rapidly technology adopting clientele.</p>




  </article>";
  }
}


function contenido_acerca(){
 if(isset($_GET['omar'])){
      echo "<article class=\"fullbar\";>
    <h1>¿Quién lleva el negocio?</h1>
  <section>
    <h2>La influencia temprana</h2>
    <p>Comenzó su carrera desde temprana edad; su casa de infancia albergaba un negocio familiar de manufactura de tela de fibra acrílica que operaba \"desde casa\". Se cuenta que de niño jugaba con las máquinas de tejer y coser fingiendo que las daba servicio y las cuidaba. Con el paso del tiempo, la tecnología avanzó en su colonia, y Omar desarrolló curiosidad por los componentes electrónicos de las herramientas del taller textil. Se quedaba viendo las tarjetas electrónicas e imaginaba que una personita vivía en esa ciudad de silicio y era la encargada de hacer funcionar la herramienta — componentes como capacitores y resistencias eran realmente grandes en aquel entonces. En la época en que Omar creció, cuando algo se descomponía, la gente acudía al taller de reparación local para arreglarlo. Además, los aparatos no eran fácilmente accesibles para la gente común, así que había que reparar lo que uno tenía.</p>
  <h3>Algunos de los talleres de reparación eran:</h3>
  <ul style=\"columns:3; margin-bottom:1rem; \">
    <li>reparación de zapatos</li>
    <li>zapateros</li>
    <li>reparación de relojes</li>
    <li>reparación de joyería</li>
    <li>reparación de anteojos</li>
    <li>reparación de televisores</li>
    <li>reparación de videocaseteras</li>
    <li>reparación de estéreos</li>
    <li>reparación de hi‑fi</li>
    <li>reparación de reproductores de casete</li>
    <li>reparación de reproductores de CD</li>
    <li>reparación de videocámaras</li>
    <li>reparación de grabadoras portátiles</li>
    <li>reparación de radios</li>
    <li>reparación de tocadiscos</li>
    <li>reparación de tocadiscos de vinilo</li>
    <li>reparación de carrete a carrete</li>
    <li>reparación de consolas de videojuegos</li>
    <li>reparación de máquinas de arcade</li>
    <li>reparación de computadoras</li>
    <li>reparación de monitores CRT</li>
    <li>reparación de máquinas de escribir</li>
    <li>reparación de faxes</li>
    <li>reparación de bípers</li>
    <li>reparación de máquinas de coser</li>
    <li>reparación de aspiradoras</li>
    <li>reparación de electrodomésticos pequeños</li>
    <li>reparación de licuadoras</li>
    <li>reparación de tostadores</li>
    <li>reparación de planchas</li>
    <li>reparación de lámparas</li>
    <li>reparación de relojes de mesa</li>
    <li>reparación de relojes cucú</li>
    <li>reparación de relojes de pie</li>
    <li>reparación de podadoras</li>
    <li>reparación de motosierras</li>
    <li>reparación de desbrozadoras</li>
    <li>reparación de bicicletas</li>
    <li>reparación de motonetas</li>
    <li>reconstrucción de alternadores</li>
    <li>reconstrucción de arranques</li>
    <li>reparación de radiadores</li>
    <li>reparación de silenciadores</li>
    <li>reparación de carburadores</li>
    <li>afinación de carburadores</li>
    <li>reparación de tapicería</li>
    <li>restauración de muebles</li>
    <li>reparación de mosquiteros de ventana</li>
    <li>reparación de mosquiteros de puerta</li>
    <li>cerrajería</li>
    <li>kioscos de duplicado de llaves</li>
    <li>reparación de cámaras</li>
    <li>reparación de cámaras de rollo</li>
    <li>reparación de proyectores</li>
    <li>reparación de proyectores de diapositivas</li>
    <li>reparación de equipo de audio</li>
    <li>recone de bocinas</li>
    <li>reparación de antenas</li>
    <li>reparación de antenas satelitales</li>
    <li>rebobinado de motores de electrodomésticos</li>
    <li>reparación de tubos de vacío</li>
    <li>bancos de reparación para aficionados a la electrónica</li>
    <li>mostradores de servicio de soldadura</li>
    <li>reemplazo de celdas de baterías</li>
    <li>reparación de controles remotos</li>
    <li>reparación de abre-puertas de garaje</li>
    <li>servicios de recableado de lámparas</li>
    <li>reparación de letreros de neón</li>
    <li>reparación de rockolas</li>
    <li>reparación de máquinas de pinball</li>
  </ul>
  <p>Probablemente muchos más, pero hoy en día es más barato comprar nuevo o de segunda mano que justificar el alto costo de reparación debido a los costos locales de mano de obra.</p>
    <p>
      Por esas fechas, su familia recibió un NES de regalo de Navidad, era la versión japonesa de la consola; también en esa época los arcades eran muy populares, así que la mayor parte de la mesada de Omar de niño se iba en los diferentes salones de arcade y los lugares de su colonia donde había máquinas. Los mejores arcades eran los que estaban dentro del centro comercial del pueblo, donde también había un cine y muchos locales de compras.
    </p>
  </section>

  <section>
    <h2>Educación formativa</h2>
    <p>
      Durante la secundaria, Omar asistía a un programa escolar los sábados cerca de su casa; para llegar tomaba un camión de transporte público. Según lo que Omar recuerda (pues fue hace mucho tiempo), la escuela estaba dividida en 3 grupos principales: principiantes, intermedios y avanzados. Omar estaba en el grupo de principiantes; ahí aprendió a usar el sistema operativo de una computadora sin interfaz gráfica de usuario. La pantalla entera era azul y las letras eran blancas.
    </p>
    <p>
      Mediante comandos de computadora, los alumnos le indicaban a la máquina lo que querían hacer. Omar recuerda haber usado principalmente el procesador de texto de la PC de aquel entonces; su clase era muy agradable porque cada alumno tenía su propia máquina.
    </p>
  </section>

  <section>
    <h2>El despertar digital</h2>
    <p>
      Más adelante, su familia adquirió una computadora con Windows 95 instalado, y toneladas de archivos y carpetas transferidos desde diskettes al almacenamiento local. En pocas palabras, Omar jugó Doom en su PC con win95 y muchos otros juegos que hoy son retro. No había internet en casa, así que además de las tareas escolares y los juegos, la PC se usaba para aprender el programa de arte que incluía el sistema operativo.
    </p>
    <p>
      Este tipo de arte era muy popular en esa época; consistía en abrir Paint, seleccionar el mejor pincel, y la habilidad del artista junto con el pincel daban como resultado un dibujo contemporáneo abstracto que luego se rellenaba de múltiples colores con la herramienta de bote de pintura. Si el artista tenía suerte, ese arte pasaba del mundo digital a la realidad física gracias a las impresoras. Omar dibujaba constantemente el Sol con lentes de sol en sus paisajes digitales.
    </p>
  </section>

  <section>
    <h2>Evolución del hardware</h2>
    <p>
      Después de muchos años, cuando llegó el momento de actualizar, su familia consiguió una máquina con Windows ME, equipada con CD-ROM y la capacidad de correr juegos de 16 bits de forma nativa. Tiempo después, cuando Omar se familiarizó más con las computadoras, su familia actualizó a una máquina Dell con Windows XP; más adelante instalaría una tarjeta de video ATI, la ATI x700. Posteriormente construiría su primera máquina para un cliente y esa tarjeta sería donada para dicho cliente, aunque en ese momento ya le habría instalado un Arctic Cooler de mercado secundario, un disipador más grande que el de fábrica, en un chasis de plástico azul.
    </p>
  </section>

  <aside>
    <h3>El <a href=\"JesusChrist/father_in_heaven_tell_me_about_web#title\">génesis</a> de un técnico</h3>
    <p>
      El primer encuentro de Omar con el mundo de la reparación ocurrió cuando andaba curioseando dentro de la carpeta de Windows, instalando y desinstalando programas, y borrando archivos y carpetas enteras. Como era de esperarse, después del último reinicio, la computadora saludó a Omar con una pantalla en blanco y letras blancas indicándole que no había medios de arranque disponibles. Así que hizo lo que cualquier persona haría: contratar a un experto. Tras el diagnóstico inicial en una reconocida tienda de electrónica local, le dijeron que necesitaban investigar más el problema y que el diagnóstico completo costaría más de $100 dólares. Después de la reparación, a Omar le habrían cobrado las reparaciones, refacciones y demás. Así que decidió que era mejor llevarse la PC a casa y pedirle a su primo más cercano el CD de instalación del sistema operativo. Y eso fue exactamente lo que hizo. Omar terminó arreglando su computadora a medias. Le desconcertó la nueva carpeta llamada Oldwindows. No tenía idea de por qué estaba ahí. Pero estaba contento porque la computadora volvía a funcionar. Tras ese primer respaldo, la historia comenzó ahí mismo, a los 14 años.
    </p>
  </aside>
  </article>";
  }
  else{
  echo "<article class=\"fullbar\";>


  <h1>Sobre nosotros</h1>
  <p>
  Comenzamos en 2009 con un solo técnico; <a href=\"?omar\">Omar</a>. Tenemos una meta que poco a poco se va materializando como un sueño hecho realidad. Aquí en LAtinosPC queremos brindarles a familias e individuos la experiencia de un sistema de cómputo en pleno funcionamiento; laptops y computadoras de escritorio, dispositivos de cómputo hogareños y personales.</p>
  <p>
  Los servicios de cómputo que ofrecemos son principalmente a domicilio y de forma remota. ¡Hola! Me llamo Miguel Omar, comencé esta carrera cuando aún estaba en la preparatoria y asistía a clases nocturnas de computación en la escuela para adultos. Después de la prepa asistí al colegio por un par de semestres. Mi trayectoria profesional está basada en la experiencia y no depende enteramente de la educación formal. Sí tengo planes de regresar a la escuela y obtener al menos algún tipo de certificación en TI.</p>
  <p>
  Al principio hacía trabajo de TI para familia y amigos, arreglando sus computadoras, y eventualmente para amigos de amigos y sus familias. Después los clientes eran pequeños negocios locales. Principalmente los ayudaba con sus crisis de TI y sus necesidades diarias de configuración. Conseguí todos mis clientes mediante recomendaciones de boca en boca y anuncios en la sección de Servicios de Computación del Inland Empire en <a href=\"https://inlandempire.craigslist.org/search/pomona-ca/cps#search=2~thumb~0\" title=\"Computer Services\">Craigslist</a>. Actualmente soy el encargado de TI de una empresa refurbidora de electrónicos en Chino, CA. Me encanta la logística y actualmente estoy aprendiendo todo al respecto.</p>
  <p>
  Nuestros servicios tienen Garantía de Satisfacción al 100% e incluyen un Paquete de Servicio de 90 días; lamentablemente no ofrecemos reembolsos.</p>
  <p><span style=\"margin-bottom:2%\">¡Creamos sitios web sencillos y personalizados con un diseño único por una tarifa fija!</span>
  Estamos ubicados en la ciudad de Pomona y nos desplazamos al condado de LA, condado de SB, condado de RV y OC.</p>

  <h2>Declaración de misión</h2>
  <p>Nuestro objetivo es brindarle a usted y a su empresa un servicio excepcional. Estamos dedicados a mejorar su experiencia mediante marketing efectivo, estrategias de retención amigables con el cliente y el mantenimiento de un control de calidad de primer nivel.</p>

  <p>Estamos dedicados a simplificar la tecnología para sus necesidades tecnológicas. Nuestra especialización brinda servicios de cómputo personalizados para usuarios domésticos y garantiza una experiencia sin contratiempos. Nuestro soporte remoto está diseñado para ser fácil de usar, convirtiendo los problemas tecnológicos en cosa del pasado. Además, sobresalimos en el fortalecimiento de relaciones comerciales sólidas y en impulsar avances en soluciones tecnológicas, haciendo que su experiencia con la tecnología sea fluida y accesible. ¡En otras palabras, nos importa!</p>

  <h2>Historia de la empresa</h2>
  <p>LAtinosPC fue fundada en 2021, inicialmente como empresa unipersonal; el sitio lleva en línea desde 2017. El fundador Omar ha atravesado muchos cambios en el negocio. Y el objetivo de esta empresa es simple, alcanzable y rentable.</p>


  <h3>1.1 Objetivos</h3>
  <ul>
      <li>Nuestro objetivo principal es brindar el mejor servicio informativo disponible a la comunidad.</li>
      <li>Generar una participación sustancial en el mercado para que LAtinosPC sea un nombre reconocido.</li>
      <li>Crecimiento constante en ventas desde el inicio a lo largo de los años.</li>
      <li>Generar satisfacción en los clientes de modo que al menos el 40% de nuestra base de clientes sean clientes recurrentes.</li>
  </ul>
  <h3>1.2 Misión</h3>
  <p>Nuestro objetivo es establecer el estándar en soluciones de cómputo a domicilio y desarrollo de sitios web responsivos mediante un servicio y tiempo de respuesta rápidos. Nuestros clientes siempre recibirán atención personal uno a uno a una tarifa muy competitiva. Además, ofrecemos la más alta calidad de servicio al cliente disponible. Nuestros empleados recibirán capacitación extensa, un excelente lugar de trabajo, salario justo, prestaciones e incentivos para que puedan usar su buen juicio y resolver los problemas de los clientes.</p>
  <h3>1.3 Claves</h3>
  <div>Establecer una <b>identidad de marca</b> y generar reconocimiento de marca a través del marketing y relaciones de servicio al cliente incomparables.</div>
  <div><b>Capacidad de respuesta</b>: ser un paramédico de cómputo disponible con tiempo de respuesta rápido y acción inmediata.</div>
  <div>Cumplir con los plazos de entrega en proyectos web.</div>
  <div><b>Calidad</b>: hacer el trabajo bien desde la primera vez, ofreciendo garantía del 100%.</div>
  <div><b>Relaciones</b>: desarrollar clientes leales y recurrentes —clientes fijos.</div>
  <h3>2.1 Propiedad de la empresa</h3>
  <p>LAtinosPC fue concebida inicialmente como una LLC desde el hogar del propietario. Sin embargo, la retroalimentación reciente de nuestras acciones de marketing ha sugerido un potencial de crecimiento mucho mayor del que se imaginó originalmente, y LAtinosPC se reorganizará como una S Corporation con planes para el futuro. Este cambio brindará la posibilidad de inversión externa, protección legal adicional para el propietario, y también simplificará las operaciones financieras de la empresa (a medida que ampliemos el personal a 5 personas en los próximos tres años), la capacidad de arrendar un espacio separado para oficinas, y adquirir vehículos, hardware y software para la empresa. El propietario, Omar García, tiene más de 10 años de experiencia en ventas a domicilio, soporte técnico, desarrollo web, redes, capacitación en computación y reparación; actualmente está adquiriendo experiencia en la industria de la logística. Omar también ha operado un negocio similar y rentable bajo una sociedad en Ontario, CA (Solid State Computer Repair), y comprende las necesidades de cómputo de las pequeñas empresas y su clientela que adopta la tecnología rápidamente.</p>




  </article>";
  }
}


include './anvil/structure.php';


?>