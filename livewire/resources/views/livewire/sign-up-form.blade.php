<div>
    <section
        class="min-h-screen flex items-center justify-center bg-gradient-to-r from-blue-500 via-purple-600 to-pink-600">
        <div class="bg-white px-10 py-5 rounded-3xl shadow-2xl w-full max-w-lg">
            <div class="text-center mb-8">
                <h1 class="text-4xl font-extrabold text-gray-900">Create Your Account</h1>
                <p class="text-gray-600 text-lg">Join us today and enjoy the benefits!</p>
            </div>

            <form wire:submit="submitform" class="space-y-4">
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-800">Full Name</label>
                    <input wire:model="name" type="text" name="name" placeholder="Abdullah Al Rafi"
                        class="w-full px-6 py-3 mt-2 text-gray-900 rounded-lg border border-gray-300 shadow-sm focus:ring-4 focus:ring-indigo-500 focus:border-indigo-500 transition-all duration-300 ease-in-out"
                        required>
                    @error('name')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-800">Email Address</label>
                    <input wire:model="email" type="email" name="email" placeholder="rafi.workfile@gmail.com"
                        class="w-full px-6 py-3 mt-2 text-gray-900 rounded-lg border border-gray-300 shadow-sm focus:ring-4 focus:ring-indigo-500 focus:border-indigo-500 transition-all duration-300 ease-in-out"
                        required>
                    @error('email')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-800">Password</label>
                    <input wire:model="password" type="password" name="password" placeholder="••••••••"
                        class="w-full px-6 py-3 mt-2 text-gray-900 rounded-lg border border-gray-300 shadow-sm focus:ring-4 focus:ring-indigo-500 focus:border-indigo-500 transition-all duration-300 ease-in-out"
                        required>
                    @error('password')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label for="cpassword" class="block text-sm font-medium text-gray-800">Confirm Password</label>
                    <input wire:model="cpassword" type="password" name="cpassword" placeholder="••••••••"
                        class="w-full px-6 py-3 mt-2 text-gray-900 rounded-lg border border-gray-300 shadow-sm focus:ring-4 focus:ring-indigo-500 focus:border-indigo-500 transition-all duration-300 ease-in-out"
                        required>
                    @error('cpassword')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <button name="submitform" type="submit"
                    class="w-full bg-gradient-to-r from-indigo-600 to-purple-600 text-white font-semibold py-3 rounded-lg shadow-md hover:scale-105 transition-all duration-200 ease-in-out focus:ring-4 focus:ring-indigo-500">
                    Create Account
                </button>

                <div class="text-center mt-4">
                    <p class="text-sm text-gray-600">
                        Already have an account? <a href="\login" class="text-indigo-600 hover:underline">Login
                            here</a>
                    </p>
                </div>
            </form>

            <div wire:loading wire:target="submitForm"
                class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center rounded-3xl">
                <div class="text-white font-semibold text-lg">Processing...</div>
            </div>
        </div>
    </section>
</div>
