<style>

</style>


  <?php 
    
  ?>
 
</nav>
<!--/.Navbar-->
<form method="post" action="<?php WEB_ROUTE ?>">
    <img style="position:absolute;height:70px" src=" <?= WEB_ROUTE . "img/LOGO.png" ?> ">
    <h4 style="background-color:red;text-align:center;color:white;height: 30px;padding:30px;font-size:20px;margin-top: -8px; width:100%;">LE PLAISIR DE JOUER</h4>
    <h3 style="background-color:black;text-align:center;color:white;height: 40px;padding:30px;margin-top: -20px; width:100%;">CREER ET PARAMETRER VOS QUIZZ
        <a class="btn pt btn-primary" style="margin-left:1100px;margin-top:-46px;color:white;background-color:red solid;height:90px ;border-color:red" href="<?= WEB_ROUTE.'?controllers=security&vue=connexion' ?>">Deconnexion</a>
    </h3>
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
        <!--  <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId">
        <span class="navbar-toggler-icon"></span>
    </button> -->
        <br> <br>
        <div class="collapse bn navbar-collapse" id="collapsibleNavId">
            <ul class="nav flex-column mr-auto mt-2 mt-lg-0">
                <div class="bg-danger profile">
                    <p style="color:white">AAA</br>
                        BBB</p>
                </div>
                <br> <br>
                <?php if (est_admin()): ?>
                <li class="nav-item active">
                    <a class="nav-link" href="<?= WEB_ROUTE . '?controllers=admin&vue=liste.question' ?>">LISTE QUESTIONS</a>
                    
                </li></br>
                <li class="nav-item active">
                    <a class="nav-link" href="<?= WEB_ROUTE . '?controllers=admin&vue=create.admin' ?>">CREER ADMIN</a>
                    
                </li></br>
                <li class="nav-item active">
                    <a class="nav-link" href="<?= WEB_ROUTE . '?controllers=admin&vue=liste.joueur' ?>">LISTE JOUEURS</a>
                    
                </li></br>
                <li class="nav-item active">
                    <a class="nav-link" href="<?= WEB_ROUTE . '?controllers=admin&vue=create.question' ?>">CREER QUESTIONS</a>
                    
                </li></br>
                <li class="nav-item active">
                    <a class="nav-link" href="<?= WEB_ROUTE . '?controllers=admin&vue=tableau.bord' ?>">TABLEAU DE BORD</a>
                    
                </li></br>
                <li class="nav-item active">
                    <a class="nav-link" href="<?= WEB_ROUTE . '?controllers=admin&vue=liste.admin' ?>">LISTE ADMIN</a>
                </li>
                <?php endif; ?>
                <?php if(est_joueur()): ?>
            <li class="nav-item dropdown">
                    <a class="dropdown-item" href="<?=WEB_ROUTE.'?controllers=joueur&vue=jeu'?>">Jeu</a>
                </div>
            </li>
            <?php endif; ?>
            </ul>
            
       
        </div>
    </nav>
</form>
<style>
    nav ul {
        list-style: none;
        margin-top: 4px;
    }

    nav li a {
        text-decoration: none;
        color: #000;
    }

    nav ul li {

        padding: 12px;
    }

    nav {

        width: 410px;
        height: 400px;
        margin-top: 3%;
    }

    .profile {
        height: 130px;
        background-color: red;
    }

    .nav-item a:hover {
        background-color: #ddd;
    }

    .image {
        float: left;
        margin-top: -5%;
        width: 7%;
        height: 7%;
        margin-left: 90%;
    }
    .bn a:hover{
        background-color: #CCC;
        border-left: 8px solid greenyellow;
    }
    @media screen and (max-width: 641px) {
  #collapsibleNavId a {
    float: none;
    width: 100%;
  }
}
</style>