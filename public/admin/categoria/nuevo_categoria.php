<div id="div_categoria">
<form id="frm_categoria" name="frm_categoria" class="hform"  ng-submit="setCategoria()">
<fieldset> <legend> Nuevo Categoria</legend>
    <fieldset>
        <label for="idcategoria">idcategoria : </label>
        <input type="text" name="idcategoria" ng-model="categoria.idcategoria" />
    </fieldset>
    <fieldset>
        <label for="nombre">nombre : </label>
        <input type="text" name="nombre" ng-model="categoria.nombre" />
    </fieldset>
    <fieldset>
        <label for="url">url : </label>
        <input type="text" name="url" ng-model="categoria.url" />
    </fieldset>
    <fieldset>
        <label for="imagen">imagen : </label>
        <input type="text" name="imagen" ng-model="categoria.imagen" />
    </fieldset>
    <fieldset>
        <label for="publicar">publicar : </label>
        <input type="text" name="publicar" ng-model="categoria.publicar" />
    </fieldset>
     <fieldset class="text-right">
        <button  type="button" id="btnCancelar" onclick="location.href='#/categoria/listar';">Cancelar </button>
        <button id="btregistrar" ng-disabled="frm_categoria.$invalid"  >Registrar </button>
    </fieldset>
</fieldset>
</form>
</div>