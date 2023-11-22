<!DOCTYPE html>
<html>
<head>
</head>
<body>
<table>
<tr>
<th>Title</th>
<th>Artist</th>
</tr>
@foreach ($songs as $song)
<tr>
<td>{{ $song->getTitle() }}</td>
<td>{{ $song->artist() }}</td>
</tr>
@endforeach
</table>
</body>
</html>


