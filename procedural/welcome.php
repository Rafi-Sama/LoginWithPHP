<?php
    session_start();
    if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
        header("location: login.php");
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <h1 class="text-5xl font-bold text-center my-6">Hi, there <?php echo $_SESSION['username']?></h1>
    <div class="flex gap-4 align-center justify-center">
    <h1 class="text-2xl font-bold text-center my-6">Would you</h1>
    <a href="/LoginWithPHP/procedural/logout.php" class="bg-red-600 my-auto text-white font-semibold rounded-lg hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 p-5">Logout</a>
    <h1 class="text-2xl font-bold text-center my-6">?</h1>
    </div>
</body>
</html>