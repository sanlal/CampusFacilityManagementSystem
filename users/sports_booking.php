


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Salon Slot Booking</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            padding-top: 40px; /* Adjusted padding for the fixed navbar */
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: url('col1.jpg');
        }

        .navbar {
            background-color: #333;
            color: white;
            padding: 15px 0;
            text-align: center;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
        }
        .navbar-brand{
            color: white;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
            text-align: center;
            margin-top: 50px; /* Adjusted margin for the content below the fixed navbar */
        }

        h1 {
            color: #333;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
        }

        select,
        button {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        button {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 4px;
        }

        button:hover {
            background-color: #45a049;
        }

        .error-message {
            color: red;
        }

        .success-message {
            color: green;
        }


        #receipt-container {
            
            background-image: url('yel.jpg');
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
            text-align: center;
            margin-top: 50px;
            display: none;
        }

        #receipt-container h2 {
            color: #333;
        }

        #receipt-container p {
            color: #333;
            margin-bottom: 10px;
        }
    </style>

    <script>
        function validateForm() {
            var selectedSport = document.forms["sport_booking"]["sport_id"].value;
            var selectedSlot = document.forms["sport_booking"]["selected_slot"].value;

            if (selectedSport === "") {
                alert("Please select a sport.");
                return false;
            }

            if (selectedSlot === "") {
                alert("Please select a time slot.");
                return false;
            }

            return true;
        }

        function generateRandomId() {
            return Math.floor(Math.random() * 25) + 1; // Change the range as needed
        }
    </script>
</head>

<body>

    <nav class="navbar">
    <a href="http://localhost/Complaint%20Management%20System/index.html" class="navbar-brand"><b>CFMS Home</b></a> <br><br>
        <a href="http://localhost/Complaint%20Management%20System/users/dashboard.php" class="navbar-brand"><b>Dashboard</b></a> <br><br>
        <a href="#" class="navbar-brand"><b>Sports Slot Booking</b></a>
    </nav>

    <div class="container">
        <h1>Sports Slot Booking</h1>

        <form class="form-sport-booking" name="sport_booking" method="post" onsubmit="return validateForm()">
            <label for="sport_id">Select Sport:</label>
            <select class="form-control" name="sport_id" required>
            
                <option value="1">Badminton</option>
                <option value="2">Volley Ball</option>
                <option value="3">Table Tennis</option>
                <option value="4">Tennis</option>
            </select>

            <label for="selected_slot">Select Time Slot:</label>
            <select class="form-control" name="selected_slot" required>
                
                <option value="09:00 AM">9:00 AM</option>
                <option value="10:00 AM">9:30 AM</option>
        <option value="10:00 AM">10:00 AM</option>
        <option value="10:30 AM">10:30 AM</option>
        <option value="11:00 AM">11:00 AM</option>
        <option value="11:30 AM">11:30 AM</option>
        <option value="12:00 AM">12:00 PM</option>
        <option value="12:30 AM">12:30 PM</option>
        <option value="1:00 AM">1:00 PM</option>
        <option value="3:00 AM">3:00 PM</option>
        <option value="3:30 AM">3:30 PM</option>
        <option value="4:00 AM">4:00 PM</option>
        <option value="4:30 AM">4:30 PM</option>
        <option value="5:00 AM">5:00 PM</option>
                <!-- Add more time slots as needed -->
            </select>

            <button class="btn btn-theme btn-block" name="book_sport" type="submit" onclick="generateIds()">Book Sport</button>

             
        </form>
    </div>
    <div id="receipt-container">
        <h2>Receipt Details</h2>
        <p>User ID: <span id="user-id"></span></p>
        <p>Sport ID: <span id="sport-id"></span></p>
        <p>Selected Slot: <span id="selected-slot"></span></p>
    </div>

    <script>
    function generateIds() {
        // Generate random User ID and Sport ID
        var userId = generateRandomId();
        var sportId = generateRandomId();

        // Get selected sport name
        var selectedSportIndex = document.forms["sport_booking"]["sport_id"].selectedIndex;
        var selectedSportName = document.forms["sport_booking"]["sport_id"].options[selectedSportIndex].text;

        // Display the receipt
        var receiptInfo = document.createElement("div");
        receiptInfo.innerHTML = "<h2>Receipt Details</h2>" +
            "<p>User ID: " + userId + "</p>" +
            "<p>Sport ID: " + sportId + "</p>" +
            "<p>Sport Name: " + selectedSportName + "</p>" +
            "<p>Selected Slot: " + document.forms["sport_booking"]["selected_slot"].value + "</p>";

        // Hide the booking form and display the receipt
        document.querySelector('.container').style.display = 'none';
        document.querySelector('#receipt-container').style.display = 'block';

        document.body.innerHTML = "";
        document.body.appendChild(receiptInfo);
    }
</script>


    
</body>

</html>
