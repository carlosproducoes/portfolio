<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu portfólio</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <?php include "components/menu.php" ?>

    <div class="principal">
        <div>
            <h1>OLÁ, EU SOU O CARLOS!</h1>
            <p>Um Desenvolvedor Full Stack focado em sites e sistemas web profissionais de sucesso.</p>
            <a href="#">ENTRE EM CONTATO</a>
        </div>
    </div>

    <div class="section bg-color-purple">

        <h2 class="title color-white">Habilidades</h2>

        <div class="skills">
            <?php foreach ($skills as $skill): ?>
                <div class="skill"><?php echo $skill->getName(); ?></div>
            <?php endforeach; ?>
        </div>

    </div>

    <div class="meus-projetos" id="meus-projetos">
        <h  2>MEUS PROJETOS</h2>

        <div class="projetos">

            <div class="projeto">
                <img src="" alt="" class="img-projeto">

                <div class="info-projeto">
                    <h3>SISTEMA DE BARBEARIA</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris et arcu ligula. Integer quis convallis quam. Integer id nisl sed massa vulputate mollis.</p>
                    <a href="#" class="btn-projeto">VER PROJETO</a>
                </div>
            </div>

            <div class="projeto">
                <img src="" alt="" class="img-projeto">

                <div class="info-projeto">
                    <h3>SITE AUTOESCOLA</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris et arcu ligula. Integer quis convallis quam. Integer id nisl sed massa vulputate mollis.</p>
                    <a href="#" class="btn-projeto">VER PROJETO</a>
                </div>
            </div>

            <div class="projeto">
                <img src="" alt="" class="img-projeto">

                <div class="info-projeto">
                    <h3>SITE ESCRITÓRIO DE ARQUITETURA</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris et arcu ligula. Integer quis convallis quam. Integer id nisl sed massa vulputate mollis.</p>
                    <a href="#" class="btn-projeto">VER PROJETO</a>
                </div>
            </div>
            
        </div>

    </div>

    <footer>
        <p>Todos os direitos reservados CARLOS PRODUÇÕES © 2024</p>
    </footer>

</body>
</html>