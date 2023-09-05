<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academia TI Indiana</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <header class="cabecalho">
       <h1 class="titulo">Academia TI</h1> 
    </header>

    <aside class="menu">
        <div class="menu-lista">
            <ul class="menu-itens">
                <li>
                    <a href="#">Arquivo 1:</a>
                </li>
                <li> 
                    <a href="#">Arquivo 2:</a>
                </li>
                <li>
                    <a href="#">Arquivo 3:</a>
                </li>
                <li>
                    <a href="#">Arquivo 4:</a>
                </li>
            </ul>
        </div>
    </aside>


    <article class="conteudo">
        
        <div class="caixa-login">
        
            <form class="formulario" action="form.php" method="post">

                <label for="nome">Nome</label>
                <input class="input" type="text" name="nome" id="nome">
    
                <label for="idade">Idade</label>
                <input class="input" type="number" name="idade" id="idade">

                <label for="senha">Senha</label>
                <input class="input" type="password" name="senha" id="senha">
    
                <button class="submit" type="submit">Enviar</button>
    
            </form>

           
        </div>

        <main>
            <?php

            session_start();
                if(isset($_SESSION['nome'])) {
                    var_dump($_SESSION);
                }
                
            ?>
            </main>

    </article>
    
    
    <footer class="rodape">
        Rodapé da Pagina
    </footer>
</body>
</html>