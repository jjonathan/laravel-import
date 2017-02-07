<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>
</head>
<body>
<form method="POST" role="form" enctype="multipart/form-data">
    {{ csrf_field() }}
    <input type="file" name="json">
    <input type="submit" name="">
</form>
</body>
</html>