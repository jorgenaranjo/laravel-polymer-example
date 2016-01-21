<!DOCTYPE html>
<html data-ng-app="ENES">
    <head>
        <meta charset="utf-8">
        <title>Pagina de prueba</title>
        @include('generals.header')
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        {{-- Angular JS --}}
            <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
            <!-- <script src="{{-- asset("controllerExampcontrollerExample1.js") --}}</script> -->


            {{-- Ejemplo con POST --}}
            <script src="js/controllers/controller.js"></script>
        {{-- End Angular js --}}
    </head>
    <body data-ng-controller="appController">
        <input type="text" data-ng-model="newPost.title"></br>
        <textarea data-ng-model="newPost.body"></textarea>
        <button data-ng-click="addPost()"> Agregar post</button>

        <ul>
            <li data-ng-repeat="post in posts">
                <h1>@{{ post.title }}</h1>
                <p>
                    @{{ post.body }}
                </p>

            </li>
        </ul>
        <!-- Menu lateral contiene 2 divs principales que son
         drawer y main-->
        {{--<paper-drawer-panel>
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
                    <span title class="flex">@{{ "Hola " + nombre }}</span>
                    <paper-icon-button icon="refresh" onclick="location.reload();"></paper-icon-button>
                </paper-toolbar>
            </div>

        </paper-drawer-panel>--}}


        {{--
            Esto es del ejemplo 1
        <input type="text" data-ng-model="newComment.username"/>
        <input type="text" data-ng-model="newComment.comentario"/>
        <button data-ng-click="addComent()"> Agregar comentario</button>
        <ul>
            <li data-ng-repeat="comentario in comentarios">
                @{{ comentario.comentario }} - <strong> @{{ comentario.username }} </strong>
            </li>
        </ul>


        --}}

        <!--
            Para agregar el icono de + que viene en las aplicaciones
            <paper-fab icon="add" class="add"></paper-fab>
        -->

    </body>
</html>
