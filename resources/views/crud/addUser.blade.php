<!DOCTYPE html>
<html lang=pt>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mesquita - App1</title>


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
    }
    .btn-voltar {
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

    .btn-voltar:hover {opacity: 1}
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
@extends('layout')


@section('content')
        
<h4 class="h4">Registar Utilizador | Dashboard</h4>
<hr>
<a href="./dashboard" class="btn-voltar">Voltar</a>

<form action="{{route('register-user')}}" class="form_gray" method="post">
    @csrf

    <div class="form-group">

        <label for="email" class="inserts">Nome</label>
        <input type="text" class="form-control" placeholder="" name="name" value="">

    </div>

    <div class="form-group">

        <label for="email" class="inserts">Email</label>
        <input type="text" class="form-control" placeholder="" name="email" value="">

    </div>

    <div class="form-group">

        <label for="password" class="inserts">Palavra-passe</label>
        <input type="password" class="form-control" placeholder="" name="password" value="">

    </div>
    
    <span>@error('email') {{$message}} <br> @enderror</span>
    <span>@error('username') {{$message}} <br> @enderror</span>
    <span>@error('password') {{$message}} <br> @enderror</span>
    
    <button type="submit" class="btn-criaruser">Registar</button>
</form>


                
@endsection



