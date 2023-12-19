<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css">

{{-- <style>
    body{
        padding: 3rem;
    }
    h1{
        color: crimson;
    }
    table{
        width: 700px;
       border-collapse: collapse;
    }
    th{
        border: 1px solid #333;
        background-color: #ccc;
    }

    td{
        border: 1px solid #534848;
    }
    a.btnAdd{
        display: block;
        text-align: center;
        width: 100px;
        padding: 15px;
        background-color: rgb(19, 99, 136);
        text-decoration: none;
        font-size: 1rem;
        transition: .2s ease;
        color: #ffff;
        border-radius: 8px;
        font-weight: bold;
        letter-spacing: 2px;
    }
    a.btnAdd:hover{
        background-color: #333;
    }
</style> --}}
<style>
    body{
        width: 80%;
        margin: auto;
        background-color: rgb(142, 164, 187);
        padding-top: 1.5rem;
    }   
    h1{
        color: #061f9d;
        margin-bottom: 1rem;
        margin-top: 1rem;
        text-shadow: 2px 2px #ffffff5d;
    }
    .btn-info{
        color: #fff;
        padding: 8px 15px;
    }
    .btn-info:hover{
        box-shadow: 0 4px 15px #33333352;
    }
</style>
<body>
    <a href={{route("product.create")}}  class="btn btn-info">ADD NEW</a>

<h1>This is front blade php. (product)</h1>




<table class="table table-dark table-striped-columns">
    <tr>
        <th>PID</th>
        <th>Title</th>
        <th>Qty</th>
        <th>Price</th>
        <th>Action</th>
    </tr>
    
    @foreach ($productList as $val ) <!-- #productList is puppet varible -->
    <tr>
        <td>{{$val->pid}} </td>
        <td>{{$val->title}} </td>
        <td>{{$val->qty}} </td>
        <td>{{$val->price}} </td>
        <td>
            <form action="{{route("product.destroy",$val->pid)}}" method="post">
                @csrf
                @method("DELETE")
                <a href={{route("product.show",$val->pid)}}  class="btn btn-primary">View</a> |
                <a href={{route("product.edit",$val->pid)}} class="btn btn-primary">Edit</a> |
                <button type="submit" class="btn btn-danger">DELETE</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>



</body>