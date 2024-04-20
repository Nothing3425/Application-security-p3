<!DOCTYPE html>
<html>
<head>
    <title>Update Email - Bon Voyage Tours</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #007bff;
            text-align: center;
        }
        form {
            margin-top: 20px;
            text-align: center;
        }
        input[type="email"] {
            width: 250px;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Update Email</h1>
        <form action="transfer.php" method="POST">
            New Email: <input type="email" name="new_email" required><br><br>
            <input type="submit" value="Update Email">
        </form>
    </div>
</body>
</html>
