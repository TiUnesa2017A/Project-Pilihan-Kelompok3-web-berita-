<!-- ####################################################################################################### -->
<div class="wrapper">
  <div class="container">
    <div class="content">
      <h1>Hasil Search :  <?php echo $searchnum; ?> Hasil </h1>


      <div class="content">
        <ul style="list-style-type: none;">
        <?php 
          if($searchnum == 0){
            echo "<strong>Tidak Ada Hasil.</strong>";
          }
        ?>
            <?php foreach($search as $row): ?>
            <li>
              <div class="item">
              <img width="600px" height="200px" src="<?php echo base_url().'assets/uploads/'.$row->image; ?>">
              <p>
                <strong><?php echo mb_substr($row->title,0,150); ?></strong>
                <p><?php echo mb_substr($row->content,0,300); ?></p>

              </p>
              <p class="readmore"><a href="<?php echo base_url(); ?>home/news/<?php echo $row->news_id;?>">Baca Selengkapnya » </a></p>
              </div>
              </li>  
            <hr />
            <?php endforeach; ?>  
            </ul>  
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
    <br class="clear" />
  </div>
</div>
 <br class="clear" />
<!-- ####################################################################################################### -->
