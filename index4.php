<?php include_once("partages/header.php");?>
<?php include_once("partages/sideMenu.php");  ?>
<?php
include_once './racine.php';
?>        
<link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css"/>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- DataTables JS library -->
<script type="text/javascript" src="DataTables/datatables.min.js"></script>
<script>
    $(document).ready(function(){
        $('#le-table').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax" :"getData.php"

        });

    });
</script>
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title"><i>recherche des Classes</i></h2>
                                
                            </div>
                        </div>
                    </div>
		<div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-body">
                                    
                                </div>

                                <h5 class="card-header"><strong>Les classes</strong></h5>
                                <div class="card-body">
                                    <table id="le-table"class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col">#Id</th>
                                                <th scope="col">Code</th>
                                                <th scope="col">Filiere</th>
                                            </tr>
                                        </thead>
                                          <tbody>
                                              <?php
                                                include_once 'service/ClasseService.php';
                                                $es = new ClasseService();
                                                foreach ($es->findAll() as $e) {
                                                    ?>
                                                    <tr>
                                                        <td scope="row"><?php echo $e->getId(); ?></td>
                                                        <td scope="row"><?php echo $e->getCode(); ?></td>
                                                        <td scope="row"><?php echo $e->getFiliere(); ?></td>   
                                                <?php } ?>
                                          </tbody>
                                        </table>
                                    </div>
                            </div>
                        </div>
                    </div>
<?php include_once("partages/footer.php");?>