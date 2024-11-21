<?php 
require_once 'function.php'; 
require_once 'partials/header.php'; 

if(isset($_POST["submit"])){
    $login = new Login();
    $result = $login->login($_POST["username"], $_POST["password"]);
    if($result == 1){
        $_SESSION["loggedin"] = true;
        header('location: welcome.php');
    }
    echo "<script> alert('$result')</script>";
}
?>

<div class="w-full min-h-[540px] flex items-center justify-center bg-gradient-to-r from-blue-50 to-purple-100">
    <div class="max-w-md w-full bg-white rounded-lg shadow-lg p-8">
        <h2 class="text-2xl font-bold text-center text-blue-600 mb-6">Login to Your Account</h2>
        <form action="#" method="POST" class="space-y-6">
            <div>
                <label for="username" class="block text-sm font-medium text-gray-600">Username</label>
                <input type="text" id="username" name="username" required
                    class="w-full mt-2 px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div>
                <label for="login-password" class="block text-sm font-medium text-gray-600">Password</label>
                <input type="password" id="password" name="password" required
                    class="w-full mt-2 px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div class="flex items-center justify-between">
                <label class="flex items-center">
                    <input type="checkbox" class="text-blue-500 focus:ring-blue-500">
                    <span class="ml-2 text-sm text-gray-600">Remember Me</span>
                </label>
                <a href="#" class="text-sm text-blue-500 hover:underline">Forgot Password?</a>
            </div>
            <button type="submit"
                class="w-full mt-4 py-2 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500" name="submit">Login</button>
        </form>
    </div>
</div>
<?php require_once 'partials/foot.php'; ?>