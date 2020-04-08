<?php

  
  $sql = "SELECT * FROM banners ORDER BY id DESC limit 3";

  $result = mysqli_query($con, $sql);

?>
<!-- ============= slider =========== -->
    <div class="sldr">
    	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
        <?php
              if(mysqli_num_rows($result) > 0)
              {
                for($i = 0; $i < mysqli_num_rows($result); $i++)
                {
                  ?>
                    <li data-target="#carousel-example-generic" data-slide-to="<?php echo $i; ?>" class="<?php if($i == 0) { echo 'active'; } ?>"></li>
                  <?php
                }
              }
            ?>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <?php
              if(mysqli_num_rows($result) > 0)
              {
                $i = 1;
                while($row = mysqli_fetch_assoc($result))
                {
                  ?>
                    <div class="item <?php if($i == 1) { echo 'active'; } ?>">
                      <img src="uploads/banners/<?php echo $row['image'];?>" width="100%" class="img-responsive" alt="...">
                      <div class="carousel-caption" style="font-size:30px;">
                      <?php echo $row['caption'];?>
                      </div>
                    </div>

                  <?php
                  $i++;
                }
              }
            ?>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>