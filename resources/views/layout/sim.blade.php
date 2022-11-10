
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('menu.css')}}">
        <link rel="stylesheet" href="{{asset('header.css')}}">
    <title>@yield("nomizinhu")</title>
</head>
<body>
    <div class="header">
<ul class="nav justify-content-end">
  <li class="nav-item">
    <a class="nav-link " aria-current="page" href="#">bota</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">um</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a><br>
  </li>
  <li class="nav-item">

    <a class="nav-link " href="#" tabindex="-1">zinhu</a>
  </li>
</ul>
<div class="valortotal">
   
        <h2 class="txtreceber"> Valor a receber</h2>
        @yield("content")
        <!-- fazer depois qndo tiver banco de dados->      <h1> " ?php $_POST['']   ?>" eae po</h1> -->
</div>    


<a link href="hoje.php">
    <div class=receberhoje >
        <h3 class=txthoje>A receber hoje</h3>
         <!-- fazer depois qndo tiver banco de dados->      <h1> " ?php $_POST['']   ?>" eae po</h1> -->
    </div>
</a>

<a link href="mes.php">
<div class=recebermes>
    <h3>A receber no mês</h3>
     <!-- fazer depois qndo tiver banco de dados->      <h1> " ?php $_POST['']   ?>" eae po</h1> -->
</div>
</a>

<a link href="pendencias.php">
<div class=pendencia>
    <h3>Pendências e alertas</h3>
     <!-- fazer depois qndo tiver banco de dados->      <h1> " ?php $_POST['']   ?>" eae po</h1> -->
</div>
</a>
</div>

<div class="sidebar">

<button type="button" class="btn btn-outline-light  btn-lg"></button>
<button type="button" class="btn btn-outline-light  btn-lg"></button>
<button type="button" class="btn btn-outline-light  btn-lg"></button>
<button type="button" class="btn btn-outline-light  btn-lg"></button>

</div>

</body>
</html>

