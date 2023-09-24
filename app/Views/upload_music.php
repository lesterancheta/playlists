<!-- app/Views/music/upload_music.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Upload Music</title>
</head>
<body>
    <h1>Upload Music</h1>
    <form action="/music/upload" method="post" enctype="multipart/form-data">
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" required><br>

        <label for="artist">Artist:</label>
        <input type="text" name="artist" id="artist" required><br>

        <label for="music_file">Music File:</label>
        <input type="file" name="music_file" id="music_file" accept=".mp3" required><br>

        <button type="submit">Upload</button>
    </form>
</body>
</html>
