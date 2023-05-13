    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <button style="background-color: #897FF3; color: white; border-radius: 10px; border: none; width: 223.05px; height: 56.3px; font-size: 27px;">Loja 77</button>

                
            </ul>
        </div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
        
                    <ul class="menu-content">
                    </ul>
                </li>
                <li class=" navigation-header">
                </li>
                
                <li class=" nav-item home"></li>
                <button class="btn-lateral">Home</button>
                </li>
                <li class=" nav-item Usuários">
                    <button class="btn-lateral">Usuários</button>
                </li>
                <li class=" nav-item Configurações">
                    <button class="btn-lateral">Configurações</button>
                </li>
                <li class=" nav-item Clientes">
                    <button class="btn-lateral">Clientes</button>
                </li>
                <li class=" nav-item Pedidos">
                    <button class="btn-lateral">Pedidos</button>
                </li>
                <li class=" nav-item Banners">
                    <button class="btn-lateral">Banners</button>
                </li>
                <li class=" nav-item Caterigorias">
                    <button class="btn-lateral">Categorias</button>
                </li>
                <li class=" nav-item Produtos">
                    <button class="btn-lateral" onclick="mostrarSubcategoria()">Produtos</button>
                    <div class="sidebar" id="subcategoria" style="display: none;">
                      <ul>
                        <li><button class="sub-btn-lateral">Cadastrar</button></li>
                        <li><button class="sub-btn-lateral">Ativos</button></li>
                        <li><button class="sub-btn-lateral">Inativos</button></li>
                        <li><button class="sub-btn-lateral">Destaques na home</button></li>
                      </ul>
                    </div>
                    
                    <script>
                    function mostrarSubcategoria() {
                      var subcategoria = document.getElementById("subcategoria");
                      if (subcategoria.style.display === "none") {
                        subcategoria.style.display = "block";
                      } else {
                        subcategoria.style.display = "none";
                      }
                    }
                    </script>
         </div>
        </div>