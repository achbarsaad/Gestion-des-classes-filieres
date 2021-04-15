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
                                <h2 class="pageheader-title">Filieres</h2>
                                
                            </div>
                        </div>
                    </div>
		<div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-body">
                                    <form class="needs-validation" action="controller/addFiliere.php" >
                                        <div class="row">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                
                                                <label for="validationCustom01"><strong>Libelle</strong></label>
                                                <input type="text" name="libelle" class="form-control" id="validationCustom01" placeholder="entrer Libelle...." value="" required>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                
                                                <label for="validationCustom01"><strong>Filiere Code</strong> </label>
                                                <input type="text" name="code" class="form-control" id="validationCustom01" placeholder="entrer le Code..." value="" required>
                                            </div>
                      
										
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">    
					<table >	
					    <tr>
						<td></td>
						<td>
						<input class="btn btn-primary" type="submit" value="ajouter" />
						<input class="btn btn-primary" type="reset" value="Effacer" />
						</td>
						</tr>
                                            </table></div>
                                        </div>
                                    </form>
                                </div>

                                <h5 class="card-header"><strong>tableaux des classes</strong></h5>
                                <div class="card-body">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col">Id</th>
                                                <th scope="col">Code</th>
                                                <th scope="col">Filiere</th>
                                            </tr>
                                        </thead>
                                          <tbody>
                                              <?php
                                                include_once 'service/FiliereService.php';
                                                $es = new FiliereService();
                                                foreach ($es->findAll() as $e) {
                                                    ?>
                                                    <tr>
                                                        <td scope="row"><?php echo $e->getId(); ?></td>
                                                        <td scope="row"><?php echo $e->getCode(); ?></td>
                                                        <td scope="row"><?php echo $e->getLibelle(); ?></td>
                                                        <td scope="row">      
                                                            <a href="controller/deleteFiliere.php?id=
                                                       <?php echo $e->getId(); ?>">effacer</a> </td >
                                                         <td scope="row"><a href="updateFiliere.php">Modifier</a></td>
                                                    </tr>
                                                <?php } ?>
                                          </tbody>
                                        </table>
                                    </div>
                            </div>
                        </div>
                    </div>
<?php include_once("partages/footer.php");?>
<style><!--
.btn-primary {
    color: black;
    background-color: rgb(255, 250, 240);
    border-color: #5969ff;
    idth :auto;
	border-radius : 10px;
	padding :10px;
	
	font-size : 15px;
	font-weight : bold;
	cursor : grabbing;
         text-align: center;
}
.btn-secondary:hover {
    text-align: center;
    width: 100%;
    height: 50%;
     background-color: rgb(255, 250, 240);
	color : #fff;
        
}
         
</style> -->