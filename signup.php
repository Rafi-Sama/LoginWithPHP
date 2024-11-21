<?php include 'partials/header.php'; ?>
<?php require_once 'partials/signupreq.php'; ?>
<?php
if ($showAlert) {
    echo '<div class="flex inline-flex justify-evenly bg-green-300 border border-teal-400 text-teal-700 px-4 py-3 my-2 w-[280px] rounded absolute right-2" role="alert">
    <span class="inline" onclick="return this.parentNode.remove();">
    <svg class="fill-current h-6 w-6" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title> <path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" /></svg>
    </span>
    <span class="block sm:inline pl-2">
        <strong class="font-bold">Success</strong>
    </span>
    <span class="block sm:inline pl-2">
        ->
    </span>
    <span class="block sm:inline pl-2">
        Signed up !!
    </span>
</div>';
}
if ($showError) {
    echo '<div class="flex inline-flex justify-evenly bg-red-300 border border-teal-400 text-teal-700 px-4 py-3 my-2 w-[280px] rounded absolute right-2"
    role="alert">
    <span class="inline" onclick="return this.parentNode.remove();"><svg class="fill-current h-6 w-6" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" /></svg>
    </span>
    <span class="block sm:inline pl-2">
        <strong class="font-bold">Error!</strong>
    </span>
    <span class="block sm:inline pl-2">
        ' . $showError . '
    </span>
</div>';
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
                class="w-full mt-4 py-2 bg-green-600 text-white font-semibold rounded-lg hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500">
                Sign Up
            </button>
        </form>
    </div>
</div>
<?php require_once 'partials/foot.php'; ?>