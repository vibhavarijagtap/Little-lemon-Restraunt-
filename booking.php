<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capture form data
    $booking_date = $_POST['booking_date'];
    $booking_time = $_POST['booking_time'];
    $num_people = $_POST['num_people'];
    $food_preferences = $_POST['food_preferences'];
    $customer_name = $_POST['customer_name'];
    $customer_phone = $_POST['customer_phone'];
    $customer_email = $_POST['customer_email'];
    $special_requests = $_POST['special_requests'];

    // Example: Save to a file (or connect to a database)
    $data = "Booking Details:\n";
    $data .= "Date: $booking_date\n";
    $data .= "Time: $booking_time\n";
    $data .= "Number of People: $num_people\n";
    $data .= "Food Preferences: $food_preferences\n";
    $data .= "Customer Name: $customer_name\n";
    $data .= "Phone: $customer_phone\n";
    $data .= "Email: $customer_email\n";
    $data .= "Special Requests: $special_requests\n";
    $data .= "-------------------------------\n";

    // Save the booking details to a file (can also be saved to a database)
    file_put_contents('bookings.txt', $data, FILE_APPEND);

    // Send a confirmation message to the user
    echo "<h2>Booking Confirmed!</h2>";
    echo "<p>Thank you, $customer_name, for booking with us.</p>";
    echo "<p>We have received your booking for $num_people people on $booking_date at $booking_time.</p>";
    echo "<p>We will reach out to you at $customer_phone or $customer_email if necessary.</p>";
} else {
    echo "Invalid request method!";
}

