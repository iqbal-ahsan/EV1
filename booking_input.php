<!DOCTYPE html>
<html>
<head>
    <title>Book a Ticket</title>
</head>
<body>
    <h1>Book a Ticket</h1>
    <form action="booking.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        <label for="date">Date:</label>
        <input type="date" id="date" name="date" required><br><br>
        <label for="from">From:</label>
        <input type="text" id="from" name="from" required><br><br>
        <label for="to">To:</label>
        <input type="text" id="to" name="to" required><br><br>
        <input type="submit" value="Book Ticket">
    </form>
</body>
</html>
