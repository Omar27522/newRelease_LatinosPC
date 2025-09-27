<?php

// Your VALUES clause
$values_clause = "?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?";

$placeholders = explode(',', $values_clause);
$placeholder_count = count($placeholders);

echo "<h2>Placeholder Analysis</h2>";
echo "<p><strong>Number of placeholders (?):</strong> " . $placeholder_count . "</p>";

// Count columns again
$columns = "page_id, name, content, content2, content3, content4, content5, content6, content7, content8, homelink, homebutton, homelink2, homebutton2, homelink3, homebutton3, homelink4, homebutton4, homelink5, homebutton5, aboutParagraph, aboutParagraph2, aboutParagraph3, aboutlink, aboutbutton, serviceslink, servicesbutton, serviceslink2, servicesbutton2, serviceslink3, servicesbutton3, serviceslink4, servicesbutton4, serviceslink5, servicesbutton5, serviceslink6, servicesbutton6, securitylink, securitybutton, securitylink2, securitybutton2, securitylink3, securitybutton3, hardwarelink, hardwarebutton, hardwarelink2, hardwarebutton2, hardwarelink3, hardwarebutton3, hardwarelink4, hardwarebutton4, hardwarelink5, hardwarebutton5, hardwarelink6, hardwarebutton6, preripheralsandgear, preripheralsandgearlink, preripheralsandgearbutton, softwarelink, softwarebutton, softwarelink2, softwarebutton2, softwarelink3, softwarebutton3, softwarelink4, softwarebutton4, softwarelink5, softwarebutton5, softwarelink6, softwarebutton6, softwarelink7, softwarebutton7, softwarelink8, softwarebutton8, softwarelink9, softwarebutton9, softwarelink10, softwarebutton10, softwarelink11, softwarebutton11, softwarelink12, softwarebutton12, softwarelink13, softwarebutton13, softwarelink14, softwarebutton14, tutorials, tutorialslink, tutorialsbutton";

$columnArray = array_map('trim', explode(',', $columns));
$column_count = count($columnArray);

echo "<p><strong>Number of columns:</strong> " . $column_count . "</p>";
echo "<p><strong>Difference:</strong> " . ($column_count - $placeholder_count) . "</p>";

if ($column_count != $placeholder_count) {
    echo "<p style='color: red;'><strong>MISMATCH!</strong> You need " . $column_count . " placeholders but only have " . $placeholder_count . "</p>";
    echo "<p>You need to add " . ($column_count - $placeholder_count) . " more placeholders (?) to your VALUES clause.</p>";
}

?>
