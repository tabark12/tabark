<?php 
// Include database connection configuration 
require_once 'database.php'; 
 
// Check if form is submitted 
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    // Retrieve form data 
    $patient_name = $_POST['patient_name']; 
    $appointment_date = $_POST['appointment_date']; 
    $appointment_time = $_POST['appointment_time']; 
 
    // Insert reservation into database 
    $stmt = $pdo->prepare("INSERT INTO reservations (patient_name, appointment_date, appointment_time) VALUES (?, ?, ?)"); 
    $stmt->execute([$patient_name, $appointment_date, $appointment_time]); 
 
    // Redirect to success page or display success message 
    header("Location: success.php"); 
    exit(); 
} 
?> 
<!DOCTYPE html>  
<html lang="en">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Patient Reservation</title>  
</head>  
<body>  
    <h2>Make a Reservation</h2>  
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">  
        <label for="patient_name">Name:</label><br>  
        <input type="text" id="patient_name" name="patient_name" required><br>  
        <label for="appointment_date">Select Date:</label><br>  
        <input type="date" id="appointment_date" name="appointment_date" required><br>  
        <label for="appointment_time">Select Time:</label><br>  
        <input type="time" id="appointment_time" name="appointment_time" required><br>  
        <input type="submit" value="Submit">  
    </form>  
</body>  
</html