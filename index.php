<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>AgendaWeb | Mis eventos</title>




    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Poppins:wght@500;600;700&display=swap" rel="stylesheet">


  

    <link rel="stylesheet" href="estilos.css">

</head>


<body class="layout">


    <!-- =========================
         ENCABEZADO
         ========================= -->

    <header class="site-header">

        <div class="contenedor site-header__inner">


            <!-- LOGO -->

            <a href="index.php" class="logo">

                Agenda<span>Web</span>

            </a>


            <!-- MENÚ -->

            <nav class="nav">

                <a
                    href="index.php"
                    class="nav__link is-active">

                    Mis eventos

                </a>


                <a
                    href="registrar.php"
                    class="nav__link">

                    Nuevo evento

                </a>

            </nav>


        </div>

    </header>


    <!-- =========================
         CONTENIDO PRINCIPAL
         ========================= -->

    <main class="contenedor">


        <!-- =========================
             AVISO
             ========================= -->

        <!--
        En P4 aparecerá solamente
        cuando se guarde un evento.
        -->

        <div class="alert alert--ok" role="status">

            &#9989; Evento guardado.

        </div>


        <!-- =========================
             ENCABEZADO DE LA PÁGINA
             ========================= -->

        <div class="page__header">


            <div>

                <h1 class="page__title">
                    Mis eventos
                </h1>


                <p class="page__subtitle">
                    3 eventos registrados
                </p>

            </div>


            <!--
            Este enlace lleva al formulario
            para registrar un nuevo evento.
            -->

            <a
                href="registrar.php"
                class="btn-primary">

                + Nuevo evento

            </a>


        </div>



        <section class="card-list">


       

            <article class="card">


                <span class="card__badge">
                    Trabajo
                </span>


                <h2 class="card__title">
                    Reunión de academia
                </h2>


                <p class="card__meta">

                    <time datetime="2026-09-25T10:30">

                        25/09/2026 · 10:30

                    </time>

                </p>


                <p class="card__text">

                    Revisar calificaciones del 1er parcial.

                </p>


                <div class="card__actions">


                    <a
                        href="editar.php?id=1"
                        class="btn-secondary btn-sm">

                        Editar

                    </a>


                    <form
                        method="post"
                        action="borrar.php"
                        class="form-inline">


                        <input
                            type="hidden"
                            name="id"
                            value="1">


                        <button
                            type="submit"
                            class="btn-danger btn-sm">

                            Borrar

                        </button>


                    </form>


                </div>


            </article>


            <!-- =================================
                 SEGUNDO EVENTO
                 ================================= -->

            <article class="card">


                <span class="card__badge">
                    Personal
                </span>


                <h2 class="card__title">
                    Cita con el dentista
                </h2>


                <p class="card__meta">

                    <time datetime="2026-09-27T16:00">

                        27/09/2026 · 16:00

                    </time>

                </p>


                <div class="card__actions">


                    <a
                        href="editar.php?id=2"
                        class="btn-secondary btn-sm">

                        Editar

                    </a>


                    <form
                        method="post"
                        action="borrar.php"
                        class="form-inline">


                        <input
                            type="hidden"
                            name="id"
                            value="2">


                        <button
                            type="submit"
                            class="btn-danger btn-sm">

                            Borrar

                        </button>


                    </form>


                </div>


            </article>


            <!-- =================================
                 TERCER EVENTO
                 ================================= -->

            <article class="card">


                <span class="card__badge">
                    Escuela
                </span>


                <h2 class="card__title">

                    Presentación del proyecto final de AgendaWeb

                </h2>


                <p class="card__meta">

                    <time datetime="2026-09-30">

                        30/09/2026

                    </time>

                </p>


                <p class="card__text">

                    Preparar la presentación y revisar todos los detalles del proyecto.

                </p>


                <div class="card__actions">


                    <a
                        href="editar.php?id=3"
                        class="btn-secondary btn-sm">

                        Editar

                    </a>


                    <form
                        method="post"
                        action="borrar.php"
                        class="form-inline">


                        <input
                            type="hidden"
                            name="id"
                            value="3">


                        <button
                            type="submit"
                            class="btn-danger btn-sm">

                            Borrar

                        </button>


                    </form>


                </div>


            </article>


        </section>


        <!-- =========================
             ESTADO VACÍO
             ========================= -->

        <!--
        En P4 aparecerá solamente cuando
        no existan eventos en la base de datos.
        -->

        <div class="empty-state">


            <p>
                Aún no tienes eventos registrados.
            </p>


            <a
                href="registrar.php"
                class="btn-primary">

                Registrar el primero

            </a>


        </div>


    </main>


    <!-- =========================
         PIE DE PÁGINA
         ========================= -->

    <footer class="site-footer">

        <div class="contenedor">

            AgendaWeb · Leslie · 2026

        </div>

    </footer>


</body>

</html>