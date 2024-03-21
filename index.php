<html>
<html lang="pt-br">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SNCine</title>
  <link rel="icon" href="./img/favicons/favicon.ico">
  
  
  <script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js" integrity="sha384-3LK/3kTpDE/Pkp8gTNp2gR/2gOiwQ6QaO7Td0zV76UFJVhqLl4Vl3KL1We6q6wR9" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="./css/site.css">
</head>

<body>
  <div class="wrapper">

    <!-- HEADER -->
    <header>
      <div class="netflixLogo">
      <a id="logo" href="index.php"><img src="./img/loginn/newsncines.png?raw=true" alt="Logo Image"></a>
      </div>
      <nav class="main-nav">
        <a href="#home">Home</a>
        <a href="#tendencias">Tendências</a>
        <a href="#kids">Kids</a>
        <a href="#lancamentos">Lançamentos</a>
        <a href="#lancamentos">Documentários</a>

      </nav>
      <nav class="sub-nav">
        <form action="">
          <input type="text" class="form-control" placeholder="Pesquisa" name="buscar" id="buscar">
          <button type="submit"><i class="fas fa-search sub-nav-logo"></i></button>
          <a href="#"><i class="fas fa-bell sub-nav-logo"></i></a>
          <a href="#"><i class="fas fa-user fa-fw"></i></a>
        <a class="dropdown-item" href="#!"><?= $_SESSION["usuario"] ?></a>
        <a class="dropdown-item" href="./sair.php">Sair</a>
        </form>
      </nav>
    </header>
    <!-- FIM DA HEADER     class="fas fa-search sub-nav-logo" -->

    <!-- MAIN CONTAINER -->
    <section class="main-container">

      <?php
      if(isset($_GET["buscar"])){
        if ($totalPesquisa > 0) {
          echo ('<div class="location" id="home">');
          echo ('<h1 id="home">Pesquisa</h1>');
          echo ('<div class="box">');
          while ($filme = $sql_query->fetch_assoc()) {
            echo ('<a href="./player.php?link='.$filme["linkframe"].'"><img src="img/'.$filme["img"].'" alt=""></a>');
          }
          echo ('</div></div>');
        }
      }
     

      ?>

      <div class="location" id="home">
        <h1 id="home">Populares</h1>


        <div class="box">

          <a href="player.php?link=https://www.youtube.com/embed/knovvPSPMSE?si=Q9kUL27zfFzRbX4j"><img src="./img/panico-4.png" alt=""></a>
          <a href="player.php?link=https://www.youtube.com/embed/tjR0p3gOxbw?si=V3WCsOjDku2AwVGL"><img src="./img/um-momento-pode-mudar-tudo.png" alt=""></a>
          <a href="player.php?link=https://www.youtube.com/embed/rnLcMXHffV4?si=i-VTLlr8N929T5Uv"><img src="./img/perigo-iminente.png" alt=""></a>
          <a href="player.php?link=https://www.youtube.com/embed/MRtdplF_whs?si=SAJpNhhsHIEzouNA"><img src="./img/rogue-warfare-3.png" alt=""></a>
          <a href="player.php?link=https://www.youtube.com/embed/o0lIhqCPEys?si=XCUwgMMMbB4UHeNW"><img src="./img/sargento-stubby.png" alt=""></a>
          <a href="player.php?link=https://www.youtube.com/embed/ugCguikNxac?si=R7KhhW11TuIcUoOd"><img src="./img/o-legionario.png" alt=""></a>
        </div>

      </div>



      <h1 id="tendencias">Tendências</h1>
      <div class="box">


        <a href="player.php?link=https://www.youtube.com/embed/iZW_6zsNyvE?si=6pVdvoeJu7rS2hY7"><img src="./img/o-demonio-do-sono.png" alt=""></a>
        <a href="player.php?link=https://www.youtube.com/embed/E_8OgoNorYE?si=sAup3d-m6Q8hMVhb"><img src="./img/ultimos-dias-no-deserto.png" alt=""></a>
        <a href="player.php?link=https://www.youtube.com/embed/8lmmugZl43o?si=eVdolU_-f9-Jx1fs"><img src="./img/um-negocio-brilhante.png" alt=""></a>
        <a href="player.php?link=https://www.youtube.com/embed/cRHaF00zzIg?si=1_O_yJ-f1HhOx3T0"><img src="./img/perigo-na-montanha.png" alt=""></a>
        <a href="player.php?link=https://www.youtube.com/embed/YJOzyveSiGY?si=niBhAV4ymAuAbQNX"><img src="./img/doce-surpresa.png" alt=""></a>
        <a href="player.php?link=https://www.youtube.com/embed/vhhTge6pb2E?si=nk25_n5DTMJLxkP7"><img src="./img/deu-a-louca-na-chapeuzinho.png" alt=""></a>


      </div>

      <h1 id="kids">Kids</h1>
      <div class="box">
        <a href="player.php?link=https://www.youtube.com/embed/zXxEs8CMH2w?si=pYnIQdVgsjacCVRq"><img src="./img/cinderela.png" alt=""></a>
        <a href="player.php?link=https://www.youtube.com/embed/FST-sDfvlb4?si=QmVssTwbS0_hu6rj"><img src="./img/bambi.png" alt=""></a>
        <a href="player.php?link=https://sinalpublico.com/player3/serverf4hlb.php?vid=APQNSREA2023"><img src="./img/a-pequena-sereia.png" alt=""></a>
        <a href="player.php?link=https://sinalpublico.com/player3/serverf3hlb.php?vid=OREILEO"><img src="./img/o-rei-leao.png" alt=""></a>
        <a href="player.php?link=https://sinalpublico.com/player3/serverfhlb.php?vid=AERDGL1"><img src="./img/a-era-do-gelo.png" alt=""></a>
        <a href="player.php?link=https://sinalpublico.com/player3/serverf4hlb.php?vid=ELMTS"><img src="./img/elementos.png" alt=""></a>
      </div>


      <h1 id="lancamentos">Lançamentos</h1>
      <div class="box">
        <a href="player.php?link=https://sinalpublico.com/player3/serverf4hlb.php?vid=MSAOIMPSVELACRTDCNTSPT1"><img src="./img/missao-impossivel.png" alt=""></a>
        <a href="player.php?link=https://sinalpublico.com/player3/serverf4hlb.php?vid=AFRA2"><img src="./img/a-freira-2.png" alt=""></a>
        <a href="player.php?link=https://sinalpublico.com/player3/serverf4hlb.php?vid=FLECMGO"><img src="./img/fale-comigo.png" alt=""></a>
        <a href="player.php?link=https://sinalpublico.com/player3/serverf4hlb.php?vid=AFRA2"><img src="./img/besouro-azul.png" alt=""></a>
        <a href="player.php?link=https://sinalpublico.com/player3/serverf4hlb.php?vid=GRNTRSMDJGDRACRDRLEG"><img src="./img/gran-turismo.png" alt=""></a>
        <a href="player.php?link=https://sinalpublico.com/player3/serverf4hlb.php?vid=AMRAPRMRVSTA"><img src="./img/amor-a-primeira-vista.png" alt=""></a>
      </div>

      
      <h1 id="lancamentos">Documentários</h1>
      <div class="box">
        <a href="player.php?link=https://www.youtube.com/embed/vJzHv3nexfo?si=VTf76k-pE42Wtd3v"><img src="./img/nova-terra.png" alt=""></a>
        <a href="player.php?link=https://www.youtube.com/embed/4JxukHvGVzE?si=QC3eDpvrX0JnVkD1"><img src="./img/chico-xavier.png" alt=""></a>
        <a href="player.php?link=https://www.youtube.com/embed/jIentTu8nc4?si=sqd1RScMMS7qI3jf"><img src="./img/holocausto-brasileiro.png" alt=""></a>
        <a href="player.php?link=https://www.youtube.com/embed/RrUW_-5lZvA?si=aBN18Yra20OGi2Qq"><img src="./img/alphaville.png" alt=""></a>
        <a href="player.php?link=https://www.youtube.com/embed/FFg9psj7Uc4?si=mfZGm1XnsksaGZMt"><img src="./img/invasao-alienigena.png" alt=""></a>
        <a href="player.php?link=https://www.youtube.com/embed/NQELr0N1DPM?si=2gxONoliEHxOJUpd"><img src="./img/despertar.png" alt=""></a>
      </div>



      <!-- FIM DO MAIN CONTAINER -->

      <!-- LINKS -->
      <section class="link">
        <div class="logos">
          <a href="https://www.facebook.com/profile.php?id=61553822212528"><i class="fab fa-facebook-square fa-2x logo"></i></a>
          <a href="https://www.instagram.com/sncinefilms/"><i class="fab fa-instagram fa-2x logo"></i></a>
          <a href="https://twitter.com/Sncinefilms"><i class="fab fa-twitter fa-2x logo"></i></a>
          <a href="#"><i class="fab fa-youtube fa-2x logo"></i></a>
        </div>
        <div class="sub-links">
          <ul>
            <li><a href="#">Áudio e Legendas</a></li>
            <li><a href="#">Descrição de Áudio</a></li>
            <li><a href="#">Centro de Ajuda</a></li>
            <li><a href="#">Gift Cards</a></li>
            <li><a href="#">Media Center</a></li>
            <li><a href="#">Relações com investidores</a></li>
            <li><a href="#">Jobs</a></li>
            <li><a href="#">Termos de Uso</a></li>
            <li><a href="#">Privacidade</a></li>
            <li><a href="#">Avisos Legais</a></li>
            <li><a href="#">Corporação</a></li>
            <li><a href="#">Contato</a></li>
          </ul>
        </div>
      </section>
      <!-- FIM DOS LINKS -->

      <!-- FOOTER -->
      <footer>
        <p>2023, Inc.</p>
        <p>Carlos Avila &copy 2018</p>
      </footer>
  </div>
</body>

</html>
