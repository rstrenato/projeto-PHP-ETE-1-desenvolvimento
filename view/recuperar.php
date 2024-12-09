<div class="body-bg">
        <header class="header">
            <a class="logo" href="<?=constant('URL_LOCAL_SITE_PAGINA').'principal'?>">InfoSports</a>
            <div class="headerBtnGroup">
            <?php include_once("menuTopo.php");?>
                <div>
                    <input type="checkbox" class="check" id="chk" />
                
                    <label class="label" for="chk">
                        <i class="fas fa-moon"></i>
                        <i class="fas fa-sun"></i>
                        <div class="bola"></div>
                    </label>
                </div>
            </div>
            <div class="hamburguer-menu">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
        </header>
        <div class="container-body">
            <div class="container">
                <div class="title">
                    <h2>Recuperar Senha</h2>
                </div>
                
                <form method="POST" action="#">
                    <div class="campos">
                        <div class="input-box">
                            <div class="name">
                                <input type="text" placeholder="Digite seu email" id="email" name="email">
                                <p id="nome-ajuda" class="msg-ajuda" style="display:none;">Mín. 3 caracteres</p>
                            </div>
                        </div>
                    </div>
                    <div class="campos">
                        <div class="input-box"> 
                            <div class="name">
                                <input type="password" placeholder="Digite sua nova senha" id="nome" name="novaSenha" >
                                <p id="nome-ajuda" class="msg-ajuda" style="display:none;">Mín. 3 caracteres</p>
                                
                            </div>
                        </div>
                    </div>
                    <div class="campos">
                        <div class="input-box">
                            <div class="name">
                                <input type="password" placeholder="repita a nova senha" id="nome" name="novaSenha2" >
                                <p id="nome-ajuda" class="msg-ajuda" style="display:none;">Mín. 3 caracteres</p>
                            </div>
                        </div>    
                    </div>    
                            
                    <div class="button">
                        <button value="Enviar" class="btn-enviar" id="btnEnviar">Enviar</button>
                    </div>
                </form>
            </div>
        </div>

        <footer class="footer">
            <span>Info Sports</span>
            <a href="#backToTop" class="footerAnchor">VOLTAR PARA O TOPO</a>
        </footer>
    </div>