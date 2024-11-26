<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>


    form {
        max-width: 400px;
        margin: 20px auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    label {
        display: inline-block;
        width: 100px;
        margin-bottom: 10px;
    }

    input {
        width: 200px;
        padding: 8px;
        margin-bottom: 10px;
        border: 1px solid #ddd;
        border-radius: 4px;
    }

    button {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    button:hover {
        background-color: #45a049;
    }

    h1 {
        text-align: center;
        color: #333;
    }
</style>


</head>

<body>
    <h1>Register</h1>
    <form action="">
        <label for="Fullname">Fullname: </label>
        <input type="text" name="Fullname" id="Fullname">
        <br>
        <label for="Email">Email: </label>
        <input type="email" name="Email" id="Email">
        <br>
        <label for="phone">Phone: </label>
        <input type="text" name="phone" id="phone">
        <br>
        <label for="address">Address: </label>
        <input type="text" name="address" id="address">
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password">
        <br>
        <button type="submit">Register</button>
    </form>
</body>

</html>
