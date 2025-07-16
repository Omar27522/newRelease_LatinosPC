<!-- # 🌐 LatinosPC Homepage Overview

Welcome to LatinosPC — your local hub for reliable tech support and computer services in Pomona, CA. Use the interactive sections below to quickly find what you need.

---

## 🧭 Homepage Navigation Grid

| 🔧 **Tech Support** | 🖥️ **Custom Builds** | 💡 **DIY Tips & Articles** |
|--------------------|----------------------|-----------------------------|
| Book repairs, diagnostics, virus removal | Browse builds: gaming, home lab, workstation | Learn how to fix screens, clean your PC, test components |

| 🧑‍🏫 **Computer Classes** | 📦 **Recommended Products** | 📞 **Contact & Remote Help** |
|--------------------------|-----------------------------|------------------------------|
| Sign up for beginner & intermediate lessons | View trusted hardware & accessories | Quick-call, email, or remote session access |

| 🧍‍♂️ **About Us** | 🗣️ **Bilingual Support** | 🏡 **Service Areas** |
|------------------|-------------------------|---------------------|
| Our story, team, and credentials | English / Español toggle or info section | Pomona & surrounding SoCal regions listed with a map |

---


## 🎨 Design Tips for Implementation

- **Responsive Grid Layout:** Use CSS grid or flexbox to ensure mobile friendliness
- **Hover Effects:** Add interactivity with hover transitions or background highlights
- **Iconography:** Use icons or emojis to make each tile visually distinct
- **Calls-to-Action (CTAs):** Add short actions like “Book Now,” “Learn More,” “View Builds”
- **Language Toggle:** Offer language selection clearly in the nav or hero section

---

## ✨ Suggested Technologies

- HTML/CSS for layout and styling
- Optional: JavaScript for dynamic tooltips or hover effects
- FontAwesome or similar library for icons

---

Built with user guidance and clarity in mind — because your time and tech matter.
-->



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LatinosPC - Tech Support & Computer Services in Pomona, CA</title>
    <link rel="stylesheet" href="mainStyle.css">
    <link rel="stylesheet" href="homepage.css">
    <link rel="stylesheet" href="terwanpop.css">
    <link rel="stylesheet" href="logo.css">
</head>

