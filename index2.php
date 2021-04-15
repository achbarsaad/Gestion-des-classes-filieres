<?php include_once("partages/header.php");?>
<?php include_once("partages/sideMenu.php");  ?>
<?php
include_once './racine.php';
?>        
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title"><i>Gestion des Classes</i></h2>
                                
                            </div>
                        </div>
                    </div>
		<div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-body">
                                    <form class="needs-validation" action="controller/addClasse.php" >
                                        <div class="row">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <label for="validationCustom01"><strong>Code</strong></label>
                                                <input type="text" name="code" class="form-control" id="validationCustom01" placeholder="Code" value="" required>
                                                
                                            </div>
                                        
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <label for="validationCustom05"><strong>Filiere_Id</strong></label>
                                                 <input type="text" name="filiere" class="form-control" id="validationCustom01" placeholder="Filiere ex: 2ITE.." value="" required>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">     </div><br>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">    
					<table >	
					    <tr>
						<td></td>
						<td>
						<input class="btn btn-primary" type="submit" value="ajouter" />
						<input class="btn btn-primary" type="reset" value="supprimer" />
						</td>
						</tr>
                                            </table></div>
                                        </div>
                                    </form>
                                </div>

                                <h5 class="card-header"><strong>Les classes</strong></h5>
                                <div class="card-body">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col">#Id</th>
                                                <th scope="col">Code</th>
                                                <th scope="col">Filiere</th>
                                                <th scope="col">Supprimer</th>
                                                <th scope="col">Modifier</th>
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
                                                        <td scope="row">      
                                                            <a href="controller/deleteClasse.php?id=
                                                       <?php echo $e->getId(); ?>">Supprimer</a> </td >
                                                         <td scope="row"><a href="updateClasse.php">Modifier</a></td>
                                                    </tr>
                                                <?php } ?>
                                          </tbody>
                                        </table>
                                    </div>
                            </div>
                        </div>
                    </div>
<?php include_once("partages/footer.php");?>