<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <link href="/css/createblog.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
</head>

<body>
    <div class="container-fluid p-4">
        <div class="row justify-content-md-center">
            <div class="col-md-9">
                <a href="/"><i class="bi bi-house-door"></i></a>
                <h1 class="text-black">Blog for Admin</h1>
                <form action="/post" method="post">
                    @csrf
                    <label for="">Title:</label>
                    <input type="text" class="form-cont" name="title"><br>

                    <label for="">Title image:</label>
                    <input type="file" id="img" name="titleimg" accept="image/*"><br>

                    <label for="">Category:</label>
                    <select class="form-control form-control-sm" name="category">
                        <option>บทความ</option>
                        <option>องค์กร</option>
                    </select>

                    <label for="">Description:</label>
                    <textarea name="description" id="summernote" cols="30" rows="10"></textarea>
                    <br>
                    <button type="submit" class="btn btn-lg ">Submit</button>
                </form>
            </div>
        </div>
    </div>


    <script>
        $('#summernote').summernote({
            placeholder: 'บทความ...',
            tabsize: 2,
            height: 300
        });
    </script>
</body>

</html>