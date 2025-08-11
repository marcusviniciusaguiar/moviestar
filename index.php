<?php

  require_once("templates/header.php");

  require_once("dao/MovieDAO.php");

  // DAO dos filmes
  $movieDao = new MovieDAO($conn, $BASE_URL);

  // Recebendo e escolhendo uma categoria
  $moviesCategory = ["Ação", "Drama", "Comédia", "Fantasia / Ficção", "Romance", "Latest Movies"];

  // Embaralhando o array e pegando os 3 primeiros valores
  shuffle($moviesCategory);

  $randomCategory1 = $moviesCategory[0];
  $randomCategory2 = $moviesCategory[1];
  $randomCategory3 = $moviesCategory[2];

// Garantindo que caso alguma venha com os últimos filmes, ela funcione corretamente
  if($randomCategory1 === "Latest Movies") {
    $movies1 = $movieDao->getLatestMovies();
  } else {
    $movies1 = $movieDao->getMoviesByCategory($randomCategory1);
  }

  if($randomCategory2 === "Latest Movies") {
    $movies2 = $movieDao->getLatestMovies();
  } else {
    $movies2 = $movieDao->getMoviesByCategory($randomCategory2);
  }

  if($randomCategory3 === "Latest Movies") {
    $movies3 = $movieDao->getLatestMovies();
  } else {
    $movies3 = $movieDao->getMoviesByCategory($randomCategory3);
  }

?>
    
  <div id="main-container" class="container-fluid">
    <?php if($randomCategory1 === "Latest Movies"): ?> 
      <h2 class="section-title">Filmes novos</h2>
      <p class="section-description">Veja os últimos filmes adicionados ao MovieStar</p>
      <div class="movies-container">
        <?php foreach($movies1 as $movie): ?>
          <?php require("templates/movie_card.php"); ?>
        <?php endforeach; ?>
        <?php if(count($movies1) == 0): ?>
          <p class="empty-list">Ainda não há filmes nessa categoria</p>
        <?php endif; ?>
      </div>
    <?php else: ?> 
      <h2 class="section-title"><?php echo $randomCategory1 ?></h2>
      <p class="section-description">Veja os melhores filmes de <?php echo strtolower($randomCategory1) ?></p>
      <div class="movies-container">
        <?php foreach($movies1 as $movie): ?>
          <?php require("templates/movie_card.php"); ?>
        <?php endforeach; ?>
        <?php if(count($movies1) == 0): ?>
          <p class="empty-list">Ainda não há filmes nessa categoria</p>
        <?php endif; ?>
      </div>
    <?php endif; ?>
    <?php if($randomCategory2 === "Latest Movies"): ?> 
      <h2 class="section-title">Filmes novos</h2>
      <p class="section-description">Veja os últimos filmes adicionados ao MovieStar</p>
      <div class="movies-container">
        <?php foreach($movies2 as $movie): ?>
          <?php require("templates/movie_card.php"); ?>
        <?php endforeach; ?>
        <?php if(count($movies2) == 0): ?>
          <p class="empty-list">Ainda não há filmes nessa categoria</p>
        <?php endif; ?>
      </div>
    <?php else: ?> 
      <h2 class="section-title"><?php echo $randomCategory2 ?></h2>
      <p class="section-description">Veja os melhores filmes de <?php echo strtolower($randomCategory2) ?></p>
      <div class="movies-container">
        <?php foreach($movies2 as $movie): ?>
          <?php require("templates/movie_card.php"); ?>
        <?php endforeach; ?>
        <?php if(count($movies2) == 0): ?>
          <p class="empty-list">Ainda não há filmes nessa categoria</p>
        <?php endif; ?>
      </div>
    <?php endif; ?>
    <?php if($randomCategory3 === "Latest Movies"): ?> 
      <h2 class="section-title">Filmes novos</h2>
      <p class="section-description">Veja os últimos filmes adicionados ao MovieStar</p>
      <div class="movies-container">
        <?php foreach($movies3 as $movie): ?>
          <?php require("templates/movie_card.php"); ?>
        <?php endforeach; ?>
        <?php if(count($movies3) == 0): ?>
          <p class="empty-list">Ainda não há filmes nessa categoria</p>
        <?php endif; ?>
      </div>
    <?php else: ?> 
      <h2 class="section-title"><?php echo $randomCategory3 ?></h2>
      <p class="section-description">Veja os melhores filmes de <?php echo strtolower($randomCategory3) ?></p>
      <div class="movies-container">
        <?php foreach($movies3 as $movie): ?>
          <?php require("templates/movie_card.php"); ?>
        <?php endforeach; ?>
        <?php if(count($movies3) == 0): ?>
          <p class="empty-list">Ainda não há filmes nessa categoria</p>
        <?php endif; ?>
      </div>
    <?php endif; ?>
  </div>
    
    
<?php
require_once("templates/footer.php");  
?>