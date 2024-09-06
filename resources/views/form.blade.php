<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Kirim Pesan</title>
</head>
<body>
    <h1>Send Message</h1>

    <!-- Form untuk mengirim data message -->
    <form action="/home" method="POST">
        @csrf
        <label for="message">Message:</label>
        <input type="text" name="message" id="message" required>
        <button type="submit">Send</button>
    </form>
</body>
</html>
