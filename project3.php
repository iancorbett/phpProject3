<?php

session_start();
require_once __DIR__ . '/classes/Dealership.php';

if (!isset($_SESSION['dealership'])) {
    $_SESSION['dealership'] = new Dealership(); //create new dealership object after session is started
}

$dealership = $_SESSION['dealership'];
$message = "";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project 3 - Dealership Session App</title>
</head>
<body>

<h1>🚗 Project 3 – Dealership Inventory (Sessions)</h1>

<form method="POST">
    <input type="hidden" name="action" value="add">
    <label>Make: <input name="make" required></label>
    <label>Model: <input name="model" required></label>
    <label>Year: <input type="number" name="year" required></label>
    <label>Package: <input name="package" required></label>
    <label>Price: <input type="number" step="0.01" name="price" required></label>
    <button type="submit">Add Vehicle</button>
  </form>

  <form method="POST" class="actions">
    <input type="hidden" name="action" value="clear">
    <button type="submit">Clear Inventory</button>
  </form>
    
</body>
</html>