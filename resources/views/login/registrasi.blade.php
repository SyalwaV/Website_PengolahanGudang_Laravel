<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


    <title>Sign Up</title>
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
   
  <section class="Form my-2 mx-4">
        <div class="container">
            <div class="row no-gutters">
               <div class="col-lg-5">
                <img src="{{ asset('public/img/rmvundika.png') }}" style="width: 500px; height:130px;">
                </div>
                <div class="col-lg-6 px-4 pt-3">
                    <h1 class="font-weight-bold py-3">Registrasi</h1>
                    <form action="{{url('postregistrasi')}}" method="POST">
                      {{csrf_field()}}
                      
                        <input type="text" placeholder="Name" name="name"  class="form-control my-3 p-4" required>
                        <input type="text" placeholder="Alamat" name="alamat" class="form-control my-3 p-4"  required>
                        <input type="text" placeholder="No telpon" name="telp"  class="form-control my-3 p-4" required>  
                       Laki-laki <input type="radio" name="jeniskelamin" value="laki-laki"   required>
                       Perempuan <input type="radio" name="jeniskelamin" value="perempuan"   required> 
                        <input type="email" placeholder="Email" name="email" class="form-control my-3 p-4"  required>
                        <input type="password" placeholder="Password" name="password" class="form-control my-3 p-4"  required>
                        <select class="form-control" name="role">
                            <option value="admin">Admin</option>
                            <option value="operator">Operator</option>
                            <option value="gudang">Gudang</option>
                        </select>     
                      
                        <button name="submit" class="btn mt-3 mb-5">Daftar</button>
                        
                    </form>
                </div>
            </div>
        </div>

 