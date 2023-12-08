<!DOCTYPE html>
<html>
<head>
    <title>Generate .bat File</title>
    <!-- Add CSS or link to your CSS file for styling -->
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        .header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 20px;
        }
        .logo {
            width: 100px;
            height: auto;
        }
        form {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"] {
            width: 300px;
            padding: 8px;
        }
        button {
            padding: 8px 15px;
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
        }
        a {
            display: block;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
        <img src="{{url('https://laravel.com/img/logotype.min.svg')}}" alt="Laravel Logo" class="logo">

    <div class="header">
	
		<h1>Laravel Artisan Command Changer</h1>
    </div>

    <form method="POST" action="{{ route('generateFile') }}">
        @csrf
        <label for="command">Enter your Desirable command:</label>
        <input type="text" id="command" name="command" placeholder="Change the PHP Artisan Command e.x Pa" required>
        <button type="submit">Generate File</button>
    </form>

    @if(isset($laravelProjectPath))
        <a href="{{ route('generateFile') }}" target="_blank">Download Generated File</a>
        <p>Laravel Project Path: {{ $laravelProjectPath }}</p>
    @endif
		<footer><?php echo date('Y'); ?> &copy; Hashaam Zahid</footer>

</body>
</html>
