<?php include('config.php'); ?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>PORTFOLIO</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css'><link rel="stylesheet" href="./style.css">
<style type="text/css">
  .p-inner{background-color: darkgray}
</style>
</head>
<body>
<!-- partial:index.partial.html -->
<section class="portfolio section">
  <div class="container">
    <div class="top-side">
      <h2>PORTFOLIO</h2>
    </div>  
    <?php 
    $category = "select * from category";
    $category_list = $con->query($category);
    
    $product = "select product.*,category.id as cid,category_name from product join category where product.category_id = category.id";
    $product_list = $con->query($product); ?>

    <div class="filters">
      <ul>
         <li class="active" data-filter="*">All</li>
        <?php foreach ($category_list as $value) { ?>
          <li data-filter=".<?php echo $value['category_name']; ?>"><?php echo ucfirst($value['category_name']); ?></li>
        <?php } ?>  
      </ul>
    </div> 
    <div class="filters-content">
      <div class="row grid">
        <?php foreach ($product_list as  $product_lists) { ?>
        <div class="col-sm-4 all <?php echo $product_lists['category_name']; ?>">
          <div class="item">
            <img src="http://themes.muffingroup.com/betheme/documentation/doc-images/muffin-options/custom-js.png" alt="Work 1">
            <div class="p-inner" >
              <h5><?php echo $product_lists['programming_languages']; ?></h5>
              <div class="cat"><?php echo $product_lists['programming_languages']; ?></div>
            </div>
          </div>
        </div>
      <?php } ?>
      </div>
    </div>
  </div>
</section>
<!-- partial -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src='https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js'></script><script  src="./script.js"></script>
</body>
</html>
