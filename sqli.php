<!DOCTYPE html>
<html>

<head>
    <title>SQL Injection Demo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 40px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ccc;
            max-width: 300px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"] {
            width: 100%;
            padding: 4px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            border: none;
            padding: 40px 100px;
            cursor: pointer;
        }

        h2 {
            margin-top: 20px;
            color: #333;
        }

        .result {
            background-color: #fff;
            padding: 10px;
            border: 1px solid #ccc;
            margin-top: 1000px;
        }
    </style>
</head>

<body>
    <h1>SQL Injection Demo</h1>
    <form method="GET" action="">
        <label for="id">Enter User ID:</label>
        <input type="text" id="id" name="id" required>
        </br>
        <button type="submit">Submit</button>
    </form>
    <br>

    <?php
    if (isset($_GET['id'])) {
        $conn = mysqli_connect("localhost", "root", "", "test");

        // Lấy giá trị từ tham số truyền vào (ví dụ: id)
        $id = $_GET['id'];

        // Truy vấn dữ liệu từ cơ sở dữ liệu
        $query = "SELECT * FROM username WHERE id = '$id'";
        $result = mysqli_query($conn, $query);

        if ($conn->connect_error) {
            echo "Kết nối đến MySQL thất bại: " . $conn->connect_error;
        } else {
            echo "Kết nối thành công đến MySQL" . "<br>";
        }
        // Xử lý kết quả truy vấn
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "ID: " . $row['id'] . "<br>";
                echo "Name: " . $row['name'] . "<br>";
                echo "Email: " . $row['email'] . "<br>";
            }
        } else {
            echo "No user found";
        }

        mysqli_close($conn);
    }
    ?>

</body>

</html>