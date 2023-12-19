<style>
    *{
        font-family: sans-serif;
    }
    body{
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
    .item-box{
        /* background-color: #333; */
        padding: 2rem;
        border-radius: 8px;
        box-shadow: 1px 1px 5px 0 #3333336d;
        position: relative;
    }
    h1{
        color: crimson;
        margin-bottom: 2rem;
    }
     .btnAdd{
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
        letter-spacing: 1px;
       
    }
    .btnAdd:hover{
        background-color: #333;
    }
    button.btnAdd{
        background-color: #a9781b;
        cursor: pointer;
        position: absolute;
        bottom: 1.8rem;
        right: 1rem;
    }
    input{
        width: 200px;
        padding: 8px;
        outline: none;
        border: 2px solid red;
        border-radius:6px;
        cursor: pointer; 
    }
    input:focus{
        
        outline: 1px solid red;
        caret-color: red;
    }
</style>
<body>
    
    <form action="{{route("product.update",$item->pid)}}" method="POST"  onkeypress="return handleKeyPress(e)" class="item-box">
        @csrf
        @method("PATCH")
        <h1>Change Product Detail</h1>
        
        <h3>
            Product Name: <input type="text" name="title" id="" value={{$item->title}} placeholder="Enter Product Name"> 
        </h3>
        <h3>
            Product Qty: <input type="text" name="qty" id="" value={{$item->qty}} placeholder="Enter Product Qty"> 
        </h3>
        <h3>
            Product Price: <input type="text" name="price" id="" value={{$item->price}} placeholder="Enter Product Price">
        </h3>
        
        <button type="submit" class="btnAdd">UPDATE</button>
        
        <a href={{route("product.index")}} class="btnAdd">BACK</a>
    </form>
</body>

<script>
    function handleKeyPress(e) {
        if (e.keyCode === 13) {
            // 13 is the key code for Enter
            e.preventDefault(); // Prevent the default Enter key behavior (e.g., new line in a textarea)
            document.queryselector(".btnAdd").click(); // Trigger the click event of the "INSERT" button
        }
    }
</script>