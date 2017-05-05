<html>
<head></head>
<body>
    <a href="{{ url("/student/add/") }}">Add</a>

    <table>
        <thead>
            <th>Name</th>
            <th>Address</th>
            <th>Major</th>
            <th></th>
        </thead>
        <tbody>
            <?php foreach($select as $each){ ?>
                <tr>
                    <td>{{ $each->name }}</td>
                    <td>{{ $each->address }}</td>
                    <td>{{ $each->major }}</td>
                    <td><a href="{{ url("/student/view/" . $each->id) }}">View</a>
                        <a href="{{ url("/student/edit/" . $each->id) }}">Edit</a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>
