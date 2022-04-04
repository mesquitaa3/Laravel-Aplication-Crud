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
    .btn-login {
        background-color: #4CAF50; /* Green */
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
    }
    .info1{
        text-decoration:none;
        padding: 6px 6px;
        font-family: arial;
        background-color: white;
    }
    .h4{
        font-family:Arial;
        font-size:25px;
    }
    .inserts{
        font-family:arial;
    }
    .alert{
        color:red;
        font-family: arial;
    }
    .text-danger{
        color:red;
        font-family:arial;
    }
    
    
   
</style>
</head>

<body class="mesquita">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4" style="margin-top:20px;">
                <h4 class="h4">Login</h4>
                <hr>
                <form action="{{route('login-user')}}" method="post">
                @if(Session::has('sucess'))
                <div class="alert alert-success">{{Session::get('sucess')}}</div>
                @endif
                @if(Session::has('fail'))
                <div class="alert alert-danger">{{Session::get('fail')}}</div>
                @endif      
                @csrf
                    <div class="form-group">
                        <label for="email" class="inserts">Email</label>
                        <input type="text" class="form-control" placeholder="Introduz o teu email" name="email" value="{{old('email')}}">
                        <br>
                        <span class="text-danger">@error('email') {{$message}} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="password" class="inserts">Palavra-passe</label>
                        <input type="password" class="form-control" placeholder="Introduz a tua palavra-passe" name="password" value="">
                        <br>
                        <span class="text-danger">@error('password') {{$message}} @enderror</span>

                    </div>
                    <div class="form-group">
                        <button class="btn-login" type="submit">Login</button>

                    </div>
                    <br>
                    <a class="info1" href="registration">Novo utilizador? Regista-te!</a>

                </form>
            </div>
        </div>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>