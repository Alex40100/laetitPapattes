
<!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
      
      <!-- Main Content -->
      <div id="content">

        <?php
            include VIEWPATH . 'admin/inc/topbar.php';
            
        ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><?= heading($title); ?> </h1>
            <i class="fas fa-download fa-sm text-white-50">
            </i>
            <?= anchor ('index', "<i class='fas fa-home fa-sm text-white-50'></i>retourner sur le site",array("class" =>"d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm")); ?>             
            
          </div>

          <!-- Content Row -->
          <div class="row">
              
             <?php 
                     echo $actu_item["title"];
                     
             ?>
              
          </div>

          <!-- Content Row -->

          <div >
              <?php 
                     echo $actu_item["content"];
                     
             ?>
          </div>

          <!-- Content Row -->
          <div class="row">

          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

     