<div>
    <section class="min-h-screen flex items-center justify-center bg-gradient-to-br from-green-400 via-blue-500 to-purple-600">
        <div class="bg-white p-10 rounded-xl shadow-lg w-full max-w-md">
            <div class="text-center mb-8">
                <h1 class="text-3xl font-bold text-gray-800">Welcome Back</h1>
                <p class="text-gray-500 text-sm">Login to access your account</p>
            </div>

            <form wire:submit="submitform" class="space-y-6">
                <!-- Email Input -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                    <input wire:model="email" type="email" id="email" name="email" placeholder="rafi.workfile@gmail.com"
                        class="w-full mt-2 px-4 py-3 rounded-lg bg-gray-50 border border-gray-300 focus:ring-4 focus:ring-blue-400 focus:border-blue-400 text-gray-800 shadow transition-all duration-300 ease-in-out"
                        required>
                    @error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>

                <!-- Password Input -->
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input wire:model="password" type="password" id="password" name="password" placeholder="••••••••"
                        class="w-full mt-2 px-4 py-3 rounded-lg bg-gray-50 border border-gray-300 focus:ring-4 focus:ring-blue-400 focus:border-blue-400 text-gray-800 shadow transition-all duration-300 ease-in-out"
                        required>
                    @error('password') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>

                <!-- Button -->
                <button type="submit"
                    class="w-full py-3 rounded-lg bg-gradient-to-r from-blue-600 to-purple-600 text-white font-semibold hover:scale-105 hover:shadow-lg transition-transform duration-200 ease-in-out">
                    Login
                </button>

                <!-- Footer Links -->
                <div class="text-center mt-4">
                    <p class="text-sm text-gray-500">Don’t have an account?
                        <a href="\" class="text-blue-500 hover:underline">Sign up here</a>
                    </p>
                </div>
            </form>

            <!-- Loading State -->
            <div wire:loading wire:target="submitform" class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center rounded-xl">
                <div class="text-white font-medium text-lg">Processing...</div>
            </div>
        </div>
    </section>
</div>
