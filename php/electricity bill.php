<html>

<head>
    <title>Calculate Bill</title>
</head>

<body>
    <h2>Electricity Bill Calculator</h2>

    <form method="post" action="">
        <label>Consumer Number:</label>
        <input type="text" name="consumer_number" id="consumer_number" required /><br><br>

        <label>Amount of Usage (in kWh):</label>
        <input type="number" name="usage" id="usage" required /><br><br>

        <input type="submit" value="Calculate Bill" name="submit" />
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $consumer_number = $_POST['consumer_number'];
        $usage = $_POST['usage'];

        // Calculate energy charges
        $energyCharges = ($usage <= 300)
            ? $usage * 6.40
            : (($usage <= 350)
                ? $usage * 7.25
                : (($usage <= 400)
                    ? $usage * 7.60
                    : (($usage <= 500)
                        ? $usage * 7.90
                        : $usage * 8.80)));

        $bill_date = date('Y-m-d');
        $due_date = date('Y-m-d', strtotime($bill_date . ' + 30 days'));
        $disconnection_date = date('Y-m-d', strtotime($bill_date . ' + 60 days'));

        echo "<h3>Bill for Consumer Number: $consumer_number</h3>";
        echo "<p>Total Usage: $usage kWh</p>";
        echo "<p><strong>Total Bill: Rs. " . number_format($energyCharges, 2) . "</strong></p>";
        echo "<p>Bill Date: $bill_date</p>";
        echo "<p>Due Date: $due_date</p>";
        echo "<p>Disconnection Date: $disconnection_date</p>";
    }
    ?>
</body>

</html>
