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
        margin-bottom: 1rem;
        
    }
    .btnAdd:hover{
        background-color: #333;
    }
    button.btnAdd{
        background-color: #a9781b;
        cursor: pointer;
        position: absolute;
        bottom: 1.9rem;
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
        /* border: 2px solid crimson; */
        outline: 1px solid red;
        caret-color: red;
    }
</style>
<body>
    
    <div class="item-box">
        <form action="{{route("product.store")}}" method="POST" onkeypress="return handleKeyPress(event)">
        
        
            @csrf
            @method("POST") {{-- Add or post data to database --}}
            <h1>Add New Product</h1>
            <h3>
                Product Name: <input type="text" name="title" id="txt-name" placeholder="Enter Product Name">
            </h3>
            <h3>
                Product Qty: <input type="text" name="qty" id="txt-price" placeholder="Enter Product Qty">
            </h3>
            <h3>
                Product Price: <input type="text" name="price" id="txt-price" placeholder="Enter Product Price">
            </h3>
        
            <button type="submit" class="btnAdd" id="insertButton">INSERT</button>
        
            <a href={{route("product.index")}} class="btnAdd">BACK</a>
        </form>
    </div>
</body>
<script>
    function handleKeyPress(event) {
        if (event.keyCode === 13) {
            // 13 is the key code for Enter
            event.preventDefault(); // Prevent the default Enter key behavior (e.g., new line in a textarea)
            document.getElementById("insertButton").click(); // Trigger the click event of the "INSERT" button
        }
    }
</script>