<?php

include('protect.php');

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brasali - Saiba Mais</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/information2.css">
    <link rel="stylesheet" href="css/information4.css">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <!-- Bootstrap Icons -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />

</head>

<body>
    <header id="oi" class="jumbotron jumbotron-fluid text-white text-center bg-red" style="background-color: green;">
        <div class="container">
            <h1 class="display-4">Dedetização de Qualidade</h1>
            <p class="lead">Proteja sua casa e empresa com nossos serviços especializados</p>
        </div>
    </header>

    <div id="header-fixed" class="header-fixed">
        <nav id="navbar-fixed" class="orcamento">

            <a href="#contact">Brasali Dedetizadora</a>

            <a>/</a>
            <a href="https://wa.me/5561999032188" target="_blank"> Contato: (61) 9 9903-2188 </a>

            <a>/</a>
            <a href="#oi">Logado: <?php echo $_SESSION['nome']; ?></a>

            <a>/</a>
            <a href="painel.php">Voltar para Página Inicial</a>

        </nav>
    </div>


    <section id="sobre" class="container mt-5">
        <div class="row">
            <div class="col-lg-6">
                <h2 style="font-size: 45px;">Sobre Nós</h2>
                <p style="font-size: 20px;">Somos especialistas em controle de pragas, oferecendo serviços de dedetização, desratização, descupinização e desinsetização. Nosso objetivo é garantir um ambiente seguro e livre de pragas para você e sua família.</p>
            </div>
            <div class="col-lg-6">
                <img src="https://static.mundoeducacao.uol.com.br/mundoeducacao/2022/06/meio-ambiente.jpg" alt="Imagem de dedetização" class="img-fluid">
            </div>
        </div>
    </section>

    <section id="servicos" class="container mt-5">
        <br></br>
        <h2 class="text-center" style="font-size: 40px;">Nossos <strong style="color: green;">Serviços</strong></h2>
        <br></br>
        <div class="row">
            <div class="col-md-6 col-lg-3">
                <div class="card mb-4">
                    <img src="https://condo.news/wp-content/uploads/2022/08/condonews-Cuidados-com-a-dedetizacao-em-condominios.jpg" class="card-img-top" alt="Dedetização">
                    <div class="card-body">
                        <h5 class="card-title" style="font-size: 25px;">Dedetização</h5>
                        <p class="card-text">Eliminamos insetos como baratas, formigas e outros com técnicas seguras e eficazes.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card mb-4">
                    <img src="https://i0.wp.com/cleantec.com.br/wp-content/uploads/2024/03/Servico-de-Desratizacao-O-que-e-e-como-funciona.jpeg" class="card-img-top" alt="Desratização">
                    <div class="card-body">
                        <h5 class="card-title" style="font-size: 25px;">Desratização</h5>
                        <p class="card-text">Controle de roedores como ratos e camundongos para proteger sua saúde e propriedade.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card mb-4">
                    <img src="https://biocontrolbahia.com.br/wp-content/uploads/2020/03/Como-funciona-a-descupiniza%C3%A7%C3%A3o-principais-perguntas-sobre-o-servi%C3%A7o.jpg" class="card-img-top" alt="Descupinização">
                    <div class="card-body">
                        <h5 class="card-title" style="font-size: 25px;">Descupinização</h5>
                        <p class="card-text">Tratamento especializado para eliminação de cupins em estruturas de madeira e campos.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card mb-4">
                    <img src="https://brasilhans.com.br/wp-content/uploads/2021/03/desinsetizacao.jpg" class="card-img-top" alt="Desinsetização">
                    <div class="card-body">
                        <h5 class="card-title" style="font-size: 25px;">Desinsetização</h5>
                        <p class="card-text">Métodos avançados para eliminar insetos diversos, garantindo um ambiente livre de pragas.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contato" class="bg-red py-5" style="background-image: url('https://static.vecteezy.com/ti/fotos-gratis/p2/24495756-meio-ambiente-terra-dia-dentro-natural-verde-folhas-e-plantas-usava-como-primavera-fundo-cobrir-pagina-vegetacao-meio-ambiente-ecologia-papel-de-parede-conceito-eco-terra-dia-salvando-a-ambiente-gerar-ai-gratis-foto.jpg');">
        <!-- Nova seção detalhada -->
        <section id="detalhes-servicos" class="container mt-5" style="color: white;">
            <h2 class="text-center" style="font-size: 45px;">Detalhes dos Nossos Serviços</h2>

            <div id="detalhes-dedetizacao" class="mt-4" style="font-size: 20px;">
                <strong>
                    <h3 style="color: rgb(0, 255, 13);">Dedetização</h3>
                </strong><br>
                <p>A dedetização é o processo de eliminar insetos como baratas, formigas, aranhas, mosquitos e outros insetos que podem infestar sua casa ou empresa. Utilizamos técnicas e produtos seguros e eficazes, sempre tomando cuidado com animais de estimação e crianças. É importante preparar o ambiente antes da aplicação, removendo alimentos e utensílios de cozinha, e após o procedimento, ventilar bem o local.</p>
                <p><strong style="color: rgb(0, 255, 13);">Cuidados:</strong> Mantenha crianças e animais de estimação fora da área tratada até que o produto esteja seco. Siga todas as orientações fornecidas pelos nossos técnicos.</p>
                <p><strong style="color: rgb(0, 255, 13);">Segurança:</strong> Usamos produtos registrados e aprovados pelos órgãos competentes, garantindo a segurança de sua família e pets.</p>
                <br></br>
            </div>


            <div id="detalhes-desratizacao" class="mt-4" style="font-size: 20px;">
                <strong>
                    <h3 style="color: rgb(0, 255, 13);">Desratização</h3>
                </strong><br>
                <p>A desratização é essencial para o controle de roedores como ratos e camundongos. Esses animais podem causar sérios danos à saúde humana, transmitindo doenças e contaminando alimentos. Nosso serviço inclui a inspeção completa do local, instalação de iscas e armadilhas, e orientações para prevenir futuras infestações.</p>
                <p><strong style="color: rgb(0, 255, 13);"> Cuidados:</strong> Mantenha alimentos bem armazenados e lacrados. Evite acúmulo de lixo e mantenha o ambiente limpo.</p>
                <p><strong style="color: rgb(0, 255, 13);">Segurança:</strong> Nossas técnicas são seguras e os produtos utilizados são colocados em locais estratégicos para evitar contato com crianças e animais de estimação.</p>
                <br></br>
            </div>

            <div id="detalhes-descupinizacao" class="mt-4" style="font-size: 20px;">
                <strong>
                    <h3 style="color: rgb(0, 255, 13);">Descupinização</h3>
                </strong><br>
                <p>A descupinização é o processo de eliminação de cupins, que podem causar danos significativos em estruturas de madeira, móveis e documentos. Utilizamos técnicas modernas e produtos eficazes para tratar e prevenir infestações de cupins.</p>
                <p><strong style="color: rgb(0, 255, 13);">Cuidados:</strong> É importante identificar sinais de infestação cedo, como pequenos buracos na madeira e presença de pó de madeira. Mantenha a madeira seca e ventilada.</p>
                <p><strong style="color: rgb(0, 255, 13);">Segurança:</strong> Nossos procedimentos são realizados por profissionais treinados, garantindo a segurança do ambiente e das pessoas ao redor.</p>
                <br></br>
            </div>

            <div id="detalhes-desinsetizacao" class="mt-4" style="font-size: 20px;">
                <strong>
                    <h3 style="color: rgb(0, 255, 13);">Desinsetização</h3>
                </strong><br>
                <p>A desinsetização abrange a eliminação de uma variedade de insetos, incluindo formigas, baratas, aranhas e outros. Utilizamos métodos avançados e produtos de alta qualidade para garantir um ambiente livre de pragas.</p>
                <p><strong style="color: rgb(0, 255, 13);">Cuidados:</strong> Após o tratamento, é importante manter a higiene do local, evitando o acúmulo de sujeira e restos de alimentos que possam atrair novos insetos.</p>
                <p><strong style="color: rgb(0, 255, 13);">Segurança:</strong> Todos os produtos utilizados são seguros e aplicados de maneira que minimizem riscos para humanos e animais de estimação.</p>
                <br></br>
            </div>
        </section>


        </div>
    </section>

    <section id="informacoes" class="container mt-5">
        <h2 class="text-center" style="font-size: 40px;"><strong>Informações Importantes Para Se Saber</strong></h2>
        <div class="row">
            <div class="col-lg-6">
                <br></br>
                <h3 style="color: green;">Prevenção de Doenças</h3>
                <p>As pragas podem transmitir diversas doenças. É crucial manter sua casa e ambientes livres de insetos e roedores. Algumas dicas incluem manter a limpeza, armazenar alimentos corretamente e selar rachaduras e buracos em paredes e pisos.</p>
            </div>
            <div class="col-lg-6">
                <br></br>
                <h3 style="color: green;">Cuidados com o Meio Ambiente</h3>
                <p>Utilizamos métodos de controle de pragas que são seguros para o meio ambiente. Nossos produtos são escolhidos com cuidado para garantir a eficácia na eliminação de pragas enquanto minimizamos o impacto ambiental.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <br></br>
                <h3 style="color: green;">Saúde e Segurança</h3>
                <p>A segurança de sua família e pets é nossa prioridade. Nossos técnicos são treinados para aplicar produtos de forma segura e eficiente. Siga todas as orientações pós-tratamento para garantir um ambiente seguro.</p>
            </div>
            <div class="col-lg-6">
                <br></br>
                <h3 style="color: green;">Educação e Conscientização</h3>
                <p>É importante estar informado sobre os riscos e as melhores práticas de prevenção. Oferecemos materiais educativos e dicas para ajudar você a manter seu ambiente livre de pragas e proteger sua saúde.</p>
            </div>
        </div>
    </section>


    <footer id="footer">
        <div class="contact-info">
            <div class="footer-brand">
                <h2>Brasali Dedetizadora</h2>
                <p>A dedetizadora certa para o seu problema</p>
            </div>
            <p><i class="bi bi-geo-alt"></i> Setor Norte, Brazlândia, Rua 05, Lote 05, Sala 105</p>
            <p><i class="bi bi-telephone"></i> (61) 9 9903-2188</p>
            <p><i class="bi bi-envelope"></i> brasalidedetizadora@gmail.com</p>
            <div class="social-networks">
                <p>Siga-nos:</p>
                <div class="networks">
                    <a href="#"><i class="bi bi-facebook"></i></a>
                    <a href="#"><i class="bi bi-twitter"></i></a>
                    <a href="#"><i class="bi bi-linkedin"></i></a>
                    <a href="#"><i class="bi bi-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="links-container">
            <h4>Nossos Serviços</h4>
            <nav>
                <a href="#">Dedetização
                    <a href="information.php">Sanitização de Ambientes</a>
                    <a href="information.php">Descupinização</a>
                    <a href="information.php">Desratização</a>
                    <a href="information.php">Controle de Pragas</a>
                    <a href="information.php">Limpeza de Caixa d’Água</a>
                    <a href="information.php">Dedetização de Residências</a>
                    <a href="information.php">Dedetização de Condomínios</a>
                    <a href="information.php">Dedetização de Empresas</a>
            </nav>
        </div>
        <div class="links-container">
            <h4>Páginas</h4>
            <nav>
                <a href="#">Termos e condições</a>
                <a href="#">Política de privacidade</a>
                <a href="#footer">Cuidados Necessários</a>
                <a href="#contato">Fale com um especialista</a>
                <a href="information.php">Blog</a>
                <a href="information.php">Notícias</a>

            </nav>
        </div>
        <div class="links-container">
            <h4>Visita Grátis</h4>
            <div class="phone-number">
                <i class="bi bi-telephone"></i>
                <p>(61) 9 9903-2188</p>
            </div>
            <p class="phone-info">
                Este telefone é especial para tratar de novos casos
            </p>
        </div>
    </footer>

    <footer class="bg-blue text-white text-center py-1">
        <p>&copy;
            2024 Brasali Serviços de Controle de Vetores e Pragras Urbanas.
            7 anos de experiência em desinsetização de ambientes. <a href="#">Termos de uso</a> - <a href="#">Políticas de privacidade</a></p>

    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="scripts.js"></script>
</body>

</html>