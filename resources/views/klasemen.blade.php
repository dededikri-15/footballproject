<h1>Klasemen Liga</h1>
<table border="1">
    <tr>
        <th>Nama Tim</th>
        <th>Liga</th>
        <th>Poin</th>
    </tr>
    @foreach ($teams as $team)
        <tr>
            <td>{{ $team->name }}</td>
            <td>{{ $team->league_name }}</td>
            <td>{{ $team->points }}</td>
        </tr>
    @endforeach
</table>
