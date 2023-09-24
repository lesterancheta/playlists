<!-- app/Views/playlists/create_playlist.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Create Playlist</title>
</head>
<body>
    <h1>Create Playlist</h1>
    <form action="/playlists/create" method="post">
        <label for="playlist_name">Playlist Name:</label>
        <input type="text" name="playlist_name" id="playlist_name" required><br>

        <button type="submit">Create Playlist</button>
    </form>
</body>
</html>
