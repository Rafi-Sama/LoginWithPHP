<?php require_once 'partials/header.php'; ?>
<?php require_once 'partials/loginreq.php'; ?>
<?php
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
                class="w-full mt-4 py-2 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">Login</button>
        </form>
    </div>
</div>
<?php require_once 'partials/foot.php'; ?>