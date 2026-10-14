<?php
include_once dirname(__DIR__) . '/handlers/databaseConnection.php';
databaseConnection('hardware');
global $content, $key;
?>
<?php include_once('navBarHW.php'); ?>
<?php
    ?>
    <article class="article fullbar"><a href="./#peripherals">
        <h1 id="portable"><?= $content[4180][$key] ?? ''; ?></h1>
    </a>
    <!--☁【ツ】☁--┻━┻ **`ღ´**☁ Portable Memory ☁☁【ツ】☁--┻━┻ **`ღ´**-->
    <h3 class="container fullbar"><a href="https://csrc.nist.gov/glossary/term/portable_storage_device"><?= $content[4181][$key] ?? ''; ?></a> <?= $content[4182][$key] ?? ''; ?> <a href="./storage.php#ssd"><?= $content[4183][$key] ?? ''; ?></a><?= $content[4184][$key] ?? ''; ?> <a
            href="https://www.enablingusb.org/"><?= $content[4185][$key] ?? ''; ?></a> <?= $content[4186][$key] ?? ''; ?></h3>
    <div class="carousel-group fl" style="margin:4px 16px 4px 0;">
        <div class="multi-link-container">
            <div class="thumbnail-container">
                <span tabindex="0" class="linked-text-img" role="button" aria-label="Portable Hard Disk Drive">
                    <img src="../images/hardware/hw/p_memory/portablehdd_thumb.webp"
                         alt="90's portable drive"
                         title="Portable Hard Disk Drive"
                         loading="lazy" />
                </span>
            </div>
            <div class="image-dialog" data-carousel="true" data-start-index="0"></div>
        </div>
    </div>
    <div class="container fullbar">
        <h3><?= $content[4187][$key] ?? ''; ?> <a
                href="https://www.dpbestflow.org/data-storage-hardware/hard-drive-101#capacity"><?= $content[4188][$key] ?? ''; ?></a> <?= $content[4189][$key] ?? ''; ?><a
                href="https://www.youtube.com/watch?v=NsAhC4UuTXs"
                title="What's the Largest Possible File Size? | Techquickie | Sep 22, 2017"><?= $content[4190][$key] ?? ''; ?></a> <?= $content[4191][$key] ?? ''; ?> <a
                href="https://www.ionos.com/digitalguide/websites/web-development/what-is-a-terabyte/"><?= $content[4192][$key] ?? ''; ?></a>.</h3>
        <h3><?= $content[4193][$key] ?? ''; ?> <a href="https://en.wikipedia.org/wiki/Disk_enclosure"><?= $content[4194][$key] ?? ''; ?></a><?= $content[4195][$key] ?? ''; ?> <br /><span style="font-size: large;"><?= $content[4196][$key] ?? ''; ?></span><?= $content[4197][$key] ?? ''; ?> <a
                href="https://www.pcmag.com/picks/the-best-rugged-hard-drives-and-ssds"><?= $content[4198][$key] ?? ''; ?></a><?= $content[4199][$key] ?? ''; ?><br /><a
                href="https://exascend.com/technologies/mil-std-810/" style="font-size: large;"><?= $content[4200][$key] ?? ''; ?></a><?= $content[4201][$key] ?? ''; ?></h3>
    </div>
    <div class="container fullbar">
        <div class="carousel-group rtl" style="margin:4px 4px 16px 0;">
            <div class="multi-link-container">
                <div class="thumbnail-container">
                    <span tabindex="0" class="linked-text-img" role="button" aria-label="Portable Solid State Drive">
                        <img src="../images/hardware/hw/p_memory/ssd_thumb.webp"
                             alt="SSD"
                             title="Portable Solid State Drive"
                             loading="lazy" />
                    </span>
                </div>
                <div class="image-dialog" data-carousel="true" data-start-index="1"></div>
            </div>
        </div>
        <h3><span style="font-size: large;"><?= $content[4202][$key] ?? ''; ?></span> <?= $content[4203][$key] ?? ''; ?> <a href="https://tripplite.eaton.com/products/usb-connectivity-types-standards"><?= $content[4204][$key] ?? ''; ?></a> <?= $content[4205][$key] ?? ''; ?>
            <div class="spacer" style="margin-bottom:30px ;"></div>
        </h3>
    </div>
    <div class="container fullbar">
        <div class="carousel-group fl" style="margin:4px 16px 4px 0;">
            <div class="multi-link-container">
                <div class="thumbnail-container">
                    <span tabindex="0" class="linked-text-img" role="button" aria-label="USB Powered Memory Drives">
                        <img src="../images/hardware/hw/p_memory/usb_thumb.webp"
                             height="130px"
                             alt="USB Powered Memory Drives"
                             title="USB Powered Memory Drives"
                             loading="lazy" />
                    </span>
                </div>
                <div class="image-dialog" data-carousel="true" data-start-index="2"></div>
            </div>
        </div>
        <h3><span style="font-size: large;"><?= $content[4206][$key] ?? ''; ?></span><?= $content[4207][$key] ?? ''; ?> <a
            href="https://www.omnicharge.co/blogs/blog/what-is-usb-power-and-how-does-it-work-exactly"><?= $content[4208][$key] ?? ''; ?></a> <?= $content[4209][$key] ?? ''; ?></h3>
    </div>
    <!--☁【ツ】☁--┻━┻ **`ღ´**☁ Memory Cards ☁【ツ】☁--┻━┻ **`ღ´**-->
    <section class="container fullbar">
        <details>
            <summary class="tnk">
                <h2><?= $content[4210][$key] ?? ''; ?></h2>
            </summary>
            <h3><?= $content[4211][$key] ?? ''; ?> <a
                    href="https://en.wikipedia.org/wiki/SD_card"><?= $content[4212][$key] ?? ''; ?></a>, <a
                    href="https://www.sdcard.org/press/thoughtleadership/anatomy-of-an-sd-memory-card-what-matters-most-for-photography-and-videography/"><?= $content[4213][$key] ?? ''; ?></a>,
                <a href="https://compactflash.org/industry-standards/"><?= $content[4214][$key] ?? ''; ?></a><?= $content[4215][$key] ?? ''; ?></h3>
            <h2><?= $content[4216][$key] ?? ''; ?></h2>
            <ul>
                <h3>
                    <li><strong><?= $content[4217][$key] ?? ''; ?></strong> <?= $content[4218][$key] ?? ''; ?></li>
                    <div class="carousel-group rtl" style="margin:4px 4px 16px 0;">
                        <div class="multi-link-container">
                            <div class="thumbnail-container">
                                <span tabindex="0" class="linked-text-img" role="button" aria-label="Memory Card">
                                    <img src="../images/hardware/hw/p_memory/memory_thumb.webp"
                                         alt="Memory Card"
                                         title="Memory Card"
                                         loading="lazy" />
                                </span>
                            </div>
                            <div class="image-dialog" data-carousel="true" data-start-index="3"></div>
                        </div>
                    </div>
                    <li><strong><?= $content[4219][$key] ?? ''; ?></strong> <?= $content[4220][$key] ?? ''; ?><a
                            href="https://www.sdcard.org/developers/sd-standard-overview/capacity-sd-sdhc-sdxc-sduc/"><?= $content[4221][$key] ?? ''; ?></a><?= $content[4222][$key] ?? ''; ?></li>
                    <li><strong><?= $content[4223][$key] ?? ''; ?></strong> <a
                            href="https://colesclassroom.com/how-long-do-micro-sd-cards-last/"><?= $content[4224][$key] ?? ''; ?></a> <?= $content[4225][$key] ?? ''; ?>
                    </li>
                    <li><strong><?= $content[4226][$key] ?? ''; ?></strong> <?= $content[4227][$key] ?? ''; ?> <a
                            href="https://en.wikipedia.org/wiki/Memory_card#Overview_of_all_memory_card_types"><?= $content[4228][$key] ?? ''; ?></a><?= $content[4229][$key] ?? ''; ?></li>
                    <li><strong><?= $content[4230][$key] ?? ''; ?></strong> <?= $content[4231][$key] ?? ''; ?> <a
                            href="https://www.sdcard.org/press/thoughtleadership/sd-express-memory-cards-when-ultra-high-performance-matters-2/"><?= $content[4232][$key] ?? ''; ?></a> <?= $content[4233][$key] ?? ''; ?></li>
                </h3>
            </ul>
            <h2><?= $content[4234][$key] ?? ''; ?></h2>
            <ul>
                <h3>
                    <li><?= $content[4235][$key] ?? ''; ?></li>
                    <li><?= $content[4236][$key] ?? ''; ?></li>
                    <li><?= $content[4237][$key] ?? ''; ?></li>
                    <li><?= $content[4238][$key] ?? ''; ?></li>
                </h3>
            </ul>
        </details>
    </section>
    <!--☁【ツ】☁--┻━┻ **`ღ´**☁ USB Sticks ☁【ツ】☁--┻━┻ **`ღ´**-->
    <section class="container fullbar">
        <details>
            <summary class="tnk">
                <h2><?= $content[4239][$key] ?? ''; ?></h2>
            </summary>
            <h3><a href="https://www.britannica.com/technology/USB-flash-drive"><?= $content[4240][$key] ?? ''; ?></a><?= $content[4241][$key] ?? ''; ?> <a
                    href="https://en.wikipedia.org/wiki/USB_flash_drive"><?= $content[4242][$key] ?? ''; ?></a><?= $content[4243][$key] ?? ''; ?> <a
                    href="https://en.wikipedia.org/wiki/USB_hardware#Connectors"><?= $content[4244][$key] ?? ''; ?></a><?= $content[4245][$key] ?? ''; ?></h3>
            <h2 style="text-align: right;"><?= $content[4246][$key] ?? ''; ?></h2>
            <div class="carousel-group fl" style="margin:4px 30px 4px 4px;">
                <div class="multi-link-container">
                    <div class="thumbnail-container">
                        <span tabindex="0" class="linked-text-img" role="button" aria-label="USB Flash Drive">
                            <img src="../images/hardware/hw/p_memory/usb_stick_thumb.webp"
                                 alt="USB Flash Drive"
                                 title="USB Flash Drive"
                                 loading="lazy" />
                        </span>
                    </div>
                    <div class="image-dialog" data-carousel="true" data-start-index="4"></div>
                </div>
            </div>
            <ul>
                <h3>
                    <li class="card2"><strong><?= $content[4247][$key] ?? ''; ?></strong> <a
                            href="https://www.tomshardware.com/best-picks/best-flash-drives"><?= $content[4248][$key] ?? ''; ?></a> <?= $content[4249][$key] ?? ''; ?></li>
                    <li class="card2"><strong><?= $content[4250][$key] ?? ''; ?></strong> <?= $content[4251][$key] ?? ''; ?> <a
                            href="https://en.wikipedia.org/wiki/Plug_and_play"><?= $content[4252][$key] ?? ''; ?></a><?= $content[4253][$key] ?? ''; ?></li>
                    <li class="card2"><strong><?= $content[4254][$key] ?? ''; ?></strong> <?= $content[4255][$key] ?? ''; ?></li>
                    <li><strong><?= $content[4256][$key] ?? ''; ?></strong> <?= $content[4257][$key] ?? ''; ?></li>
                    <li><strong><?= $content[4258][$key] ?? ''; ?></strong> <?= $content[4259][$key] ?? ''; ?> <a
                            href="https://www.techradar.com/news/best-secure-drives"><?= $content[4260][$key] ?? ''; ?></a> <?= $content[4261][$key] ?? ''; ?></li>
                </h3>
            </ul>
            <h2><?= $content[4262][$key] ?? ''; ?></h2>
            <ul>
                <h3>
                    <li><?= $content[4263][$key] ?? ''; ?></li>
                    <li><?= $content[4264][$key] ?? ''; ?></li>
                    <li><?= $content[4265][$key] ?? ''; ?></li>
                    <li><?= $content[4266][$key] ?? ''; ?></li>
                    <li><?= $content[4267][$key] ?? ''; ?></li>
                </h3>
            </ul>
        </details>
    </section>
    <!--☁【ツ】☁--┻━┻ **`ღ´**☁ Who benefits from Portable Data? ☁【ツ】☁--┻━┻ **`ღ´**-->
    <section class="portable container">
        <details>
            <summary class="tnk">
                <h2><?= $content[4268][$key] ?? ''; ?></h2>
            </summary>
            <h3><a href="https://expertphotography.com/best-way-to-store-photos/"><?= $content[4269][$key] ?? ''; ?></a> <?= $content[4270][$key] ?? ''; ?></h3>
            <h3><a href="https://steamcommunity.com/discussions/forum/11/3203744999872598557/?l=koreana"><?= $content[4271][$key] ?? ''; ?></a> <?= $content[4272][$key] ?? ''; ?></h3>
            <h3><a href="#"><?= $content[4273][$key] ?? ''; ?></a> <?= $content[4274][$key] ?? ''; ?></h3>
            <h3><a href="#"><?= $content[4275][$key] ?? ''; ?></a> <?= $content[4276][$key] ?? ''; ?></h3>
            <h3><a href="#"><?= $content[4277][$key] ?? ''; ?></a> <?= $content[4278][$key] ?? ''; ?></h3>
            <h3><a href="#"><?= $content[4279][$key] ?? ''; ?></a> <?= $content[4280][$key] ?? ''; ?></h3>
            <h3><a href="#"><?= $content[4281][$key] ?? ''; ?></a> <?= $content[4282][$key] ?? ''; ?></h3>
            <h3><a href="#"><?= $content[4283][$key] ?? ''; ?></a> <?= $content[4284][$key] ?? ''; ?></h3>
            <h3><a href="#"><?= $content[4285][$key] ?? ''; ?></a> <?= $content[4286][$key] ?? ''; ?>
            </h3>
            <h3><a
                    href="https://www.nexcopy.com/usb-secure-flash-drives/hipaa-compliant-usb-flash-drive/#:~:text=HIPAA%20compliant%20USB%20flash%20drives%20provide%20an%20unmatched%20level%20of,the%20HIPAA%20compliant%20flash%20drive."><?= $content[4287][$key] ?? ''; ?></a> <?= $content[4288][$key] ?? ''; ?></h3>
            <h3><a href="#"><?= $content[4289][$key] ?? ''; ?></a> <?= $content[4290][$key] ?? ''; ?></h3>
            <h3><a href="#"><?= $content[4291][$key] ?? ''; ?></a> <?= $content[4292][$key] ?? ''; ?></h3>
            <h3><a href="https://www.pcmag.com/picks/the-best-rugged-hard-drives-and-ssds"><?= $content[4293][$key] ?? ''; ?></a> <?= $content[4294][$key] ?? ''; ?></h3>
            <h3><a href="#"><?= $content[4295][$key] ?? ''; ?></a> <?= $content[4296][$key] ?? ''; ?></h3>
            <h3><a href="#"><?= $content[4297][$key] ?? ''; ?></a> <?= $content[4298][$key] ?? ''; ?></h3>
            <h3><a href="#"><?= $content[4299][$key] ?? ''; ?></a> <?= $content[4300][$key] ?? ''; ?></h3>
            <h3><a href="#"><?= $content[4301][$key] ?? ''; ?></a> <?= $content[4302][$key] ?? ''; ?></h3>
            <h3><a href="#"><?= $content[4303][$key] ?? ''; ?></a> <?= $content[4304][$key] ?? ''; ?></h3>
            <h3><a href="#"><?= $content[4305][$key] ?? ''; ?></a> <?= $content[4306][$key] ?? ''; ?></h3>
            <h3><a href="https://www.kiteworks.com/hipaa-compliance/hipaa-compliance-requirements/"><?= $content[4307][$key] ?? ''; ?></a> <?= $content[4308][$key] ?? ''; ?></h3>
            <h3><a href="#"><?= $content[4309][$key] ?? ''; ?></a> <?= $content[4310][$key] ?? ''; ?></h3>
            <h3><a href="#"><?= $content[4311][$key] ?? ''; ?></a> <?= $content[4312][$key] ?? ''; ?></h3>
            <h3><a href="https://www.vikingtechnology.com/military-memory-storage-solutions/"><?= $content[4313][$key] ?? ''; ?></a> <?= $content[4314][$key] ?? ''; ?></h3>
            <h3><a href="#"><?= $content[4315][$key] ?? ''; ?></a> <?= $content[4316][$key] ?? ''; ?></h3>
            <h3><a href="#"><?= $content[4317][$key] ?? ''; ?></a> <?= $content[4318][$key] ?? ''; ?></h3>
        </details>
    </section>
    </article>

    <!-- Carousel Modal Data Template -->
    <template id="carousel-images">
        <?php
        $carouselItems = [
            [
                'original' => '../images/hardware/hw/p_memory/portablehdd.jpg',
                'webp'     => '../images/hardware/hw/p_memory/portablehdd.webp',
                'title'    => 'Portable Hard Disk Drive',
                'link'     => 'https://en.wikipedia.org/wiki/External_hard_drive'
            ],
            [
                'original' => '../images/hardware/hw/p_memory/ssd.jpg',
                'webp'     => '../images/hardware/hw/p_memory/ssd.webp',
                'title'    => 'Portable Solid State Drive',
                'link'     => 'https://tripplite.eaton.com/products/usb-connectivity-types-standards'
            ],
            [
                'original' => '../images/hardware/hw/p_memory/usb.jpg',
                'webp'     => '../images/hardware/hw/p_memory/usb.webp',
                'title'    => 'USB Powered Memory Drives',
                'link'     => 'https://www.omnicharge.co/blogs/blog/what-is-usb-power-and-how-does-it-work-exactly'
            ],
            [
                'original' => '../images/hardware/hw/p_memory/memory.jpg',
                'webp'     => '../images/hardware/hw/p_memory/memory.webp',
                'title'    => 'Memory Card (SD/MicroSD)',
                'link'     => 'https://en.wikipedia.org/wiki/SD_card'
            ],
            [
                'original' => '../images/hardware/hw/p_memory/usb_stick.jpg',
                'webp'     => '../images/hardware/hw/p_memory/usb_stick.webp',
                'title'    => 'USB Flash Drive',
                'link'     => 'https://en.wikipedia.org/wiki/USB_flash_drive'
            ]
        ];

        foreach($carouselItems as $index => $item):
        ?>
        <div class="carousel-item" data-image-index="<?= $index; ?>">
            <a href="<?= $item['original']; ?>" target="_blank" rel="noopener">
                <img data-src="<?= $item['webp']; ?>"
                     src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1 1'%3E%3C/svg%3E"
                     alt="<?= htmlspecialchars($item['title']); ?>">
            </a>
            <h4 class="img_link">
                <a href="<?= htmlspecialchars($item['link']); ?>" title="<?= htmlspecialchars($item['title']); ?>" target="_blank" rel="noopener">
                    <?= htmlspecialchars($item['title']); ?>
                </a>
            </h4>
        </div>
        <?php endforeach; ?>
    </template>
