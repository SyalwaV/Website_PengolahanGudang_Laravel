<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


    <title>Universitas Dinamika</title>
    <style>
        *{
            padding: 0;
            margin-left: auto;
            margin-right: auto;
            box-sizing:border-bpx;
            align-items: center;
            text-align: center;

        }
        body{
            background: rgb(198, 243, 243);
        }
        .row{
            background: white;
            border-radius: 30px;
        }
        img{
            border-top-left-radius: 30px;
            border-bottom-left-radius: 30px; 
            height: 400px;

        }

        .btn{
            border: none;
            outline: none;
            height: 50px;
            width: 320px;
            background-color:black;
            color: white;
            border-radius: 4px;
            font-weight: bold;

        }
        .btn:hover{
            background: white;
            border: 1px solid;
            color:black;
        }
    </style>
  </head>
  <body>
   
  <section class="Form my-4 mx-5">
        <div class="container">
            <div class="row no-gutters">
               <div class="col-lg-5">
                <img src="{{ asset('public/img/rmvundika.png') }}" style="width: 500px; height:130px;">
                </div>
                <div class="col-lg-7 px-6 pt-5">
                    <h1 class="font-weight-bold py-3">Login</h1>
                    <h4>Sign into your account</h4>
                    <form action="{{url('actionlogin')}}" method="POST" class="login-email">
                      {{csrf_field()}}
                      <div class="form-row">
                        <div class="col-lg-7">
                           <input type="email" placeholder="Username" name="email"  class="form-control my-3 p-4" required>
                        </div>
                       </div>
                       <div class="form-row">
                        <div class="col-lg-7">
                        <input type="password" placeholder="Password" name="password" class="form-control my-3 p-4"  required>
                        </div>
                       </div>
                       <div class="form-row">
                        <div class="col-lg-7">
                            <button name="submit" class="btn mt-3 mb-5">Login</button>
                          </div>
                       </div>
                    </form>
                </div>
            </div>
        </div>

 