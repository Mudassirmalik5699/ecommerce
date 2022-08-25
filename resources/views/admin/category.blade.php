<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Penal</title>
    <!-- plugins:css -->
    @include('admin.css')
    
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_navbar.html -->
            @include('admin.header')
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                      <!-- Alert essage For add category  -->
                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            {{ session()->get('message') }}
                        </div>
                    @endif
                    <div class="div_center">
                        <h2 class="h2_font"> Add Category </h2>
                        <form action="{{ url('/add_category') }}" method="POST">
                            @csrf
                            <input type="text" class="input_color" name="category" id=""
                                placeholder="Enter category Name">
                            <input type="submit" name="submit" class="btn btn-primary" value="Add category">
                        </form>
                    </div>
                    <table class="center">
                        <tr>
                            <td>Sr No</td>
                            <td>Category</td>
                            <td>Action</td>
                        </tr>
                        @foreach ( $data as $data)
                            
                       
                        <tr>
                            <td>{{ $data->id }}</td>
                            <td>{{ $data->category_name }}</td>
                            <td><a onclick="return confirm('Are you sure you want to delete this Category?');" href="{{url ('delete_category',$data->id) }}" class="btn btn-danger">Delete</a></td>
                        </tr>
                        @endforeach
                    </table>

                </div>
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
</body>

</html>
