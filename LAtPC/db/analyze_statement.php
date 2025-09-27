<?php

// Extract the column list from your INSERT statement
$columns = "page_id, name, content, content2, content3, content4, content5, content6, content7, content8, homelink, homebutton, homelink2, homebutton2, homelink3, homebutton3, homelink4, homebutton4, homelink5, homebutton5, aboutParagraph, aboutParagraph2, aboutParagraph3, aboutlink, aboutbutton, serviceslink, servicesbutton, serviceslink2, servicesbutton2, serviceslink3, servicesbutton3, serviceslink4, servicesbutton4, serviceslink5, servicesbutton5, serviceslink6, servicesbutton6, securitylink, securitybutton, securitylink2, securitybutton2, securitylink3, securitybutton3, hardwarelink, hardwarebutton, hardwarelink2, hardwarebutton2, hardwarelink3, hardwarebutton3, hardwarelink4, hardwarebutton4, hardwarelink5, hardwarebutton5, hardwarelink6, hardwarebutton6, preripheralsandgear, preripheralsandgearlink, preripheralsandgearbutton, softwarelink, softwarebutton, softwarelink2, softwarebutton2, softwarelink3, softwarebutton3, softwarelink4, softwarebutton4, softwarelink5, softwarebutton5, softwarelink6, softwarebutton6, softwarelink7, softwarebutton7, softwarelink8, softwarebutton8, softwarelink9, softwarebutton9, softwarelink10, softwarebutton10, softwarelink11, softwarebutton11, softwarelink12, softwarebutton12, softwarelink13, softwarebutton13, softwarelink14, softwarebutton14, tutorials, tutorialslink, tutorialsbutton";

$columnArray = array_map('trim', explode(',', $columns));

// Your current values array
$values = [1, "home", "Jesus Christ", "About Us", "Services", "Security", "Hardware", "Software", "Tutorials", "Blog", "/father_in_heaven_tell_me_about_web", "Tell me about the web", "/apostles", "Apostles", "/parables", "Parables", "/sermons", "Sermons", "/teachings", "Teachings", "we want to bring families and individuals, the experience of a fully working computer system; laptops and desktops.", "100% Satisfaction Guarantee | 90 Days Service Package -included", "We are located in the city of Pomona, and will travel to LA county, SB county, RV county and OC.", "/about", "Visit Page", "/cleanups", "Cleanups", "/computer-protection", "Computer Protection", "/consultations", "Consultations", "/managed-services", "Managed Services", "/remote-support", "Remote Support", "/websites", "Websites", "/security-best-practices", "Best Practices", "/data-backup", "Data Backup", "/passwords", "Passwords", "/cpu", "CPU", "/storage", "Storage", "/power-supply", "Power Supply Unit", "/input", "Input", "/output", "Output", "/parts", "Parts", "Peripherals and gear for your computer setup", "/peripherals", "View Peripherals", "/antivirus", "Antivirus", "/malware-cleaner", "Malware Cleaner", "/web-browser", "Web Browser", "/messaging", "Messaging", "/media", "Media", "/runtimes", "Runtimes", "/imaging", "Imaging", "/documents", "Documents", "/file-sharing", "File Sharing", "/online-storage", "Online Storage", "/other", "Other", "/utilities", "Utilities", "/compression", "Compression", "/developer-tools", "Developer Tools", "Computer tutorials and guides", "/tutorials", "View Tutorials"];

echo "<h2>Statement Analysis</h2>";
echo "<p><strong>Number of columns:</strong> " . count($columnArray) . "</p>";
echo "<p><strong>Number of values:</strong> " . count($values) . "</p>";
echo "<p><strong>Difference:</strong> " . (count($columnArray) - count($values)) . "</p>";

echo "<h3>Column to Value Mapping:</h3>";
echo "<table border='1' style='border-collapse: collapse;'>";
echo "<tr><th>Index</th><th>Column</th><th>Value</th><th>Status</th></tr>";

for ($i = 0; $i < max(count($columnArray), count($values)); $i++) {
    $column = isset($columnArray[$i]) ? $columnArray[$i] : "MISSING";
    $value = isset($values[$i]) ? $values[$i] : "MISSING";
    $status = "";
    
    if (!isset($columnArray[$i])) {
        $status = "Extra Value";
    } elseif (!isset($values[$i])) {
        $status = "Missing Value";
    } else {
        $status = "OK";
    }
    
    $rowColor = ($status == "OK") ? "" : "style='background-color: #ffcccc;'";
    
    echo "<tr $rowColor>";
    echo "<td>" . ($i + 1) . "</td>";
    echo "<td>" . htmlspecialchars($column) . "</td>";
    echo "<td>" . htmlspecialchars($value) . "</td>";
    echo "<td>" . $status . "</td>";
    echo "</tr>";
}

echo "</table>";

if (count($columnArray) != count($values)) {
    echo "<h3>Missing Columns (need values):</h3>";
    echo "<ul>";
    for ($i = count($values); $i < count($columnArray); $i++) {
        echo "<li>" . htmlspecialchars($columnArray[$i]) . "</li>";
    }
    echo "</ul>";
}

?>
