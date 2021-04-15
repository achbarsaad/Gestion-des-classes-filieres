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
                                <h2 class="pageheader-title"><i>Gestion des Etudiants</i></h2>
                                
                            </div>
                        </div>
                    </div>
					<div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-body">
                                    <form class="needs-validation" action="controller/addEtudiant.php" >
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <label for="validationCustom01">prenom</label>
                                                <input type="text" name="prenom" class="form-control" id="validationCustom01" placeholder="entrer votre Prenom" value="" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <label for="validationCustom02"><strong>Nom</strong></label>
                                                <input type="text" class="form-control" name="nom" id="validationCustom02" placeholder="entrer votre Nom" value="" required>
                                                <div class="valid-feedback">
                                                    good !
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <label for="validationCustomUsername"><strong>Email</strong></label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                                                    </div>
                                                    <input type="text" class="form-control" name="email" id="validationCustomUsername" placeholder=".....@gmail.com" aria-describedby="inputGroupPrepend" required>
                                                    <div class="invalid-feedback">
                                                        Please choose a username.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <label for="validationCustom03"><strong>Ville</strong></label>
                                                <select name="ville" class="form-control" id="validationCustom03">
						<option value="Marrakech">Midelt</option>
						<option value="Rabat">Rabat</option>
						<option value="Agadir">Agadir</option>
						<option value="Casablanca">Casablanca</option>
						<option value="Tanger">Tanger</option>
						<option value="Marrakech">Marrakech</option>
						<option value="El Jadida">El Jadida</option>
						<option value="Fes">Fes</option>

		                                </select>
                                            </div>
											</br>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <label for="validationCustom04"><strong>Sexe</strong></label></br>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="sexe" value="femme" checked="" class="custom-control-input"><span class="custom-control-label">F</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="sexe" value="femme" class="custom-control-input"><span class="custom-control-label">M</span>
                                            </label>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <label for="validationCustom05"><strong>Filiere</strong></label>
												<select name="filiere" class="form-control" id="validationCustom03">
													<option value="2ITE">2ITE</option>
													<option value="ISIC">ISIC</option>
													<option value="G2E">G2E</option>
													<option value="GI">GI</option>

												</select>
                                            </div>
										<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                            <label for="inputUserName"><strong>Classe</strong></label>
                                            <input id="inputUserName" type="text" name="classe" required="" placeholder="Votre classe" autocomplete="off" class="form-control">
                                        </div><label> </label>
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
                                  
                                        
                                        
                                        <h1 class="card-header"><strong><i>Liste des etudiants</i></strong></h1>
                                        <div class="card-body">

                                        <table class="table table-striped">
                                          <thead>
                                            <tr><th scope="col">Id</th><th scope="col">Nom</th><th scope="col">Prenom</th><th scope="col">Email</th>
                                                <th scope="col">Ville</th><th scope="col">Sexe</th>
                                                <th scope="col">Filiere_Id</th><th scope="col">Classe_Id</th><th scope="col">Supprimer</th><th scope="col">Modifier</th></tr>
                                          </thead>
                                          <tbody>
                                              <?php
                                                include_once 'service/EtudiantService.php';
                                                $es = new EtudiantService();
                                                foreach ($es->findAll() as $e) {
                                                    ?>
                                                    <tr>
                                                        <td scope="row"><?php echo $e->getId(); ?></td>
                                                        <td scope="row"><?php echo $e->getNom(); ?></td>
                                                        <td scope="row"><?php echo $e->getPrenom(); ?></td>
                                                        <td scope="row"><?php echo $e->getEmail(); ?></td>
                                                        <td scope="row"><?php echo $e->getVille(); ?></td>
                                                        <td scope="row"><?php echo $e->getSexe(); ?></td>
                                                        <td scope="row"><?php echo $e->getFiliere(); ?></td>
                                                        <td scope="row"><?php echo $e->getClasse(); ?></td>
                                                        <td scope="row" class="btn btn-outline-secondary modifier">      
                                                            <a href="controller/deleteEtudiant.php?id=
                                                       <?php echo $e->getId(); ?>">Supprimer</a> </td >
                                                         <td scope="row" ><a href="updateEtudiant.php" class="btn btn-outline-secondary modifier">Modifier</a></td>
                                                    </tr>
                                                <?php } ?>
                                          </tbody>
                                        </table>
                                   </div>
                            </div>
                        </div>
                    </div>
<?php include_once("partages/footer.php");?>