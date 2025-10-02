<?php
$host = "localhost";
$user = "rokisheik";
$password = "D6YFlBcUda7Hvhmhcqhf";
$database = "campaign";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM leads ORDER BY created_at DESC";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leads Management</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .btn {
            padding: 10px 15px;
            margin-top: 20px;
            cursor: pointer;
            background-color: black;
            color: white;
            border: none;
            border-radius: 5px;
        }
    </style>
</head>
<body>

    <h2>Leads Data</h2>

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>WhatsApp</th>
            <th>Profession</th>
            <th>Business Type</th>
            <th>Current Revenue</th>
            <th>Future Revenue</th>
            <th>Total Team</th>
            <th>Created At</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['name'] ?></td>
            <td><?= $row['whatsapp'] ?></td>
            <td><?= $row['profession'] ?></td>
            <td><?= $row['business_type'] ?></td>
            <td><?= $row['current_revenue'] ?></td>
            <td><?= $row['future_revenue'] ?></td>
            <td><?= $row['total_team'] ?></td>
            <td><?= $row['created_at'] ?></td>
        </tr>
        <?php endwhile; ?>
    </table>

    <button class="btn" onclick="printPDF()">Export to PDF</button>

    <script>
        function printPDF() {
            var originalTitle = document.title;
            document.title = "Leads Report"; // Set title for PDF
            window.print();
            document.title = originalTitle; // Restore title after printing
        }
    </script>

</body>
</html>

<?php $conn->close(); ?>
