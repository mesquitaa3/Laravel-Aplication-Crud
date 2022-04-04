<!DOCTYPE html>
<html lang=pt>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mesquita - App1</title>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js">
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js">
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js">

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
        font-family:arial;
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

    .btn-criaruser:hover {opacity: 1}
    .btn-editaruser:hover {opacity: 1}
    .btn-apagaruser:hover {opacity: 1}
    .btn-logout:hover {opacity: 1}

    .table{
        width: 50% !important;margin: auto;
    }

   
</style>

@extends('layout')


@section('content')
</head>

<body class="mesquita">

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4" style="margin-top:20px;">
                <h4 class="h4">Bem-Vindo | Dashboard</h4> 
                <hr>
                <a href="logout" class="btn-logout">Sair</a>

                <table class="table" id="tabela">
                    <thead>
                        <th class="th">Nome</th>
                        <th class="th">Email</th>
                        <th class="th">Opções</th>
                    </thead>
    
    
    @foreach ($users as $user)
    <tr>
        <td class="td">{{$user->name}}</td>
        <td class="td">{{$user->email}}</td>
        <td class="td">
            
            <a class="btn-editaruser" href="edit-user/{{$user->id}}">Editar</a>
            @if(Session::get('userId') != $user->id)
            <a class="btn-apagaruser" href="delete-user/{{$user->id}}">Apagar</a>
            @endif
        </td>
    </tr>
    @endforeach
</table>

    <a href="add-user" class="btn-criaruser">Criar Novo Utilizador</a>
</div>

@if(Session::has('error'))
    <div class="alert alert-success">
        {{Session::get('error')}}
    </div>
    @endif
    
    @if(Session::has('sucess'))
    <div class="alert alert-success">
        {{Session::get('sucess')}}
    </div>
    @endif
    
    @endsection
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
crossorigin="anonymous"></script>
<script>
    $(document).ready( function () {
    $('#tabela').DataTable();
} );
</script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
</html>
    
    