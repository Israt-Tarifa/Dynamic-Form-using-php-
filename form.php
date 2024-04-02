<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registration Form</title>
<style>
.form-container {
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: #f9f9f9;
}

.form-group {
    margin-bottom: 20px;
}

.form-group label {
    display: block;
    margin-bottom: 5px;
}

.form-group input[type="text"],
.form-group input[type="email"],
.form-group input[type="password"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
}
.form-group input[type="Phone Number"]
{
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 3px;
}

.form-group button {
    padding: 10px 20px;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 3px;
    cursor: pointer;
}

.form-group button:hover {
    background-color: #45a049;
}
</style>
</head>
<body>

<div class="form-container">
    <h2>Registration Form</h2>
    <form action="pdf.php" method="post">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="id">Roll No.</label>
            <input type="id" id="id" name="id" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        
        <div class="form-group">
            <label for="Phone Number">Phone Number:</label>
            <input type="Phone Number" id="Phone Number" name="PhoneNumber" required>
        </div>
        <div class="form-group" style="text-align: center;">
    <input type="submit" id="button" name="submit" style="padding: 10px 20px; background-color: #007bff; color: #fff; border: none; border-radius: 5px; cursor: pointer;">
</div>

    </form>
</div>

</body>
</html>