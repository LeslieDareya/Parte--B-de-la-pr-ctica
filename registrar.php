<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>AgendaWeb | Registrar evento</title>


    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Poppins:wght@500;600;700&display=swap" rel="stylesheet">



    <link rel="stylesheet" href="estilos.css">

</head>


<body>




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
                    class="nav__link">

                    Mis eventos

                </a>


                <a
                    href="registrar.php"
                    class="nav__link is-active">

                    Nuevo evento

                </a>


            </nav>


        </div>

    </header>



    <!-- =========================
         CONTENEDOR PRINCIPAL
         ========================= -->

    <main class="contenedor">


        <!-- =========================
             TARJETA DEL FORMULARIO
             ========================= -->

        <section class="tarjeta">


            <!-- =========================
                 ENCABEZADO
                 ========================= -->

            <div class="encabezado">


                <div>

                    <h1>
                        Registrar evento
                    </h1>


                    <p>
                        Agrega una nueva cita a tu AgendaWeb.
                    </p>

                </div>


            </div>



            <!-- =========================
                 FORMULARIO
                 ========================= -->

            <form
                class="formulario"
                method="post"
                action="index.php">


                <!-- =========================
                     TÍTULO DEL EVENTO
                     ========================= -->

                <div class="campo">


                    <label for="titulo">

                        Título del evento

                    </label>


                    <input
                        type="text"
                        id="titulo"
                        name="titulo"
                        placeholder="Ej. Reunión de trabajo"
                        required>


                </div>



                <!-- =========================
                     FECHA Y HORA
                     ========================= -->

                <div class="fila">


                    <div class="campo">


                        <label for="fecha">

                            Fecha

                        </label>


                        <input
                            type="date"
                            id="fecha"
                            name="fecha"
                            required>


                    </div>



                    <div class="campo">


                        <label for="hora">

                            Hora

                        </label>


                        <input
                            type="time"
                            id="hora"
                            name="hora"
                            required>


                    </div>


                </div>



                <!-- =========================
                     TIPO DE EVENTO
                     ========================= -->

                <div class="campo">


                    <label for="tipo">

                        Tipo de evento

                    </label>


                    <select
                        id="tipo"
                        name="tipo">


                        <option value="">

                            Selecciona una opción

                        </option>


                        <option value="cita">

                            Cita

                        </option>


                        <option value="reunion">

                            Reunión

                        </option>


                        <option value="tarea">

                            Tarea

                        </option>


                        <option value="personal">

                            Personal

                        </option>


                        <option value="otro">

                            Otro

                        </option>


                    </select>


                </div>



                <!-- =========================
                     UBICACIÓN
                     ========================= -->

                <div class="campo">


                    <label for="ubicacion">

                        Ubicación

                    </label>


                    <input
                        type="text"
                        id="ubicacion"
                        name="ubicacion"
                        placeholder="Ej. Escuela, oficina o dirección">


                </div>



                <!-- =========================
                     DESCRIPCIÓN
                     ========================= -->

                <div class="campo">


                    <label for="descripcion">

                        Descripción

                    </label>


                    <textarea
                        id="descripcion"
                        name="descripcion"
                        rows="4"
                        placeholder="Agrega detalles sobre tu evento..."></textarea>


                </div>



                <!-- =========================
                     RECORDATORIO
                     ========================= -->

                <div class="campo">


                    <label for="recordatorio">

                        Recordatorio

                    </label>


                    <select
                        id="recordatorio"
                        name="recordatorio">


                        <option value="ninguno">

                            Sin recordatorio

                        </option>


                        <option value="5">

                            5 minutos antes

                        </option>


                        <option value="15">

                            15 minutos antes

                        </option>


                        <option value="30">

                            30 minutos antes

                        </option>


                        <option value="60">

                            1 hora antes

                        </option>


                        <option value="1440">

                            1 día antes

                        </option>


                    </select>


                </div>



                <!-- =========================
                     BOTONES
                     ========================= -->

                <div class="acciones">


                    <button
                        type="reset"
                        class="boton boton-secundario">

                        Cancelar

                    </button>



                    <button
                        type="submit"
                        class="boton boton-principal">

                        Guardar evento

                    </button>


                </div>


            </form>


        </section>


    </main>


  

    <footer class="site-footer">


        <div class="contenedor">

            AgendaWeb · Leslie · 2026

        </div>


    </footer>


</body>

</html>
