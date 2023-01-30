<x-app-layout>

</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include ("admin.admincss");
  </head>
  <body>
  <div class="container-scroller">
    @include ("admin.navbar");

    <div style ="position:relative; top:60px; right:-160px">
        <form action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div>
                <label>Title</label>
                <input style="color:blue;" type="text" name="title" placeholder="write a title" required>
            </div>
            <div>
                <label>Price</label>
                <input style="color:blue;" type="number" name="price" placeholder="write a price" required>
            </div>
            <div>
                <label>Image</label>
                <input type="file" name="image" >
            </div>
            <div>
                <label>Description</label>
                <input style="color:blue;" type="text" name="description" placeholder="write a Description" required>
            </div>
            <div>
                <input type ="submit" value ="Save">
            </div>
        </form>
        <div> 
            <table>
                <tr bgcolor="black">
                    <th style ="padding:30px">Food Name</th>
                    <th style ="padding:30px">Name</th>
                    <th style ="padding:30px">Description</th>
                    <th style ="padding:30px">Images</th>
                    <th style ="padding:30px">Action</th>
                    <th style ="padding:30px">Action 2</th>



                </tr>
                @foreach($data as $data)
                <tr align="center">
                    <td>{{$data->Title}}</td>
                    <td>{{$data->price}}</td>
                    <td>{{$data->description}}</td>
                   <!-- if someone click the delete button it will send the id to the route which is in web.php -->
                    <td><img height="200px" width="200px" src="/foodimage/{{$data->image}}" alt=""></td>
                    <td> <a href="{{url('/deletemenu',$data->id)}}">Delete</a></td>
                    <td> <a href="{{url('/updateview',$data->id)}}">Update</a></td>

                    
                </tr>
                @endforeach
            </table>

    </div>
    </div>
</div>
    @include ("admin.adminscript");
   
  </body>
</html>