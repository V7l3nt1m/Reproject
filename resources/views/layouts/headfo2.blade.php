<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="material-icons/iconfont/material-icons.css">
    <link rel="stylesheet" href="materialize/css/materialize.min.css">
    

    
    <title>@yield('title')</title>
    <style>
        .texto-principal {
            font-size: 40pt;
            font-weight: bolder;
            text-shadow: 1px 1px 10px black;
            border-radius: 40px 150px;
            box-shadow: 1px 1px 10px white;
}
    </style>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https: //fonts.googleapis.com/css2? family= Roboto & display=swap" rel="stylesheet">

</head>
<body class="indigo">
    <nav class="black">
        <div class="nav-wrapper container">
          <a href="/" class="brand-logo"><img class="logo2"src="img/repro1.png" alt="logo"> </a>
           <!-- <a href="/" class="brand-logo"><img src="img/logo2.png" class="logologin"></a> -->
            <a href="" class="sidenav-trigger" data-target="mobile-menu">
                <i class="material-icons">menu</i>
            </a>
        </div>
    </nav>

@yield('content')

  <footer class="page-footer black">
    <div class="container">
      <div class="row">

        <div class="col s12 l6">
          <h4>Repositório de Projectos</h4>
          <hr color="cyan">
          <table>
            <thead>
              <tr class="white-text">
                <th>Campo 1</th>
                <th>Campo 2</th>
                <th>Campo 3</th>
              </tr>
            </thead>

            <tbody>

              <tr>
                <td><a href="#sobre">Sobre o ReProj</a></td>
                <td><a href="#servicos">Serviços</a></td>
                <td><a href="#">Outros</a></td>
              </tr>

              <tr>
                <td><a href="#">Pesquisas</a></td>
                <td><a href="#">Vídeos</a></td>
                <td><a href="#apoiadores">Apoiadores</a></td>
              </tr>
              
              <tr>
                <td><a href="#">Equipa Técnica</a></td>
                <td><a href="#">ITEL</a></td>
                <td><a href="#">FAQs</a></td>
              </tr>
              

            </tbody>
          </table>         
        </div>

        <style>
          .social {
            position: relative;
            top: 15px;
          }
        </style>
        <div class ="social col s12 l4 offset-l2">
          <a href="#"><img src="img/social-media/facebook.png" class="" alt=""></a>
          <a href="#"><img src="img/social-media/twitter.png" class="" alt=""></a>
          <a href="#"><img src="img/social-media/youtube.png" class="" alt=""></a>
          <a href="#"><img src="img/social-media/what.png" class="" alt=""></a>
          <hr color="cyan">
          <h6 style="color: aqua;" class="center" id="subs">--Subescrever por email--</h6>
          
          <form method="" action="" class="">
            <div class="input-field center">
              <input type="text" id="pnome" name="pnome" class="white-text" placeholder="Digite seu primeiro nome">
              <input type="text" id="unome" name="unome" class="white-text" placeholder="Digite seu último nome">
              <input type="email" id="email" name="email" class="white-text" placeholder="Digite seu email">
              <button type="submit" name="btn-cadastrar" class="btn green">Enviar</button>
            </div>
          </form>
        
        </div> 

      </div>
    </div>
    
    <div class="footer-copyright">
      <div class="container center">&copy; 2022, ReProj</div>
    </div>
  </footer>
  
      <script src="jquery/jquery-3.6.0.min.js"></script>
      <script src="materialize/js/materialize.min.js"></script>
</body>
</html>

