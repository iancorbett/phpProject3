<?php

session_start();
require_once __DIR__ . '/classes/Dealership.php';

if (!isset($_SESSION['dealership'])) {
    $_SESSION['dealership'] = new Dealership(); //create new dealership object after session is started
}

$dealership = $_SESSION['dealership'];
$message = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') { //run this if post request is made
    if (isset($_POST['action']) && $_POST['action'] === 'add') { //if add action is taken
        $make = trim($_POST['make'] ?? '');
        $model = trim($_POST['model'] ?? '');
        $year = (int)($_POST['year'] ?? 0);
        $package = trim($_POST['package'] ?? '');
        $price = (float)($_POST['price'] ?? 0);

    }

    if ($make && $model && $year && $package && $price > 0) { //if all fields are filled out
        $vehicle = new Vehicle($make, $model, $year, $package, $price); //create new vehicle object
        $dealership->addVehicle($vehicle); //use the imported addvehicle methhod
        $_SESSION['dealership'] = $dealership;
        $message = "Vehicle added successfully!"; //display success message
    } else {
        $message = "Please fill out all fields correctly."; // display error message
    }
    } elseif (isset($_POST['action']) && $_POST['action'] === 'clear') {
        $dealership->clearInventory(); //clear inventory function runs
        $_SESSION['dealership'] = $dealership;
        $message = "Inventory cleared.";
    }
    

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

<?php if ($message): ?>
    <p class="msg"><?= htmlspecialchars($message) ?></p>
  <?php endif; ?>


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

  <h2>Current Inventory</h2>

  <?php $cars = $dealership->getInventory(); ?> <!--$cars is an array of vehicles in the dealership's inventory-->
  <?php if (empty($cars)): ?>
    <p>No vehicles in inventory yet.</p>
  

</body>
</html>