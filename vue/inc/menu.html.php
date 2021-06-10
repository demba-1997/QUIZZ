
<nav class="navbar navbar-expand-sm navbar-light bg-light">
    <a class="navbar-brand" href="">QUIZZ</a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
   
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <?php if(est_admin()):?>
            <li class="nav-item active">
                <a class="nav-link" href="<?=WEB_ROUTE.'?controllers=admin&view=liste.question'?>">liste des questions <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?=WEB_ROUTE.'?controllers=admin&view=liste.question'?>">liste des joueurs</a>
                <a class="nav-link" href="<?=WEB_ROUTE.'?controllers=admin&view=create.question'?>">créer des questions</a>
                <a class="nav-link" href="<?= WEB_ROUTE.'?controllers=security&view=inscription'?>">Creer admin</a>
            </li>
            <?php endif; ?>
            <?php if(est_joueur()): ?>
            <li class="nav-item dropdown">
                    <a class="dropdown-item" href="<?=WEB_ROUTE.'?controllers=joueur&view=jeu'?>">Jeu</a>
                </div>
            </li>
            <?php endif; ?>
        </ul>
        <?php if(est_connect()): ?>
            <li class="nav-item active">
                <a class="nav-link" href="<?=WEB_ROUTE.'?controllers=security&view=connexion'?>">DECONNEXION<span class="sr-only">(current)</span></a>
            </li>
        <?php endif; ?>
    </div>
</nav>