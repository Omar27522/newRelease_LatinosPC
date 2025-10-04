**************************** Content Home Page ****************************
<?php

$stmt = $pdo->prepare("INSERT INTO content (page_id, name, content) VALUES (?, ?, ?)");

$stmt->execute(["home", "headings", "Jesus Christ"]);
$stmt->execute(["home", "aboutHeadings", "About Us"]);
$stmt->execute(["home", "servicesHeadings", "Services"]);
$stmt->execute(["home", "securityHeadings", "Security"]);
$stmt->execute(["home", "tutorialsHeadings", "Tutorials"]);
$stmt->execute(["home", "tutorialsHeadings", "Blogs"]);
$stmt->execute(["home", "headings", "Hardware"]);
$stmt->execute(["home", "headingSoftware", "Software"]);

$stmt->execute(["home", "dialogs", "Most accept that Jesus was truly a man who lived in Israel 2,000 years ago."]);
$stmt->execute(["home", "dialogs", "What do we really know about Jesus? Explore his life and teachings and form your own valid experience."]);
$stmt->execute(["home", "link", "JesusChrist/father_in_heaven_tell_me_about_web"]);
$stmt->execute(["home", "link", "JesusChrist/apostles"]);
$stmt->execute(["home", "link", "JesusChrist/parables"]);
$stmt->execute(["home", "link", "JesusChrist/sermons"]);
$stmt->execute(["home", "link", "JesusChrist/teachings"]);
$stmt->execute(["home", "button", "Tell me about the web"]);
$stmt->execute(["home", "button", "Apostles"]);
$stmt->execute(["home", "button", "Parables"]);
$stmt->execute(["home", "button", "Sermons"]);
$stmt->execute(["home", "button", "Teachings"]);

$stmt->execute(["home", "aboutParagraph", "We started back in 2009 with one technician; Omar, we have one goal."]);
$stmt->execute(["home", "aboutDialogs", "Our goal is to provide you and your company with outstanding service."]);
$stmt->execute(["home", "aboutDialogs", "We're dedicated to enhancing your experience through effective marketing, customer-friendly retention strategies, and maintaining top-notch quality control."]);
$stmt->execute(["home", "aboutParagraph", "we want to bring families and individuals, the experience of a fully working computer system; laptops and desktops."]);
$stmt->execute(["home", "aboutParagraph", "100% Satisfaction Guarantee | 90 Days Service Package -included"]);
$stmt->execute(["home", "aboutParagraph", "We are located in the city of Pomona, and will travel to LA county, SB county, RV county and OC."]);
$stmt->execute(["home", "aboutButton", "/about"]);
$stmt->execute(["home", "aboutLink", "Visit Us"]);

$stmt->execute(["home", "servicesParagraph", "We mostly work with individuals, Students, Small-Medium Businesses, #Gamers!, and Professionals."]);
$stmt->execute(["home", "servicesParagraph", "Repairs and Service for Home and Office; any type-spec."]);
$stmt->execute(["home", "servicesParagraph", "90 day service guarantee. Computers run smoother, faster and perform better."]);
$stmt->execute(["home", "servicesLinkCleanUps", "/services/cleanups"]);
$stmt->execute(["home", "servicesCleanUpsButton", "Cleanups"]);
//$stmt->execute(["home", "servicesLinkComputerProtection", "/services/computer_protection"]);
$stmt->execute(["home", "servicesComputerProtectionButton", "Computer Protection"]);
//$stmt->execute(["home", "servicesLinkConsultations", "/services/consultations"]);
$stmt->execute(["home", "servicesConsultationsButton", "Consultations"]);
//$stmt->execute(["home", "servicesLinkManagedServices", "/services/managed_services"]);
$stmt->execute(["home", "servicesManagedServicesButton", "Managed Services"]);
//$stmt->execute(["home", "servicesLinkRemoteSupport", "/services/remote_support"]);
$stmt->execute(["home", "servicesRemoteSupportButton", "Remote Support"]);
//$stmt->execute(["home", "servicesLinkWebsites", "/services/websites"]);
$stmt->execute(["home", "servicesWebsitesButton", "Websites"]);

$stmt->execute(["home", "securityButton", "Best Practices"]);
$stmt->execute(["home", "securityButton", "Backups"]);
$stmt->execute(["home", "securityButton", "Passwords"]);
$stmt->execute(["home", "securityParagraph", "Think of your computer as a virtual treasure chest filled with your important stuff – photos, documents, and more. Computer protection is like a shield against troublemakers like viruses and hackers."]);

$stmt->execute(["home", "tutorialsBlogDialog", "This section is all about the tutorials and blog posts that we have on our website. We have a wide range of topics that we cover, from computer hardware and software to internet security and more."]);
$stmt->execute(["home", "tutorialsParagraph", "Visit our tutorials and blog page for more information"]);
$stmt->execute(["home", "tutorialsButton", "Visit Page"]);

$stmt->execute(["home", "hardwareDialog", "A computer is an electronic device that manipulates data or information. It has the ability to store,retrieve, and process data."]);
$stmt->execute(["home", "hardwareDialog", "The Hardware is the computer — it's physical components."]);
$stmt->execute(["home", "hardwareDialog", "These components may include the computer's functionality, design, materials, innovations, thermals, etc."]);
$stmt->execute(["home", "hardwareButtons", "CPU"]);
$stmt->execute(["home", "hardwareButtons", "Storage"]);
$stmt->execute(["home", "hardwareButtons", "Power Supply Unit"]);
$stmt->execute(["home", "hardwareButtons", "Input"]);
$stmt->execute(["home", "hardwareButtons", "Output"]);
$stmt->execute(["home", "hardwareButtons", "Parts"]);
$stmt->execute(["home", "headings", "Peripherals and Gear"]);
$stmt->execute(["home", "PeripheralsAndGearDialog", "Peripherals and gear are the additional components that help you use your computer."]);
$stmt->execute(["home", "PeripheralsAndGearDialog", "These include desks, chairs, computer mats, lights, clothing, and other stuff that are unrelated to the computer itself, but are very useful to have."]);
$stmt->execute(["home", "PeripheralsAndGearParagraph", "Visit our computer peripherals and gear for more information"]);

$stmt->execute(["home", "softwareDialog", "Commonly known as computer programs or apps, these are the instructions for the computer’s tasks"]);
$stmt->execute(["home", "softwareButton", "Anti-Virus"]);
$stmt->execute(["home", "softwareButton", "Malware Cleaner"]);
$stmt->execute(["home", "softwareButton", "Web Browsers"]);
$stmt->execute(["home", "softwareButton", "Messaging"]);
$stmt->execute(["home", "softwareButton", "Media"]);
$stmt->execute(["home", "softwareButton", "Runtimes"]);
$stmt->execute(["home", "softwareButton", "Imaging"]);
$stmt->execute(["home", "softwareButton", "Documents"]);
$stmt->execute(["home", "softwareButton", "File Sharing"]);
$stmt->execute(["home", "softwareButton", "Online Storage"]);
$stmt->execute(["home", "softwareButton", "Other"]);
$stmt->execute(["home", "softwareButton", "Utilities"]);
$stmt->execute(["home", "softwareButton", "Compression"]);
$stmt->execute(["home", "softwareButton", "Developer Tools"]);

?>