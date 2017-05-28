
<?php  include('header.php'); ?>
<main id="index">
  <div class="container">
    <div class="row">
      <header>
        <div class="eight columns">
          <div id="main_header">
            <a href="#"><h1 id="main_logo">Simplete</h1></a>
            <div id="menu_button">
              <span class="menu_icon"></span>
            </div>
          </div>
        </div>
      </header>
      <?php for ($i = 0; $i < 5; $i++) { ?>
      <div class="eight columns">
        <div class="article">
        <?php $counter = 1; ?>
          <div class="article_image"></div><!-- .article_image -->
          <div class="article_preview">
            <h1>Article Title</h1>
            <p class="preview">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
            <span class="article_date"><?php echo date('l d, Y');  ?></span>
            <a href="/" class="read_more">Read More</a>
          </div>
        </div><!-- .article -->
      </div>
      <?php } ?>
    </div><!-- .row -->
  </div><!-- .container -->
</main><!-- #index -->

<?php  include('footer.php'); ?>