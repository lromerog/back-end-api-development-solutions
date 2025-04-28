Count songs in tracks database: 
	SELECT COUNT(*) 
		FROM tracks;

All songs that contain the word 'you': 
	SELECT *
		FROM tracks
		WHERE Name LIKE '%you%'

All songs that contain the word 'you' and 'i': 
	SELECT *
		FROM tracks
		WHERE Name LIKE '%you%' 
			AND Name LIKE '%i%'

All songs that contain the word 'you' and 'i' and where the album name contains the word 'chron' or 'vol': 

	SELECT tracks.*, albums.*
		FROM tracks
		JOIN albums ON tracks.AlbumId = albums.AlbumId
		WHERE tracks.Name LIKE '%you%' 
			AND tracks.Name LIKE '%i%' 
			AND (albums.Title LIKE '%chron%' 
				OR albums.Title LIKE '%vol%'
			)

All songs that contain the word 'you' and 'i' and where the album name contains the word 'chronicles': 

	SELECT tracks.*, albums.*, artists.*
		FROM tracks
		JOIN albums ON tracks.AlbumId = albums.AlbumId
		JOIN artists ON albums.ArtistId = artists.ArtistId
		WHERE tracks.Name LIKE '%you%' 
			AND tracks.Name LIKE '%i%' 
			AND (albums.Title LIKE '%chron%' 
				OR albums.Title LIKE '%vol%'
			)

A list of all the artists that have an album with a title that contains 'chron' or 'vol' with a song that contains the word 'you' and 'i'

	SELECT DISTINCT artists.Name
		FROM tracks
		JOIN albums ON tracks.AlbumId = albums.AlbumId
		JOIN artists ON albums.ArtistId = artists.ArtistId
		WHERE tracks.Name LIKE '%you%' 
			AND tracks.Name LIKE '%i%' 
			AND (albums.Title LIKE '%chron%' 
				OR albums.Title LIKE '%vol%'
			)

Select all playlists that contain the song 'I put a spell on you'

	Select song and get ID:
	SELECT TrackId
		FROM tracks
		WHERE Name LIKE '%I put a spell on you%'

	Select playlists:
	SELECT playlist_track.PlaylistId, playlists.Name
		FROM playlist_track
		JOIN playlists ON playlist_track.PlaylistId = playlists.PlaylistId
		WHERE playlist_track.TrackId = 676


All songs of the playlist that contain the song 'I put a spell on you'
	SELECT tracks.Name, playlist_track.PlaylistId
		FROM tracks
		JOIN playlist_track ON tracks.TrackId = playlist_track.TrackId
		WHERE playlist_track.PlaylistId = 1