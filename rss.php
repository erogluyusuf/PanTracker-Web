<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USGS Haberleri</title>

  


</head>
<body>
    <div id="rss-content">


    <?php
$url = 'https://deprem.afad.gov.tr/last-earthquakes.html';
$content = file_get_contents($url);
echo $content;
?>


        <script>

$(document).ready(function() {
  $.get('get_content.php', function(data) {
    var mainContent = $(data).find('html').html();
    console.log(mainContent);
  });
});


        </script>
    </div>
</body>
</html>
