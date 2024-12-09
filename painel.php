<?php

include('protect.php');


?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Brasali Dedetizadora</title>
  <link rel="shortcut icon" href="img/faviconB.ico" type="image/x-icon" />

  <!-- SwarpJs -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <link rel="stylesheet" href="css/swiper-bundle.min.css">


  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
    rel="stylesheet" />

  <!-- Bootstrap Icons -->
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />

  <!-- Estilos -->
  <link rel="stylesheet" href="css/styles.css" />

  <!-- Scripts -->
  <script src="js/scripts.js" defer></script>
</head>



<body>
  <!-- Button -->

  
  <!-- Cabeçalho e Banner Fixado-->

  <div id="header-fixed" class="header-fixed" +>
    <nav id="navbar-fixed" class="orcamento">

          <a href="#contact" >Faça um orçamento</a> 

          <a>/</a>
          <a href="https://wa.me/5561999032188" target="_blank"> Contato: (61) 9 9903-2188 </a>
           
          <a >/</a>
          <a href="#header">Início</a>
          
          <a >/</a>
          <a href="index.php" class="loginn">Login</a>
            
      
    </nav>

  </div>
  <!-- Cabeçalho e Banner -->
  <header id="header">
    <div id="inner-header">
      <h2 id="brand">Brasali Dedetizadora</h2>
      <nav id="navbar">
        <a href="index.html">Início</a>
        <a href="#expertise-areas">Serviços</a>
        <a href="#about">Sobre</a>
        <a href="#team">Licenças</a>
        <a href="#contact">Entre em Contato</a>
      </nav>


      <!-- Menu Mobile -->
      <i class="bi bi-list" id="menu"></i>
      <nav id="mobile-navbar">
        <i class="bi bi-x-lg" id="close-menu"></i>
        <a href="index.html">Início</a>
        <a href="#expertise-areas">Serviços</a>
        <a href="#about">Sobre</a>
        <a href="#team">Licenças</a>
        <a href="#contact">Entre em Contato</a>
      </nav>
    </div>
    <div class="banner active">
      <span class="square"></span>
      <h2>Melhores experts em dedetização de Brasília</h2>
      <p>
        Os profissionais mais bem qualificados estão aqui, agende um orçamento
        de <n>graça</n> agora mesmo
      </p>
    </div>
    <div class="banner">
      <span class="square"></span>
      <h2>Tenha o Melhor Atendimento 24H</h2>
      <p>
        Veja as especialidades dos nossos profissionais, e entenda como eles podem
        lhe ajudar
      </p>
    </div>
    <div class="banner">
      <span class="square"></span>
      <h2>Os nossos resultados </h2>
      <p>.</p>
      <p>
        Confira as nossas métricas e conheça os resultados que já obtivemos
      </p>
    </div>

    <div class="dots">
      <div class="dot active"></div>
      <div class="dot"></div>
      <div class="dot"></div>
    </div>
  </header>

  <!-- Sobre Atendimento -->
  <main id="expertise-areas" class="text-image-section">
    <div id="expertise-information" class="text-container">
      <p class="section-subtitlee">Nossos Serviços</p>

      <h3 class="section-title">
        Nossos Especialistas Podem Atender Você
        24H!
        <p>▸ Dedetização</p>
        <p>▸ Sanitização de Ambientes</p>
        <p>▸ Descupinização</p>
        <p>▸ Desratização</p>
        <p>▸ Controle de Pragas</p>
        <p>▸ Limpeza de Caixa d’Água</p>
        <p>▸ Dedetização de Residências</p>
        <p>▸ Dedetização de Condomínios</p>
        <p>▸ Dedetização de Empresas</p>
      </h3>
      <a href="#recomendations" class="btn">Saiba Mais</a>
    </div>

    <div id="expertise-image-container" class="image-container">

      <img src="imgE/logo.png" alt="Brasali Logo" />
    </div>
    <div id="other-services">
      <div class="service">
        <img src="imgE/imagem_dede.jpeg" alt="Banco" />
        <i class="bi bi-bank"></i>
        <div class="service-info">
          <h4>CONFIANÇA</h4>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Veritatis, numquam accusantium! Ex dolores, autem itaque adipisci,
            facilis quam eligendi consequuntur reprehenderit quas aliquid
            corrupti quibusdam voluptates. Repellendus suscipit quo veniam?
          </p>
        </div>
      </div>
      <div class="service">
        <img src="imgE/imagem_dede2.jpeg" alt="Construção" />
        <i class="bi bi-bricks"></i>
        <div class="service-info">
          <h4>SEGURANÇA</h4>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Veritatis, numquam accusantium! Ex dolores, autem itaque adipisci,
            facilis quam eligendi consequuntur reprehenderit quas aliquid
            corrupti quibusdam voluptates. Repellendus suscipit quo veniam?
          </p>
        </div>
      </div>
      <div class="service">
        <img src="imgE/imagem_dede3.jpeg" alt="Empresa" />
        <i class="bi bi-building"></i>
        <div class="service-info">
          <h4>GARANTIA</h4>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Veritatis, numquam accusantium! Ex dolores, autem itaque adipisci,
            facilis quam eligendi consequuntur reprehenderit quas aliquid
            corrupti quibusdam voluptates. Repellendus suscipit quo veniam?
          </p>
        </div>
      </div>
    </div>
  </main>

  <!-- Banner Leave -->

  <section class="meioambiente">
    <div>
      <img src="imgE/banner-leaves.jpg" alt="Imagem do Meio Ambiente">
    </div>
  </section>
  <!-- Sobre nós -->
  <section id="about">
    <div id="about-text">
      <p class="section-subtitle">Sobre nós</p>
      <h3 class="section-title">
        Uma empresa que tem o foco no cliente, aconselhando da melhor forma e
        conseguindo os melhores resultados
      </h3>
      <div class="about-description">
        <i class="bi bi-briefcase"></i>
        <div>
          <h4>Profissionais atualizados</h4>
          <p>
            Nós promovemos treinamentos mensais a todos os nossos
            colaboradores
          </p>
        </div>
      </div>
      <div class="about-description">
        <i class="bi bi-book"></i>
        <div>
          <h4>...</h4>
          <p>
            lorem asdihassd ap iod,eris aspdom sapom ,osd,poam eopr,speiofempornoiefn
          </p>
        </div>
      </div>
    </div>
    <div id="about-data">
      <div class="data">
        <i class="bi bi-person"></i>
        <p class="number">25</p>
        <p class="text">Profissionais</p>
      </div>
      <div class="data">
        <i class="bi bi-check-all"></i>
        <p class="number">2.820+</p>
        <p class="text">Casos resolvidos</p>
      </div>
      <div class="data">
        <i class="bi bi-building"></i>
        <p class="number">387</p>
        <p class="text">Clientes</p>
      </div>
      <div class="data">
        <i class="bi bi-trophy"></i>
        <p class="number">7</p>
        <p class="text">Anos de exelência</p>
      </div>
    </div>
  </section>

  <!-- Depoimentos -->
  <section class="depoiments mySwiper" id="depoiments">
    <div class="depoiments-container swiper-wrapper">
      <div class="slide swiper-slide">
        <ie class="bi bi-quote"></ie>
        <p class="depoi-txt">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus nulla quae deleniti enim.
          Numquam ipsum iusto inventore vero neque architecto mollitia consequatur ducimus qui earum,
          esse nesciunt repellat porro ipsa. Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum et labore
          quidem! Cumque nis
          i accusamus cum officia dolore earum maxime rem delectus iure, quisquam magni est officiis fuga minima
          tempore!
        </p>
        <div class="person">
          <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor" class="bi bi-person-circle"
            viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
            <path fill-rule="evenodd"
              d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
          </svg>

          <div class="info-person">
            <p class="name-person">Alexandre Veloso</p>
            <p class="func-person">Desenvolvedor</p>

          </div>
        </div>
      </div>
      <div class="slide swiper-slide">
        <ie class="bi bi-quote"></ie>

        <p class="depoi-txt">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus nulla quae deleniti enim.
          Numquam ipsum iusto inventore vero neque architecto mollitia consequatur ducimus qui earum,
          esse nesciunt repellat porro ipsa. Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus quas sed
          porro, minima dolor
          alias vel officia amet enim sint fugit quibusdam nobis labore quia repellendus autem odio iste veritatis.
        </p>
        <div class="person">
          <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor" class="bi bi-person-circle"
            viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
            <path fill-rule="evenodd"
              d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
          </svg>

          <div class="info-person">
            <p class="name-person">Kathleen Oliveira</p>
            <p class="func-person">Administradora</p>
          </div>
        </div>
      </div>

      <div class="slide swiper-slide">
        <ie class="bi bi-quote"></ie>
        <p class="depoi-txt">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus nulla quae deleniti enim.
          Numquam ipsum iusto inventore vero neque architecto mollitia consequatur ducimus qui earum,
          esse nesciunt repellat porro ipsa. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic modi est,
          iusto ut sint harum consequun
          tur cum facilis, mollitia sed quod? Placeat minus molestias laudantium provident cumque est rem quisquam?
        </p>
        <div class="person">
          <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor" class="bi bi-person-circle"
            viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
            <path fill-rule="evenodd"
              d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
          </svg>

          <div class="info-person">
            <p class="name-person">Almir Cardoso</p>
            <p class="func-person">CEO</p>
          </div>
        </div>
      </div>
      <div class="slide swiper-slide">
        <ie class="bi bi-quote"></ie>
        <p class="depoi-txt">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus nulla quae deleniti enim.
          Numquam ipsum iusto inventore vero neque architecto mollitia consequatur ducimus qui earum,
          esse nesciunt repellat porro ipsa. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic modi est,
          iusto ut sint harum consequun
          tur cum facilis, mollitia sed quod? Placeat minus molestias laudantium provident cumque est rem quisquam?
        </p>
        <div class="person">
          <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor" class="bi bi-person-circle"
            viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
            <path fill-rule="evenodd"
              d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
          </svg>

          <div class="info-person">
            <p class="name-person">Raul Pereira</p>
            <p class="func-person">Engenheiro Elétrico</p>
          </div>
        </div>
      </div>
      <div class="slide swiper-slide">
        <ie class="bi bi-quote"></ie>
        <p class="depoi-txt">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus nulla quae deleniti enim.
          Numquam ipsum iusto inventore vero neque architecto mollitia consequatur ducimus qui earum,
          esse nesciunt repellat porro ipsa. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic modi est,
          iusto ut sint harum consequun
          tur cum facilis, mollitia sed quod? Placeat minus molestias laudantium provident cumque est rem quisquam?
        </p>
        <div class="person">
          <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor" class="bi bi-person-circle"
            viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
            <path fill-rule="evenodd"
              d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
          </svg>

          <div class="info-person">
            <p class="name-person">Susimar ALves</p>
            <p class="func-person">Surpevisora Administrativa</p>
          </div>
        </div>
      </div>

    </div>
    <div class="swiper-button-next nav-btn"></div>
    <div class="swiper-button-prev nav-btn"></div>
    <div class="swiper-pagination"></div>

  </section>

  

  <!-- Sobre/Recomendações -->
  <section class="ro" id="team">
   
    <h2 id="span_1">
      Nossas <rogerio>Licenças</rogerio>
    </h2>
    <div class="licenses">
    
    </div>
  </section>


  <!-- Contato -->
  <section id="contact" class="text-image-section">
    <div id="contact-image-container" class="image-container">
      <img src="imgE/recep.jpg" alt="Imagem de Contato">
    </div>
    <div id="contact-information" class="text-container">
      <i class="bi bi-envelope"></i>
      <p class="section-subtitle">Faça um Orçamento e veja nosso Preço!</p>
      <form action="https://api.staticforms.xyz/submit" method="post">
        <div class="form-control">
          <input type="text" name="name" id="name" placeholder="Nome Completo"  required />
          <input type="email" name="email" id="email" placeholder="E-mail" required />
        </div>
          <input type="tel" name="phone" id="phone" pattern="(\[0-9]{2}\)\s([9]{1})?([0-9]{4})-([0-9]{4})" placeholder="Telefone: (99) 9999-9999"  required />
          <input type="text" name="$Endereço" id="address" placeholder="Endereço?    Exemplo: Águas Lindas"  required />
          <input type="number" name="$Metragem" id="number" placeholder="Qual tamanho do local em m2?    Exemplo: 40 metros quadrados."  required />
              
        <textarea name="message" id="$Mensagem" placeholder="Detalhe o seu problema...  Qual praga ou inseto, qual o serviço?"  required ></textarea>       
         
        <input type="submit" value="Enviar" class="btn" /> 
        <input type="reset"  name="clear" class="btn" value="Limpar"/>
        <a href="#servicos"></a>
       
        <input type="hidden" name="accessKey" value="77f14d86-5349-4719-a493-496ad8518a6d">
        <input type="hidden" name="redirectTo" value="http://127.0.0.1:5500/thanks.html">

        <p class="orcamentonope"><strong>Por que tenho que Informar essas informações?</strong>
          <p>Para um melhor controle de clientes e para um orçamento mais preciso!
           Não se preocupe, seus dados serão bem protegidos em nosso Banco de Dados!
        </p>
      </form>

    
     </p>
    </div>
  </section>

  <!-- Recomendações -->
  <footer id="footer" id="recomendations">
    <div class="contact-info">
      <div class="footer-brand" >
        <h2>Recomendações Importantes da Vigilância Sanitária para Dedetização Segura</h2>
        <p><strong class="rec">Passo a Passo para sua Segurança</strong></p>
        <p>A dedetização é uma medida essencial para manter nossos espaços livres de pragas e garantir 
          a saúde e o bem-estar de todos os ocupantes. No entanto, para garantir 
          a eficácia e a segurança deste processo, é crucial seguir algumas orientações importantes da vigilância sanitária.</p>
      </div>
    </div>
    </div>
    <div class="links-container"  id="recomendations">
      <h4>Antes da Dedetização:</h4>
      <nav>
        <p><rec class="rec"><strong>Planejamento Antecipado: </rec></strong>Agende a dedetização com uma empresa especializada com 
          antecedência. Certifique-se de escolher uma empresa devidamente registrada e com profissionais qualificados.
        </p>
        <p><strong class="rec">Informações Detalhadas:</strong> Forneça informações detalhadas sobre o tipo de praga e a 
          extensão do problema à empresa de dedetização. Isso ajudará na seleção dos produtos e métodos mais adequados.
        </p>
        <p>
          <strong class="rec">Preparação do Ambiente:</strong> Antes da chegada da equipe de dedetização, remova alimentos, 
          utensílios de cozinha, animais de estimação e objetos pessoais do local a ser tratado. 
          Guarde-os em locais seguros, seguindo as instruções da empresa.
        </p>
        <P><strong class="rec">Proteção de Objetos Sensíveis:</strong> Cubra com plástico ou remova objetos sensíveis, como 
          equipamentos eletrônicos, móveis estofados e obras de arte. Isso evitará possíveis danos durante o processo.
        </P>

      </nav>
    </div>
    <div class="links-container">
      <h4>Durante a Dedetização:</h4>
      <nav>
        <p><strong class="rec">Medidas de Segurança:</strong> Siga rigorosamente as instruções fornecidas pela equipe de dedetização. 
          Mantenha-se afastado das áreas sendo tratadas e evite o contato direto com os produtos utilizados.        
        </p>
        <p>
          <strong class="rec">Ventilação Adequada:</strong> Caso seja necessário, mantenha as janelas abertas para permitir a circulação de ar durante e após 
          a aplicação dos produtos. Isso ajudará a dissipar os vapores e reduzir o odor.
        </p>
        <p>
          <strong class="rec">Cuidado com Animais de Estimação:</strong> Mantenha os animais de estimação afastados das áreas sendo tratadas 
          e siga as recomendações específicas da empresa quanto aos cuidados com eles durante o processo.
        </p>
        

      </nav>
    </div>
    <div class="links-container">
      <h4>Após a Dedetização:</h4>
      <nav>
        <p>
          <strong class="rec">Permanência Fora do Ambiente:</strong> Evite retornar imediatamente ao ambiente dedetizado. 
          Aguarde o tempo recomendado pela empresa para garantir a completa eficácia e segurança do tratamento.
        </p>
        <p>
          <strong class="rec">Limpeza e Higienização:</strong> Após o período recomendado, realize uma limpeza minuciosa do ambiente. 
          Remova resíduos deixados pela dedetização e lave utensílios e superfícies que possam ter sido afetados.
        </p>
        <p>
          <strong class="rec">Monitoramento Contínuo:</strong> Esteja atento a sinais de reaparecimento de pragas e mantenha contato com a empresa de dedetização 
          para possíveis retoques ou acompanhamento.
        </p>

      </nav>
    </div>
  </footer>
  

  <!-- image Flowers -->
  <section>
    <div>
      <img src="imgE/flowers.jpg" alt="Imagem do Meio Ambiente">
    </div>
  </section>

  <!-- Rodapé -->
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
          <a href="#">Sanitização de Ambientes</a>
          <a href="#">Descupinização</a>
          <a href="#">Desratização</a>
          <a href="#">Controle de Pragas</a>
          <a href="#">Limpeza de Caixa d’Água</a>
          <a href="#">Dedetização de Residências</a>
          <a href="#">Dedetização de Condomínios</a>
          <a href="#">Dedetização de Empresas</a>
      </nav>
    </div>
    <div class="links-container">
      <h4>Páginas</h4>
      <nav>
        <a href="#">Termos e condições</a>
        <a href="#">Política de privacidade</a>
        <a href="#">Fale com um especialista</a>
        <a href="#">Blog</a>
        <a href="#">Notícias</a>
        <a href="#">FAQ</a>
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


  <footer id="footer-rights" class="footer-rights">
    <div class="div-rights">
      <h6 class="directors">®2024. Brasali Serviços de Controle de Vetores e Pragras Urbanas. 
        7 anos de experiência em desinsetização de ambientes. Termos de uso - Políticas de privacidade</h6>
    </div>
  </footer>

  <a href="https://wa.me/5561999032188" target="_blank">
    <img src="imgE/whatsapp.png" alt="WhatsApp"
      style="width: 100px; height: 100px; position: fixed; bottom: 70px; right: 20px;" class="wap">
  </a>
  <script src="js/swiper-bundle.min.js"></script>
  <script src="js/scriptcs.js"></script>




</body>

</html>