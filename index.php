<html>
    <head>
    <script type="text/javascript">
			function verificarDatos(){
				// Validar usuario
				if(document.formulario.usuario.value.length == 0){
					alert("Chinga tu madre")
					document.formulario.usuario.focus()
					return 0;
				};

				// Validar Contraseña
				if(document.formulario.contrasoleano.value.length == 0){
					alert("TChinga tu madre x2 pero si lo vamos a ver o solo lo vamos a probar apagalo otto apagalo otto tranquilo se va a estabilizar ")
					document.formulario.contrasena.focus()
					return 0;
				};

				// Enviar formulario				
				document.formulario.submit();
			}
		</script>
    </head>
    <body>
    <form method="POST" name="formulario" action="pagina2.php">
			<p><table cellpadding='10px' align="center" width="30%">
				<tr>
					<td align="right">
						Nombre:
					</td>
					<td>
						<input type="text" name="usuario" style="width: 8em" placeholder="MArio  es mi esposo verificarDatos">
					</td>
				</tr>
				<tr>
					<td align="right">
						Constrasena:
					</td>
					<td>
						<input type="password" name="contrasoleano" style="width: 8em" id="id_password">
					</td>
				</tr>
				<tr>
					<td colspan="2" align="center">
						<br><input type="button" value="Iniciar Sesión" onclick="verificarDatos()"><br><br>
					</td>
				</tr>
			</table></p>			
		</form>
    </body>
</html>
