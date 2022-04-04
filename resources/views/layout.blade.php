<html>
    <head>
        <title>Laravel Crud App</title>

        

    <style>
    .mesquita{
        text-align: center; 
        background-color:white;
        padding-bottom: 10px;
        
    }
    .th{
        font-family:arial;
    }
    .td{
        padding-top:20px;
        padding-left:20px;
        padding-right:15px;
        padding-bottom:20px;
        font-family:arial;
        text-decoration:none;

    }
    .th2{
        padding-top:20px;
        padding-left:20px;
        padding-right:15px;
        padding-bottom:20px;
        font-family:arial;
        text-decoration:none;
        border: 1px;

    }
    .h4{
        font-family:Arial;
        font-size:25px;
        text-align:center;
    }
    .btn-criaruser {
        background-color: green;
        border: none;
        color: white;
        padding: 15px 15px;
        text-align: center;
        font-size: 16px;
        margin: 4px 2px;
        opacity: 0.6;
        transition: 0.3s;
        display: inline-block;
        text-decoration: none;
        cursor: pointer;
        border-radius:15px;
    }

    .btn-editaruser {
        background-color: blue;
        border: none;
        color: white;
        padding: 15px 15px;
        text-align: center;
        font-size: 16px;
        margin: 4px 2px;
        opacity: 0.6;
        transition: 0.3s;
        display: inline-block;
        text-decoration: none;
        cursor: pointer;
        border-radius:15px;
    }
    .btn-apagaruser {
        background-color: red;
        border: none;
        color: white;
        padding: 15px 15px;
        text-align: center;
        font-size: 16px;
        margin: 4px 2px;
        opacity: 0.6;
        transition: 0.3s;
        display: inline-block;
        text-decoration: none;
        cursor: pointer;
        border-radius:15px;
    }
    .btn-logout {
        background-color: black;
        border: none;
        color: white;
        padding: 15px 15px;
        text-align: center;
        font-size: 16px;
        margin: 4px 2px;
        opacity: 0.6;
        transition: 0.3s;
        display: inline-block;
        text-decoration: none;
        cursor: pointer;
        border-radius:15px;
        float:left;
        font-family:arial;
    }

    .btn-criaruser:hover {opacity: 1}
    .btn-editaruser:hover {opacity: 1}
    .btn-apagaruser:hover {opacity: 1}
    .btn-logout:hover {opacity: 1}

    .table{
        width: 50% !important;margin: auto;
    }
    input[type=text] {
        width: 30%;
        padding: 12px 15px;
        margin: 15px 0;
        box-sizing: border-box;  
        border-radius: 10px;   
    }
    input[type=password] {
        width: 22.2%;
        padding: 12px 15px;
        margin: 15px 0;  
        border-radius: 10px;

    }
    .inserts{
        font-family:arial;
    }

   
</style>

    </head>
    <body class="mesquita">

        <div class="header">
            <div class="header-logo">
                <h1>@yield('namePage')</h1>
            </div>
        </div>

        <main>
            <div class="content-center">
                @yield('content')
            </div>
        </main>
    </body>
</html>