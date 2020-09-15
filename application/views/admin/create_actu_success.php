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
                <i class="fas fa-download fa-sm text-white-50">
                </i>
                <?= anchor('index', "<i class='fas fa-home fa-sm text-white-50'></i>retourner sur le site", array("class" => "d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm")); ?>             
                
            </div>

            <!-- Content Row -->
            <div class="row">
                <div class="col-3 mt-3 mb-3">
                    
                </div>
                <div class="col-6 text-center mt-3 mb-3">
                    <h1 class="h3 mb-0 text-gray-800"><?= heading($title); ?> </h1>
                </div>
                <div class="col-3 mt-3 mb-3">
                    
                </div>
            </div>
            <!-- Content Row -->
            <div class="row">
                <div class="col-3">
                    
                </div>
                <div class="col-6 text-center">
                      <!--<img src="<?php //echo base_url('uploads/' . $slug); ?>" style='height:150px; border: 1px solid #ddd; border-radius: 4px; padding: 5px;' alt="Votre photo téléchargée"/> -->
                </div>
                <div class="col-3">
                    
                </div>
            </div>
            <!-- Content Row -->
            <div class="row">
                
                <div class="col-6 text-right mt-2">
                    <p><?php echo anchor('admin/create_actu', 'Créez une autre actualité!'); ?></p>
                </div class="col-6">
                <div class="col-6 text-left mt-2">
                    <p><?php echo anchor('admin/liste_actu', 'Liste des actualités'); ?></p>
                </div>
            </div>

            <!-- Content Row -->
            <div class="row">

            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

