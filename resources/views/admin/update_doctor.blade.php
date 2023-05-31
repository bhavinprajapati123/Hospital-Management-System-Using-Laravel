
<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    <!-- Required meta tags -->
    <style type="text/css">
    label
    {
        display: inline-block;
        width: 200px;

    }
    </style>

    @include('admin.css');
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
      <!-- partial -->
        @include('admin.navbar')
        <!-- partial -->

        <div class="container-fluid page-body-wrapper">

        <div align="center" class="container" style="padding-top: 100px">


            <form action="{{url('editdoctor',$data->id)}}" method="POST" enctype="multipart/form-data">

                @csrf
                <div style="padding: 15px">
                    <label>Doctor Name</label>
                    <input type="text" name="name" style="color: black" value="{{$data->name}}">
                </div>

                <div style="padding: 15px">
                    <label>Phone</label>
                    <input type="number" name="phone" style="color: black"value="{{$data->phone}}">
                </div>

                <div style="padding: 15px">
                    <label>Speciality</label>
                    <input type="text" name="speciality"style="color: black" value="{{$data->speciality}}">
                </div>

                <div style="padding: 15px">
                    <label>Room No</label>
                    <input type="text" name="room" style="color: black"value="{{$data->room}}">
                </div>


                <div style="padding: 15px">
                    <label>Old Image</label>
                   <img height="150" width="150" src="doctorimage/{{$data->image}}">
                </div>

                <div style="padding: 15px">
                    <label>Change Image</label>
                    <input type="file" name="file">
                </div>

                <div style="padding: 15px">
                    <input type="submit" name="submit" class="btn btn-primary">
                </div>
            </form>

        </div>

        </div>


        @include('admin.script')
  </body>
</html>
