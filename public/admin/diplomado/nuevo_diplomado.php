<div id="div_diplomado">
<form id="frm_diplomado" name="frm_diplomado" class="hform"  ng-submit="setDiplomado()">
<fieldset> <legend> Nuevo Diplomado</legend>
    <fieldset>
        <label for="id">id : </label>
        <input type="text" name="id" ng-model="diplomado.id" />
    </fieldset>
    <fieldset>
        <label for="titulo">titulo : </label>
        <input type="text" name="titulo" ng-model="diplomado.titulo" />
    </fieldset>
    <fieldset>
        <label for="descripcion">descripcion : </label>
        <input type="text" name="descripcion" ng-model="diplomado.descripcion" />
    </fieldset>
    <fieldset>
        <label for="slide">slide : </label>
        <input type="text" name="slide" ng-model="diplomado.slide" />
    </fieldset>
    <fieldset>
        <label for="imagen">imagen : </label>
        <input type="text" name="imagen" ng-model="diplomado.imagen" />
    </fieldset>
    <fieldset>
        <label for="certificacion">certificacion : </label>
        <input type="text" name="certificacion" ng-model="diplomado.certificacion" />
    </fieldset>
    <fieldset>
        <label for="titulos">titulos : </label>
        <input type="text" name="titulos" ng-model="diplomado.titulos" />
    </fieldset>
    <fieldset>
        <label for="inversion">inversion : </label>
        <input type="text" name="inversion" ng-model="diplomado.inversion" />
    </fieldset>
    <fieldset>
        <label for="titulacion">titulacion : </label>
        <input type="text" name="titulacion" ng-model="diplomado.titulacion" />
    </fieldset>
    <fieldset>
        <label for="detalleduracion">detalleduracion : </label>
        <input type="text" name="detalleduracion" ng-model="diplomado.detalleduracion" />
    </fieldset>
    <fieldset>
        <label for="detalledia">detalledia : </label>
        <input type="text" name="detalledia" ng-model="diplomado.detalledia" />
    </fieldset>
    <fieldset>
        <label for="detallehorario">detallehorario : </label>
        <input type="text" name="detallehorario" ng-model="diplomado.detallehorario" />
    </fieldset>
    <fieldset>
        <label for="detallelugar">detallelugar : </label>
        <input type="text" name="detallelugar" ng-model="diplomado.detallelugar" />
    </fieldset>
    <fieldset>
        <label for="detalleprecio">detalleprecio : </label>
        <input type="text" name="detalleprecio" ng-model="diplomado.detalleprecio" />
    </fieldset>
    <fieldset>
        <label for="detalleequipos">detalleequipos : </label>
        <input type="text" name="detalleequipos" ng-model="diplomado.detalleequipos" />
    </fieldset>
    <fieldset>
        <label for="detalleconsultas">detalleconsultas : </label>
        <input type="text" name="detalleconsultas" ng-model="diplomado.detalleconsultas" />
    </fieldset>
    <fieldset>
        <label for="detalledirigido">detalledirigido : </label>
        <input type="text" name="detalledirigido" ng-model="diplomado.detalledirigido" />
    </fieldset>
    <fieldset>
        <label for="aquien">aquien : </label>
        <input type="text" name="aquien" ng-model="diplomado.aquien" />
    </fieldset>
    <fieldset>
        <label for="temas">temas : </label>
        <input type="text" name="temas" ng-model="diplomado.temas" />
    </fieldset>
    <fieldset>
        <label for="nombreseo">nombreseo : </label>
        <input type="text" name="nombreseo" ng-model="diplomado.nombreseo" />
    </fieldset>
    <fieldset>
        <label for="orden">orden : </label>
        <input type="text" name="orden" ng-model="diplomado.orden" />
    </fieldset>
    <fieldset>
        <label for="fecha">fecha : </label>
        <input type="text" name="fecha" ng-model="diplomado.fecha" />
    </fieldset>
     <fieldset class="text-right">
        <button  type="button" id="btnCancelar" onclick="location.href='#/diplomado/listar';">Cancelar </button>
        <button id="btregistrar" ng-disabled="frm_diplomado.$invalid"  >Registrar </button>
    </fieldset>
</fieldset>
</form>
</div>