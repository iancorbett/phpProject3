## Overview

This PHP project demonstrates using sessions, object-oriented programming, and form handling to manage a dealership’s in-memory vehicle inventory.
Each user gets their own Dealership object stored in the PHP session, containing an array of Vehicle objects. The data persists between page reloads until the session ends or the user clears the inventory.

---

## Files Included
File	Purpose
project3.php	Main web page containing the form, display table, and all session logic
classes/Vehicle.php	Defines the Vehicle class and its methods
classes/Dealership.php	Defines the Dealership class and its methods; manages the vehicle inventory

---

## Core Concepts Shown

**Sessions:**
Uses $_SESSION to persist objects between requests:

session_start();
if (!isset($_SESSION['dealership'])) {
    $_SESSION['dealership'] = new Dealership();
}


**OOP in PHP:**
Demonstrates classes, properties, constructors, and type hints (Vehicle $vehicle, : void, : array, : float).

**Form Handling + Validation:**
Sanitizes and validates user input before creating Vehicle objects.

**Dynamic Table Rendering:**
Iterates over an array of objects to generate HTML output.

**Session Persistence:**
Inventory data remains available until the session expires or is cleared.

---

## How to Run

Place all three files in your local PHP server directory (e.g., htdocs/project3).

Start Apache / PHP (e.g., via XAMPP or MAMP).

Visit http://localhost/project3/project3.php.

Add vehicles using the form; they’ll appear instantly in the Current Inventory table.

Click Clear Inventory to reset your session’s dealership.