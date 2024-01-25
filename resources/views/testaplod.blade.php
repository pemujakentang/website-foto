<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>test ocr</title>
</head>
<body>
    <h1>test ocr</h1>

    <form action="{{ route('upload') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label for="file">Upload here</label>
        <input type="file" name="foto" class="form-control-file" id="file">
        <button class="btn btn-success mt-3" type="submit" name="submit">OCR</button>

    </form>

</body>
</html>
