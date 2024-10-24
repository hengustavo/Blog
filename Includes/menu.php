<div class="card">
    <div class="card-header">
        Menu
    </div>
    <div class="card-body">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a href="index.php" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
                <a href="usuarioFormulario.php" class="nav-link">Cadastre-se</a>
            </li>
            <li class="nav-item">
                <a href="loginformulario.php" class="nav-link">Login</a>
            </li>
            <?php 
            if((isset($_SESSION['login'])) 
            && ($_SESSION['login']['usuario'])) : ?>
            <li class="nav-item">
                <a href="postFormulario.php" class="nav-link">Incluir Post</a>
            </li>
            <?php endif;
            ?>
            <?php if((isset($_SESSION['login'])) 
            && ($_SESSION['login']['usuario']['adm'] === 1)) : ?>
            <li class="nav-item">
                <a href="usuarios.php" class="nav-link">Usuários</a>
            </li>
            <li class="nav-item">
                <a href="postFormulario.php" class="nav-link">Incluir Post</a>
            </li>
            <li>
                <div class="card-body text-center">
        <p>Copyright - <a href="http://www.ifsp.edu.br" target='_blank'>IFSP</a></p>
            </div>
            </li>
            <?php endif; ?>
        </ul>
    </div>
</div>