<html>
<body>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css.css" rel="stylesheet">
    <center>
        <form>
            <div class="container cinza">
                <div class="row">
                    <div class="col-sm-4 col-sm-offset-4 col-md-8col-md-offset-2 col-lg-8 col-sm-offset-2" >
                        <h2>Insira texto para desencriptar</h2>
                            Frase a ser desencriptada: <br/><textarea name="descript" ></textarea><br/><br/>
                        <td>
                            Numero de codificacao: <br/><input type="text" size=2 name="ndescript"><br/><br/>
                            <input type="submit" class="btn btn-primary" name="submit"  value="Descodificar">
                        </td>
                        <br>
                        <br>
                        <br>
                        <a href="index.php" class="btn btn-info btn-lg" role="button" >CRIPTOGRAFAR</a>
                        <br>
                        <br>
						<?php
								error_reporting(E_ALL ^ E_NOTICE);
							$tamanhoAlfabeto = 256;
							$fora = 32;
							$descriptografada = '';
							$descriptografar=$_GET['descript'];
							$n=$_GET['ndescript'];
							
							
							//Criptografar
							for($i = 0; $i < strlen($descriptografar); $i++){
								$key = ord($descriptografar[$i]);
								
								$novoCodigo = $key - $n;
								
								if($novoCodigo >= 0 && $novoCodigo < $fora){
											$novoCodigo -= $fora;
								}
								
								if($novoCodigo < 0){
											$novoCodigo = $tamanhoAlfabeto + $novoCodigo;
								}
								
										$descriptografada .= chr($novoCodigo);
							}
							echo '<strong>Frase criptografada: <red>' . $descriptografar . '</red><br/>';
							echo 'Frase descriptografada: ' . $descriptografada.'</strong>';
						?>
						<br>
						<br>
						<br>
                        <div id='footer'>			<!-- RODAPÉ -->
                        <i>Desenvolvido por:<br/>Dhuli Gabriele & Endriu Gabriel</i>
                    </div>
                    </div>
                </div>    
            </div>
            

        </form>
    </center>
</body>
</html>
