            <!--Fondo-->
            <script src="js/particles.min.js"></script>
            <script src="js/particulas.js"></script>

            <!--Menu superior-->
            <script>
                const nav = document.querySelector('.navSup');
                window.addEventListener('scroll', function(){
                    nav.classList.toggle('active', window.scrollY > 0)
                })
            </script>

            <!--Menu superior perfil-->
            <script>
                function mostrarPerfil(){
                    const perfilActivo = document.querySelector('.menuPerfil');
                    perfilActivo.classList.toggle('activo')
                }
            </script>

            <!--Menu lateral-->
    <input type="checkbox" id="btn-menuLat">
    <div class="contenedor-menuLat">
            <div class="contenido-menuLat">
                <nav>
                    <ul class="menuLat">
                        <li><a href="inicio.php">Inicio</a></li>
                        <li><a href="#">Más información</a></li>
                        <li><a href="#">Servicios</a></li>
                        <li><a href="#">Ubicacion</a></li>
                        <li><a href="#">Terminos y condiciones</a></li>
                    </ul>
                </nav>
                <label for="btn-menuLat"><i class="fa-solid fa-x"></i></label>
            </div>
    </div>
                <!--Pie de pagina-->
    <footer class="piePagina">
        <div class="grupo1">
            <div class="caja">
                <figure>
                    <a href="#">
                        <img src="./img/LOGO_white.png">
                    </a>
                </figure>
            </div>
            <div class="caja">
                <h2>Información</h2>
                <p>
                    Estudio independiente de videojuegos.
                </p>
            </div>
            <div class="caja">
                <h2>Redes Sociales</h2>
                <div class="red-social">
                    <a href="https://www.instagram.com/" class="fa fa-instagram"></a>
                </div>
            </div>
        </div>
        <div class="derechosAutor">
            <small>&copy; 2025 <b>-R</b> Todos los derechos reservados.</small>
        </div>
    </footer>
</body>
</html>