<html>
<head></head>
<body>
    <form method="post" action="">
        <?php if($mode == "add"){
            ?>
            <div>Id: <input name="id" value="{{ $student->id }}"/></div>
        <?php }
            else { ?>
            <input type="hidden" name="id" value="{{ $student->id }}"/>
        <?php
            }
         ?>

        <div>Name: <input name="name" value="{{ $student->name }}"/></div>
        <div>Address: <input name="address" value="{{ $student->address }}"/></div>
        <div>Major: <input name="major" value="{{ $student->major }}"/></div>

        <div><button type="submit">Submit</button></div>
        {!! csrf_field() !!}
    </form>
</body>
</html>
