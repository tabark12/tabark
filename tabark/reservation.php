<!-- reservation.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Make Reservation</title>
</head>
<body>
    <h2>Make Reservation</h2>
    <form action="reservation_process.php" method="POST">
        Patient Name: <input type="text" name="patient_name"><br><br>
        Doctor Name: <input type="text" name="doctor_name"><br><br>
        Appointment Date: <input type="date" name="appointment_date"><br><br>
        <input type="submit" value="Make Reservation">
    </form>
</body>
</html>
