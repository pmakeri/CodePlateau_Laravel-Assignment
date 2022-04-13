
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Edit Form</title>
  </head>
  <body>
      @include('nav')
    <h1><h1>Edit Data Registration Form</h1></h1>

    <form action="{{url('update/' . $bio->id )}}" method="POST" class="shadow p-3 mb-5 bg-body rounded" >
        @csrf
        <div class="mb-3">
          <label for="fname" class="form-label"><b>First Name:</b></label>
          <input type="text" name= 'fname' class="form-control" id="fname" aria-describedby="" value="{{$bio->fname}}">
        </div>
        <div class="mb-3">
          <label for="lname" class="form-label"><b>Last Name:</b></label>
          <input type="text" name= 'lname' class="form-control" id="lname" value="{{$bio->lname}}">
        </div>
        <input type="hidden" name="bio_id" value="{{$bio->bio_id}}">
        <input type="submit" class="btn btn-primary" value="Update">
      </form>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>