<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>result</h1>
  @for ($i = $cont; $i >= 1; $i--)
  <p>{{ $i }}</p>
  @endfor
</body>
</html>