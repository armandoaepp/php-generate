<div id="div_noticias">
<form id="frm_noticias" name="frm_noticias" class="hform"  ng-submit="setNoticias()">
<fieldset> <legend> Nuevo Noticias</legend>
    <fieldset>
        <label for="id">id : </label>
        <input type="text" name="id" ng-model="noticias.id" />
    </fieldset>
    <fieldset>
        <label for="titulo">titulo : </label>
        <input type="text" name="titulo" ng-model="noticias.titulo" />
    </fieldset>
    <fieldset>
        <label for="descripcion">descripcion : </label>
        <input type="text" name="descripcion" ng-model="noticias.descripcion" />
    </fieldset>
    <fieldset>
        <label for="imagen">imagen : </label>
        <input type="text" name="imagen" ng-model="noticias.imagen" />
    </fieldset>
    <fieldset>
        <label for="banner">banner : </label>
        <input type="text" name="banner" ng-model="noticias.banner" />
    </fieldset>
    <fieldset>
        <label for="nombreseo">nombreseo : </label>
        <input type="text" name="nombreseo" ng-model="noticias.nombreseo" />
    </fieldset>
    <fieldset>
        <label for="orden">orden : </label>
        <input type="text" name="orden" ng-model="noticias.orden" />
    </fieldset>
    <fieldset>
        <label for="fecha">fecha : </label>
        <input type="text" name="fecha" ng-model="noticias.fecha" />
    </fieldset>
    <fieldset>
        <label for="activo">activo : </label>
        <input type="text" name="activo" ng-model="noticias.activo" />
    </fieldset>
     <fieldset class="text-right">
        <button  type="button" id="btnCancelar" onclick="location.href='#/noticias/listar';">Cancelar </button>
        <button id="btregistrar" ng-disabled="frm_noticias.$invalid"  >Registrar </button>
    </fieldset>
</fieldset>
</form>
</div>