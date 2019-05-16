<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>damateba</title>

</head>
<body>
<div class="container mt-5 ">
            <h1 class="mx-auto d-flex justify-content-center">მონაცემების შევსება </h1>
            <form class="" action="action.php" method="Post" enctype="multipart/form-data">
                <div class="form-row d-flex justify-content-center">
                  <div class="col-4 mt-5">
                    <input type="text" name="satauri" class="form-control" placeholder="სათაური">
                  </div>
                  <div class="col-9 mt-3 d-flex justify-content-center">
                    <textarea name="agwera" id="" cols="80" rows="10" placeholder="აღწერა"></textarea>
                  </div>
                  <div class="custom-file col-3 mt-2 mr-5 ">
                        <input type="file" class="custom-file-input" name="file" id="inputGroupFile01"
                            aria-describedby="inputGroupFileAddon01">
                        <label class="custom-file-label"   for="inputGroupFile01" >სურათის ატვირთვა</label>
                  </div>
                  <input class="btn btn-info col-2 mt-2" name="submit" type="submit" value="შესრულება">

                </div>
              </form>
        </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    
</body>
</html>