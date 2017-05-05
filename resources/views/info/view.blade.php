<html>
<head></head>
<body>
    <div>
        Message: {{ $message }}
    </div>
    <div>
        Message dalam format php: <?php echo $message; ?>
    </div>
    <hr/>
    <form method="post" action="">
        <div>Name: <input name="name" /></div>
        <div>Message: <input name="message" /></div>
        <div><button type="submit">Submit</button></div>
        {!! csrf_field() !!}
    </form>
</body>
</html>
