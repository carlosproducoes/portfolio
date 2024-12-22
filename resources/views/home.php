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

    <div class="sobre-mim" id="sobre-mim">
        <h2>SOBRE MIM</h2>

        <div class="grid-sobre-mim">
            <div class="minha-historia">
                <h3>MINHA HISTÓRIA</h3>
                <p>Desde criança sou apaixonado por tecnologia, sempre tive curiosidade de ficar pesquisando sobre programação. </p>
            </div>

            <div class="minhas-habilidades">
                <h3>MINHAS HABILIDADES</h3>

                <div class="habilidades">
                    <div class="habilidade">HTML5</div>
                    <div class="habilidade">CSS3</div>
                    <div class="habilidade">JavaScript</div>
                    <div class="habilidade">PHP</div>
                    <div class="habilidade">MySql</div>
                    <div class="habilidade">GIT</div>
                    <div class="habilidade">Github</div>
                    <div class="habilidade">Bootstrap</div>
                    <div class="habilidade">Laravel</div>
                </div>
            </div>
        </div>    
    </div>

    <div class="meus-servicos" id="meus-servicos">
        <h2>SERVIÇOS</h2>

        <div class="servicos">
            <div class="servico">
                <img src="./images/star-fill.svg" alt="Ícone estrela">
                <h3>LANDING PAGE</h3>
                <p>Potencialize suas campanhas com landing pages que convertem. Criamos páginas de destino envolventes para capturar a atenção dos visitantes.</p>
            </div>

            <div class="servico">
                <img src="./images/star-fill.svg" alt="Ícone estrela">
                <h3>SITES INSTITUCIONAIS</h3>
                <p>Transformamos ideias em websites incríveis! Desenvolvemos sites responsivos e visualmente atraentes que destacam a singularidade do seu negócio.</p>
            </div>

            <div class="servico">
                <img src="./images/star-fill.svg" alt="Ícone estrela">
                <h3>SISTEMAS WEB</h3>
                <p>Soluções sob medida para suas necessidades. Sistemas web eficientes que automatizam processos e aumentam a produtividade da sua empresa.</p>
            </div>
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

    <div class="contato" id="contato">
        <form action="" class="form-contato">
            <h2>Entre em contato</h2>

            <label for="nome">Seu nome:</label>
            <input type="text" name="nome">

            <label for="email">Seu email:</label>
            <input type="email" name="email">

            <label for="telefone">Seu telefone:</label>
            <input type="text" name="telefone">

            <label for="mensagem">Como posso te ajudar?</label>
            <input type="text" name="mensagem">

            <input type="submit" value="Enviar" class="btn-enviar">
        </form>
    </div>

    <footer>
        <p>Todos os direitos reservados CARLOS PRODUÇÕES © 2024</p>
    </footer>

</body>
</html>