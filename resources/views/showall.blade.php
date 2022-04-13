
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Home</title>
</head>
<body>
@include('nav')
    <div class="container">
    
    @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert"> 
        <strong> {{session('success')}}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        
    </div>
    
    @elseif (session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert"> 
        <strong> {{session('error')}}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    
    </div>
    @endif
    <div class="shadow p-3 mb-5 bg-body rounded" >
    <h2 style="float: left; padding-top: 20px; color:green" > Bio Data Record </h2>
    <div style="float: right; padding-top: 20px;">
    <a href="{{url('bioform')}}"><button type="button" class ="btn btn-success ">Add Record</button></a>
    </div>
    
        <table class="table table-bordered table-hover">
            <tr>
                <th>S/NO.</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>ACTION</th>
            </tr>
            
            @foreach ($show as $showall)
            <tr>     
                <td>{{$showall->id}}</td>
                <td>{{$showall->fname}}</td>
                <td>{{$showall->lname}}</td>
                <td>
                    <a href="{{url('biodata/'. $showall->id . '/edit')}}"><button type="button" class ="btn btn-success">Edit</button></a>
                    {{-- <a href="{{url('delete/'. $value->id)}}"><button type="button" class ="btn btn-danger">Delete</button></a> --}}
                    <a href="{{url('biodata/'. $showall->id . '/delete')}}"><button type="button" class ="btn btn-danger">Delete</button></a>

                </td>
                </td>
                
            </tr> 
            @endforeach
        </table>
    </div>
    
        <!-- Optional JavaScript; choose one of the two! -->
    
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
        <!-- Option 2: Separate Popper and Bootstrap JS -->
    
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    </div>
    </body>
    </html>
    
