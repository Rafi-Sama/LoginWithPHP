<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Dashboard</title>
</head>
<body class="bg-gray-100 dark:bg-gray-900 text-gray-800 dark:text-gray-200 min-h-screen flex items-center justify-center">

    <div class="max-w-3xl mx-auto p-8 bg-white dark:bg-gray-800 shadow-lg rounded-lg">
        <!-- Header -->
        <header class="flex items-center justify-between">
            <h1 class="text-4xl font-extrabold text-gray-800 dark:text-gray-100">Dashboard</h1>
            <livewire:logout />

        </header>

        <!-- Content Section -->
        <main class="mt-8">
            <div class="text-center">
                <h2 class="text-3xl font-semibold mb-4">Welcome to the Dashboard</h2>
                <p class="text-gray-600 dark:text-gray-300 text-lg">
                    Monitor your activities and manage your account.
                </p>
            </div>
            <!-- Counter Section -->
            <livewire:counter />
        </main>
    </div>
</body>
</html>
