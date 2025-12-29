<?php
function tutorials (){
    ?>
  <style>
      h1 {
        font-size: 24px;
        margin-bottom: 10px;
      }
      h2 {
        font-size: 20px;
        margin-bottom: 8px;
      }
      p {
        margin-bottom: 16px;
      }
      a {
        color: blue;
        text-decoration: underline;
      }
      img {
        max-width: 100%;
        height: auto;
      }
  	p{
      font-size: 18px;
  }
    </style>

  <section class="fullbar">
    <h1>HP All-in-One | PC Troubleshooting Guide</h1>
    <p>This is the computer I am working on: <a href="https://support.hp.com/us-en/document/c07893101" target="_blank">HP 24-df1224</a>.</p>
    <a rel="example_group" href="https://latinospc.com/tutorials/tutorial/stock.jpg" title="HP 24-df1224"><img src="https://latinospc.com/tutorials/tutorial/stock.webp" alt="HP 24-df1224" title="HP 24-df1224" class="fl"></a>
    <p>I needed to clean this computer. Since the drive was encrypted with Bitlocker, and I did not have the key.</p>
    <p>During the Windows installation, the drive was not recognized by the installer.
      <br />The drive showed up fine in the BIOS. I tried cleaning the drive with another bootable hard drive software, but the same thing happened; the drive was unrecognized by the software.</p>
    <p>After a bit of research, the solution is online, but it was not as straightforward as I would&#39;ve hoped. Here is the <a href="https://h30434.www3.hp.com/t5/Notebook-Hardware-and-Upgrade-Questions/When-installing-Windows-does-not-see-the-SSD-but-BIOS/td-p/7916709" target="_blank">source</a>.</p>
    <h2>I'm putting together this guide in the hopes that anyone else facing the same issue can resolve it just as I did.</h2>
    <p class="center" style="text-align: center">Step One</p>
    <p>Download the .exe from <a href="https://www.intel.com/content/www/us/en/download/19512/intel-rapid-storage-technology-driver-installation-software-with-intel-optane-memory-10th-and-11th-gen-platforms.html" target="_blank">Intel® Rapid Storage Technology Driver Installation Software with Intel® Optane™ Memory (10th and 11th Gen Platforms)</a>.</p>
    <p>On the page, it notes how to extract a .zip from the .exe. On the right side of the page, there is a documentation page. Click on the README and go all the way to 6.3 Pre-Installation of INTEL(R) RST driver using the "Load Driver" Method.</p>
    <p>In the folder where you downloaded the .exe file, open Command Prompt or PowerShell,
      <a rel="example_group" href="https://latinospc.com/tutorials/tutorial/step_one.png" title="Open Command Prompt"><img src="https://latinospc.com/tutorials/tutorial/step_one.webp" class="fl" alt="step 1" title="Open Command Prompt"></a>
      and type: <code>./SetupRST.exe -extractdrivers SetupRST_extracted</code>.
      <a rel="example_group" href="https://latinospc.com/tutorials/tutorial/step_one2.png" title="Type Command"><img src="https://latinospc.com/tutorials/tutorial/step_one2.webp" class="rtl" alt="step 2" title="Type Command"></a>
      Run the program and close the command prompt when done.<br />
      The folder should now be in the same location as the .exe file you downloaded from Intel.</p>
      <a rel="example_group" href="https://latinospc.com/tutorials/tutorial/step_one3.png" title="Extracted Folder"><img src="https://latinospc.com/tutorials/tutorial/step_one3.webp" alt="step 3" title="Extracted Folder"></a>
      <a rel="example_group" href="https://latinospc.com/tutorials/tutorial/step_one4.png" title="Navigate Folder"><img src="https://latinospc.com/tutorials/tutorial/step_one4.webp" style="float:right" alt="step 4" title="Navigate Folder"></a>
    <h2 class="center" style="text-align: center">Step Two</h2>
    <p>Go to the Windows installation window, and load the driver. As shown in the pictures.</p>
    <a rel="example_group" href="https://latinospc.com/tutorials/tutorial/step_two.jpg" title="Windows setup window"><img src="https://latinospc.com/tutorials/tutorial/step_two.webp" alt="Windows setup window" title="Windows setup window"></a>
    <a rel="example_group" href="https://latinospc.com/tutorials/tutorial/step_two2.jpg" title="Load Driver Window"><img src="https://latinospc.com/tutorials/tutorial/step_two2.webp" alt="Load Driver Window" title="Load Driver Window" style="float:right"></a>
    <a rel="example_group" href="https://latinospc.com/tutorials/tutorial/step_two3.jpg" title="Browse Folder Window"><img src="https://latinospc.com/tutorials/tutorial/step_two3.webp" alt="Browse Folder Window" title="Browse Folder Window"></a>
    <a rel="example_group" href="https://latinospc.com/tutorials/tutorial/step_two4.jpg" title="Select Driver Window"><img src="https://latinospc.com/tutorials/tutorial/step_two4.webp" alt="Select Driver Window" title="Select Driver Window" style="float:right"></a>
    <a rel="example_group" href="https://latinospc.com/tutorials/tutorial/step_two5.jpg" title="Success"><img src="https://latinospc.com/tutorials/tutorial/step_two5.webp" alt="Success" title="Success"></a>
    <h2 class="center" style="text-align: center">Step Three</h2>
    <p>Proceed to Install Windows.</p>
    <h2>Tags</h2>
    <p>Windows install does not recognize the hard drive, SSD does not show up on Windows install, HP AIO can&#39;t install Windows, Intel-Based hard drive issue, Windows installation does not recognize my drive but the BIOS does.</p>
  </div>
  </section>
  <?php
}

  include 'anvil/structure.php';
?>