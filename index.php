<!DOCTYPE html>
<html lang="sv" dir="ltr">

<head>
  <title>LBS LAN</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="layout.css" type="text/css">
  <link rel="icon" href="webbicon.ico">
</head>

<body>
  <header>
    <div id="logo">
      <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="_blank"><img class="png" src="LBS_LAN_LOGO.png" alt="logo" ></a>
      <h2 class="egenfont">Studielandskap</h2>
      <div id="countdown"></div>
    </div>
    
    <div id="meny">
      <ul>
        <li id="current" class="egenfont knappar"><a href="index.php">Studielandskap</a></li>
        <li class="egenfont knappar"><a href="bokningKlassrum1.php">Klassrum 1</a></li>
      </ul>
    </div>
  </header>

  <section>
    <article class="gafe">
      <!-- Google forms -->
      <iframe id="r30" class="form" src="https://docs.google.com/forms/d/e/1FAIpQLSerUZSk-BfuTrYJdACVL6HAlq0RKE1f6RsuOX_GrrzwVI9sJA/viewform?usp=sf_link" width="360" height="2500" frameborder="0" marginheight="0" marginwidth="0">Läser in …</iframe>
      <script>
        window.setInterval("reloadIFrame60();", 30000);

        function reloadIFrame60() {
          document.getElementById("r30").src = "https://docs.google.com/forms/d/e/1FAIpQLSerUZSk-BfuTrYJdACVL6HAlq0RKE1f6RsuOX_GrrzwVI9sJA/viewform?usp=sf_link";
        }
      </script>
      <!-- Google spreadsheets -->

      <div class="sheet">
        <iframe id="r10" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vSaiTA0hMvOsooCY-Rdf5kYVVCDYyg3rjv1XUeZUCqfr_tNyp_EJbiSVBg25-jTZdwSe52XpLMT9I-J/pubhtml?gid=967244663&range=A1:BD40" width="1121" height="826" frameborder="0" marginheight="0" marginwidth="0">Läser in …</iframe>
        <script>
          window.setInterval("reloadIFrame10();", 10000);

          function reloadIFrame10() {
            document.getElementById("r10").src = "https://docs.google.com/spreadsheets/d/e/2PACX-1vSaiTA0hMvOsooCY-Rdf5kYVVCDYyg3rjv1XUeZUCqfr_tNyp_EJbiSVBg25-jTZdwSe52XpLMT9I-J/pubhtml?gid=967244663&range=A1:BD40";
          }
        </script>
      </div>
    </article>
  </section>
</body>
</html>