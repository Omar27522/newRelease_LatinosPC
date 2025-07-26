<?php
//qpccsei ==> Querido Padre Celestial, cuéntame sobre el internet
$page = new Structure ("../../","español","Padre Celestial");
$keywords="Keyword_test";
$description="Description_test";

function qpccsei(){
    $titulos = [
        'Querido Padre Celestial, cuéntame sobre el internet',
        'Peligros del internet',
        '<span title="Ciberbullying">Ciberacoso</span>',
        'Estafas en línea',
        'Adicción',
        'Violaciones de privacidad',
        'Depredadores en línea',
        'Propagación de información falsa',
        'Acecho cibernético',
        'Católicos navegando por internet',
        'Navega por internet como un santo',
        'El Señor Buen Dios siempre está contigo',
        'La constante batalla entre el bien y el mal',
        'El rechazo de Dios por parte del hombre',
        'La responsabilidad de la humanidad',
      ];

    $ligas = [
        'https://es.wikipedia.org/wiki/Par%C3%A1bola_de_la_oveja_perdida',
        'Parabola'
      ];

    $peligros = [
        'El internet proporciona una plataforma para que las personas intimiden y acosen a otros de forma anónima. Esto puede provocar graves daños emocionales y psicológicos a las víctimas.',
        'El internet está lleno de estafas que pueden engañar a las personas para que revelen su información personal y financiera. Estas estafas pueden resultar en pérdidas económicas y robo de identidad.',
        'El internet puede ser adictivo, lo que lleva a un uso excesivo que interfiere con la vida diaria, el trabajo y las relaciones.',
        'El internet permite la recopilación y el intercambio de información personal, a menudo sin el consentimiento o conocimiento de las personas. Esto puede conducir al robo de identidad y otras violaciones de privacidad.',
        'El internet proporciona una plataforma para que los depredadores sexuales busquen y manipulen a niños y personas vulnerables.',
        'El internet permite la rápida difusión de información falsa, lo que puede causar daño a individuos y a la sociedad.',
        'El internet proporciona una forma fácil para que los acosadores monitoreen y acosen a sus víctimas en línea.',
      ];

    $navegar = [
        'tenEnMente' => '<span class="browse">Sé</span> consciente del contenido que estás consumiendo y asegúrate de que esté alineado con las enseñanzas y valores católicos. Si encuentras algo que entre en conflicto con tu fe, puede que quieras considerar evitarlo o buscar orientación de un líder religioso de confianza.',

        'mantener' => '<span class="browse">Mantén</span> en mente que internet es un lugar vasto y diverso, y no todo el contenido es apropiado para todos. Es importante ejercer precaución y discreción al navegar, especialmente si eres sensible a ciertos tipos de contenido.',

        'cuidaQue' => '<span class="browse">Sé</span> consciente de que algunos contenidos en internet pueden ser sexualmente explícitos o inapropiados. Es importante evitar dichos contenidos y adherirse a las enseñanzas de la Iglesia Católica sobre moralidad sexual.',

        'evita' => '<span class="browse">Evita</span> participar en comportamientos o actividades que sean ilegales, inmorales o poco éticas, incluyendo, pero no limitado a, pornografía, discurso de odio, ciberacoso y piratería.',

        'prioridad' => '<span class="browse">Recuerda</span> priorizar tu seguridad y privacidad en línea. Ten cuidado con las estafas, los <a href="https://www.icann.org/resources/pages/phishing-2013-05-03-es">intentos de suplantación</a> y otros tipos de fraude en línea. Utiliza contraseñas fuertes y asegúrate de que tu información personal esté protegida.',

        'controlesFamiliares' => '<span class="browse">Considera</span> usar controles parentales u otro software de filtrado para restringir el acceso a ciertos tipos de contenido, especialmente si tienes niños u otras personas vulnerables en tu hogar.',

        'tambien' => 'También, recuerda ser consciente del tiempo que pasas en línea y asegúrate de que no interfiera con tus responsabilidades o relaciones en el <span class="browse">mundo físico</span>.',

        'conCuidado' => '<span class="browse">Sé</span> cauteloso/a con la información falsa o las "noticias falsas" que pueden circular en línea. Verifica la información de fuentes confiables y evita compartir información no verificada que podría ser engañosa o dañina.',

        'usar' => '<span class="browse">Usa</span> las plataformas de redes sociales de manera responsable y evita participar en comportamientos que puedan ser dañinos o hirientes para los demás. Sé respetuoso en tus interacciones y evita compartir contenido que pueda considerarse ofensivo o inapropiado.',

        'busca' => '<span class="browse">Busca</span> recursos y comunidades católicas de buena reputación en línea, como sitios web de noticias católicas, blogs, podcasts y grupos de redes sociales. Estos recursos pueden proporcionar información valiosa y apoyo en tu viaje de fe.',

        'siTuEres' => '<span class="browse">Si</span> estás luchando con adicción u otros desafíos relacionados con el uso de internet, considera buscar ayuda profesional y apoyo de un profesional de salud mental o consejero católico.',

        'recuerda' => '<span class="browse">Recuerda</span> respetar las leyes de derecho de autor y evitar piratear o compartir ilegalmente material protegido por derechos de autor en línea.',

        'considera' => '<span class="browse">Considera</span> usar herramientas de privacidad como redes privadas virtuales (VPN) o extensiones de navegador que bloqueen el seguimiento y las cookies publicitarias. Esto puede ayudar a proteger tu privacidad y limitar la cantidad de información personal que se recopila sobre ti en línea.',

        'mundoEnLinea' => 'También, usa internet como una herramienta para la evangelización y difundir el mensaje del Evangelio. Considera compartir contenido positivo y alentador que refleje los valores y enseñanzas católicas, y sé una fuerza positiva para el cambio en el <span class="browse">mundo en línea</span>.',

        'tiempoEnLinea' => '<span class="browse">Sé</span> consciente del tiempo que pasas en línea y toma descansos según sea necesario. Es importante mantener un equilibrio saludable entre tus actividades en línea y otros aspectos de tu vida, como el trabajo, las relaciones y las actividades en el tiempo libre.',

        'plataformasEnLinea' => '<span class="browse">Usa</span> las plataformas en línea para conectarte con otros católicos y construir un sentido de comunidad. Considera unirte a grupos o foros en línea, participar en eventos virtuales o seguir a influencers u organizaciones católicas en las redes sociales.',

        'encuentro' => '<span class="browse">Si</span> encuentras contenido que desafía tu fe o plantea preguntas, busca orientación de un líder religioso o consejero de confianza. Evita participar en debates o discusiones en línea que puedan ser improductivos o dañinos.',

        'usaElInternet' => '<span class="browse">Usa</span> internet como una herramienta para la oración y la reflexión. Hay muchos recursos católicos disponibles en línea, incluyendo devociones diarias, guías de oración y servicios de misa en línea. Considera incorporar estos recursos en tu rutina diaria.',

        'finalmente' => 'Finalmente, sé consciente del potencial de la adicción en línea y toma medidas para prevenirla. Esto puede incluir establecer límites en el uso de internet, practicar conciencia plena y buscar apoyo si es necesario. Recuerda que tu relación con Dios y tu comunidad de fe siempre deben tener prioridad sobre tus <span class="browse">actividades en línea</span>.',

        'conclusion' => 'Un último punto a considerar es siempre abordar internet con una mente abierta y un espíritu de discernimiento. Si bien hay muchos temas buenos que se puede encontrar en línea, también hay muchos desafíos y peligros de los que hay que ser consciente. Es importante permanecer alerta y usar tu fe católica como guía para navegar en línea. En una última instancia, tu relación con Dios y tu compromiso con las enseñanzas católicas deben ser la base de tus actividades en línea y deben guiarte en todo lo que hagas.'
      ];

    $navegarS = [
        'Acércate al internet con humildad y disposición de aprender. Aunque tengas un profundo entendimiento de las enseñanzas y tradiciones católicas, el mundo en línea puede presentar desafíos nuevos y únicos que pueden requerir un enfoque o perspectiva diferente.',
        'Recuerda que internet es un reflejo del mundo más amplio y puede ser una fuente de bien y de mal. <span class="browse">Aunque hay muchos temas buenos que se puede encontrar en línea, también hay muchos peligros y tentaciones de los que hay que estar al tanto.</span> Es importante ejercer discernimiento y confiar en tu fe católica como guía para navegar por el mundo en línea.',
        'Sé consciente del impacto que tus actividades en línea pueden tener en los demás, especialmente en aquellos que son vulnerables o necesitan orientación. Utiliza tu plataforma para difundir positividad e inspirar a otros a profundizar su relación con Dios y con la Iglesia Católica.',
        'Recuerda que internet no es un reemplazo para las interacciones cara a cara y con la comunidad.',
        'Aunque las conexiones en línea pueden ser valiosas y significativas, no pueden reemplazar la importancia de la comunidad física y la vida sacramental de la Iglesia.',
        'Finalmente, acércate a internet con un espíritu de oración y reflexión. Utiliza el mundo en línea como una oportunidad para profundizar tu propia relación con Dios y para compartir tu fe con los demás. Busca la guía del Espíritu Santo y manténte abierto/a a las formas en que Dios puede estar usando el mundo en línea para traer su reino.'
      ];

    $siempreEsDios = [
        'Mantén tu pureza y evita participar en comportamientos en línea que puedan ser dañinos para tu bienestar físico, emocional o espiritual. Esto incluye evitar',
        'y relaciones en línea que podrían llevar a la tentación o al pecado.',
        'Ten cuidado con las personas con las que interactúas en línea, especialmente aquellas que pueden intentar manipularte o explotarte.',
        'Recuerda que no todos en línea son quienes dicen ser.',
        'Es importante ejercer precaución y discernimiento al formar relaciones en línea.',
        'Utiliza herramientas de privacidad como la navegación privada, contraseñas seguras y la autenticación de dos factores para proteger tu identidad en línea e información personal.',
        'Busca recursos y comunidades católicas de confianza en línea que puedan apoyar tu crecimiento espiritual y brindarte orientación sobre cómo vivir una vida virtuosa. Esto puede incluir blogs católicos, podcasts, grupos de redes sociales o foros en línea dedicados a la discusión de las enseñanzas y prácticas católicas.',
        'Recuerda que el internet puede ser una herramienta poderosa para la evangelización y que puedes usar tu presencia en línea para compartir tu fe e inspirar a otros a profundizar su relación con Dios. Comparte contenido positivo y alentador que refleje los valores y enseñanzas católicas, y sé una fuerza positiva para el cambio en el mundo en línea.',
        'Acércate a internet con un espíritu de oración y discernimiento.',
        'Busca la guía del Espíritu Santo y manténte abierto a las formas en que Dios puede estar usando el mundo en línea para promover Su plan.',
        'Utiliza tus actividades en línea como una oportunidad para profundizar tu propia relación con Dios. Busca recursos católicos, como misas en línea, grupos de oración y lecturas espirituales, que puedan ayudarte a crecer en fe y comprensión.',
        'Recuerda que el internet puede ser una herramienta poderosa para compartir el mensaje de Evangelización con los demás. Utiliza tu presencia en línea para difundir la palabra de Dios e inspirar a otros a vivir vidas virtuosas de acuerdo con las enseñanzas católicas.',
        'Sé consciente del impacto que tus actividades en línea pueden tener en los demás, especialmente en aquellos que puedan estar luchando con su fe o que puedan necesitar orientación.',
        'Utiliza tu plataforma para ofrecer apoyo y aliento a aquellos que puedan estar luchando, e inspira a otros a profundizar su relación con Dios y con la Iglesia Católica.',
        'Recuerda que el internet puede ser una fuente de distracción y tentación, y que es importante mantener un equilibrio saludable entre tus actividades en línea y tu bienestar físico, emocional y espiritual. Establece límites para tus actividades en línea y haz tiempo para la comunidad física e interacciones presenciales con los demás.',
        'Finalmente, acércate a internet con un espíritu de discernimiento y humildad. Reconoce que el mundo en línea es complejo y siempre está evolucionando, y que es importante mantenerse abierto a nuevas perspectivas y enfoques. Busca la guía del Espíritu Santo y de fuentes católicas confiables mientras navegas por el mundo en línea, y',
        'siempre recuerda priorizar tu relación con Dios por encima de todo lo demás.',
        'Un último punto a considerar es priorizar tus relaciones con Dios y con los demás por encima de tus actividades en línea. Aunque internet puede ser una herramienta valiosa para construir relaciones y conectarse con otros, es',
        'importante asegurarte de que tus actividades en línea no sean a expensas de tus relaciones con quienes te rodean.',
        'Haz tiempo para la oración, la reflexión y la comunidad física, y recuerda que tu presencia en línea siempre debe ser un reflejo de tu fe y valores católicos.',
        '',
        'loEscondido'=>'pornografía, contenido sexual,'
      ];

    $batalla = [
        'El concepto de la batalla constante entre el bien y el mal es un tema común en muchas religiones alrededor del mundo. Es la idea de que existe una lucha continua entre las fuerzas de la luz y la oscuridad, o entre las energías positivas y negativas, que afectan todos los aspectos de nuestras vidas y el mundo que nos rodea.',
        'En muchas tradiciones religiosas, esta batalla se ve como una lucha cósmica entre Dios (o los dioses) y Satanás (u otras entidades malévolas), con la humanidad atrapada en el medio. La lucha a menudo se representa como una batalla por el alma de la humanidad, con las fuerzas del bien trabajando para ayudar a la humanidad a alcanzar la salvación o la iluminación, mientras que las fuerzas del mal buscan desviar a la humanidad y llevarla a la oscuridad.',
        'Si bien los detalles de esta lucha pueden variar según la religión y la cultura en cuestión, hay algunos temas y motivos comunes que aparecen en muchas tradiciones diferentes. Por ejemplo, muchas religiones enfatizan la importancia de las prácticas y disciplinas espirituales, como la oración, la meditación, el ayuno y los actos de caridad, como medio para fortalecer las fuerzas del bien y resistir la influencia del mal.',
        'Además de las prácticas espirituales, muchas religiones también enfatizan la importancia de vivir una vida virtuosa y de cultivar cualidades como el amor, la compasión, el perdón y la humildad. Al encarnar estas cualidades, los individuos pueden ayudar a inclinar la balanza a favor de las fuerzas del bien y pueden tener un impacto positivo en el mundo que les rodea.',
        'En última instancia, la batalla entre el bien y el mal se ve como una lucha continua que requiere vigilancia y esfuerzo constantes por parte de los individuos y las comunidades. Aunque puede haber retrocesos y desafíos en el camino, el objetivo siempre es luchar por la luz y resistir la oscuridad en todas sus formas.',
        'En muchas tradiciones religiosas, la lucha entre el bien y el mal se ve como un aspecto inherente de la condición humana y algo con lo que todas las personas deben lidiar a lo largo de sus vidas. Esta lucha puede tomar muchas formas diferentes, desde pequeños actos de bondad y generosidad hasta actos más grandes de sacrificio y heroísmo.',
        'Un hilo común en muchas religiones diferentes es la idea de que la batalla entre el bien y el mal no es solo una lucha externa, sino también interna. Es decir, los individuos deben lidiar con sus propios demonios internos y tendencias negativas, y trabajar para cultivar las virtudes y cualidades que les ayudarán a superar estos desafíos.',
        'Si bien el concepto de bien y mal a menudo se presenta como una oposición binaria, con distinciones claras entre lo correcto y lo incorrecto, muchas tradiciones religiosas reconocen que la línea entre el bien y el mal puede ser borrosa y compleja. Por ejemplo, un acto que podría verse como moralmente justificado en un contexto podría considerarse moralmente incorrecto en otro. Como resultado, muchas religiones enfatizan la importancia del discernimiento y el juicio cuidadoso al navegar por las complejidades de la experiencia humana.',
        'La lucha entre el bien y el mal a menudo se presenta como un esfuerzo colectivo, con individuos trabajando juntos para lograr un objetivo común. Esto puede tomar muchas formas diferentes, desde comunidades religiosas formales hasta redes más informales de amigos y aliados que se apoyan mutuamente en su búsqueda del bien. En este sentido, la batalla entre el bien y el mal no es solo una lucha individual, sino también comunitaria.',
        'Finalmente, vale la pena señalar que la lucha entre el bien y el mal no siempre se presenta como una batalla entre dos fuerzas iguales y opuestas. Muchas tradiciones religiosas afirman que las fuerzas del bien tienen en última instancia la ventaja y que la luz triunfará sobre la oscuridad al final. Esto puede ser una fuente de consuelo y esperanza para aquellos que enfrentan desafíos difíciles o confrontan los aspectos más oscuros de la experiencia humana.'
      ];

    $rechazo = [
        'En muchas tradiciones religiosas, el rechazo a Dios se ve como un asunto serio, con posibles consecuencias profundas para el individuo en cuestión. Las creencias y enseñanzas específicas que rodean este tema pueden variar según la religión y la cultura en cuestión, pero hay algunos temas y motivos comunes que aparecen en muchas tradiciones diferentes.',
        'Una de las principales preocupaciones asociadas con el rechazo a Dios es la idea de que puede conducir a una pérdida de guía y dirección espiritual, y una sensación de desconexión de lo divino. Sin una creencia en Dios o un poder superior, los individuos pueden tener dificultades por encontrar significado y propósito en sus vidas, y pueden sentirse a la deriva y/o en la perdición.',
        'Además de estas preocupaciones espirituales, muchas religiones también enseñan que rechazar a Dios puede tener consecuencias negativas en el más allá. Dependiendo del sistema de creencias, esto podría tomar la forma de condenación eterna, castigo o alguna otra forma de exilio espiritual o separación de lo divino.',
        'Vale la pena señalar, sin embargo, que diferentes religiones y denominaciones pueden tener diferentes interpretaciones de lo que significa "rechazar a Dios" y pueden tener diferentes ideas sobre la naturaleza y la gravedad de las consecuencias asociadas con esta elección. Para algunos, rechazar a Dios puede involucrar una decisión consciente y deliberada de alejarse de lo divino y abrazar una vida de pecado o incredulidad. Para otros, puede involucrar un proceso más sutil, inconsciente, de alejarse de la fe o perder contacto con las raíces espirituales.',
        'Independientemente de los detalles, está claro que el rechazo a Dios es un tema importante para muchas tradiciones religiosas y uno que a menudo se ve con un sentido de preocupación y gravedad. Para aquellos que están luchando con dudas o preguntas sobre su fe, puede ser útil buscar orientación y apoyo de líderes religiosos o miembros de la comunidad de confianza, y participar en un proceso de introspección y auto-reflexión para comprender mejor sus creencias y valores.'
      ];

    $responsabilidad = [
        'La idea de que la humanidad tiene una responsabilidad o papel especial en relación con otros seres vivos es un tema complejo y multifacético, con muchas perspectivas e interpretaciones diferentes.',
        'Desde una perspectiva religiosa, muchas tradiciones enseñan que los humanos han recibido un papel o misión especial en la Tierra, como cuidar y administrar el mundo natural. Por ejemplo, en la tradición judeo-cristiana, los humanos a menudo se representan como si se les hubiera dado dominio sobre la Tierra, lo que se ve como una responsabilidad de usar y administrar sus recursos de manera responsable y sustentable.',
        'Sin embargo, la idea de que los humanos tienen una responsabilidad o relación especial con otros seres vivos no es exclusiva de las tradiciones religiosas. Desde una perspectiva secular o científica, los humanos a menudo se ven como teniendo una mayor capacidad para comprender e influir en el mundo natural que otros animales, y por lo tanto una mayor responsabilidad de usar este conocimiento y poder de manera ética y responsable.',
        'Existen muchos marcos éticos y diferentes perspectivas que pueden informar a nuestra comprensión de nuestra responsabilidad con otros seres vivos. Por ejemplo, algunos podrían argumentar que tenemos la responsabilidad de proteger y preservar la biodiversidad, o de minimizar el daño a otros seres en nuestra búsqueda de intereses humanos. Otros podrían enfatizar la importancia del bienestar animal y el trato ético, o de reconocer el valor intrínseco y la dignidad de otros seres vivos.',
        'En otra instancia, la cuestión de la responsabilidad humana hacia con otros seres vivos es compleja y multifacética, con muchos factores diferentes a considerar. Si bien no hay una respuesta correcta, muchas tradiciones religiosas y seculares enfatizan la importancia del respeto, la compasión y el cuidado por el mundo natural, y el reconocimiento de nuestra interconexión con otros seres vivos.',
        'Vale la pena señalar que nuestra responsabilidad con otros seres vivos también está estrechamente relacionada con cuestiones ambientales más amplias, como el cambio climático, la contaminación y la destrucción del hábitat. A medida que los humanos continúan ejerciendo un impacto creciente en el mundo natural, existe una necesidad creciente de considerar formas en las cuales nuestras acciones afectan a otros seres vivos, tanto a corto como a largo plazo.',
        'Además de las consideraciones éticas y morales involucradas en nuestra responsabilidad con otros seres vivos, también hay beneficios prácticos para preservar la biodiversidad y proteger el mundo natural. Por ejemplo, muchos medicamentos y otros recursos valiosos se derivan de plantas y otros seres vivos, y una pérdida de biodiversidad puede tener consecuencias negativas para la salud y el bienestar de las sociedades humanas.',
        'En última instancia, nuestra responsabilidad hacia con otros seres vivos es una que requiere atención y cuidados continuos, también una voluntad de participar en los problemas de complejidad ética y práctica en los cuales la humanidad esta involucrada. Al trabajar juntos para promover una gestión ética y responsable del mundo natural, podemos ayudar a garantizar un futuro sostenible y próspero para todos los seres vivos en el planeta.'
      ];
      include'content_HeavenlyFather.php';
    }
include './anvil/structure.php';
?>