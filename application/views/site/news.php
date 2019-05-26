<!-- ####################################################################################################### -->
<div class="wrapper">
  <div id="breadcrumb">
    <ul>
      <li class="first">You Are Here</li>
      <li>&#187;</li>
      <li><a href="<?php echo base_url(); ?>">Home</a></li>
      <li>&#187;</li>
      <li><a href="<?php echo base_url(); ?>home/category/<?php echo $news->cat_id; ?>"><?php echo $cat; ?></a></li>
      <li>&#187;</li>
      <li class="current"><a href="#"><?php echo $news->title; ?></a></li>
    </ul>
  </div>
</div>
<!-- ####################################################################################################### -->
<style type="text/css">
  .content img{
    max-width: 630px;
  }
</style>
<div class="wrapper">
  <div class="container">
    <div class="content">
      <h1><?php echo $news->title; ?></h1>
      <div class="content">
        <img width="600px" height="200px" src="<?php echo base_url().'assets/uploads/'.$news->image; ?>" />
        <?php echo $news->content; ?>
        <br />
        Lihat Video
        <br />
        <br />
        Dengan :  <?php echo $news->dateposted; ?> 
        <br /><br />
      </div>

      <hr>
      <br />

      <div id="comments">
        <h2>Komentar</h2>
        <?php if($commentsnum != 0): ?> 
<ul class="commentlist">
        <?php foreach($comments as $row): ?>
          <li class="comment_odd">
            <div class="author"><img class="avatar" src="<?php echo base_url(); ?>assets/images/demo/avatar.gif" width="32" height="32" alt="" /><span class="name"><a href="#"><?php echo $row->poster_name; ?></a></span> <span class="wrote">wrote:</span></div>
            <div class="submitdate"><a href="#"><?php echo $row->date; ?></a></div>
            <p><?php echo $row->comment; ?></p>
          </li>
        <?php endforeach; ?>  

</ul>

        <?php else: ?>
          <p>Tidak ada komentar.</p>
        <?php endif; ?>  
        
      </div>



      <h2>Tulis Komentar</h2>
      <?php echo validation_errors(); ?>
      <div id="respond">
        <form action="<?php echo base_url(); ?>home/news/<?php echo $news->news_id; ?>" method="post">
          <p>
            <input type="text" name="postername" id="name"  size="22" />
            <label for="name"><small>Nama (required)</small></label>
          </p>
          <p>
            <textarea name="comment" id="comment" cols="100%" rows="10"></textarea>
            <label for="comment" style="display:none;"><small>Komentar (required)</small></label>
          </p>
          <p>
            <input name="submit" type="submit" id="submit" value="Tambahkan Komentar" />
            &nbsp;
            <input name="reset" type="reset" id="reset" tabindex="5" value="Reset Form" />
          </p>
        </form>
      </div>
    </div>
    <div class="column">
      <div class="subnav">
        <h2>Most Read News</h2>
        <ul>
        <?php foreach($mostreadnews as $row): ?>
          <li><a href="<?php echo base_url(); ?>home/news/<?php echo $row->news_id; ?>"><?php echo $row->title;  ?></a></li>
        <?php endforeach; ?>  
        </ul>
      </div>
      <div class="subnav">
        <h2>Read more news</h2>
        <ul>
        <?php foreach($relatednews as $row): ?>
          <li><a href="<?php echo base_url(); ?>home/news/<?php echo $row->news_id; ?>"><?php echo $row->title;  ?></a></li>
        <?php endforeach; ?>  
        </ul>
      </div>
      

      
    <br class="clear" />
  </div>
</div>
 <br class="clear" />
<!-- ####################################################################################################### -->
