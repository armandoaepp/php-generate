<div id="div_textos">
<form id="frm_textos" name="frm_textos" class="hform"  ng-submit="updTextos()">
<fieldset> <legend> Editar Textos</legend>
    <fieldset>
        <label for="id">id : </label>
        <input type="text" name="id" ng-model="textos.id"  value="{{id}}" />
    </fieldset>
    <fieldset>
        <label for="identificador">identificador : </label>
        <input type="text" name="identificador" ng-model="textos.identificador"  value="{{identificador}}" />
    </fieldset>
    <fieldset>
        <label for="titulo">titulo : </label>
        <input type="text" name="titulo" ng-model="textos.titulo"  value="{{titulo}}" />
    </fieldset>
    <fieldset>
        <label for="descripcion">descripcion : </label>
        <input type="text" name="descripcion" ng-model="textos.descripcion"  value="{{descripcion}}" />
    </fieldset>
    <fieldset>
        <label for="orden">orden : </label>
        <input type="text" name="orden" ng-model="textos.orden"  value="{{orden}}" />
    </fieldset>
    <fieldset>
        <label for="fecha">fecha : </label>
        <input type="text" name="fecha" ng-model="textos.fecha"  value="{{fecha}}" />
    </fieldset>
     <fieldset class="text-right">
        <button  type="button" id="btnCancelar" onclick="location.href='#/textos/listar';">Cancelar </button>
        <button id="btregistrar" ng-disabled="frm_textos.$invalid"  >Registrar </button>
    </fieldset>
</fieldset>
</form>
</div>