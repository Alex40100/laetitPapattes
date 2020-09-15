
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

            
            
            
            
                <table id="table_id" class="table table-striped table-bordered table-hover" style="width:100%">
                    <h1 class="text-center text-gray-800"><?php echo $titre; ?> </h1>
                    <thead  class="m-2">
                        <tr>
                            
                            <th class="text-center" scope="col">Titre</th>
                            <th class="text-center" scope="col">Date de création</th>
                            <th class="text-center" scope="col">Date de publication</th>
                            <th class="text-center" scope="col">Contenu</th>
                            <th class="text-center" scope="col">Statut</th>
                            <th class="text-center" scope="col">Action</th>
                        </tr>                   
                    </thead>
                    <tbody>
                        <?php foreach ($actu as $value): 
                           
                            $contenu= substr($value["content"], 0,30);
                            
                        ?>
                        <tr>
                            
                            <td class="text-center"><?php echo $value["title"]; ?></td>
                            <td class="text-center"><?php echo $value["date_create"]; ?></td>
                            <td class="text-center"><?php echo $value["date_pub"]; ?></td>
                            <td><?php echo $contenu; ?></td>
                            <td class="text-center"><?php if($value["status"] ==='A'){
                                    $value["status"] = 'En attente de publication';                                    
                                    echo $value["status"];
                                }else if($value["status"] ==='P') {
                                    $value["status"] = 'Publiée';                                    
                                    echo $value["status"];
                                } ?>
                            </td>
                            <td class="text-center">
                                <a href="preview_actu/<?php echo $value["slug"]; ?>/<?php echo $value["id"]; ?>" class="btn btn-info m-1" style="">Preview</a>
                                <a href="update_actu/<?php echo $value["slug"]; ?>/<?php echo $value["id"]; ?>" class="btn btn-warning m-1" style="">Editer</a>
                                <a href="delete_actu/<?php echo $value["slug"]; ?>/<?php echo $value["id"]; ?>" id="sup" onclick="return confirm('Voulez vous vraiment effacer cette actualité ?');" class="btn btn-danger m-1" style="">Effacer</a>
                                <a href="pub_actu/<?php echo $value["slug"]; ?>/<?php echo $value["id"]; ?>" id="pub" onclick="return confirm('Voulez vous vraiment publier cette actualité ?');" class="btn btn-success m-1" style="">publier</a> 
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>

                </table>
           
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
    
    