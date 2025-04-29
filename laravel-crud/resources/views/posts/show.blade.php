<!DOCTYPE html>
<html>
<head>
    <title>Laravel CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-12">
                <div class="d-flex justify-content-between align-items-center">
                    <h2>Show Post</h2>
                    <a class="btn btn-primary" href="{{ route('posts.index') }}">Back</a>
                </div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Title:</strong>
                    {{ $post->title }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                <div class="form-group">
                    <strong>Description:</strong>
                    {{ $post->description }}
                </div>
            </div>
        </div>
    </div>
</body>
</html>