<!DOCTYPE html>
<html>
<head>
    <title>FORM LOGIN</title>
    <style>
        .form-container {
            width: 300px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f2f2f2;
            border-radius: 5px;
        }
        
        .form-container label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }
        
        .form-container input[type="text"],
        .form-container input[type="password"]
        {
            width: 100%;
            padding: 5px;
            margin-bottom: 10px;
            border-radius: 3px;
            border: 1px solid #ccc;
        }
        
        .form-container input[type="submit"],
        .form-container input[type="reset"]        
        {
            background-color: #4CAF50;
            color: #fff;
            border: none;
            padding: 10px;
            border-radius: 3px;
            cursor: pointer;
        }
        
        .form-container input[type="submit"]:hover,
        .form-container input[type="reset"]:hover        
        {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Form Login</h2>
        <form action="proses_login.php" method="post">
             <label for="username">Username:</label>
             <input type="text" id="username" name="username" required>
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>     
            
            <input type = "submit" name="bok" value="Simpan"/>
            <input type = "reset" name="reset" value="Reset"/>
            <br>
            <br>            
        </form>
    <br>
        username = "admin"<br>
        password = "admin123"
    </div>
</body>
</html>
