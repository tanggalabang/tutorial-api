<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- include libraries(jQuery, bootstrap) -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
</head>

<body>
    <div class="container">
        <form action="/update/{{$post->id}}" method="post">
            @csrf
            <label for="">Title:</label>
            <input type="text" class="form-control" name="title" value="{{$post->title}}">
            <label for="">Description:</label>
            <textarea name="description" id="description" cols="30" rows="10">{{$post->description}}</textarea>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script>
        $('#description').summernote({
            placeholder: 'description.....',
            tabsize: 2,
            height: 300
        });
    </script>
</body>

</html>