<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../material-icons/iconfont/material-icons.css">
    <link rel="stylesheet" href="../materialize/css/materialize.min.css">
    <title>{{$projecto->nome_projecto}}</title>
</head>
<body>
    <header>
        <nav class="indigo">
            <div class="nav-wrapper container">
                <a href="/" class="brand-logo"><img class="logo2"src="../img/repro1.png" alt="logo"> </a>
                <a href="" class="sidenav-trigger" data-target="mobile-menu">
                    <i class="material-icons">menu</i>
                </a>
                <ul id="" class="right hide-on-med-and-down">
                    
                    <li><a href="../SobreNos" class="tooltipped" data-position="bottom" data-tooltip="Sobre Nôs"><i class="material-icons">info</i></a></li>
                     <li><a href="/" class="tooltipped" data-position="left" data-tooltip="Página Incial"><i class="material-icons">home</i></a></li>
                    <li><a href="/#servicos" class="tooltipped" data-position="bottom" data-tooltip="projectos">projectos</a></li>
                    @auth
                  <!--aqui-->  <li> 
                        <ul id="dropdown1" class="dropdown-content">
  <li><a href="/dashboard">Dashboard</a></li>
  <li class="divider"></li>
  <li><a href="/cadastro-projectos">Cadastrar</a></li>
  <li class="divider"></li>
      <form action="/logout" method="POST">
          @csrf
          <li><a href="/logout" onclick="event.preventDefault(); this.closest('form').submit();">Sair</a></li>
      </form>
 
  
</ul>
    <ul class="right hide-on-med-and-down">
      <!-- Dropdown Trigger -->
      <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Admin: {{$username}}<i class="material-icons right">arrow_drop_down</i></a></li>
    </ul>
</ul>

                    </li>
                    @endauth

                </ul>
        
                <ul id="mobile-menu" class="sidenav">
                    <li><a href="#"><i class="material-icons">home</i></a></li>
                    <li><a href="#sobre"><i class="material-icons">info</i></a></li>
                    <li><a href="#servicos">Serviços</a></li>
                    <li><a href="#">Link</a></li>
                    <li><a href="#">FAQs</a></li>
                </ul>

                <form action="/" class="right hide-on-med-and-down">
                    <div class="input-field">
                        <input type="search" id="search" required placeholder="Pesquise Projectos">
                        <label for="search" class="label-icon"><i class="material-icons">search</i></label>
                        <i class="material-icons">close</i>
                    </div>
                </form>
            </div>
        </nav>

        <ul id="slide-out" class="sidenav">
                    <li>
                        <div class="user-view">
                            <div class="background">
                                <img src="img/milky-way.jpg" alt="">
                            </div>
                            <a href="#user"><img src="img/braulio-dos-santos.jpg" alt="" class="circle"></a>
                            <a href="#name"><span class="white-text name">Bráulio Dos Santos</span></a>
                            <a href="#email"><span class="white-text email">dossantosbraulio20@gmail.com</span></a>
                        </div>
                    </li>
                    <li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>
                    <li><a href="#!">Second Link</a></li>
                    <li><div class="divider"></div></li>
                    <li><a href="#!" class="subheader">Subheader</a></li>
                    <li><a href="#!" class="waves-effect">Third Link With Waves</a></li>
                </ul>

                <div class="row">
                    <div class="col s12 l1 offset-l11">
                        <a href="#" data-target="slide-out" class="tooltipped sidenav-trigger" data-position="bottom" data-tooltip="Menu Lateral"><i class="material-icons white-text medium hide-on-med-and-down">menu</i></a>
                    </div>
                </div>
                  <div class="row">
            

   
<p class="col s12 l9 offset-l1 m8 white-text texto-principal" id="texto-principal3">{{$projecto->nome_projecto}}</p>
        </div>
     </header>
    
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

    <!-- footer -->
    <div class="footer-copyright">
      <div class="container center">&copy; 2022, ReProj</div>
    </div>
  </footer>
    <script src="/jquery/jquery-3.6.0.min.js"></script>
    <script src="/materialize/js/materialize.js"></script>
    <script src="/materialize/js/materialize.min.js"></script>

    <script>
       
        $(document).ready(function () {
            $('.sidenav').sidenav();
            $('.materialboxed').materialbox();
            $('.parallax').parallax(); 
            $('.tooltipped').tooltip();
        });
$(".dropdown-trigger").dropdown();
    </script>
</body>
</html><!DOCTYPE html>
