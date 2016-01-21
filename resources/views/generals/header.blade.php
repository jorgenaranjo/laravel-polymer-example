<script src="bower_components/webcomponentsjs/webcomponents.js"></script>
<link rel="import" href="bower_components/polymer/polymer.html"/>
<link rel="import" href="bower_components/paper-toolbar/paper-toolbar.html"/>
<link rel="import" href="bower_components/iron-icons/iron-icons.html"/>
<link rel="import" href="bower_components/paper-icon-button/paper-icon-button.html"/>
<link rel="import" href="bower_components/paper-drawer-panel/paper-drawer-panel.html"/>
<link rel="import" href="bower_components/paper-fab/paper-fab.html"/>

<!-- Nos ayuda con los colores en este caso con el toolbar
    Es importante en el style definirlo como un custom-style
 -->
<link rel="import" href="bower_components/paper-styles/paper-styles.html"/>

<style is="custom-style">
    body{
        width: 100%;
        margin: 0;
        padding: 0;
    }
    paper-toolbar.main{
        background-color: var(--paper-red-600);
    }
    paper-toolbar.drawer{
        background-color: var(--paper-blue-500);
    }
    paper-fab.add{
        position: absolute;
        bottom: 10px;
        right: 10px;
        background-color: var(--paper-green-600);
    }

</style>