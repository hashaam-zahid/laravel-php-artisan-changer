<!DOCTYPE html>
<html>
<head>
    <title>Copy Command and Enjoy :)</title>
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
        .gif-container {
            margin-bottom: 20px;
        }
        .command {
            font-family: monospace;
        }
        .copy-button {
            padding: 8px 15px;
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Copy the location of CMD Target Field</h1>
    </div>

    <div class="gif-container">
        <img src="{{ route('show-gif') }}" alt="Guide GIF" width="200" height="300">
    </div>

<p style="font-weight:bold">
1- Now copy the location the command:

<br>
2- Paste in Target Field of CMD Property
<br>
3- Go To Laravel Folder Location With CMD Command and Enjoy :)
	</p>
    <p class="command" id="commandText">%windir%\system32\cmd.exe /k {{ $laravelProjectPath }}/storage/app/{{ $filePath }}</p>

    <!-- Button to copy the command -->
    <button class="copy-button" onclick="copyCommandToClipboard()">Copy Command</button>

    <!-- Script to copy command to clipboard -->
    <script>
        function copyCommandToClipboard() {
            var commandText = document.getElementById('commandText');
            var textArea = document.createElement('textarea');
            textArea.value = commandText.innerText;
            document.body.appendChild(textArea);
            textArea.select();
            document.execCommand('copy');
            document.body.removeChild(textArea);
            alert('Command copied to clipboard!');
        }
    </script>
	
	<footer><?php echo date('Y'); ?> &copy; Hashaam Zahid</footer>
</body>
</html>