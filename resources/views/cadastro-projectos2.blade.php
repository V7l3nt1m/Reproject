<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="material-icons/iconfont/material-icons.css">
    <link rel="stylesheet" href="materialize/css/materialize.min.css">
    <title>Cadastro de Projectos</title>
</head>
<body>
    <header>
         @if(session('msg'))
                <script class="msg">alert('{{session('msg')}}')</script> 
                @endif
        <nav class="indigo">
            <div class="nav-wrapper container">
                <a href="/" class="brand-logo"><img class="logo2"src="img/repro1.png" alt="logo"> </a>
                <a href="" class="sidenav-trigger" data-target="mobile-menu">
                    <i class="material-icons">menu</i>
                </a>
                <ul id="" class="right hide-on-med-and-down">
                     <li><a href="/" class="tooltipped" data-position="left" data-tooltip="Página Incial"><i class="material-icons">home</i></a></li>
                    <li><a href="../SobreNos" class="tooltipped" data-position="bottom" data-tooltip="Sobre Nôs"><i class="material-icons">info</i></a></li>
                    <li><a href="/#servicos" class="tooltipped" data-position="bottom" data-tooltip="projectos">projectos</a></li>
                    @auth
                  <!--aqui-->  <li> 
                        <ul id="dropdown1" class="dropdown-content">
  <li><a href="/dashboard">Dashboard</a></li>
  <li class="divider"></li>

 <li>
      <form action="/logout" method="POST">
          @csrf
          <li><a href="/logout" onclick="event.preventDefault(); this.closest('form').submit();">Sair</a></li>
      </form>
 </li>
  
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
                
                     <div class="row">
            <p class="col s12 offset-l1 m8 white-text texto-principal" id="texto-principal2">Outras Informações</p>
        </div>

    </header>

    <div class="container row">
        <h1 class="h1">Informações do(s) Aluno(s)</h1>
        <form class="col s12" method="post" action="/dashboard" enctype="multipart/form-data">
            @csrf
            <div class="row">

                <div class="input-field col s12">
                    <input type="text" placeholder="Insira o nome do Aluno 1" id="nome_aluno" name="nome_aluno1">
                    <label for="nome_aluno" class="nome_aluno">Aluno</label>
                </div>
                 <div class="input-field col s12">
                    <input type="text" placeholder="Insira o nome do Aluno 2" id="nome_aluno" name="nome_aluno2">
                 </div>
                 <div class="input-field col s12">
                    <input type="text" placeholder="Insira o nome do Aluno 3" id="nome_aluno" name="nome_aluno3">
                 </div>
               <div class="input-field col s12">
                    <select name="curso1">
                        <option value="" disabled selected>Selecione o Curso do aluno1</option>
                        <option value="Técnico de Informática">Técnico de Informática</option>
                        <option value="Técnico de Eletrónica e Telecomunicações">Técnico de Eletrónica e Telecomunicações</option>
                        <option value="Técnico de Multimédia">Técnico de Multimédia</option>
                    </select>
                    <label>Curso</label>
                </div>
                 <div class="input-field col s12">
                    <select name="curso2">
                        <option value="" disabled selected>Selecione o Curso do aluno 2</option>
                        <option value="Técnico de Informática">Técnico de Informática</option>
                        <option value="Técnico de Eletrónica e Telecomunicações">Técnico de Eletrónica e Telecomunicações</option>
                        <option value="Técnico de Multimédia">Técnico de Multimédia</option>
                    </select>
                </div>
                 <div class="input-field col s12">
                    <select name="curso3">
                        <option value="" disabled selected>Selecione o Curso do aluno 3</option>
                        <option value="Técnico de Informática">Técnico de Informática</option>
                        <option value="Técnico de Eletrónica e Telecomunicações">Técnico de Eletrónica e Telecomunicações</option>
                        <option value="Técnico de Multimédia">Técnico de Multimédia</option>
                    </select>
                </div>  
                        <p>OBS: Apenas preencha os campos do aluno 2 e 3 caso hajam mais de 1 aluno participante do projecto.</p>
                          
                <div class="input-field col s12">
                    <select name="area">
                        <option value="" disabled selected>Selecione a area do Projecto</option>
                        <option value="Programação">Programação</option>
                        <option value="Redes">Redes</option>
                        <option value="Hardware">Hardware</option>
                        <option value="Outro">Outro</option>
                    </select>
                    <label>Area</label>
                </div>
                <button class="btn green col offset-l5">Cadastrar</button>
            </div>
        </form>
    </div>

      <!-- footer -->

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
      <div class="container center">&copy; 2022, Reproject</div>
    </div>
  </footer>

    <script src="jquery/jquery-3.6.0.min.js"></script>
    <script src="materialize/js/materialize.js"></script>
    <script src="materialize/js/materialize.min.js"></script>

    <script>
       
        $(document).ready(function () {
            $('.sidenav').sidenav();
            $('.materialboxed').materialbox();
            $('.parallax').parallax(); 
            $('.tooltipped').tooltip();
            $('select').formSelect();
        });
$(".dropdown-trigger").dropdown();
    </script>
</body>
</html>