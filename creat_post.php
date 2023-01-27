<?php
 include('functions.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tinymce/tinymce-jquery@1/dist/tinymce-jquery.min.js"></script>
  </head>
  <body>
  <div class="container pt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="card">
                    <div class="card-header bg-primary">
                        <h2 class="text-center text-light">Fill Up The Post Ditails</h2>
                    </div>
                    <div class="card-body">
                        <form action="post_ditails.php" method="POST">

                            <div class="mb-3">
                                <label for="">Post Title</label>
                                <input type="text" name="title" class="form-control">
                                <span style="color:red"></span>
                            </div>
                            <div class="mb-3">
                                <label for="">Post Ditails</label>
                                <textarea id="tiny" name="p_ditails" class="form-control"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="">Post Author</label>
                                <input type="text" name="author" class="form-control">
                                <span style="color:red"></span>
                            </div>
                            <div class="mb-3">
                                <label for="">Post Date And Time</label>
                                <input type="text" name="date" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">Mins To Read</label>
                                <input type="text" name="read_time" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">Related Post</label>
                                <input type="text" name="r_post1" class="form-control mt-1">
                                <input type="text" name="r_post2" class="form-control mt-1">
                                <input type="text" name="r_post3" class="form-control mt-1">
                                <input type="text" name="r_post4" class="form-control mt-1">
                                <input type="text" name="r_post5" class="form-control mt-1">
                            </div>

                            <div class="mb-3">
                                <input type="submit" value="Post Now" class="btn btn-primary">
                                <a href="index.php" class="btn btn-danger">Cancel</a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
      $('textarea#tiny').tinymce({
        height: 500,
        menubar: false,
        plugins: [
           'a11ychecker','advlist','advcode','advtable','autolink','checklist','export',
           'lists','link','image','charmap','preview','anchor','searchreplace','visualblocks',
           'powerpaste','fullscreen','formatpainter','insertdatetime','media','table','help','wordcount'
        ],
        toolbar: 'undo redo | a11ycheck casechange blocks | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist checklist outdent indent | removeformat | code table help'
      });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>