<body>
    <header>
        <!-- <span class="crumbs">
                <?php #$page->getCrumbs(); ?>
                <hr>
            </span> -->
        <a href="#" class="phone">
            909-276-7214
        </a>
        <div class="logo">
            <div class="logos"><span>LA</span>tinos<span>PC</span>.com
                <small class="rtl">
                    PC is for Personal Computer
                </small>
            </div>
        </div>
        <nav class="sticky">
            <!--    TerwanPOP    -->
            <div role="navigation" class="burg">
                <div id="menuToggle"><input type="checkbox" />
                    <span></span><span></span><span></span>

                    <ul id="menu">
                        <li class="titleli">Our Lord and Savior Jesus Christ</li>
                        <a href="https://www.vatican.va/roman_curia/pontifical_councils/interelg/documents/rc_pc_interelg_doc_20030203_new-age_en.html"
                            target="_blank" alt="Jesus">
                            <img src="https://latinospc.com/images/artificialintelligence/our_lord_and_savior_jesus_christ/lamb9.webp"
                                width="100%" height="auto">
                        </a>
                        <a href="#">
                            <li>Heavenly Father Tell me about the Web</li>
                        </a><a href="#">
                            <!-- https://bibilium.com/38-parables-of-Jesus-parables-of-Jesus/ -->
                            <li>Parables</li>
                        </a><a href="#">
                            <li>Sermons/Discourses</li>
                        </a><a href="#">
                            <li>The Apostles</li>
                        </a><a href="#">
                            <li>His Teachings</li>
                        </a><a href="#">
                            <li>Computer Backup</li>
                        </a><a href="#">
                            <li>Hardware/Parts</li>
                        </a><a href="#">
                            <li>Software/Programs</li>
                        </a><a href="#">
                            <li>Websites</li>
                        </a><a href="#">
                            <li>Security</li>
                        </a><a href="#">
                            <li>Best Practices</li>
                        </a><a href="#">
                            <li>Passwords</li>
                        </a><a href="#">
                            <li>Gallery</li>
                        </a>
                    </ul>
                </div>
            </div>
            <div class="navButtons">
                <!--    TerwanPOP Made by Erik Terwan    -->
                <button><a href="#">Home</a></button>
                <button><a href="#">Español</a></button>
                <button><a href="#">Services</a></button>
                <button><a href="#">Contact Us</a></button>
                <button><a href="#">Reviews</a></button>
            </div>
        </nav>
    </header>

    <main>

        <section class="homepage-grid">
            <div class="grid-item">
                <h3>Jesus Christ</h3>
                <a href="#" class="cta-button">Tell me about the web</a>
                <a href="#" class="cta-button">Apostles</a>
                <a href="#" class="cta-button">Parables</a>
                <a href="#" class="cta-button">Sermons</a>
                <a href="#" class="cta-button">Teachings</a>
            </div>

            <div class="grid-item">
                <h3>About Us</h3>
                <p>we want to bring families and individuals, the experience of a fully working computer system; laptops
                    and desktops.</p>
                <p>100% Satisfaction Guarantee | 90 Days Service Package -included</p>
                <p>We are located in the city of Pomona, and will travel to LA county, SB county, RV county and OC.</p>
                <a href="#" class="cta-button">Visit Page</a>
            </div>

            <div class="grid-item">
                <h3>Services</h3>
                <a href="#" class="cta-button">Cleanups</a>
                <a href="#" class="cta-button">Computer protection</a>
                <a href="#" class="cta-button">Consultations</a>
                <a href="#" class="cta-button">Managed Services</a>
                <a href="#" class="cta-button">Remote Support</a>
                <a href="#" class="cta-button">Websites</a>
            </div>

            <div class="grid-item">
                <h3>Security</h3>
                <a href="#" class="cta-button">Backups</a>
                <a href="#" class="cta-button">Passwords</a>
                <a href="#" class="cta-button">Best Practices</a>
                <aside>
                    <hr>
                    <h3>Tutorials / Blog</h3>
                    <p>Visit our tutorials and blog page for more information</p>
                    <a href="#" class="cta-button">Visit Page</a>
                </aside>
            </div>

            <div class="grid-item">
                <h3>Hardware</h3>
                <a href="#" class="cta-button">CPU</a>
                <a href="#" class="cta-button">Storage</a>
                <a href="#" class="cta-button">Power Supply Unit</a>
                <a href="#" class="cta-button">Input</a>
                <a href="#" class="cta-button">Output</a>
                <a href="#" class="cta-button">Parts</a>

                <aside>
                    <hr>
                    <div>
                        <h3>Peripherals and Gear</h3>
                        <p>Visit our computer peripherals and gear page for more information</p>
                        <a href="#" class="cta-button">Visit Page</a>
                    </div>
                </aside>
            </div>

            <div class="grid-item">
                <h3>Software</h3>
                <a href="#" class="cta-button">Anti-Virus</a>
                <a href="#" class="cta-button">Malware Cleaner</a>
                <a href="#" class="cta-button">Web Browsers</a>
                <a href="#" class="cta-button">Messaging</a>
                <a href="#" class="cta-button">Media</a>
                <a href="#" class="cta-button">Runtimes</a>
                <a href="#" class="cta-button">Imaging</a>
                <a href="#" class="cta-button">Documents</a>
                <a href="#" class="cta-button">File Sharing</a>
                <a href="#" class="cta-button">Online Storage</a>
                <a href="#" class="cta-button">Other</a>
                <a href="#" class="cta-button">Utilities</a>
                <a href="#" class="cta-button">Compression</a>
                <a href="#" class="cta-button">Developer Tools</a>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 LatinosPC - Your Trusted Tech Partner in Pomona, CA</p>
    </footer>

</body>

</html>