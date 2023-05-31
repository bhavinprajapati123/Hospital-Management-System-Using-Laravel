<!DOCTYPE html>
<html lang="en">
  <head>
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

            <div class="container" align="center" style="padding-top: 100px">



                <form action="{{url('upload_doctor')}}" method="POST" enctype="multipart/form-data">

                    @csrf

                    <div style="padding: 15px">
                        <label>Doctor Name</label>
                        <input type="text" style="color:black" name="name" placeholder="Enter The Name">
                    </div>

                    <div style="padding: 15px">
                        <label>Phone</label>
                        <input type="tel" style="color:black" name="number" placeholder="Enter The Number">
                    </div>


                    <div style="padding: 15px">
                        <label>Speciality</label>
                        <select name="speciality" style="color: black">
                            <option >----Select Option---</option>
                            <option value="Skin">Skin</option>
                            <option value="Heart">Heart</option>
                            <option value="Eyes">Eyes</option>
                            <option value="Nose">Nose</option>
                            <option value="Throat">Throat</option>
                            <option value="Pediatrician">Pediatrician</option>
                        </select>
                    </div>

                    <div style="padding: 15px">
                        <label>Room Number</label>
                        <input type="text" style="color:black" name="room" placeholder="Enter The RoomNumber">
                    </div>

                    <div style="padding: 15px">
                        <label>Doctor Image</label>
                        <input type="file" name="file">
                    </div>

                    <div style="padding: 15px">
                        <input type="submit" class="btn btn-success">
                    </div>

                </form>
            </div>
        </div>
        @include('admin.script')
  </body>
</html>
