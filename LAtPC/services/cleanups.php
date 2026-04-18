<?php
function cssStyles(){
    ?>
    <link rel="stylesheet" href="../services/style.css">
    <?php
}

function content_services_cleanups (){

    global $content, $key;
    include_once dirname(__DIR__) . '/handlers/databaseConnection.php';
    databaseConnection('services');// database connection

    ?>
    <article class="fullbar">
        <?php include 'navBar.php'; ?>
    <section>
            <h1 id="title"><a href="./"><?= $title = $content[0][$key] ?? 'PC Cleanup' ?></a></h1>

            <h2><?= $content[1][$key] ?? '' ?></h2>
            <h3 class="box"><span><?= $content[2][$key] ?? ($key == 'content' ? 'Before you start:' : 'Antes de empezar:') ?></span></h3>

            <big class="img_fl">
                <h3><?= $content[3][$key] ?? '' ?></h3>
                <?= $content[4][$key] ?? '' ?>
            </big>

            <!-- Services Grid Section -->
            <section class="homepage-grid" style="margin-top: 3rem;">
                <section class="grid-item">
                    <?= $Software_Cleanup = $content[5][$key] ?? '' ?>
                </section>

                <section class="grid-item">
                    <?= $Physical_Cleanup = $content[6][$key] ?? '' ?>
                </section>

                <section class="grid-item" style="background: linear-gradient(135deg, var(--card-bg, #ffffff) 0%, #e8f4f8 100%); border: 2px solid var(--primary-color);">
                    <?= $Complete_Package = $content[7][$key] ?? '' ?>
                </section>

                <section class="grid-item">
                    <?= $Why_Choose_Us = $content[8][$key] ?? '' ?>
                </section>

                <section class="grid-item">
                    <?= $Maintenance_Tips = $content[9][$key] ?? '' ?>
                </section>

                <section class="grid-item bg-primary">
                    <?= $Call_to_Action = $content[10][$key] ?? '' ?>
                </section>
            </section>

            <!-- Steps Section -->
            <section style="border: solid rgba(0, 61, 128, 0.1) 10px" class="skyborder">
                <h3><span class="box"><?= $backup_data = $content[11][$key] ?? '' ?></span></h3>
                <p class="box2"><?= $backup_data_content = $content[12][$key] ?? '' ?></p>

                <h3><span class="box"><?= $restore_point = $content[13][$key] ?? '' ?></span></h3>
                <p class="box2"><?= $restore_point_content = $content[14][$key] ?? '' ?></p>

                <h3><span class="box"><?= $uninstall_programs = $content[15][$key] ?? '' ?></span></h3>
                <p class="box2"><?= $uninstall_programs_content = $content[16][$key] ?? '' ?></p>

                <h3><span class="box"><?= $delete_temp = $content[17][$key] ?? '' ?></span></h3>
                <p class="box2"><?= $delete_temp_content = $content[18][$key] ?? '' ?></p>

                <h3><span class="box"><?= $startup_progs = $content[19][$key] ?? '' ?></span></h3>
                <p class="box2"><?= $startup_progs_content = $content[20][$key] ?? '' ?></p>

                <h3><span class="box"><?= $browser_data = $content[21][$key] ?? '' ?></span></h3>
                <p class="box2"><?= $browser_data_content = $content[22][$key] ?? '' ?></p>

                <h3><span class="box"><?= $update_sw = $content[23][$key] ?? '' ?></span></h3>
                <p class="box2"><?= $update_sw_content = $content[24][$key] ?? '' ?></p>

                <h3><span class="box"><?= $malware_scan = $content[25][$key] ?? 'Step 6: Run a Malware Scan' ?></span></h3>
                <p class="box2"><?= $malware_scan_content = $content[26][$key] ?? '' ?></p>

                <h3><span class="box"><?= $organize_files = $content[27][$key] ?? 'Step 7: Organize and Delete Files' ?></span></h3>
                <p class="box2"><?= $organize_files_content = $content[28][$key] ?? '' ?></p>

                <h3><span class="box"><?= $defragment = $content[29][$key] ?? 'Step 8: Defragment the Hard Drive' ?></span></h3>
                <p class="box2"><?= $defragment_content = $content[30][$key] ?? '' ?></p>

                <h3><span class="box"><?= $hardware_check = $content[31][$key] ?? 'Step 9: Check for Hardware Issues' ?></span></h3>
                <p class="box2"><?= $hardware_check_content = $content[32][$key] ?? '' ?></p>

                <h3><span class="box"><?= $reboot = $content[33][$key] ?? 'Step 10: Reboot Your PC' ?></span></h3>
                <p class="box2"><?= $reboot_content = $content[34][$key] ?? '' ?></p>

                <h3><span class="box"><?= $footer_text = $content[35][$key] ?? '' ?></span></h3>
            </section>

            <a href="#title" title="Top of the page">
                <hr>
            </a>
            <!-- Physical Cleanup Section -->
            <section style="border: solid rgba(0, 61, 128, 0.05) 10px; padding: 20px; border-radius: 12px; margin-top: 30px;">
                <h2 class="spacer_shape"><?= $phys_intro = $content[36][$key] ?? 'Physical Cleanup Guide' ?></h2>
                <p><span class="box"><?= $phys_before = $content[37][$key] ?? 'Before you start:' ?></span><br>
                    <?= $phys_before_content = $content[38][$key] ?? '' ?>
                </p>

                <p><span class="box"><?= $phys_supplies = $content[39][$key] ?? 'Gather Supplies:' ?></span><br>
                    <?= $phys_supplies_list = $content[40][$key] ?? '' ?>
                </p>

                <p><span class="box"><?= $phys_step1 = $content[41][$key] ?? 'Step 1: Exterior Cleaning' ?></span><br>
                    <?= $phys_step1_content = $content[42][$key] ?? '' ?>
                </p>

                <p><span class="box"><?= $phys_step2 = $content[43][$key] ?? 'Step 2: Open the PC Case' ?></span><br>
                    <?= $phys_step2_content = $content[44][$key] ?? '' ?>
                </p>

                <p><span class="box"><?= $phys_step3 = $content[45][$key] ?? 'Step 3: Clean the Interior' ?></span><br>
                    <?= $phys_step3_content = $content[46][$key] ?? '' ?>
                </p>

                <p><span class="box"><?= $phys_step4 = $content[47][$key] ?? 'Step 4: Clean Storage Drives' ?></span><br>
                    <?= $phys_step4_content = $content[48][$key] ?? '' ?>
                </p>

                <p><span class="box"><?= $phys_step5 = $content[49][$key] ?? 'Step 5: Reassemble' ?></span><br>
                    <?= $phys_step5_content = $content[50][$key] ?? '' ?>
                </p>

                <p><span class="box"><?= $phys_step6 = $content[51][$key] ?? 'Step 6: Exterior Touch-Ups' ?></span><br>
                    <?= $phys_step6_content = $content[52][$key] ?? '' ?>
                </p>

                <p><span class="box"><?= $phys_step7 = $content[53][$key] ?? 'Step 7: Peripherals' ?></span><br>
                    <?= $phys_step7_content = $content[54][$key] ?? '' ?>
                </p>

                <p><span class="box"><?= $phys_step8 = $content[55][$key] ?? 'Step 8: Test' ?></span><br>
                    <?= $phys_step8_content = $content[56][$key] ?? '' ?>
                </p>

                <h2 class="spacer_shape"><?= $phys_conclusion = $content[57][$key] ?? '' ?></h2>
            </section>

    </article>

    <?php
}
/*
function contenido_servicios_limpieza(){
            ?>
            <article class="fullbar">
    <section>
        <h1 id="title"><a href="./">Limpieza de una PC</a></h1>

        <h2>Limpiar tu computadora puede mejorar su rendimiento y funcionalidad en general.</h2>
        <h3 class="box"><span class="box2">Antes de empezar:</span></h3>
        <big class="img_fl">
            <h3>¿Cuándo fue la última vez que tu PC pudo respirar? 🖥️💨</h3>
            <p>La acumulación de polvo y la mala ventilación pueden hacer que tu computadora se caliente, se ponga lenta y se desgaste más rápido — pero no te preocupes, yo te ayudo.</p>

            <p>Limpiaré y refrescaré tu sistema para que se mantenga fresco, silencioso y funcionando como nuevo.</p>
            <p>
                ✅ Solo $45 por servicio<br />
                📞 Llama o manda mensaje al 909-276-7214 — ¡hagamos que tu computadora vuelva a respirar bien!</p>
        </big>

        <!-- Services Grid Section -->
        <section class="homepage-grid" style="margin-top: 3rem;">

            <!-- Software Cleanup Card -->
            <div class="grid-item">
                <h3>💻 Limpieza y Optimización de Software</h3>
                <p>¿Tu PC va lenta? ¡Déjame acelerarla! Eliminaré archivos basura, optimizaré los programas de inicio y dejaré tu sistema funcionando como nuevo.</p>

                <div class="multi-link-container">
                    <p class="linked-text" style="color: var(--primary-color); cursor: pointer; font-weight: 500;">✓
                        ¿Qué está incluido?</p>
                    <div class="link-dialog">
                        <p tabindex="0"><strong>1. Respalda tus Datos:</strong> Antes de hacer cambios importantes en tu PC, es fundamental <a href="../software/?backups#top">respaldar</a> tus archivos e información importante en un disco duro externo, almacenamiento en la nube u otra computadora.</p>

                        <p tabindex="0"><strong>2. Crear un Punto de Restauración:</strong> Crearé un
                                href="https://support.microsoft.com/en-us/windows/use-system-restore-a5ae3ed9-07c4-fd56-45ee-096777ecd14e"
                                title="Usar Restaurar Sistema">punto de restauración del sistema</a> por seguridad.</p>

                        <p tabindex="0"><strong>Paso 1: Desinstalar Programas Innecesarios</strong><br />Eliminaré el bloatware y los programas que ya no necesitas, liberando espacio valioso en el disco.</p>

                        <p tabindex="0"><strong>Paso 2: Eliminar Archivos Temporales</strong><br />Usando la herramienta Liberador de Espacio en Disco de Windows, eliminaré archivos temporales, contenido de la papelera de reciclaje y caché del sistema.</p>

                        <p tabindex="0"><strong>Paso 3: Quitar Programas de Inicio</strong><br />Deshabilitaré los programas de inicio innecesarios que ralentizan el arranque de tu computadora.</p>

                        <p tabindex="0"><strong>Paso 4: Limpiar Datos del Navegador</strong><br />Borraré el historial de navegación, las cookies y el caché para mejorar el rendimiento del navegador.</p>

                        <p tabindex="0"><strong>Paso 5: Actualizar Software</strong><br />Mantendré tu sistema operativo, controladores y programas al día con las últimas correcciones de errores y mejoras de rendimiento.</p>

                        <p tabindex="0"><strong>Paso 6: Ejecutar un Análisis de Malware</strong><br />Análisis completo del sistema con un antivirus confiable para eliminar amenazas.</p>

                        <p tabindex="0"><strong>Paso 7: Organizar y Eliminar Archivos</strong><br />Limpiar documentos, descargas y organizar archivos en carpetas bien etiquetadas.</p>

                        <p tabindex="0"><strong>Paso 8: Desfragmentar el Disco Duro (HDDs)</strong><br />Optimizar los discos duros tradicionales para un mejor rendimiento.</p>

                        <p tabindex="0"><strong>Paso 9: Revisar Problemas de Hardware</strong><br />Inspeccionar el hardware en busca de polvo y suciedad, con diagnósticos profesionales si es necesario.</p>

                        <p tabindex="0"><strong>Paso 10: Reiniciar y Probar</strong><br />Reiniciar tu computadora y verificar que todo funcione correctamente.</p>
                    </div>
                </div>

                <a href="tel:909-276-7214" class="cta-button">📞 Llama Ahora: 909-276-7214</a>
                <p style="margin-top: 1rem; font-size: 1.1rem; color: var(--secondary-dark); font-weight: 600;">Solo $45
                </p>
            </div>

            <!-- Physical Cleanup Card -->
            <div class="grid-item">
                <h3>🧹 Limpieza Física del Hardware</h3>
                <p>La acumulación de polvo provoca sobrecalentamiento y problemas de rendimiento. Limpiaré tu PC de forma profesional por dentro y por fuera para mantenerla fresca y silenciosa.</p>

                <div class="multi-link-container">
                    <p class="linked-text" style="color: var(--primary-color); cursor: pointer; font-weight: 500;">✓
                        ¿Qué está incluido?</p>
                    <div class="link-dialog">
                        <p tabindex="0"><strong>Seguridad Primero:</strong> Manejo profesional con conexión a tierra adecuada y precauciones de seguridad para proteger tus componentes.</p>

                        <p tabindex="0"><strong>Materiales de Limpieza Profesional:</strong><br />
                            • Paños suaves de microfibra sin pelusa<br />
                            • Aire comprimido<br />
                            • Alcohol isopropílico<br />
                            • Herramientas especializadas</p>

                        <p tabindex="0"><strong>Limpieza Exterior:</strong><br />Limpieza completa del gabinete de tu PC, eliminando polvo, huellas y manchas de todas las superficies y ventilaciones.</p>

                        <p tabindex="0"><strong>Limpieza Profunda Interior:</strong><br />
                            • <a href="../hardware/?cooling#cooler">Ventiladores de CPU y GPU</a> - Eliminar acumulación de polvo<br />
                            • <a href="../hardware/?motherboard#board">Tarjeta Madre</a> - Remoción cuidadosa de polvo<br />
                            • <a href="../hardware/?gpu#gpu">Tarjeta Gráfica</a> - Limpieza profesional<br />
                            • <a href="../hardware/?cables_connectors#top">Cables</a> - Organizar y asegurar<br />
                            • <a href="../hardware/?psu#psu">Fuente de Poder</a> - Limpieza del ventilador y las rejillas</p>

                        <p tabindex="0"><strong>Mantenimiento de Unidades de Almacenamiento:</strong><br />Limpiar las bahías de <a href="../hardware/?ssd#ssd">unidades de almacenamiento</a> y asegurar el flujo de aire adecuado.</p>

                        <p tabindex="0"><strong>Reensamble Completo y Pruebas:</strong><br />Reensamble cuidadoso con pruebas exhaustivas para garantizar un rendimiento óptimo.</p>
                    </div>
                </div>

                <a href="tel:909-276-7214" class="cta-button">📞 Llama Ahora: 909-276-7214</a>
                <p style="margin-top: 1rem; font-size: 1.1rem; color: var(--secondary-dark); font-weight: 600;">Solo $45
                </p>
            </div>

            <!-- Complete Package Card -->
            <div class="grid-item"
                style="background: linear-gradient(135deg, var(--card-bg) 0%, #e8f4f8 100%); border: 2px solid var(--primary-color);">
                <h3>⭐ Paquete Completo de Limpieza</h3>
                <p style="font-size: 1.1rem; font-weight: 500;">¡Obtén el MEJOR VALOR! Optimización de software Y limpieza física para el máximo rendimiento.</p>

                <div style="background: white; padding: 1.5rem; border-radius: 8px; margin: 1rem 0;">
                    <h4 style="color: var(--primary-color); margin-top: 0;">El Paquete Incluye:</h4>
                    <ul style="color: var(--text-color); line-height: 1.8; margin: 0; padding-left: 1.5rem;">
                        <li>✅ Limpieza y optimización completa de software</li>
                        <li>✅ Limpieza física profesional del hardware</li>
                        <li>✅ Análisis y eliminación de malware</li>
                        <li>✅ Actualizaciones del sistema y optimización de controladores</li>
                        <li>✅ Pruebas de rendimiento y verificación</li>
                        <li>✅ Soporte de seguimiento gratuito (7 días)</li>
                    </ul>
                </div>

                <div style="text-align: center; margin: 1.5rem 0;">
                    <p style="font-size: 0.9rem; text-decoration: line-through; color: var(--light-text); margin: 0;">
                        Precio Regular: $90</p>
                    <p style="font-size: 2rem; color: var(--secondary-dark); font-weight: 700; margin: 0.5rem 0;">$75
                    </p>
                    <p style="color: var(--primary-color); font-weight: 600; margin: 0;">¡Ahorra $15!</p>
                </div>

                <a href="tel:909-276-7214" class="cta-button"
                    style="background-color: var(--secondary-dark); width: 100%; font-size: 1.1rem; padding: 0.8rem;">📞
                    Llama Ahora: 909-276-7214</a>
            </div>

            <!-- Why Choose Us Card -->
            <div class="grid-item">
                <h3>🏆 ¿Por Qué Elegir LatinosPC?</h3>
                <ul style="color: var(--text-color); line-height: 2; margin: 1rem 0; padding-left: 1.5rem;">
                    <li><strong>Servicio Rápido:</strong> Citas el mismo día disponibles</li>
                    <li><strong>Técnicos Expertos:</strong> Años de experiencia</li>
                    <li><strong>Precios Accesibles:</strong> Sin cargos ocultos</li>
                    <li><strong>Satisfacción Garantizada:</strong> 100% de satisfacción del cliente</li>
                    <li><strong>Servicio Local:</strong> Sirviendo a la comunidad con orgullo</li>
                </ul>

                <div
                    style="background: var(--bannerAndFooter-bg); padding: 1rem; border-radius: 8px; margin-top: 1.5rem;">
                    <p style="margin: 0; text-align: center; font-weight: 600; color: var(--primary-dark);">
                        💬 "Resolvió mis problemas y volveré a usar sus servicios y mandaré referencias. ¡Lo recomiendo mucho!" - <a href="https://g.page/r/CTXglHmMZ_zzEAI/review">25 de oct. de 2021</a>
                    </p>
                </div>
            </div>

            <!-- Maintenance Tips Card -->
            <div class="grid-item">
                <h3>📋 Consejos de Mantenimiento</h3>
                <p>Mantén tu PC funcionando bien entre limpiezas profesionales:</p>

                <div style="background: var(--background); padding: 1rem; border-radius: 8px; margin: 1rem 0;">
                    <p style="margin: 0.5rem 0;"><strong>Mensualmente:</strong> Ejecuta el liberador de espacio en disco y limpia el caché del navegador</p>
                    <p style="margin: 0.5rem 0;"><strong>Cada 3 meses:</strong> Revisa si hay acumulación de polvo en las ventilaciones</p>
                    <p style="margin: 0.5rem 0;"><strong>Cada 6 meses:</strong> Se recomienda una limpieza profunda profesional</p>
                </div>

                <p style="color: var(--primary-color); font-weight: 600; margin-top: 1.5rem;">¡El mantenimiento regular prolonga la vida útil de tu PC y previene reparaciones costosas!</p>
            </div>

            <!-- Call to Action Card -->
            <div class="grid-item" style="background-color: var(--primary-color); color: white;">
                <h3 style="color: white;">🚀 ¿Listo para Acelerar tu PC?</h3>
                <p style="color: white; font-size: 1.1rem;">No dejes que una computadora lenta te frene. ¡Obtén un servicio de limpieza profesional hoy!</p>

                <div style="background: rgba(255,255,255,0.2); padding: 1.5rem; border-radius: 8px; margin: 1.5rem 0;">
                    <h4 style="color: white; margin-top: 0; text-align: center;">Contáctanos Ahora:</h4>
                    <p style="color: white; font-size: 1.3rem; font-weight: 700; text-align: center; margin: 0.5rem 0;">
                        📞 909-276-7214</p>
                    <p style="color: white; text-align: center; margin: 0.5rem 0;">💬 Mensaje de texto o llamada</p>
                </div>

                <a href="tel:909-276-7214" class="cta-button"
                    style="background-color: white; color: var(--primary-color); width: 100%; font-size: 1.1rem; padding: 0.8rem;">Programa tu Limpieza</a>

                <p style="color: white; text-align: center; margin-top: 1rem; font-size: 0.9rem;">Servicio el mismo día disponible • Satisfacción garantizada</p>
            </div>

        </section>


        <section style="border: solid skyblue 10px">
            <h3><span class="box2">1. Respalda tus Datos:</span></h3>
            <p>Antes de hacer cualquier cambio importante en tu PC, es fundamental <a href="../software/?backups#top">respaldar</a> tus archivos e información importante en un disco duro externo, almacenamiento en la nube u otra computadora. Esto garantiza que tus datos estén seguros en caso de que algo salga mal durante el proceso de limpieza.</p>
        </section>
        <h3>
            <span class="box2">2. Crear un Punto de Restauración:</span> Es buena idea crear un
                href="https://support.microsoft.com/en-us/windows/use-system-restore-a5ae3ed9-07c4-fd56-45ee-096777ecd14e"
                title="Usar Restaurar Sistema">punto de restauración del sistema</a> por si algo sale mal. Para hacerlo, busca "Crear un punto de restauración" en la barra de búsqueda de Windows y sigue las instrucciones en pantalla para crearlo.
        </h3>
        <h3>
            <span class="box2">Paso 1: Desinstalar Programas Innecesarios</span><br />
            - Abre el "Panel de Control" desde el menú Inicio.<br />
            - Haz clic en "Programas" o "Aplicaciones".<br />
            - Selecciona "Desinstalar un programa" o "Aplicaciones y características".<br />
            - Revisa la lista de programas instalados y desinstala los que ya no necesites haciendo clic en ellos y seleccionando "Desinstalar" o "Desinstalar/Cambiar".<br />— Ten cuidado al desinstalar programas importantes que puedan parecer que ya no son necesarios.
        </h3>
        <h3>
            <span class="box2">Paso 2: Eliminar Archivos Temporales</span>
            - Usa la herramienta Liberador de Espacio en Disco integrada de Windows:
            - Busca "Liberador de espacio en disco" en la barra de búsqueda de Windows y ábrelo.
            - Selecciona la unidad que deseas limpiar (generalmente C:).
            - Marca las casillas junto a "Archivos temporales", "Papelera de reciclaje" y otras categorías que quieras limpiar.
            - Haz clic en "Aceptar" y luego en "Eliminar archivos" para confirmar.
        </h3>
        <h3>
            <span class="box2">Paso 3: Quitar Programas de Inicio</span><br />
            - Abre el "Administrador de Tareas" presionando Ctrl + Shift + Esc o Ctrl + Alt + Supr y seleccionando "Administrador de tareas".<br />
            - Ve a la pestaña "Inicio".<br />
            - Deshabilita los programas de inicio innecesarios haciendo clic derecho sobre ellos y seleccionando "Deshabilitar".
        </h3>
        <h3>
            <span class="box2">Paso 4: Limpiar Datos del Navegador</span><br />
            - Abre tu navegador web.<br />
            - Accede al menú de configuración u opciones del navegador.<br />
            - Busca la opción para borrar el historial o datos de navegación.<br />
            - Selecciona los tipos de datos que deseas eliminar (p. ej., historial de navegación, cookies, caché) y haz clic en "Borrar" o "Eliminar".
        </h3>
        <h3>
            <span class="box2">Paso 5: Actualizar Software</span>
            - Mantén tu sistema operativo, controladores y programas al día. Las actualizaciones de Windows, de controladores y de software suelen incluir correcciones de errores y mejoras de rendimiento.
        </h3>
        <h3>
            <span class="box2">Paso 6: Ejecutar un Análisis de Malware</span><br />
            - Usa un antivirus o programa antimalware confiable para analizar tu PC en busca de virus y malware. Asegúrate de que tu antivirus esté actualizado antes de ejecutar el análisis.
        </h3>
        <h3>
            <span class="box2">Paso 7: Organizar y Eliminar Archivos</span><br />
            - Revisa tus documentos, descargas y otras carpetas, y elimina los archivos que ya no necesites.<br />
            - Organiza tus archivos en carpetas bien etiquetadas para un acceso más fácil.
        </h3>
        <h3>
            <span class="box2">Paso 8: Desfragmentar el Disco Duro (para HDDs)</span>
            - Si usas un disco duro tradicional (HDD), puedes ejecutar la herramienta de desfragmentación. Busca "Desfragmentar y optimizar unidades" en la barra de búsqueda de Windows y sigue las instrucciones.
        </h3>
        <h3>
            <span class="box2">Paso 9: Revisar Problemas de Hardware</span><br />
            - Inspecciona el hardware de tu PC en busca de polvo y suciedad, y límpialo si es necesario. Presta especial atención a los ventiladores de enfriamiento y las rejillas de ventilación.<br />
            - Si sospechas que hay problemas de hardware, consulta a un técnico profesional para diagnósticos y reparaciones adicionales.
        </h3>
        <h3>
            <span class="box2">Paso 10: Reiniciar tu PC</span><br />
            - Después de completar el proceso de limpieza, reinicia tu computadora para aplicar los cambios y asegurarte de que todo funcione correctamente.
        </h3>
        <h3>
            <span class="box2">Realizar estas tareas de limpieza de PC con regularidad puede ayudar a mantener tu computadora funcionando de manera eficiente y prolongar su vida útil.</span>
    </section>
    <a href="#title" title="Inicio de la página">
        <hr>
    </a>
    <!--TOP-->
    <section>
        <h2 class="spacer_shape">Limpiar físicamente los componentes de tu PC es importante para asegurarte de que se mantenga en buenas condiciones. Aquí tienes una guía paso a paso sobre cómo limpiar una PC físicamente:
        </h2>
        <h3><span class="box2">
                Antes de empezar:</span>
            1. Precauciones de Seguridad: Asegúrate de desconectar tu PC del tomacorriente y apagar la fuente de alimentación. Además, descárgate de electricidad estática tocando un objeto metálico para no dañar los componentes de tu computadora.
        </h3>
        <h3><span class="box2">
                2. Reúne los Materiales de Limpieza:</span><br />
            - Paños suaves de microfibra sin pelusa<br />
            - Lata de aire comprimido<br />
            - Desarmador (si es necesario)<br />
            - Alcohol isopropílico (opcional)<br />
            - Hisopos de algodón (opcional)
        </h3>
        <h3><span class="box2">
                Paso 1: Limpieza Exterior</span><br />
            - Usa un paño de microfibra para limpiar suavemente el exterior del gabinete de tu PC, incluyendo el frente, los lados y la parte superior. Esto eliminará el polvo, las huellas y las manchas.<br />
            - Presta atención a las rejillas de ventilación, ya que tienden a acumular polvo. Puedes usar aire comprimido para soplar el polvo de esas áreas.
        </h3>
        <h3><span class="box2">
                Paso 2: Abrir el Gabinete</span><br />
            - Si te sientes cómodo haciéndolo, puedes abrir el gabinete para acceder a los componentes internos. Consulta el manual de tu PC o guías en línea para saber cómo abrirlo. Generalmente esto implica quitar tornillos o pestillos.
        </h3>
        <h3><span class="box2">
                Paso 3: Limpiar el Interior</span>
            <div class="spacer_shape">
                - <a href="../hardware/?chassis#case">Dentro del gabinete</a>, encontrarás varios componentes que pueden necesitar limpieza:<br /><br />
                - <a href="../hardware/?cooling#cooler">Ventiladores:</a> El polvo tiende a acumularse en los ventiladores de CPU y GPU. Usa aire comprimido para soplar el polvo de los ventiladores, manteniéndolos fijos para que no giren mientras los limpias.<br /><br />
                - <a href="../hardware/?motherboard#board">Tarjeta Madre:</a> Usa aire comprimido para eliminar el polvo de la tarjeta madre, pero evita tocar los componentes sensibles.<br /><br />
                - <a href="../hardware/?gpu#gpu">Tarjeta Gráfica (GPU):</a> Si tienes una tarjeta gráfica dedicada, límpiala de la misma manera que la tarjeta madre.<br /><br />
                - <a href="../hardware/?cables_connectors#top">Cables:</a> Revisa si hay cables sueltos o desconectados y vuélvelos a conectar de forma segura.<br /><br />
                - <a href="../hardware/?psu#psu">Fuente de Poder (PSU):</a> Limpia el ventilador y las rejillas de la fuente de poder con aire comprimido.
            </div>
        </h3>
        <h3><span class="box2">
                Paso 4: Limpiar las Unidades de Almacenamiento y Componentes</span><br />
            - Si tu PC tiene <a href="../hardware/?ssd#ssd">unidades de almacenamiento</a> adicionales (p. ej., HDDs o SSDs) montadas en bahías, puedes retirarlas cuidadosamente (después de desconectar los cables de alimentación y de datos) y limpiar el polvo y la suciedad de las bahías.
        </h3>
        <h3><span class="box2">
                Paso 5: Rearmar la PC</span><br />
            - Una vez que termines de limpiar el interior, rearma la PC volviendo a colocar el gabinete. Asegúrate de que todos los componentes estén bien colocados.
        </h3>
        <h3><span class="box2">
                Paso 6: Toque Final al Exterior</span><br />
            - Limpia el exterior del gabinete una vez más para eliminar cualquier polvo que se haya asentado durante el proceso de limpieza.
        </h3>
        <h3><span class="box2">
                Paso 7: Monitor y Periféricos</span><br />
            - No olvides limpiar tu monitor, teclado, ratón y demás periféricos usando los materiales de limpieza adecuados. Sigue siempre las recomendaciones del fabricante para limpiar estos dispositivos.
        </h3>
        <h3><span class="box2">
                Paso 8: Conectar y Probar</span><br />
            - Vuelve a conectar tu PC al tomacorriente, enciende la fuente de alimentación e inicia tu computadora.<br />
            - Monitorea tu PC en busca de ruidos inusuales o problemas de rendimiento. Si encuentras algún problema, verifica que todos los componentes y cables estén bien conectados.
        </h3>
        <h2 class="spacer_shape">
            Limpiar físicamente tu PC de forma regular puede ayudar a prevenir el sobrecalentamiento y la acumulación de polvo, lo cual puede causar problemas de hardware y disminuir el rendimiento con el tiempo. Intenta hacer esta limpieza cada pocos meses o según lo necesite el entorno donde se encuentra tu PC.</h2>
    </section>
    <a href="#title" title="Inicio de la página">
        <hr>
    </a>
    <!--TOP-->

    </article>
            <?php
}
*/
include dirname(__DIR__) . '/anvil/structure.php';
?>