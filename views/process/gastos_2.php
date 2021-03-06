<form id="form1" name="form1" method="post">
    <input type="hidden" id="hdPage" name="hdPage" value="1" />
    <input type="hidden" id="hdPageProyecto" name="hdPageProyecto" value="1" />
    <input type="hidden" id="hdPagePresupuesto" name="hdPagePresupuesto" value="1" />
    <div class="page-region without-appbar">
        <div id="pnlListado" class="inner-page with-appbar">
            <h1 class="title-window hide">
                <a id="btnBack" href="#" title="Volver a inicio" class="back-button"><i class="icon-arrow-left-3 fg-darker smaller"></i></a>
                Gastos
            </h1>
            <div class="panel-search">
                <div class="grid">
                    <div class="row hide" style="padding: 5px 0;">
                        <div id="pnlFiltroProyecto" data-tipofiltro="filtroproyecto" data-tiposeleccion="registro" data-idproyecto="0" class="panel-info without-foto" data-hint-position="top" title="Proyecto">
                            <div class="info">
                                <h3 class="descripcion">Proyecto</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="padding: 5px 0;">
                        <div class="input-control text" data-role="input-control">
                            <input id="txtSearch" name="txtSearch" type="text" placeholder="<?php $translate->__('Ingrese criterios de b&uacute;squeda'); ?>">
                            <button id="btnSearch" name="btnSearch" type="button"  tabindex="-1" title="<?php $translate->__('Buscar'); ?>" class="btn-search"></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="divload">
                <div id="gvDatos" class="scrollbarra">
                    <div class="card-area gridview">
                    </div>
                </div>
            </div>
            <div class="appbar">
                <button id="btnEliminar" name="btnEliminar" type="button" class="metro_button oculto float-right">
                    <h2><i class="icon-remove"></i></h2>
                </button>
                <button id="btnEditar" type="button" class="metro_button oculto float-right">
                    <h2><i class="icon-pencil"></i></h2>
                </button>
                <!-- <button id="btnUploadExcel" type="button" class="metro_button float-right">
                    <h2><i class="icon-upload-2"></i></h2>
                </button> -->
                <button id="btnNuevo" type="button" class="metro_button float-right">
                    <h2><i class="icon-plus-2"></i></h2>
                </button>
                <button id="btnLimpiarSeleccion" type="button" class="metro_button oculto float-left">
                    <h2><i class="icon-undo"></i></h2>
                </button>
                <button id="btnSelectAll" type="button" class="metro_button float-left" data-hint-position="top" title="Seleccionar todo">
                    <h2><i class="icon-checkbox"></i></h2>
                </button>
                <button id="btnProyeccion" type="button" class="metro_button oculto float-left" data-hint-position="top" title="Proyectar presupuesto">
                    <h2><i class="icon-calendar"></i></h2>
                </button>
            </div>
        </div>
        <div id="pnlRegistro" class="inner-page with-appbar" style="display: none;">
            <input type="hidden" id="hdIdProyecto" name="hdIdProyecto" value="0">
            <input type="hidden" id="hdIdPrimary" name="hdIdPrimary" value="0">
            <h1 class="title-window hide">
                <a id="btnBackPrevPanel" href="#" title="Volver a inicio" class="back-button"><i class="icon-arrow-left-3 fg-darker smaller"></i></a>
                Registro
            </h1>
            <div class="divContent">
                <div id="pnlDetalle" class="pnlDetalle generic-panel">
                    <div class="gp-header">
                        <div class="grid fluid">
                            <div class="row">
                                <div class="span7">
                                    <div id="pnlInfoProyecto" data-tipofiltro="proyecto" data-tiposeleccion="registro" data-idproyecto="0" class="panel-info without-foto" data-hint-position="top" title="Proyecto">
                                        <div class="info">
                                            <h3 class="descripcion">Proyecto</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="span2">
                                    <label for="ddlAnho">Año</label>
                                    <div class="input-control select fa-caret-down" data-role="input-control">
                                        <select id="ddlAnho" name="ddlAnho">
                                            <option value="0">SELECCIONE PROYECTO</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="span3">
                                    <label for="ddlMes">Mes</label>
                                    <div class="input-control select fa-caret-down" data-role="input-control">
                                        <select id="ddlMes" name="ddlMes">
                                            <?php ListarMeses(); ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gp-body">
                        <div id="tableDetalle" class="itables">
                            <div class="ihead">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Concepto</th>
                                            <th>Cantidad</th>
                                            <th>Precio Unitario</th>
                                            <th>Presupuesto</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                            <div class="ibody">
                                <div class="ibody-content">
                                    <table>
                                        <tbody>
                                        </tbody>                    
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gp-footer">
                        <div class="pnlDisplayImporte without-info">
                            <input id="txtImporteTotal" name="txtImporteTotal" type="text" class="oculto">
                            <div class="simbolo">
                                <h1 id="lblMonedaTotal" class="text-center fg-darkCobalt">S/.</h1>
                            </div>
                            <div class="total">
                                <h1 id="lblImporteTotal" class="importe text-right fg-emerald">0.00</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="appbar">
                <button id="btnCancelar" type="button" class="metro_button float-right">
                    <h2><i class="icon-cancel"></i></h2>
                </button>
                <button id="btnGuardar" type="button" class="metro_button float-right">
                    <h2><i class="icon-checkmark"></i></h2>
                </button>
                <button id="btnAddDetalle" type="button" class="metro_button float-left" data-tipofiltro="concepto" data-hint-position="top" title="Conceptos">
                    <h2><i class="icon-plus-2"></i></h2>
                </button>
            </div>
        </div>
    </div>
    <div id="modalRegistro" class="modal-dialog modaluno modal-example-content">
        <input type="hidden" id="hdIdConcepto" name="hdIdConcepto" value="0">
        <div class="modal-example-header">
            <h2 class="no-margin b-hide">
                <a class="close-modal-example" href="#" title="<?php $translate->__('Ocultar'); ?>"><i class="icon-cancel fg-darker smaller"></i></a>
                Detalle de presupuesto
            </h2>
        </div>
        <div class="modal-example-body">
            <div class="grid fluid">
                <div class="row">
                    <div id="pnlInfoConcepto" data-tipofiltro="concepto" data-idconcepto="0" class="panel-info without-foto" data-hint-position="top" title="Concepto">
                        <div class="info">
                            <h3 class="descripcion">Concepto</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="span6">
                        <label for="txtCantidad">Cantidad</label>
                        <div class="input-control text" data-role="input-control">
                            <input id="txtCantidad" name="txtCantidad" type="text" placeholder="Ingrese Cantidad" class="only-numbers">
                            <button class="btn-clear" tabindex="-1" type="button"></button>
                        </div>
                    </div>
                    <div class="span6">
                        <label for="txtPrecioUnitario">Precio Unitario</label>
                        <div class="input-control text" data-role="input-control">
                            <input id="txtPrecioUnitario" name="txtPrecioUnitario" type="text" placeholder="Ingrese Precio Unitario" class="only-numbers">
                            <button class="btn-clear" tabindex="-1" type="button"></button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="pnlDisplayImporte without-info">
                        <input id="txtSubTotal" name="txtSubTotal" type="text" class="oculto">
                        <div class="simbolo">
                            <h1 id="lblMonedaCobro" class="text-center fg-darkCobalt">S/.</h1>
                        </div>
                        <div class="total">
                            <h1 id="lblImporteCobro" class="importe text-right fg-emerald">0.00</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-example-footer">
            <div class="grid fluid">
                <div class="row">
                    <div class="span3"></div>
                    <div class="span6">
                        <button id="btnAgregar" type="button" class="command-button mode-add success">Agregar</button>
                    </div>
                    <div class="span3"></div>
                </div>
            </div>
        </div>
    </div>
    <div id="pnlDatosFiltro" data-tipofiltro="proyecto" class="top-panel with-appbar inner-page with-panel-search" style="display:none;">
        <h1 class="title-window hide">
            <a href="#" id="btnHideFiltro" class="back-button"><i class="icon-arrow-left-3 fg-darker smaller"></i></a>
            <span id="txtTituloFiltro"></span>
        </h1>
        <div class="panel-search">
            <div class="input-control text" data-role="input-control">
                <input type="text" id="txtSearchFiltro" name="txtSearchFiltro" placeholder="<?php $translate->__('Ingrese criterios de b&uacute;squeda'); ?>">
                <button id="btnSearchFiltro" type="button" class="btn-search" tabindex="-1"></button>
            </div>
        </div>
        <div id="precargaCli" class="divload">
            <div id="gvFiltro" class="scrollbarra">
                <div class="gridview"></div>
            </div>
        </div>
        <div class="appbar">
            <button id="btnAsignFilter" type="button" class="metro_button oculto float-right">
                <h2><i class="icon-checkmark"></i></h2>
            </button>
            <button id="btnClearFilter" type="button" class="metro_button oculto float-left">
                <h2><i class="icon-undo"></i></h2>
            </button>
            <button id="btnSelectAllFilter" type="button" class="metro_button float-left" data-tipofiltro="concepto" data-hint-position="top" title="Conceptos">
                <h2><i class="icon-checkbox"></i></h2>
            </button>
        </div>
    </div>
</form>
<?php
include('common/libraries-js.php');
include('common/validate-js.php');

?>
<script src="dist/js/app/process/gasto-script.min.js"></script>