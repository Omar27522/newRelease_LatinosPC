<?php
        $titles =[ 'Cooling Devices',':Fans:',':Solid State Coolers:',':Phase Change:','Computer coolers','There are two types of computer coolers:',
                'The process typically involves the following steps:','Doppler cooling:','Coolers:','Air:','Liquid:','Solid-State:',
                'Thermoelectric Coolers (TECs):','Hybrid Coolers:','Phase Change Cooling:','Maintenance and Installation:','Conclusion:','Lasers','On the other hand,',
                'There are several types of active cooling systems,',':Liquid Coolers:',':TECS:','Recently,','Sisyphus cooling:','Evaporative cooling:',
                'When choosing a cooler, consider factors such as Cooler Size and Compatibility:','Cooler Height:','Socket Compatibility:','Cooling Performance:'
             ];
    $links =[   'https://en.wikipedia.org/wiki/Computer_cooling',
        'https://www.youtube.com/watch?v=6AYdAl7Gxrc',
        'https://youtube.com/clip/UgkxCtnGcjvvzs7VShBGNBL_6luLxB5T1rSI?si=82vLKDTdjHML9d4O',
        'https://www.youtube.com/watch?v=FPFE7i7bz9Y',
        'https://en.wikipedia.org/wiki/Doppler_cooling',
        'https://en.wikipedia.org/wiki/Sisyphus_cooling',
        'https://en.wikipedia.org/wiki/Evaporative_cooling_(atomic_physics)',
        'https://en.wikipedia.org/wiki/Thermoelectric_effect',
    ];
    $coolers = ['coolers'=>'are an essential component of any computing system, as
                    they help to regulate the temperature of the central processing unit (CPU) and other critical components of
                    the computer. The cooling system is crucial because the performance and lifespan of the computer&#39;s
                    components can be negatively affected by excessive heat.',

                'passiveAndActivePassive'=>'<a href="https://www.cybernetman.com/blog/fanless-cooling-how-it-works-and-why-you-need-it/">passive</a> and
                    <a href="https://www.pcmag.com/encyclopedia/term/active-cooling#:~:text=Active%20cooling%20uses%20a%20fan,allow%20the%20air%20to%20dissipate.">active</a> cooling.
                    Passive cooling systems use natural convection or airflow to remove heat from the computer.
                    Passive cooling systems are typically made up of heat sinks or radiators that absorb heat from the CPU
                    and other components and disperse it through a series of fins or pipes.',

                'passiveAndActiveActive'=>'active cooling uses a fan or pump to create
                    forced airflow or liquid circulation to remove heat from the computer. Active cooling is typically more
                    effective than passive cooling because it can move air or liquid at a higher velocity, thus removing
                    heat more efficiently.',

                'types'=>'including air-cooled, liquid-cooled, and thermoelectric coolers.',

                'air'=>'Air-cooled systems',

                'common'=>'are the most common and use fans to blow air over the heat sink, which in turn dissipates heat from the CPU.',

                'liquid'=>'Liquid-cooled systems',

                'pump'=>', on the other hand, use a pump to circulate liquid through a radiator to remove heat from the CPU and other components.',

                'thermoelectric'=>'Thermoelectric coolers',

                'peltier'=>'use the Peltier effect to cool the CPU by creating a temperature differential between two surfaces.',

                'ssc'=>'there have been advancements in solid-state cooling technology, which uses materials that can transfer heat without the need for a fan or liquid. These materials are known as thermoelectric materials and can be used to create solid-state heat sinks or coolers that can be incorporated into a computer&#39;s cooling system.',

                'laserCooling'=>'This is a fascinating phenomenon in physics that involves the use of lasers to cool atoms or molecules down to extremely low temperatures, often close to absolute zero. It relies on the principles of quantum mechanics and involves manipulating the motion of particles through the absorption and emission of photons.',

                'dopplerCooling'=>'This method utilizes the Doppler effect to slow down the movement of atoms or molecules. Laser beams are directed at the particles, and as they absorb and re-emit photons, their momentum changes. By carefully tuning the frequency of the lasers, the particles can be slowed down significantly.',

                'sisyphus'=>'In this technique, particles are trapped in a periodic potential, often created by intersecting laser beams. As the particles move through this potential, they exchange kinetic energy with the light field, leading to further cooling.',

                'evaporative'=>'Once the particles are sufficiently cooled using techniques like Doppler and Sisyphus cooling, evaporative cooling can be employed to further reduce their temperature. This involves selectively removing the highest-energy particles from the system, leaving behind a colder ensemble.',

                'laserCoolingSummary'=>'In summary, computer coolers are essential to ensure that the CPU and other critical components of a computer are kept within safe operating temperatures. Active cooling systems, including air-cooled, liquid-cooled, and thermoelectric coolers, are more effective than passive cooling systems and can help extend the lifespan and improve the performance of a computer. Solid-state cooling technology is also an emerging technology that has the potential to improve computer cooling systems further.',

                'airCooling'=>'Air coolers are the most common type of CPU cooler. They consist of a heat-sink with metal fins and one or more fans mounted on top or alongside the fins.',

                'airCooling2'=>'The fan(s) blow air over the heat-sink, dissipating heat from the CPU. Heat pipes, often embedded in the heat-sink, help conduct heat away from the CPU to the fins where it can be dispersed.',

                'liquidCooling'=>'Liquid coolers, also known as water coolers, use a closed-loop system to transfer heat away from the CPU.',

                'liquidCooling2'=>'A pump circulates a coolant (usually water mixed with a coolant additive) through tubes connected to a radiator. The radiator dissipates heat into the surrounding air, and the cooled coolant is then pumped back to the CPU block to absorb more heat.',

                'solidStateCooling'=>'Solid-state coolers use thermoelectric materials to transfer heat without the need for fans or liquid.',

                'solidStateCooling2'=>'These materials create a temperature gradient when an electric current is applied, enabling heat transfer. Solid-state coolers are still emerging and hold potential for compact and efficient cooling solutions.',

                'tec'=>['TECs utilize the','Peltier effect','to cool the CPU.','When an electrical current is applied to a thermoelectric module, it creates a temperature differential between its two surfaces. One side becomes hot while the other side becomes cold, effectively cooling the CPU. However, TECs are less common due to their high power consumption and complexity.'],

                'hybrid'=>['Hybrid coolers combine elements of both air and liquid cooling systems.',
                    'They typically feature a liquid cooling loop for the CPU with an integrated air cooler for other components such as VRMs (Voltage Regulator Modules) or RAM.'],

                'pcc'=>['Phase change cooling systems use refrigerants to cool the CPU.','The refrigerant undergoes phase changes from liquid to gas and back, absorbing heat during evaporation and releasing it during condensation. While highly effective, phase change cooling systems are expensive and complex, making them impractical for most users.'],

                'factors'=>['Ensure it fits within the case without obstructing other components.','Check if the cooler is compatible with your CPU socket type.','Consider the TDP (Thermal Design Power) rating and cooling capacity of the cooler relative to your CPU\'s power consumption and heat output.',
                    'Follow manufacturer guidelines for installation to ensure proper contact between the cooler and CPU.',
                    'Regularly clean dust and debris from air cooler fins and radiator fins in liquid cooling systems to maintain optimal airflow.',
                    'Computer coolers play a crucial role in maintaining optimal temperatures for CPUs and other components. Understanding the different types of coolers and their operation can help users make informed decisions when selecting cooling solutions for their systems. As technology advances, new cooling methods and innovations continue to emerge, offering improved efficiency and performance for computer systems.']
    ];


    /*/====================================================\
    |                                                    |
    |   // Search for the item in the array              |
    |                                                    |
    |   $search_item = 'Lasers';                         |
    |                                                    |
    |   $index = array_search($search_item, $titles);    |
    |                                                    |
    |   if ($index !== false) {                          |
    |       echo "$search_item is in the array           |
    |       at index $index.";                           |
    |   } else {                                         |
    |       echo "$search_item is not in the array.";    |
    |   }                                                |
    |                                                    |
    |   %^&Lasers is in the array at index 17.%^&        |
    |                                                    |
    |                                                    |
    \====================================================/
    */
        ?>
        <article class="hero4 container">
    <!-- (-.-)Zzz...--|c[_]|--☁【ツ】☁--|c[_]|--\(^-^)/--|c[_]|--(╯°□°）╯ ︵ ┻━┻ **`ღ´** -->
    <section class="fullbar" >
    <a href="./#peripherals">
        <h2 id="cooler"><?= empty($titles[0]) ? $titulos[0] : $titles[0];?></h2>
    </a>

        <p><a href="#fans"><?= empty($titles[1]) ? $titulos[1] : $titles[1];?></a> <a
                href="#liquid-coolers"><?= empty($titles[20]) ? $titulos[20] : $titles[20];?></a> <a
                href="#solid-state-coolers"><?= empty($titles[2]) ? $titulos[2] : $titles[2];?></a>&nbsp;<a
                href="#TECS"><?= empty($titles[21]) ? $titulos[21] : $titles[21];?></a>&nbsp;<a
                href="#phase-change-cooling"><?= empty($titles[3]) ? $titulos[3] : $titles[3];?></a></p>
        <p class="container fullbar"><a href="<?= empty($links[0]) ? $links[0] : $links[0];?>"
                style="font-size: x-large;"><?= empty($titles[4]) ? $titulos[4] : $titles[4];?></a>
            <?= empty($coolers['coolers']) ? $enfriador['enfriador'] : $coolers['coolers'];?></p>
        <div class="container fullbar">
            <div class="rtl"><a rel="example_group" href="https://latinospc.com/images/hardware/hw/cooling/coolers.jpg"
                    title="Chilling Cooler"><img src="https://latinospc.com/images/hardware/hw/cooling/coolers.webp"
                        alt="Chilling Cooler"></a></div>
            <p><span style="font-size: x-large;"><?= empty($titles[5]) ? $titulos[5] : $titles[5];?></span>
                <?= empty($coolers['passiveAndActivePassive']) ? $enfriador['pasivoYActivoPasivo'] : $coolers['passiveAndActivePassive'];?>
            </p>
            <p><span style="font-size: x-large;"><?= empty($titles[18]) ? $titulos[18] : $titles[18];?></span>
                <?= empty($coolers['passiveAndActiveActive']) ? $enfriador['pasivoYActivoActivo'] : $coolers['passiveAndActiveActive'];?>
            </p>
            <p><span style="font-size: x-large;"><?= empty($titles[19]) ? $titulos[19] : $titles[19];?></span>
                <?= empty($coolers['types']) ? $enfriador['tipos'] : $coolers['types'];?></p>
            <p>&nbsp;<a href="<?= empty($links[1]) ? $links[1] : $links[1];?>"
                    title="VIDEO"><?= empty($coolers['air']) ? $enfriador['aire'] : $coolers['air'];?></a>
                <?= empty($coolers['common']) ? $enfriador['comun'] : $coolers['common'];?>
            </p>
            <p>&nbsp;<a href="<?= empty($links[2]) ? $links[2] : $links[2];?>"
                    title="VIDEO"><?= empty($coolers['liquid']) ? $enfriador['liquido'] : $coolers['liquid'];?></a>
                <?= empty($coolers['pump']) ? $enfriador['bomba'] : $coolers['pump'];?></p>
            <p><a href="<?= empty($links[3]) ? $links[3] : $links[3];?>">
                    <?= empty($coolers['thermoelectric']) ? $enfriador['termoelectrico'] : $coolers['thermoelectric'];?></a>
                <?= empty($coolers['peltier']) ? $enfriador['peltier'] : $coolers['peltier'];?></p>
            <p><span style="font-size: x-large;"><?= empty($titles[22]) ? $titulos[22] : $titles[22];?></span>
                <?= empty($coolers['ssc']) ? $enfriador['ees'] : $coolers['ssc'];?></p>
        </div>
        <details>
            <summary style="text-align: center;" class="hero4 cooler_button cooler2_button">
                <h2 id="Laser-Cooling" style="display: inline-block;">
                    <?= empty($titles[17]) ? $titulos[17] : $titles[17];?></h2>
                <?php
                /*<a rel="example_group" href="https://latinospc.com/images/hardware/hw/cooling/lazer.jpg"
                    title="Laser Cooling"><img src="https://latinospc.com/images/hardware/hw/cooling/lazer.webp" alt="Laser Cooling"
                        height="30px" style="transform: translate(175px, 10px);"></a>*/
                        ?>
            </summary>
            <fieldset class="container card2"><a rel="example_group"
                    href="https://latinospc.com/images/hardware/hw/cooling/lasers.jpg" title="Laser Cooling"
                    class="rtl"><img src="https://latinospc.com/images/hardware/hw/cooling/lasers.webp"
                        alt="Laser Cooling" height="120px"width="120px"></a>
                <p>
                    <?= empty($coolers['laserCooling']) ? $enfriador['enfriadorLaser'] : $coolers['laserCooling'];?>
                </p>
                <p>
                <dl>
            </fieldset>
            <fieldset class="container card2">
                <legend>
                    <p><?= empty($titles[6]) ? $titulos[6] : $titles[6];?></p>
                </legend>
                <dt><a href="<?= empty($links[4]) ? $links[4] : $links[4];?>">
                        <?= empty($titles[7]) ? $titulos[7] : $titles[7];?></a>
                </dt>
                <dd><?= empty($coolers['dopplerCooling']) ? $enfriador['enfriadorDoppler'] : $coolers['dopplerCooling'];?>
                </dd>
                <dt><a href="<?= empty($links[5]) ? $links[5] : $links[5];?>">
                        <?= empty($titles[23]) ? $titulos[23] : $titles[23];?></a>
                </dt>
                <dd>
                    <?= empty($coolers['sisyphus']) ? $enfriador['sisyphus'] : $coolers['sisyphus'];?>
                </dd>
                <dt><a href="<?= empty($links[6]) ? $links[6] : $links[6];?>">
                        <?= empty($titles[24]) ? $titulos[24] : $titles[24];?></a></dt>
                <dd>
                    <?= empty($coolers['evaporative']) ? $enfriador['evaporativo'] : $coolers['evaporative'];?>
                </dd>
                <dl>
                    </p>
        </details>
        </fieldset>
        <p class="container card2">
            <?= empty($coolers['laserCoolingSummary']) ? $enfriador['resumenEnfriadorLaser'] : $coolers['laserCoolingSummary'];?>
        </p>
        <!-- (-.-)Zzz...--|c[_]|--☁【ツ】☁--|c[_]|--\(^-^)/--|c[_]|--(╯°□°）╯ ︵ ┻━┻ **`ღ´** Cooling Devices -->
        <br />
    </section>
    <section class="fullbar">
        <details>
            <summary class="cooler_button cooler2_button center">
                <h2><?= empty($titles[8]) ? $titulos[8] : $titles[8];?></h2>
            </summary>
            <ul class="container colms2">
                <li class="card2">
                    <h2 id="fans"><?= empty($titles[9]) ? $titulos[9] : $titles[9];?></h2>
                    <p><?= empty($coolers['airCooling']) ? $enfriador['enfriadoAire'] : $coolers['airCooling'];?></p>
                    <a rel="example_group" href="https://latinospc.com/images/hardware/hw/cooling/aircool.jpg"
                        class="fl" title="Air Cooling"><img
                            src="https://latinospc.com/images/hardware/hw/cooling/aircool.webp" height="100px"
                            alt="Air Cooling"></a>
                    <p><?= empty($coolers['airCooling2']) ? $enfriador['enfriadoAire2'] : $coolers['airCooling2'];?></p>
                </li>
                <li class="card2">
                    <h2 id="liquid-coolers"><?= empty($titles[10]) ? $titulos[10] : $titles[10];?></h2>
                    <p><?= empty($coolers['liquidCooling']) ? $enfriador['enfriadoLiquido'] : $coolers['liquidCooling'];?>
                    </p>
                    <a rel="example_group" href="https://latinospc.com/images/hardware/hw/cooling/liquid.jpg" class="fl"
                        title="Liquid Cooling"><img src="https://latinospc.com/images/hardware/hw/cooling/liquid.webp"
                            height="100px" alt="Liquid Cooling"></a>
                    <p><?= empty($coolers['liquidCooling2']) ? $enfriador['enfriadoLiquido2'] : $coolers['liquidCooling2'];?>
                    </p>
                </li>
                <li class="card2">
                    <h2 id="solid-state-coolers"><?= empty($titles[11]) ? $titulos[11] : $titles[11];?></h2>
                    <p><?= empty($coolers['solidStateCooling']) ? $enfriador['enfriadoEstadoSolido'] : $coolers['solidStateCooling'];?>
                    </p>
                    <a rel="example_group" href="https://latinospc.com/images/hardware/hw/cooling/ssc.jpg" class="fl"
                        title="Solid-State Cooling"><img src="https://latinospc.com/images/hardware/hw/cooling/ssc.webp"
                            height="100px" alt="Solid-State Cooling"></a>
                    <p><?= empty($coolers['solidStateCooling2']) ? $enfriador['enfriadoEstadoSolido2'] : $coolers['solidStateCooling2'];?>
                    </p>
                </li>
                <li class="card2">
                    <h2 id="TECS"><?= empty($titles[12]) ? $titulos[12] : $titles[12];?></h2>
                    <p><?= empty($coolers['tec'][0]) ? $enfriador['tec'][0] : $coolers['tec'][0];?>
                        <a href="<?= empty($links[7]) ? $links[7] : $links[7];?>">
                            <?= empty($coolers['tec'][1]) ? $enfriador['tec'][1] : $coolers['tec'][1];?></a>
                        <?= empty($coolers['tec'][2]) ? $enfriador['tec'][2] : $coolers['tec'][2];?>
                    </p>
                    <a rel="example_group" href="https://latinospc.com/images/hardware/hw/cooling/tec.jpg" class="rtl"
                        title="Thermoelectric Coolers"><img
                            src="https://latinospc.com/images/hardware/hw/cooling/tec.webp" height="100px"
                            alt="TECs"></a>
                    <p><?= empty($coolers['tec'][3]) ? $enfriador['tec'][3] : $coolers['tec'][3];?></p>
                </li>
                <li class="card2">
                    <h2 id="hybrid-coolers"><?= empty($titles[13]) ? $titulos[13] : $titles[13];?></h2>
                    <p><?= empty($coolers['hybrid'][0]) ? $enfriador['hibrido'][0] : $coolers['hybrid'][0];?></p>
                    <a rel="example_group" href="https://latinospc.com/images/hardware/hw/cooling/hybrid.jpg"
                        class="rtl" title="Hybrid Cooling"><img
                            src="https://latinospc.com/images/hardware/hw/cooling/hybrid.webp" height="100px"
                            alt="Hybrid Cooling"></a>
                    <p><?= empty($coolers['hybrid'][1]) ? $enfriador['hibrido'][1] : $coolers['hybrid'][1];?></p>
                </li>
                <li class="card2">
                    <h2 id="phase-change-cooling"><?= empty($titles[14]) ? $titulos[14] : $titles[14];?></h2>
                    <p><?= empty($coolers['pcc'][0]) ? $enfriador['pcc'][0] : $coolers['pcc'][0];?></p>
                    <a rel="example_group" href="https://latinospc.com/images/hardware/hw/cooling/pcc.jpg" class="rtl"
                        title="Phase Change Cooling"><img
                            src="https://latinospc.com/images/hardware/hw/cooling/pcc.webp" height="100px"
                            alt="Phase Change Cooling"></a>
                    <p><?= empty($coolers['pcc'][1]) ? $enfriador['pcc'][1] : $coolers['pcc'][1];?></p>
                </li>
            </ul>
        </details>
        <dl>
            <dt>
                <h2><?= empty($titles[25]) ? $titulos[25] : $titles[25];?></h2>
            <dt>
                <p>
            <dd><strong><?= empty($titles[26]) ? $titulos[26] : $titles[26];?></strong>
                <?= empty($coolers['factors'][0]) ? $enfriador['factores'][0] : $coolers['factors'][0];?>
                <hr>
            </dd>
            <dd><strong><?= empty($titles[27]) ? $titulos[27] : $titles[27];?></strong>
                <?= empty($coolers['factors'][1]) ? $enfriador['factores'][1] : $coolers['factors'][1];?>
                <hr>
            </dd>
            <dd><strong><?= empty($titles[28]) ? $titulos[28] : $titles[28];?></strong>
                <?= empty($coolers['factors'][2]) ? $enfriador['factores'][2] : $coolers['factors'][2];?></dd>
            </p>
            <dt>
                <h2><?= empty($titles[15]) ? $titulos[15] : $titles[15];?></h2>
            </dt>
            <p>
                <dd><?= empty($coolers['factors'][3]) ? $enfriador['factores'][3] : $coolers['factors'][3];?>
                </dd>
                <dd><?= empty($coolers['factors'][4]) ? $enfriador['factores'][4] : $coolers['factors'][4];?></dd>
            </p>
        </dl>
        <h2><?= empty($titles[16]) ? $titulos[16] : $titles[16];?></h2>
        <p><?= empty($coolers['factors'][5]) ? $enfriador['factores'][5] : $coolers['factors'][5];?></p>
    </section>
    </article>
