<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IP Display</title>
</head>
<body>
    <canvas id="ipCanvas" width="200" height="50" style="border:1px solid #000;"></canvas>

    <script>
        // Function to get the user's IP address
        async function getIP() {
            const response = await fetch('https://api64.ipify.org?format=json');
            const data = await response.json();
            return data.ip;
        }

        // Function to draw the IP address on the canvas
        async function drawIP() {
            const canvas = document.getElementById('ipCanvas');
            const context = canvas.getContext('2d');

            // Get the user's IP address
            const ip = await getIP();

            // Draw the IP address on the canvas
            context.fillStyle = 'white';
            context.fillRect(0, 0, canvas.width, canvas.height);
            context.fillStyle = 'black';
            context.font = '14px Arial';
            context.fillText('Your IP: ' + ip, 10, 20);
        }

        // Call the drawIP function
        drawIP();
    </script>
</body>
</html>
