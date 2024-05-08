<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Available Appointment Slots</title> 
</head> 
<body> 
    <h2>Available Appointment Slots</h2> 
    <?php 
    // Include database connection configuration 
    require_once 'database.php'; 
 
    // Retrieve available appointment slots from the database 
    $stmt = $pdo->query("SELECT appointment_date, appointment_time FROM appointments WHERE is_available = 1"); 
    $slots = $stmt->fetchAll(PDO::FETCH_ASSOC); 
 
    if ($slots) { 
        echo '<ul>'; 
        foreach ($slots as $slot) { 
            echo '<li>' . $slot['appointment_date'] . ' - ' . $slot['appointment_time'] . '</li>'; 
        } 
        echo '</ul>'; 
    } else { 
        echo '<p>No available appointment slots.</p>'; 
    } 
    ?> 
</body> 
</html>