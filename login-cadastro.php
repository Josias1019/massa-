<!-- Botão de Login -->
<button class="botao-login" onclick="mostrarJanelaLogin()">Login</button>

<!-- Janela de Login -->
<div id="janelaLogin" class="janela-login" style="display: none;">
    <button class="fechar-janela" onclick="fecharJanelaLogin()"><?php echo "&#10006;"; ?></button>
    <h2 class="logo-login">Login</h2>
    <form action="processar_login.php" method="post">
        <input type="text" id="usuario" name="usuario" required class="input-form" placeholder="E-mail"><br><br>
        <!-- Input de Senha -->
        <div class="input-container">
                    <input type="password" id="senha" name="senha" required class="input-form" placeholder="Senha">
                    <div class="olho-senha" onclick="visualizarSenha()"></div>
                </div><br><br>
        <button type="submit" class="button-entrar">Entrar</button>
    </form>
</div>

    <!-- Script JavaScript -->
<script>
    // Função para mostrar a janela de login
    function mostrarJanelaLogin() {
        var janelaLogin = document.getElementById('janelaLogin');
        janelaLogin.style.display = 'block';
    }

    // Função para fechar a janela de login
    function fecharJanelaLogin() {
        var janelaLogin = document.getElementById('janelaLogin');
        janelaLogin.style.display = 'none';
    }

    // Ocultar a janela de login quando o site for carregado ou recarregado 
    window.onload = function() {
        var janelaLogin = document.getElementById('janelaLogin');
        janelaLogin.style.display = 'none';
    };

    function visualizarSenha() {
        var senhaInput = document.getElementById('senha');
        if (senhaInput.type === "password") {
            senhaInput.type = "text";
        } else {
            senhaInput.type = "password";
        }
        }

</script