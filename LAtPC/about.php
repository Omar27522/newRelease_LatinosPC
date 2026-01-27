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
  <p>
    Started his career early in life, his childhood home was a family business run \"from home\" acrylic fiber fabric manufacturer. Anecdotes tell of him playing with the weaving and sewing machines pretending he was servicing them and caring for them. Time passed, technology improved around his neighborhood, and Omar found curiosity for the electronic components in the textile shop.
  </p>
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
LAtinosPC founded in 2021, initially as a sole proprietor the site has been live since 2017. The founder Omar has gone through a lot of changes in the business. And the goal for this company is simple, reachable and profitable.


<ul>
<h3>1.1 Objectives</h3>
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
include './anvil/structure.php';


?>