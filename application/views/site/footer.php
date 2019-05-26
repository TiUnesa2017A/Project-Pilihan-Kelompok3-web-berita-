
<!-- ####################################################################################################### -->
<div class="wrapper">
  <div id="footer">

    <div class="footbox" style="width: 45%">
      <h2>Berita Terbaru</h2>
      <ul>      
      <?php 
        $latestnews = $this->adminModel->getnewsbylimit(6);
        foreach($latestnews as $row):
      ?>
        <li><a href="<?php echo base_url().'home/news/'.$row->news_id; ?>"><?php echo mb_substr($row->title, 0,70); ?></a></li>
      <?php endforeach; ?>
      </ul>
    </div>

    <div class="footbox"style="width: 45%">
      <h2>Ketegori</h2>
      <ul>
            <?php $cats = $this->adminModel->getcat(); ?>
            <?php foreach($cats as $cat): ?>
            <li><a href="<?php echo base_url().'home/category/'.$cat->cat_id; ?>"><?php echo $cat->title; ?></a></li>
          <?php endforeach; ?>
          </ul>
    </div>
    <br class="clear" />
  </div>
</div>



<!-- ####################################################################################################### -->

<!-- ####################################################################################################### -->
<div class="wrapper col8">
  <div id="copyright">
    <?php 
    $settings = $this->adminModel->getsettings();
    ?>
    <p class="fl_left">Copyright &copy; - WebBerita - Kelompok 3</p>
    <br class="clear" />
  </div>
</div>
</body>
</html>