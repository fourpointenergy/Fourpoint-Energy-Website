<?php 
  $pageTitle = 'FourPoint Energy - Business Strategy';
  $pageDescription = '';
  $fbShareImg = '';
  $thisPage = "";
  include($_SERVER['DOCUMENT_ROOT']."/includes/header.php"); 
?>

<header>
  <h1>Business Opportunities</h1>
  <p>Introduction copy Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
</header>

<div class="container general-content">
  <div class="wrapper">
    <img class="aligncenter size-full wp-image-1142" src="https://fourpointenergy.com/wp-content/uploads/2016/03/strategy.jpg" alt="strategy" width="100%" height="auto" />
  </div>


  <?php 
    include($_SERVER['DOCUMENT_ROOT']."/includes/solid-top-boxes-lightblue.php"); 
  ?>
  

  <?php 
    include($_SERVER['DOCUMENT_ROOT']."/includes/accordion-no-list.php"); 
  ?>


  <div class="wrapper">
    <h4>Operating Counties</h4>
    <div class="pre-footer solid-top-cards multi-column">
      
      <?php 
        include($_SERVER['DOCUMENT_ROOT']."/includes/county-list.php"); 
      ?>

    </div>
  </div>

  
  </div>
</div>

<?php include($_SERVER['DOCUMENT_ROOT']."/includes/pre-footer.php"); ?>

        
<?php include($_SERVER['DOCUMENT_ROOT']."/includes/footer.php"); ?>