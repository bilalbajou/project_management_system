<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
     <style>
           h1{
               text-align: center;
           }
           p{
               font-family: 'Courier New', Courier, monospace;
               font-size: 3rem;
               
           }
           #table {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#table td, #table th {
  border: 1px solid #ddd;
  padding: 8px;
}

#table tr:nth-child(even){background-color: #f2f2f2;}

#table tr:hover {background-color: #ddd;}

#table th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
 .btn{
       display: flex;
       justify-content: center;
       align-items: center;
 }
  button{
       padding: 10px;
       border-radius: 15px;
       background-color: violet;
  }
     </style>
</head>
<body>
    <h1 class="display-2 text-center">Informations du compte</h1>
    <p class="text-center">Le chef du projet {{$chef->name}} </p>
      <div class="container">
        <table id="table">
              <tr>
                  <td>Nom:</td>
                  <td>{{$user->name}}</td>
              </tr>
              <tr>
                <td>Email:</td>
                <td>{{$user->email}}</td>
            </tr>
            <tr>
                <td>Mot de passe:</td>
                <td>{{$pass}}</td>
            </tr>
          </table>
           <div class="btn"><a href="{{route('login')}}"><button> Connecter</button></a></div>
      </div>
      <footer>
              <div class="logo">
                    <img src="{{asset('assets/images/full2_logo')}}" alt="logo">
              </div>
              <div class="copyright">
                    <p>Copyri</p>
              </div>
      </footer>
</body>
</html>