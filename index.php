<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Simplete Theme</title>
    <link href="https://fonts.googleapis.com/css?family=Mada:300,400,500,900" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/css/styles.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
  </head>
  <body>
    <a href="#skip" id="skip_nav"></a>
    <div id="menu">
      <div id="menu_logo">
        <a href="/"><h2>Logo</h2></a>
      </div>
      <nav>
        <ul id="main_nav">
          <li><a href="/">Home</a></li>
          <li><a href="/gallery.php">Gallery</a></li>
          <li><a href="/about.php">About</a></li>
          <li><a href="/contact.php">Contact</a></li>
        </ul>
      </nav>
      <div id="social_media">
        <ul>
          <li><a href="https://www.instagram.com" class="fa fa-instagram"></a></li>
          <li><a href="https://www.snapchat.com" class="fa fa-snapchat-ghost"></a></li>
          <li><a href="https://www.facebook.com" class="fa fa-facebook"></a></li>
          <li><a href="https://www.twitter.com" class="fa fa-twitter"></a></li>
        </ul>
      </div><!-- #social_media -->
    </div><!-- #main_nav -->
    <a id="#skip"></a>
    <header>
      <div id="main_header">
        <a href="/"><h1 class="main_logo">Simplete</h1></a>
        <div id="menu_button">
          <span></span>
        </div>
      </div>
    </header>
    <main id="index">
      <div class="container">
        <div class="row">
          <div class="eight columns">
            <div class="article">
            <?php $counter = 1; ?>
              <div class="article_image_<?= $counter++; ?>"></div><!-- .article_image -->
              <div class="article_preview">
                <h2>Title Goes Here</h2>
                <p class="preview">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur.</p>
                <a href="/">Read More</a>
              </div>
            </div><!-- .article -->
          </div>
        </div><!-- .row -->
      </div><!-- .container -->
    </main>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>