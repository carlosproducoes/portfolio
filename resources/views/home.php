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

    <div class="section">
        <h2 class="title">Projetos</h2>

        <div class="projects">

            <?php if (count($projects) == 0): ?>
                <div>Nenhum projeto ainda...</div>
            <?php endif; ?>

            <?php foreach ($projects as $project): ?>
                <div class="project">
                    <img src="" alt="" class="project-image">

                    <div class="project-info">
                        <h3 class="project-name"><?php echo $project->getName(); ?></h3>
                        <p class="project-description"><?php echo strlen($project->getDescription()) > 100 ? substr($project->getDescription(), 0, 100) . "..." : $project->getDescription(); ?></p>
                        <a href="project/<?php echo $project->getId(); ?>" class="project-button">Ver Projeto</a>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
        
        <?php if (count($projects) > 0): ?>
            <div class="projects-button-div">
                <a href="#" class="projects-button">Ver Todos Projetos</a>
            </div>
        <?php endif; ?>

    </div>

    <footer>
        <p>Todos os direitos reservados <strong>Carlos Produções</strong> © 2024</p>
    </footer>

</body>
</html>