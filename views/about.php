<?php
include_once __DIR__ . '/partial/navigation.php';

if ($data && count($data) > 0) {
    echo '<table border="1" style="border-collapse: collapse; width: 100%; margin-top: 20px;">';
    echo '<thead><tr>';
    
    // Get column names from first row
    $columns = array_keys($data[0]);
    foreach ($columns as $column) {
        echo '<th style="padding: 8px; background-color: #f2f2f2;">' . ucfirst($column) . '</th>';
    }
    echo '</tr></thead>';
    
    echo '<tbody>';
    foreach ($data as $row) {
        echo '<tr>';
        foreach ($columns as $column) {
            echo '<td style="padding: 8px; border: 1px solid #ddd;">' . htmlspecialchars($row[$column]) . '</td>';
        }
        echo '</tr>';
    }
    echo '</tbody>';
    echo '</table>';
} else {
    echo '<p style="margin-top: 20px;">No users found in the database.</p>';
}


