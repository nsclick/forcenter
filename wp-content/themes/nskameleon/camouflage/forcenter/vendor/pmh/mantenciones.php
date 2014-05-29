<!-- la especificicación del formulario debe ser igual -->
<form action="procesador.php" method="post" id="formulary">
	<h1>Matenciones</h1>
<input type="hidden" name="action" value="mantenciones">
<table border="0" align="left">
      <tbody><tr>
        <td width="72">*Nombre:</td>
        <td width="170"> <label>
          <input type="text" value="" id="nombre" class="text" name="nombre">
        </label></td>
      </tr>
      <tr>
        <td class="fomrualriotiulo">*Apellido:</td>
        <td><label>
          <input type="text" value="" id="apellido" class="text" name="apellido">
        </label></td>
      </tr>
      <tr>
        <td class="fomrualriotiulo">*Teléfono:</td>
        <td><label>
          <input type="text" value="" id="telefono" class="text" name="telefono">
        </label></td>
      </tr>
      <tr>
        <td class="fomrualriotiulo">*E-mail:</td>
        <td><label>
          <input type="text" value="" id="email" class="text" name="email">
        </label></td>
      </tr>
<tr>
<td class="fomrualriotiulo">*Modelo:</td>
<td><label>
<input type="text" value="" id="modelo-auto" class="text" name="modelo-auto">
 </label></td></tr>
<tr>
<td class="fomrualriotiulo">
 <span class="texto_form">*Agendar Cita:</span></td>
<td>
<input type="text" value="" id="agendarcita" name="agendarcita" class="encuadros" size="10"> </td>

</tr>
      <tr>
        <td class="fomrualriotiulo">Comentarios:</td>
        <td><label>
          <textarea id="comentarios" class="text" rows="6" cols="21" name="comentarios"></textarea>
        </label></td>
      </tr>
    
    
         <tr><td> <label>
          <input type="submit" value="Enviar"> </label></td><td> <!--<input class="btn" type="reset" name="borrar" id="borrar" value="Borrar" />-->
          </tr></tbody></table>
<br>

</form>
