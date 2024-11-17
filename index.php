<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>::Mi pag web personal::</title>
    <!-- Ruta relativa al archivo de estilos -->
    <link rel="stylesheet" href="public/css/style.css">
    <!-- Boxicons -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <style>
        /* Estilo para el botón de inicio de sesión */
        .login-btn {
            position: absolute;
            top: 10px;
            right: 20px;
        }
        .btn-primary {
            color: #fff;
            background-color: #007bff;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            text-decoration: none;
            font-size: 14px;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <section id="home">
        <div class="contenido">
            <header>
                <a href="#" class="logo"><i class='bx bx-code-alt'></i>Logo</a>
                <nav class="navbar">
                    <a href="#home" class="active">HOME</a>
                    <a href="#about">ABOUT</a>
                    <a href="#services">SERVICES</a>
                    <a href="#skills">SKILLS</a>
                    <a href="#contactus">CONTACT US</a>
                </nav>
                <div class="icons">
                    <a href="#" class="bx bxl-linkedin"></a>
                    <a href="#" class="bx bxl-github"></a>
                    <a href="#" class="bx bxl-whatsapp"></a>
                </div>
                <!-- Botón de Iniciar Sesión -->
                <div class="login-btn">
                    <a href="views/login.php" class="btn btn-primary">Iniciar sesión</a>
                </div>
            </header>
            <div class="presentacion">
                <p class="mensaje">Bienvenidos</p>
                <h2>Soy <span>Sebastian Lea'o Garcia</span> Ingeniero de sistemas</h2>
                <p class="descripciom">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti aliquid exercitationem, 
                    adipisci tempore assumenda atque, veritatis veniam animi facere quaerat quam quasi harum, eum voluptate repellendus 
                    tenetur ipsum officiis rem.</p>
                <a href="#services">Mi Experiencia</a>    
            </div>
        </div>
    </section>
    <section id="about">
        <div class="foto">
            <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD..." alt="foto de perfil">
        </div>
        <div class="info_sobreMi">
            <p class="titulo">¿Quién soy?</p>
            <h2>Soy, <span>Sebastian Garcia</span></h2>
            <h3>Slogan</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Necessitatibus harum ex a sunt facere ea eveniet maxime modi 
                at commodi ratione amet ut explicabo ipsa, iusto autem possimus ab similique.</p>
        </div>
    </section>
    <section id="services">
        <p class="titulo">Mis Servicios</p>
        <div class="row">
            <div class="servicio">
                <span class="icon"><i class="bx bx-code-alt"></i></span>
                <h3>Desarrollo de software</h3>
                <ul>
                    <li>Desktop</li>
                    <li>Mobile</li>
                    <li>Web</li>
                </ul>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cum debitis fugiat sequi commodi quos tempora 
                    consequuntur vero vel, quas at id exercitationem pariatur aliquam ipsum eos adipisci assumenda illum? Illum? </p>
            </div>
            <div class="servicio">
                <span class="icon"><i class="bx bx-code-alt"></i></span>
                <h3>Desarrollo de software</h3>
                <ul>
                    <li>Desktop</li>
                    <li>Mobile</li>
                    <li>Web</li>
                </ul>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cum debitis fugiat sequi commodi quos tempora 
                    consequuntur vero vel, quas at id exercitationem pariatur aliquam ipsum eos adipisci assumenda illum? Illum? </p>
            </div>
        </div>
    </section>
    <section id="skills" class="contenedor-skills">
        <p class="titulo">MIS FORTALEZAS</p>
        <div class="skill">
            <div class="info">
                <p><span class="lista"></span>HTML</p>
                <span class="porcentaje">80%</span>
            </div>
            <div class="barra">
                <div id="html" class="barra-progreso_html"></div>
            </div>
        </div>
        <div class="skill">
            <div class="info">
                <p><span class="lista"></span>CSS</p>
                <span class="porcentaje">75%</span>
            </div>
            <div class="barra">
                <div id="css" class="barra-progreso_css"></div>
            </div>
        </div>
        <div class="skill">
            <div class="info">
                <p><span class="lista"></span>JS</p>
                <span class="porcentaje">55%</span>
            </div>
            <div class="barra">
                <div id="js" class=""></div>
            </div>
        </div>
    </section>
    <section id="contactus">
        <p class="titulo">CONTACTENOS</p>
        <form action="">
            <div class="inputBox">
                <div class="input">
                    <span>NOMBRES Y APELLIDOS</span>
                    <input type="text" placeholder="Nombres y Apellidos">
                </div>
                <div class="input">
                    <span>NUMERO DE CONTACTO</span>
                    <input type="number" placeholder="(+57) 310 456 8796">
                </div>
            </div>
            <div class="inputBox">
                <div class="input">
                    <span>ASUNTO DEL MENSAJE</span>
                    <input type="text" placeholder="Solicitud, Queja, Reclamos, Felicitaciones">
                </div>
            </div>
            <div class="action">
                <input type="submit" value="Enviar" class="btn">
            </div>
        </form>
    </section>
    <footer class="footer">
        <div class="footer-text">
            <p>Sebastian Lea;o Garcia</p>
        </div>
        <div class="footer_icon">
            <a href="#"><i class="bx bx-up-arrow-alt"></i></a>
        </div>
    </footer>
    <script src="js/main.js"></script>
</body>
</html>
