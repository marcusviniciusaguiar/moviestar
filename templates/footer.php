<?php

  require_once("globals.php");
  require_once("db.php");
  require_once("models/Message.php");
  require_once("dao/UserDAO.php");

  $message = new Message($BASE_URL);

  $flassMessage = $message->getMessage();

  if(!empty($flassMessage["msg"])) {
    // Limpar a mensagem
    $message->clearMessage();
  }

  $userDao = new UserDAO($conn, $BASE_URL);

  $userData = $userDao->verifyToken(false);

  


?>

<footer id="footer">
      <div id="social-container">
        <ul>
          <li>
            <a href="#"><i class="fab fa-facebook-square"></i></a>
          </li>
          <li>
            <a href="#"><i class="fab fa-instagram"></i></a>
          </li>
          <li>
            <a href="#"><i class="fab fa-youtube"></i></a>
          </li>
        </ul>
      </div>
      <div id="footer-links-container">
        <ul>
          <?php if($userData): ?>
          <li><a href="<?= $BASE_URL ?>newmovie.php">Adicionar filme</a></li>
          <li><a href="<?= $BASE_URL ?>">Adicionar crítica</a></li>
          <?php else: ?>
          <li><a href="<?= $BASE_URL ?>auth.php">Entrar / Registrar</a></li>
          <?php endif; ?>
        </ul>
      </div>
      <p>&copy; 2025 Soares Tecnologia</p>
    </footer>
    <!-- BOOTSTRAP JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.7/js/bootstrap.js" integrity="sha512-4rgYnurxnFSdCDrgqqH1h/sOb4/tUd1MXYeCeu5PcYa+svtguh06/TGpvGwvJB6a3SNp2cDaN2f8F5yZ1o/vPg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>

<!-- Adicionar melhor caminho para adição de crítica -->