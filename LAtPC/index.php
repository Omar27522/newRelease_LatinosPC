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
</head>
<style>
:root {
  --primary-color: #0275d8;
  --primary-dark: #025aa5;
  --secondary-color: #5cb85c;
  --secondary-dark: #449d44;
  --text-color: #333;
  --light-text: #666;
  --background: #f8f9fa;
  --card-bg: #ffffff;
  --border-radius: 10px;
  --box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
  --transition: all 0.3s ease;
}

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: 'Poppins', sans-serif;
  line-height: 1.6;
  color: var(--text-color);
  background-color: var(--background);
  padding-top: 20px;
}

header {
  text-align: center;
  padding: 2rem 1rem;
  max-width: 1200px;
  margin: 0 auto;
  position: relative;
}

header h1 {
  font-size: 2.5rem;
  margin-bottom: 0.5rem;
  color: var(--primary-color);
  font-weight: 700;
}

header p {
  font-size: 1.1rem;
  color: var(--light-text);
  margin-bottom: 1.5rem;
}

.language-toggle {
  display: inline-block;
  padding: 0.5rem 1.2rem;
  background-color: var(--secondary-color);
  color: white;
  text-decoration: none;
  border-radius: 30px;
  font-weight: 500;
  text-align: center;
  transition: var(--transition);
  cursor: pointer;
  font-size: 0.9rem;
}

.language-toggle:hover {
  background-color: var(--secondary-dark);
  transform: translateY(-2px);
}

.intro {
  text-align: center;
  padding: 1rem 2rem 3rem;
  max-width: 800px;
  margin: 0 auto;
}

.intro h2 {
  font-size: 1.8rem;
  margin-bottom: 1rem;
  color: var(--primary-color);
}

.intro p {
  font-size: 1.1rem;
  color: var(--light-text);
}

.homepage-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  gap: 1.8rem;
  max-width: 1200px;
  margin: 0 auto;
  padding: 1rem 2rem 3rem;
}

.grid-item {
  background-color: var(--card-bg);
  border-radius: var(--border-radius);
  padding: 1.8rem;
  box-shadow: var(--box-shadow);
  transition: var(--transition);
  display: flex;
  flex-direction: column;
  border: 1px solid rgba(0, 0, 0, 0.05);
  height: 100%;
}

.grid-item:hover {
  transform: translateY(-5px);
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.12);
}

.grid-item h3 {
  margin-top: 0;
  margin-bottom: 1rem;
  color: var(--primary-color);
  font-size: 1.4rem;
  font-weight: 600;
  position: relative;
  padding-bottom: 0.5rem;
}

.grid-item h3::after {
  content: '';
  position: absolute;
  bottom: 0;
  left: 0;
  width: 40px;
  height: 3px;
  background-color: var(--primary-color);
  border-radius: 3px;
}

.grid-item p {
  color: var(--light-text);
  flex-grow: 1;
  margin-bottom: 1.2rem;
}

.grid-item aside {
  margin-top: auto;
}

.cta-button {
  display: inline-block;
  padding: 0.6rem 1.2rem;
  background-color: var(--primary-color);
  color: white;
  text-decoration: none;
  border-radius: 6px;
  font-weight: 500;
  text-align: center;
  transition: var(--transition);
  margin-bottom: 0.5rem;
  margin-right: 0.5rem;
  border: none;
  cursor: pointer;
  font-size: 0.9rem;
}

.cta-button:hover {
  background-color: var(--primary-dark);
  transform: translateY(-2px);
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

footer {
  text-align: center;
  padding: 2rem;
  background-color: var(--primary-color);
  color: white;
  margin-top: 2rem;
}

footer p {
  max-width: 1200px;
  margin: 0 auto;
}

/* Responsive adjustments */
@media (max-width: 900px) {
  .homepage-grid {
    grid-template-columns: repeat(2, 1fr);
  }
}

@media (max-width: 600px) {
  .homepage-grid {
    grid-template-columns: 1fr;
    padding: 1rem;
  }

  header, .intro {
    padding: 1.5rem 1rem;
  }

  header h1 {
    font-size: 2rem;
  }
}
</style>
<body>
<header>
  <h1>LatinosPC</h1>
  <p>Your local tech support and computer services in Pomona, CA</p>
  <div class="language-toggle">English / Español</div>
</header>

<main>
  <section class="intro">
    <h2>🌐 Welcome to LatinosPC</h2>
    <p>Your local hub for reliable tech support and computer services in Pomona, CA.</p>
  </section>


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
      <p>we want to bring families and individuals, the experience of a fully working computer system; laptops and desktops.</p>
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
