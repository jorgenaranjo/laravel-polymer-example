<!DOCTYPE html>
<html>
    <head>
        @include('generals.header')
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    </head>
    <body>
        <!-- Menu lateral contiene 2 divs principales que son
         drawer y main-->
        <paper-drawer-panel>
            <div drawer>
                <paper-toolbar class="drawer">
                    <span>Bienvenido</span>
                </paper-toolbar>
            </div>
            <div main>
                <!-- Menu superior-->
                <paper-toolbar class="main">
                    <!--
                        Importante agregar la propiedad
                        paper-drawer-toggle para la opcion de menu
                    -->
                    <paper-icon-button paper-drawer-toggle icon="menu"></paper-icon-button>
                    <span title class="flex">Bienvenido</span>
                    <paper-icon-button icon="refresh"></paper-icon-button>
                </paper-toolbar>
            </div>

            <!--
                Para agregar el icono de + que viene en las aplicaciones
            -->
            <paper-fab icon="add" class="add"></paper-fab>
        </paper-drawer-panel>
    </body>
</html>
