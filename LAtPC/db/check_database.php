<?php

$pdo = new PDO('sqlite:mydatabase.db');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

echo "<h2>Database Contents Check</h2>";

// Check if table exists and get record count
$stmt = $pdo->query('SELECT COUNT(*) as count FROM content');
$count = $stmt->fetch(PDO::FETCH_ASSOC);

echo "<p><strong>Total records in content table:</strong> " . $count['count'] . "</p>";

if ($count['count'] > 0) {
    // Show all records
    $stmt = $pdo->query('SELECT * FROM content');
    $content = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    echo "<h3>All Records:</h3>";
    echo "<pre>";
    print_r($content);
    echo "</pre>";
    
    echo "<h3>First Record Content:</h3>";
    echo "<p>" . htmlspecialchars($content[0]['content']) . "</p>";
} else {
    echo "<p><em>No records found in the database.</em></p>";
    echo "<p>Would you like to insert the sample data? Uncomment the INSERT statement in database.php and run it.</p>";
}

// Show table structure
echo "<h3>Table Structure:</h3>";
$stmt = $pdo->query("PRAGMA table_info(content)");
$columns = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo "<table border='1' style='border-collapse: collapse;'>";
echo "<tr><th>Column Name</th><th>Type</th><th>Not Null</th><th>Default</th></tr>";
foreach ($columns as $column) {
    echo "<tr>";
    echo "<td>" . htmlspecialchars($column['name']) . "</td>";
    echo "<td>" . htmlspecialchars($column['type']) . "</td>";
    echo "<td>" . ($column['notnull'] ? 'Yes' : 'No') . "</td>";
    echo "<td>" . htmlspecialchars($column['dflt_value'] ?? 'NULL') . "</td>";
    echo "</tr>";
}
echo "</table>";

?>
