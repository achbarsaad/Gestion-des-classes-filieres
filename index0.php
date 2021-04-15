<?php include_once("partages/header.php");?>
<?php include_once("partages/sideMenu.php");  ?>
<?php
include_once './racine.php';
?>         

<div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                  
      <!-- sidebar-wrapper  -->
        <main class="page-content">
            <div class="container-fluid" id="main-content">

                

<div class="container-fluid" style="margin-top: 5%;">
    <div style="text-shadow: 2px 2px 5px green;">
        <p class="h2 text-center text-dark text-uppercase font-weight-bold" style="   font-family: Spectral, serif;
">Statistiques des Pointages</p>
        <hr class="line-seprate">
        


<div class="cards">
                <div class="card-single statistic__item--blue">

                   
                    <div ><a href="index3.php">
                        <p class="h1">224</p>
                         <span class="h1">Filiéres</span>
                    </div>
                    <div>
                        <span  class="fa fa-fw fa-rocket"></span>

                    </div></a>

                </div>

                <div class="card-single statistic__item--red">
                    <div> <a class="nav-link" href="index.php" >
                        <p class="h1">224</p>
                        <span class="h1">Etudiant</span>
                    </div>
                    <div>
                        <span class="fa fa-users"></span>
                    </div>
                     </a>
                </div>
<div class="card-single statistic__item--red">
                    <div>  <a href="index2.php"  >
                        <p class="h1">224</p>
                        <span class="h1">Classes</span>
                    </div>
                    <div>
                        <span class="fas fa-fw fa-chart-pie"></span>
                    </div>
                     </a>
                </div>
                




</div>
</div>
</div>

    </div>
</div>
<script src="script/statistique.js" type="text/javascript"></script>
            </div>

        </main>
        <!-- page-content" -->
    </div>
    
<style>

.cards {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    grid-gap: 2rem;
    margin-top: 1rem;

}
.card-single {
    display: flex;
    justify-content: space-between;
    background: #fff;
    padding: 2rem;
    border-radius: 10px;
    align-self: : center;
}

.card-single div:last-child span{
    color: var(--main-color);
    font-size: 3rem;
}
.card-single div:first-child span {
    color: var(--text-grey);
}
.card-single:last-child {
    background: var(--main-color);
}
.card-single:last-child h1,
.card-single:last-child div:first-child span,
.card-single:last-child div:last-child span {
    color: #fff;
}



element.style {
}
.cards {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    grid-gap: 2rem;
    margin-top: 1rem;
}
* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    list-style-type: none;
    text-decoration: none;
    font-family: 'Poppins', sans-serif;
}
*, ::after, ::before {
    /* box-sizing: border-box; */
}
feuille de style de l’agent utilisateur
div {
    display: block;
}
body {
    margin: 0;
    font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans","Liberation Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    text-align: left;
    background-color: #fff;
}
:root {
    --main-color: #DD2F6E;
    --color-dark: #1D2231;
    --text-grey: #8390A2;
}
.h1{ 
color : white;
text-shadow: 2px 2px 5px red;
}











.statistic__item--blue {
    background: #00b5e9;
}
.statistic__item--red {
    background: #fa4251;
}
.statistic__item--green {
    background: #00b26f;
}










</style>