<?php include 'logic.php'; ?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Web Page</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <header>
    <h1 class="banner-container">Jeopardy</h1>
  </header>

  <main>
  <div class="upper-container">
    <div class="column-container">
      <div class="upper1-container">

        <div class="left-column">
          <div class="player-column <?= $currentPlayer === 0 ? 'active-player' : '' ?>">
            <div class="player-image">
              <img src="anon-user.jpg" width="100%" height="100%">
            </div>
            <div class="player-info">
              <p><?= $_SESSION['username1'] ?? '' ?></p>
              <p>Cash: </p>
            </div>
          </div>

          <div class="player-column <?= $currentPlayer === 1 ? 'active-player' : '' ?>">
            <div class="player-image">
              <img src="anon-user.jpg" width="100%" height="100%">
            </div>
            <div class="player-info">
              <p><?= $_SESSION['username2'] ?? '' ?></p>
              <p>Cash: </p>
            </div>
          </div>

          <div class="player-column <?= $currentPlayer === 2 ? 'active-player' : '' ?>">
            <div class="player-image">
              <img src="anon-user.jpg" width="100%" height="100%">
            </div>
            <div class="player-info">
              <p><?= $_SESSION['username3'] ?? '' ?></p>
              <p>Cash: </p>
            </div>
          </div>
        </div>

        <div class="middle-column">
          <div class="host-column">
            <img src="AlexTrebek.jpg" width="100%" height="100%">
          </div>
        </div>

      </div> <!-- .upper1-container -->

      <div class="settings-container">
        <div class="settings-box">
          User Info
        </div>
        <div class="settings-box">
          <div class="current-turn">
            Current turn: <?= htmlspecialchars($players[$currentPlayer]) ?>
          </div>
        </div>
        <div class="settings-box">
          Settings
        </div>
        <div class="settings-box">
          Confirm Answer
        </div>
      </div>

    </div> <!-- .column-container -->

    <div class="right-column">
      <div class="matrix">
        <div class="cell">History</div>
        <div class="cell">Data Structures</div>
        <div class="cell">Algorithms</div>
        <div class="cell">Cybersecurity</div>
        <div class="cell">Hardware</div>
        <div class="cell">Artificial Intelligence</div>

        <!-- Row 1 ($200) -->
        <?php for ($i = 1; $i <= 6; $i++): ?>
            <?php $isUsed = $_SESSION['used_questions'][$i] ?? false; ?>
            <a class="cell <?= $isUsed ? 'used' : '' ?>" href="<?= $isUsed ? '#' : '?q='.$i ?>">
                <?= $isUsed ? '' : '$200' ?>
            </a>
        <?php endfor; ?>

        <!-- Row 2 ($400) -->
        <?php for ($i = 7; $i <= 12; $i++): ?>
            <?php $isUsed = $_SESSION['used_questions'][$i] ?? false; ?>
            <a class="cell <?= $isUsed ? 'used' : '' ?>" href="<?= $isUsed ? '#' : '?q='.$i ?>">
                <?= $isUsed ? '' : '$400' ?>
            </a>
        <?php endfor; ?>

        <!-- Row 3 ($600) -->
        <?php for ($i = 13; $i <= 18; $i++): ?>
            <?php $isUsed = $_SESSION['used_questions'][$i] ?? false; ?>
            <a class="cell <?= $isUsed ? 'used' : '' ?>" href="<?= $isUsed ? '#' : '?q='.$i ?>">
                <?= $isUsed ? '' : '$600' ?>
            </a>
        <?php endfor; ?>

        <!-- Row 4 ($800) -->
        <?php for ($i = 19; $i <= 24; $i++): ?>
            <?php $isUsed = $_SESSION['used_questions'][$i] ?? false; ?>
            <a class="cell <?= $isUsed ? 'used' : '' ?>" href="<?= $isUsed ? '#' : '?q='.$i ?>">
                <?= $isUsed ? '' : '$800' ?>
            </a>
        <?php endfor; ?>

        <!-- Row 5 ($1000) -->
        <?php for ($i = 25; $i <= 30; $i++): ?>
            <?php $isUsed = $_SESSION['used_questions'][$i] ?? false; ?>
            <a class="cell <?= $isUsed ? 'used' : '' ?>" href="<?= $isUsed ? '#' : '?q='.$i ?>">
                <?= $isUsed ? '' : '$1000' ?>
            </a>
        <?php endfor; ?>

      </div>

      <div class="question-area">
        <?= htmlspecialchars($currentQuestion) ?>
        <?php if ($currentQuestion !== ""): ?>
          <form method="POST" action="?q=<?= $selected ?>">
            <br>
            <input type="hidden" name="form_type" value="jeopardy">
            <input type="text" name="answer" placeholder="Your answer">
            <button type="submit">Submit</button>
          </form>
        <?php endif; ?>

        <div class="answer-feedback">
          <?= $feedback ?>
        </div>
      </div>
    </div> <!-- .right-column -->

  </div> <!-- .upper-container -->

  <div class="lower-container">
  </div>

  <div class="lowest-container">
    <div class="player-button-container">
      <div class="button-username">Player 1</div>
      <img src="redbutton.jpeg" width="100px" height="100px" class="player-button">
    </div>
    <div class="player-button-container">
      Player 2
      <img src="redbutton.jpeg" width="100px" height="100px" class="player-button">
    </div>
    <div class="player-button-container">
      Player 3
      <img src="redbutton.jpeg" width="100px" height="100px" class="player-button">
    </div>
  </div>
</main>

  <footer>
    <p>HTML CSS validation placeholder</p>
  </footer>

</body>

</html>