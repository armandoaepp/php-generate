<div id="div_home">
<form id="frm_home" name="frm_home" class="hform"  ng-submit="updHome()">
<fieldset> <legend> Editar Home</legend>
    <fieldset>
        <label for="id">id : </label>
        <input type="text" name="id" ng-model="home.id"  value="{{id}}" />
    </fieldset>
    <fieldset>
        <label for="titulo">titulo : </label>
        <input type="text" name="titulo" ng-model="home.titulo"  value="{{titulo}}" />
    </fieldset>
    <fieldset>
        <label for="url">url : </label>
        <input type="text" name="url" ng-model="home.url"  value="{{url}}" />
    </fieldset>
    <fieldset>
        <label for="imagen">imagen : </label>
        <input type="text" name="imagen" ng-model="home.imagen"  value="{{imagen}}" />
    </fieldset>
    <fieldset>
        <label for="titulo_2">titulo_2 : </label>
        <input type="text" name="titulo_2" ng-model="home.titulo_2"  value="{{titulo_2}}" />
    </fieldset>
    <fieldset>
        <label for="url_2">url_2 : </label>
        <input type="text" name="url_2" ng-model="home.url_2"  value="{{url_2}}" />
    </fieldset>
    <fieldset>
        <label for="imagen_2">imagen_2 : </label>
        <input type="text" name="imagen_2" ng-model="home.imagen_2"  value="{{imagen_2}}" />
    </fieldset>
    <fieldset>
        <label for="titulo_3">titulo_3 : </label>
        <input type="text" name="titulo_3" ng-model="home.titulo_3"  value="{{titulo_3}}" />
    </fieldset>
    <fieldset>
        <label for="url_3">url_3 : </label>
        <input type="text" name="url_3" ng-model="home.url_3"  value="{{url_3}}" />
    </fieldset>
    <fieldset>
        <label for="imagen_3">imagen_3 : </label>
        <input type="text" name="imagen_3" ng-model="home.imagen_3"  value="{{imagen_3}}" />
    </fieldset>
    <fieldset>
        <label for="convenios">convenios : </label>
        <input type="text" name="convenios" ng-model="home.convenios"  value="{{convenios}}" />
    </fieldset>
    <fieldset>
        <label for="orden">orden : </label>
        <input type="text" name="orden" ng-model="home.orden"  value="{{orden}}" />
    </fieldset>
    <fieldset>
        <label for="fecha">fecha : </label>
        <input type="text" name="fecha" ng-model="home.fecha"  value="{{fecha}}" />
    </fieldset>
     <fieldset class="text-right">
        <button  type="button" id="btnCancelar" onclick="location.href='#/home/listar';">Cancelar </button>
        <button id="btregistrar" ng-disabled="frm_home.$invalid"  >Registrar </button>
    </fieldset>
</fieldset>
</form>
</div>