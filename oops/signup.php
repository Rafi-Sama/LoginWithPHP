<?php 
require_once 'function.php'; 
require_once 'partials/header.php'; 

if(isset($_POST["submit"])){
    $register = new Register();
    $result = $register->registration($_POST["username"], $_POST["password"], $_POST["cpassword"]);
    echo "<script> alert('$result')</script>";
}
?>

<div class="bg-gradient-to-r from-green-50 to-teal-100 min-h-[540px] flex items-center justify-center">
    <!-- Sign-Up Form -->
    <div class="max-w-md w-full bg-white rounded-lg shadow-lg p-6">
        <h2 class="text-2xl font-bold text-center text-green-600 mb-4">Create a New Account</h2>
        <form action="#" method="POST" class="space-y-4">
            <!-- Full Name -->
            <div>
                <label for="username" class="block text-sm font-medium text-gray-600">Username</label>
                <input type="text" id="username" name="username" required
                    class="w-full mt-2 px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
            </div>


            <!-- Password -->
            <div>
                <label for="password" class="block text-sm font-medium text-gray-600">Password</label>
                <input type="password" id="password" name="password" required
                    class="w-full mt-2 px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
            </div>

            <!-- Confirm Password -->
            <div>
                <label for="cpassword" class="block text-sm font-medium text-gray-600">Confirm Password</label>
                <input type="password" id="cpassword" name="cpassword" required
                    class="w-full mt-2 px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
            </div>

            <!-- Submit Button -->
            <button type="submit"
                class="w-full mt-4 py-2 bg-green-600 text-white font-semibold rounded-lg hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500" name="submit">
                Sign Up
            </button>
        </form>
    </div>
</div>
<?php require_once 'partials/foot.php'; ?>