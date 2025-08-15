<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title','Laravel Dashboard')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<script>
    document.querySelector('.sidebar-toggle').addEventListener('click', function () {
    document.querySelector('.sidebar-container').classList.toggle('collapsed');
    });
</script>
<body>
    @include('partials.navbar') <!-- Top navbar -->

    <div class="layout-container"> <!-- Sidebar + Main content -->
        @include('partials.sidebar')

        <main>
            @yield('content')
        </main>
    </div>

    @include('partials.footer')
</body>
</html>
<!-- <style>
/* Reset and base styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #f5f7fa;
    color: #333;
}

/* Layout container */
body > div {
    display: flex;
    min-height: 100vh;
}

/* Sidebar styles */
.sidebar {
    width: 220px;
    background-color: #2c3e50;
    padding: 20px;
    color: white;
}

.sidebar ul {
    list-style: none;
}

.sidebar li {
    margin: 15px 0;
}

.sidebar a {
    color: white;
    text-decoration: none;
    font-weight: bold;
    display: block;
    padding: 8px;
    border-radius: 4px;
    transition: background 0.3s;
}

.sidebar a:hover {
    background-color: #34495e;
}

/* Main content styles */
main {
    flex: 1;
    padding: 40px;
    background-color: #ecf0f1;
}

/* Navbar styles */
/* Navbar styles */
.navbar {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    height: 60px;
    background-color: #3498db;
    color: white;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0 30px;
    z-index: 1000;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}

.navbar-brand {
    font-size: 20px;
    font-weight: bold;
}

.navbar-links {
    list-style: none;
    display: flex;
    gap: 20px;
}

.navbar-links li a {
    color: white;
    text-decoration: none;
    font-weight: 500;
    transition: color 0.3s;
}

.navbar-links li a:hover {
    color: #ecf0f1;
}

/* Push content down to avoid overlap */
.layout-container {
    display: flex;
    margin-top: 60px; /* Same as navbar height */
}


/* Footer styles */
footer {
    background-color: #bdc3c7;
    text-align: center;
    padding: 10px;
    font-size: 14px;
    color: #2c3e50;
}

/* Form container for login/register */
.form-container {
    max-width: 400px;
    margin: 50px auto;
    padding: 30px;
    background: white;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
}

.form-container h2 {
    text-align: center;
    margin-bottom: 20px;
}

.form-container label {
    display: block;
    margin-top: 10px;
    font-weight: bold;
}

.form-container input {
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

.form-container button {
    width: 100%;
    padding: 10px;
    margin-top: 20px;
    background-color: #3498db;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.form-container button:hover {
    background-color: #2980b9;
}
</style> -->