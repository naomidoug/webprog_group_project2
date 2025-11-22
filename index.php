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
    <h1 class ="banner-container">Jeopardy</h1>
  </header>

  <main>
    <div class ="upper-container">
        <div class="left-column">
            <div class = "face-columns">
                <div class = "nested-column">Face Icon  here</div>
                <div class = "nested-column">Total info here</div>          
            </div>

            <div class = "face-columns">
                <div class = "nested-column">Face Icon  here</div>
                <div class = "nested-column">Total info here</div>            
            </div>

            <div class = "face-columns">
                <div class = "nested-column">Face Icon  here</div>
                <div class = "nested-column">Total info here</div>         
            </div>

        </div>

        <div class="middle-column">
            <div class="host-column">
              <img src="AlexTrebek.jpg" width="100%" height="200">

            </div>

            
        </div>

        <div class="right-column">
            <div class="matrix">
              <div class="cell">History</div>
              <div class="cell">Data Structures</div>
              <div class="cell">Algorithms</div>
              <div class="cell">Cybersecurity</div>
              <div class="cell">Hardware</div>
              <div class="cell">Artificial Intelligence</div>
              <!-- Row 1 ($200) -->
              <a class="cell" href="?q=1">$200</a>
              <a class="cell" href="?q=2">$200</a>
              <a class="cell" href="?q=3">$200</a>
              <a class="cell" href="?q=4">$200</a>
              <a class="cell" href="?q=5">$200</a>
              <a class="cell" href="?q=6">$200</a>

              <!-- Row 2 ($400) -->
              <a class="cell" href="?q=7">$400</a>
              <a class="cell" href="?q=8">$400</a>
              <a class="cell" href="?q=9">$400</a>
              <a class="cell" href="?q=10">$400</a>
              <a class="cell" href="?q=11">$400</a>
              <a class="cell" href="?q=12">$400</a>

              <!-- Row 3 ($600) -->
              <a class="cell" href="?q=13">$600</a>
              <a class="cell" href="?q=14">$600</a>
              <a class="cell" href="?q=15">$600</a>
              <a class="cell" href="?q=16">$600</a>
              <a class="cell" href="?q=17">$600</a>
              <a class="cell" href="?q=18">$600</a>

              <!-- Row 4 ($800) -->
              <a class="cell" href="?q=19">$800</a>
              <a class="cell" href="?q=20">$800</a>
              <a class="cell" href="?q=21">$800</a>
              <a class="cell" href="?q=22">$800</a>
              <a class="cell" href="?q=23">$800</a>
              <a class="cell" href="?q=24">$800</a>

              <!-- Row 5 ($1000) -->
              <a class="cell" href="?q=25">$1000</a>
              <a class="cell" href="?q=26">$1000</a>
              <a class="cell" href="?q=27">$1000</a>
              <a class="cell" href="?q=28">$1000</a>
              <a class="cell" href="?q=29">$1000</a>
              <a class="cell" href="?q=30">$1000</a>

            </div>

            <div class="question-area">
              <?= $currentQuestion ?>
            </div>
        </div>
    </div>

    <div class ="lower-container">
        <div class ="tools-container">
            <div class="tool-box">
              The user Info
            </div>
            <div class="tool-box">
              The user Info
            </div>
            <div class="tool-box">
              The user Info
            </div>
            <div class="tool-box">
              The user Info
            </div>
        </div>

        <div class ="answer-area">
          "<p> 
              What is.....
          </p>

        </div>

    </div>
  </main>

  <footer>
    <p>HTML CSS validation placeholder</p>
  </footer>

</body>
</html>
