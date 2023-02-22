<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device=width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>
        @yield('title')
    </title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2>Insert data into Database</h2>
                </div>
                <div class="card-body">
                    <form action="{{ url('insert-data') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="mb-3">
                            <label class="form-label">Title</label>
                            <input type="text" class="form-control" name="title" placeholder="Enter title">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Category</label>
                            <input type="text" class="form-control" name="category" placeholder="Enter category">
                        </div>                                <div class="mb-3">
                            <label class="form-label">Description</label>
                            <input type="text" class="form-control" name="description" placeholder="Enter description">
                        </div>                                <div class="mb-3">
                            <label class="form-label">Photo</label>
                            <input type="text" class="form-control" name="photo" placeholder="Enter link to photo">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
