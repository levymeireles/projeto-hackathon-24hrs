<!DOCtype hmtl>
<hmtl lang="pt-br">

  <head>
    <title>Início</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="css/grayscale.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="lib/bootstrap.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="lib/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">


  </head>

  <body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#about">Início</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">Sobre</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#projects">Projeto</a>
            </li>
            <li class="nav-item">
              <a id="btn-contact" class="nav-link js-scroll-trigger" href="#signup">Contato</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead">
      <div class="container d-flex h-100 align-items-center">
        <div class="mx-auto text-center">
          <h1 class="mx-auto my-0 text-uppercase">DynSchool</h1>
          <h2 class="text-white-50 mx-auto mt-2 mb-5">Sistema de gerenciamento e acompanhamento pedagógico dinamizado.</h2>
          <a href="./php/loginFuncionario.php" class="btn btn-primary js-scroll-trigger botao">Funcionário</a>
          <a href="./php/loginAluno.php" class="btn btn-primary js-scroll-trigger botao">Aluno</a>
        </div>
      </div>
    </header>

    <!-- About Section -->
    <section id="about" class="about-section text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2 class="text-white mb-4">Sistema de ensino</h2>
            <p class="text-white-50">Nosso sistema de funcionamento, consiste em integrar os alunos com os professores por meio de grupo de estudos dinamizados dentro da sala de aula, para melhor rendimento do aluno.
          </div>
        </div>
      </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="cor-fundo projects-section">
      <div class="container">

        <!-- Featured Project Row -->
        <div class="row align-items-center no-gutters mb-4 mb-lg-5">
          <div class="col-xl-8 col-lg-7">
            <img class="img-fluid mb-3 mb-lg-0 formatacao-classroom-img " src="img/bg-masthead.png" alt="">
          </div>
          <div class="col-xl-4 col-lg-5">
            <div class="featured-text text-center text-lg-left">
              <h4 class="text-white">Grupos de estudos</h4>
              <p class="text-black mb-0">Os grupos foram criados na intenção de incentivar o trabalho em grupo e desenvolver a gestão nos alunos, facilitando o trabalho para os professores trazendo melhores resultados nas aulas.</p>
            </div>
          </div>
        </div>

        <!-- Project One Row -->
        <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
          <div class="col-lg-6">
            <img class="img-fluid formatacao-tasks-img" src="img/tasks.png" alt="">
          </div>
          <div class="col-lg-6">
            <div class="bg-black text-center h-100 project">
              <div class="d-flex h-100">
                <div class="project-text w-100 my-auto text-center text-lg-left">
                  <h4 class="text-white">Tasks</h4>
                  <p class="mb-0 text-white-50">As "tasks" ou atividades serão exercícios que o professor irá propôr para o grupo ou para cada aluno individualmente, isto funcionará como evolução de aprendizado e irá gerar recompensas aos alunos.</p>
                  <hr class="d-none d-lg-block mb-0 ml-0">
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Project Two Row -->
        <div class="row justify-content-center no-gutters">
          <div class="col-lg-6">
            <img class="img-fluid formatacao-casas-img" src="img/reino.jpg" alt="">
          </div>
          <div class="col-lg-6 order-lg-first">
            <div class="bg-black text-center h-100 project">
              <div class="d-flex h-100">
                <div class="project-text w-100 my-auto text-center text-lg-right">
                  <h4 class="text-white">"Casas" ou grupos de estudos"</h4>
                  <p class="mb-0 text-white-50">Todas as Casas possuem os moradores (alunos) e são restritas apenas a seus moradores.
                    <br />Cada casa receberá ordens (tarefas) de seu senhor (professor) e deverá cumprir a ordem com todos os moradores, sem sobrecarregar qualquer morador.
                    <br />As casas evoluem conforme cumprem as ordens corretamente, caso não cumpra a tarefa sua casa pode sofrer punição do seu senhor.</p>
                  <hr class="d-none d-lg-block mb-0 mr-0">
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>

    <!-- Signup Section -->
    <section id="signup" class="signup-section">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-lg-8 mx-auto text-center">

            <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
            <h2 class="text-white mb-5">Informações adicionais</h2>

            <!-- <form class="form-inline d-flex">
            <input type="email" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" id="inputEmail" placeholder="Entre com seu endereço de e-mail...">
            <button type="submit" class="btn btn-primary mx-auto">Enviar</button>
            <a href="mailto:senaizerbini@sp.senai.br?Subject=Título%20da%20mensagem"  class="button btn btn-primary mx-auto">Go to Google</a> 
          </form> -->

          </div>
        </div>
      </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-section bg-black">
      <div class="container">

        <div class="row">

          <div class="col-md-4 mb-3 mb-md-0">
            <div class="card py-4 h-100">
              <div class="card-body text-center">
                <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                <h4 class="text-uppercase m-0">Endereço</h4>
                <hr class="my-4">
                <div class="small text-black-50">
                  <a href="https://www.google.com.br/maps/dir/-22.9154816,-47.0482944/senai+zerbini/@-22.9140652,-47.0628309,15z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x94c8cf3303ceff43:0xea485c60a4b21ef5!2m2!1d-47.055931!2d-22.91505" target="_blank">Av. da Saudade, 125 - Pte. Preta, Campinas - SP, 13041-670</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4 mb-3 mb-md-0">
            <div class="card py-4 h-100">
              <div class="card-body text-center">
                <i class="fas fa-envelope text-primary mb-2"></i>
                <h4 class="text-uppercase m-0">E-mail</h4>
                <hr class="my-4">
                <div class="small text-black-50">
                  <a href="mailto:senaizerbini@sp.senai.br?Subject=Título%20da%20mensagem">senaizerbini@sp.senai.br</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4 mb-3 mb-md-0">
            <div class="card py-4 h-100">
              <div class="card-body text-center">
                <i class="fas fa-mobile-alt text-primary mb-2"></i>
                <h4 class="text-uppercase m-0">Telefone</h4>
                <hr class="my-4">
                <div class="small text-black-50">
                  <a href="tel:+55 (19) 3731-2840">+55 (19) 3731-2840</a>

                </div>
              </div>
            </div>
          </div>
        </div>

        <!--<div class="social d-flex justify-content-center">
        <a href="#" class="margin-icon mx-2">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="#" class="margin-icon mx-2">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="#" class="margin-icon mx-2">
          <i class="fab fa-github"></i>
        </a>
      </div> -->

      </div>
    </section>

    <!-- Footer -->
    <footer class="bg-black small text-center text-white-50">
      <div class="container">
        Copyright &copy; DynSchool 2019
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="lib/jquery.min.js"></script>
    <script src="lib/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="lib/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/lib/grayscale.min.js"></script>



  </body>
</hmtl>