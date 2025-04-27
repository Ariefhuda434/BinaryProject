<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    @vite('resources/css/app.css')

</head>
<body class="h-screen bg-white font-sans">
    <div class="flex justify-center items-center h-full">
        <div class="w-[400px] p-8 rounded-lg shadow-md bg-[#a8b387]">
    
            <form method="POST" id="registerForm" class="transition-all duration-500 ease-in-out hidden">
                <h2 class="text-2xl font-semibold mb-4" id="signup">Register</h2>
                <input type="text" name="full_name" id="full_name" placeholder="Full Name *" required class="w-full p-3 mb-4 border rounded text-sm bg-gray-100">
                <input type="text" name="username" id="username" placeholder="User Name *" required class="w-full p-3 mb-4 border rounded text-sm bg-gray-100">
                <input type="email" name="email" id="email" placeholder="Email *" required class="w-full p-3 mb-4 border rounded text-sm bg-gray-100">
                <input type="password" name="password" id="password" placeholder="Password *" required class="w-full p-3 mb-4 border rounded text-sm bg-gray-100">
                <button type="submit" class="w-full p-3 bg-[#5e6f52] text-white rounded">Create</button>
                <p class="mt-4 text-sm">Already registered? <a href="#" onclick="showLoginForm()" class="text-[#234666]">Sign In</a></p>
            </form>

            <form method="POST" class="transition-all duration-500 ease-in-out" id="loginForm">
                <h2 class="text-2xl font-semibold mb-4" id="signin">Login</h2>
                <input type="text" name="login_username" id="login_username" placeholder="User Name *" required class="w-full p-3 mb-4 border rounded text-sm bg-gray-100">
                <input type="password" name="login_password" id="login_password" placeholder="Password *" required class="w-full p-3 mb-4 border rounded text-sm bg-gray-100">
                <button type="submit" class="w-full p-3 bg-[#5e6f52] text-white rounded">Login</button>
                <p class="mt-4 text-sm">Not registered? <a href="#" onclick="showRegisterForm()" class="text-[#234666]">Sign Up</a></p>
            </form>
        </div>
    </div>

    <script>

function showRegisterForm() {
    document.getElementById("registerForm").classList.remove("hidden");
    document.getElementById("loginForm").classList.add("hidden");
}

function showLoginForm() {
    document.getElementById("loginForm").classList.remove("hidden");
    document.getElementById("registerForm").classList.add("hidden");
}
    </script>
</body>
</html>
