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
              <?=  form_open_multipart('admin/create_actu', ['class' => 'form-horizontal']); ?>
              <div class="form-group row">
                <div class="col-md <?= empty(form_error('title'))?'':'has-error' ?>">
                    <?= form_input(['name' => "title", 'id' => "title",'placeholder' =>"Titre de l'actualité *", 'class' => 'form-control'], set_value('title')) ?>  
                    <span class="help-block text-danger"><?= form_error('title'); ?></span>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md <?= empty(form_error('content'))?'':'has-error' ?>">
                    <?= form_textarea(['name' => "content", 'id' => "content",'placeholder' =>"Contenu de l'actualité *", 'class' => 'form-control editor'], set_value('title')) ?>    
                    <span class="help-block text-danger"><?= form_error('content'); ?></span>
                </div>
              </div>
              <div class="form-group ">
                    <?= form_submit("send", "Soumettre", ['class'=>"btn btn-primary"]); ?>
              </div>
              <?=  form_close(); ?>
          </div>

          <!-- Content Row -->

          <div class="row">

          </div>

          <!-- Content Row -->
          <div class="row">

          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

   <script async charset="utf-8"
    src="//cdn.iframe.ly/embed.js" 
></script>