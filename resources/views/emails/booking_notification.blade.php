<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Tour Booking</title>
</head>
<body>
    <h1>New Booking Received</h1>
    <p><strong>Name:</strong> {{ $booking->name }}</p>
    <p><strong>Email:</strong> {{ $booking->email }}</p>
    <p><strong>Phone:</strong> {{ $booking->phone }}</p>
    <p><strong>Tour Title:</strong> {{ $booking->tour->title }}</p>
    <p><strong>Number of People:</strong> {{ $booking->quantity }}</p>
</body>
</html>
