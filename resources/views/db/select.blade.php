<html>
<head></head>
<body>
    <table>
        <thead>
            <th>Col 1</th>
            <th>Col 2</th>
            <th>Col 3</th>
            <th>Update</th>
            <th>Delete</th>
        </thead>
        <tbody>
            <?php foreach($select as $each){ ?>
                <tr>
                    <form method="post" action="{!! url('/db/update') !!}">
                        <td>Col 1: <input name="col1" value="{{ $each->col1 }}" /></td>
                        <td>Col 2: <input name="col2" value="{{ $each->col2 }}" /></td>
                        <td>Col 3: <input name="col3" value="{{ $each->col3 }}" /></td>
                        <td><button type="submit">Update</button></td>

                        <input type="hidden" name="id" value="{{ $each->id }}" />
                        {!! csrf_field() !!}
                    </form>
                    <form method="post" action="{!! url('/db/delete/') !!}">
                        <td><button type="submit">X</button></td>

                        <input type="hidden" name="id" value="{{ $each->id }}" />
                        {!! csrf_field() !!}
                    </form>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <hr/>
    <form method="post" action="{!! url('/db/insert') !!}">
        <div>Col 1: <input name="col1" /></div>
        <div>Col 2: <input name="col2" /></div>
        <div>Col 3: <input name="col3" /></div>
        <div><button type="submit">Submit</button></div>
        {!! csrf_field() !!}
    </form>
</body>
</html>
