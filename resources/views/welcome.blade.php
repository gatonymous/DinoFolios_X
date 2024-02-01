<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <title>Ingeniería Informática y de Sistemas | UNSAAC</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
            color: white;
            font-family: 'Arial', sans-serif;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            min-height: 100vh;
            transition: background-image 1s ease-in-out;
            background-size: cover;
            background-attachment: fixed;
        }

        header {
            background-color: #ffffff !important;
            z-index: auto;
            position: relative;
        }

        .navbar {
            background-color: transparent;
            padding: 10px;
            display: flex;
            justify-content: center;
            align-items: flex-end;
            flex-wrap: wrap;
        }

        .navbar img {
            width: 200px;
        }

        .pcl-header-cta-buttons {
            display: flex;
            justify-content: space-between;
            gap: 20px;
        }

        .pcl-header-cta-button {
            background-color: #f0f0f0;
            color: #000000;
            font-weight: bold;
            text-transform: uppercase;
            padding: 15px 20px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 14px;
        }

        .larger-button {
            padding: 20px 30px;
        }

        #carreras-hero {
            background-color: rgba(0, 0, 0, 0.7);
            padding: 20px;
            color: #ffffff;
            text-align: center;
        }

        .hero-title,
        .hero-career-title,
        .hero-descripcion {
            margin: 10px 0;
        }

        .form {
            max-width: 680px;
            text-align: center;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 12px -3px rgba(0, 218, 243, 1);
            opacity: 0.95;
            background: #fffffff5;
            margin: 20px auto;
        }

        .btn-submit {
            background: rgba(0, 191, 255, .9);
            color: #FFF;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            margin: 10px auto;
            padding: 5px 0;
            text-transform: uppercase;
            width: 100%;
            border: none;
            border-radius: 5px;
        }

        .btn-submit:hover {
            background: #000;
        }

        .bottom-bar {
            background-color: #002d52;
            padding: 10px;
            text-align: center;
        }

        .bottom-bar p {
            margin: 0;
            color: #ffffff;
        }
    </style>
</head>

<body>
    <header role="banner">
        <div class="navbar navbar-light shadow fixed-top plc-nav-header">
            <div class="container">
                <div class="field field--name-field-plc-header-logo field--type-image field--label-hidden field__item">
                    <img src="img/universidad.jpg" alt="Nuevo Icono" class="w-10 h-10 object-cover rounded-full">
                </div>
                <div class="pcl-header-cta-buttons">
                    <a class="btn pcl-header-cta-button" href="http://127.0.0.1:8000/admin/login" target="_blank">Iniciar Sesión</a>
                    <a class="btn pcl-header-cta-button" href="http://in.unsaac.edu.pe/home/" target="_blank">Página Principal</a>
                    <a class="btn pcl-header-cta-button" href="#">Nosotros</a>
                    <a class="btn pcl-header-cta-button" href="#">Contacto</a>
                    <a class="btn pcl-header-cta-button" href="#">Docentes</a>
                </div>
            </div>
        </div>
    </header>

    <div id="carreras-hero" class="container plc-box-hero">
        <div class="row">
            <div class="col-lg-6">
                <div class="wow slideInLeft">
                    <h2 class="hero-title">Bienvenido al sistema de registros</h2>
                    <h1 class="hero-career-title">ESCUELA PROFESIONAL DE INGENIERÍA INFORMÁTICA Y DE SISTEMAS</h1>
                    <p class="hero-descripcion">"El ordenador nació para resolver problemas que antes no existían" - Bill Gates</p>
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn">
                
            </div>
        </div>
    </div>

    <div class="bottom-bar">
        <p>Universidad Nacional San Antonio Abad del Cusco</p>
        <p>Av. de la Cultura 733 - Cusco, Cusco, Cusco, Perú</p>
    </div>

    <script>
        const images = [
            'img/escuela1.jpg',
            'img/escuela2.jpg',
            'img/escuela3.jpg'
        ];

        let currentImage = 0;

        function changeBackgroundImage() {
            document.body.style.backgroundImage = `url('${images[currentImage]}')`;
            currentImage = (currentImage + 1) % images.length;
        }

        setInterval(changeBackgroundImage, 5000);
    </script>
</body>

</html>
