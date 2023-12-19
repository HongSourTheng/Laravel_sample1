<style>
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
    }
    h1{
        color: crimson;
    }
    a{
        display: block;
        text-align: center;
        width: 100px;
        padding: 20px;
        background-color: crimson;
        text-decoration: none;
        font-size: 1rem;
        transition: .2s ease;
        color: #ffff;
        border-radius: 8px;
    }
    a:hover{
        background-color: #333;
    }
    span{
        color: #fe5d00;
    }
</style>
<body>
    
    <div class="item-box">
        <h1>Product Detail</h1>
        <h2>Product ID: <span> {{$item->pid}}</span></h2>
        <h2>Product Name: <span>{{$item->title}}</span></h2>
        <h2>Product Price: <span>{{$item->price}}</span></h2>
        <a href={{route("product.index")}}>BACK</a>
    </div>
</body>
