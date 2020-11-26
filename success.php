<?php
	
	$payment_type = $_GET['payment_type'];
	$external_reference = $_GET['external_reference'];
	$collection_id = $_GET['collection_id'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Pago Pendiente</title>
</head>
<body>

	<!-- Estilos-->
	<style type="text/css">
		body {
		  background-color: #fff0f0;
		  color: green;
		  font-family: "Muli", sans-serif;
		  font-weight: 100;
		  height: 100vh;
		  margin: 0;
		}

		.full-height {
		  height: 100vh;
		}

		.flex-center {
		  align-items: center;
		  display: flex;
		  justify-content: center;
		}

		.position-r {
		  position: relative;
		}

		.code {
		  border-right: 3px solid;
		  font-size: 55px;
		  padding: 0 10px 0 10px;
		  text-align: center;
		}

		.message {
		  font-size: 40px;
		  text-align: center;
		}

		.b-gradient-table {
		    width: 100%;
		}
		.b-gradient-table__row {
		    position: relative;
		    z-index: 2;
		}
		.b-gradient-table__row-divider {
		    background-image: -moz-linear-gradient(left, rgba(204,204,204,0) 0%, rgba(204,204,204,1) 15%, rgba(204,204,204,1) 85%, rgba(204,204,204,0) 100%);
		    background-image: -webkit-gradient(linear, left top, right top, color-stop(0%,rgba(204,204,204,0)), color-stop(15%,rgba(204,204,204,1)), color-stop(85%,rgba(204,204,204,1)), color-stop(100%,rgba(204,204,204,0)));
		    background-image: -webkit-linear-gradient(left, rgba(204,204,204,0) 0%,rgba(204,204,204,1) 15%,rgba(204,204,204,1) 85%,rgba(204,204,204,0) 100%);
		    background-image: -o-linear-gradient(left, rgba(204,204,204,0) 0%,rgba(204,204,204,1) 15%,rgba(204,204,204,1) 85%,rgba(204,204,204,0) 100%);
		    background-image: -ms-linear-gradient(left, rgba(204,204,204,0) 0%,rgba(204,204,204,1) 15%,rgba(204,204,204,1) 85%,rgba(204,204,204,0) 100%);
		    background-image: linear-gradient(left, rgba(204,204,204,0) 0%,rgba(204,204,204,1) 15%,rgba(204,204,204,1) 85%,rgba(204,204,204,0) 100%);
		    height: 1px;
		}
		.b-gradient-table__cell {
		    text-align: center;
		    padding: 0.2em 0.2em 0.6em;
		}
		.b-gradient-table__cell-divider {
		    background-image: -moz-linear-gradient(top, rgba(204,204,204,0) 0%, rgba(204,204,204,1) 15%, rgba(204,204,204,1) 85%, rgba(204,204,204,0) 100%);
		    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(204,204,204,0)), color-stop(15%,rgba(204,204,204,1)), color-stop(85%,rgba(204,204,204,1)), color-stop(100%,rgba(204,204,204,0)));
		    background-image: -webkit-linear-gradient(top, rgba(204,204,204,0) 0%,rgba(204,204,204,1) 15%,rgba(204,204,204,1) 85%,rgba(204,204,204,0) 100%);
		    background-image: -o-linear-gradient(top, rgba(204,204,204,0) 0%,rgba(204,204,204,1) 15%,rgba(204,204,204,1) 85%,rgba(204,204,204,0) 100%);
		    background-image: -ms-linear-gradient(top, rgba(204,204,204,0) 0%,rgba(204,204,204,1) 15%,rgba(204,204,204,1) 85%,rgba(204,204,204,0) 100%);
		    background-image: linear-gradient(top, rgba(204,204,204,0) 0%,rgba(204,204,204,1) 15%,rgba(204,204,204,1) 85%,rgba(204,204,204,0) 100%);
		    width: 1px;
		}​
		
	</style>

	<div class="flex-center position-r full-height">
	  <div class="code">
	    ¡EXITO! </div>

	  <div class="message" style="padding: 10px;">
	    TU COMPRA HA SIDO COMPLETADA, DETALLES: </div>
	</div>
	<br>
	<table class="b-gradient-table" cellpadding="0" cellspacing="0">
        <colgroup>
            <col span="1" />
            <col span="1" class="b-gradient-table__cell-divider"/>
        </colgroup>
        <tr class="b-gradient-table__row">
            <th class="b-gradient-table__cell">Método de pago:</th>
            <td rowspan="5"></td>
            <th class="b-gradient-table__cell"><?php echo $payment_type; ?></th>
        </tr>
        <tr class="b-gradient-table__row-divider"><td colspan="3"></td></tr>
        <tr class="b-gradient-table__row">
            <td class="b-gradient-table__cell">Referencia Externa:</td>
            <td class="b-gradient-table__cell"><?php echo $external_reference; ?></td>
        </tr>
        <tr class="b-gradient-table__row-divider"><td colspan="3"></td></tr>
        <tr class="b-gradient-table__row">
            <td class="b-gradient-table__cell">Identificador de Pago:</td>
            <td class="b-gradient-table__cell"><?php echo $collection_id; ?></td>
        </tr>
    </table>​
</body>
</html>