<html>
<body>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css.css" rel="stylesheet">
    <center>
        <form>
            <div class="container cinza">
                <div class="row">
                    <div class="col-sm-4 col-sm-offset-4 col-md-8col-md-offset-2 col-lg-8 col-sm-offset-2" >
                       <h2>Insira texto para encriptar</h2>
                            Frase a ser encriptada: <br/><textarea name="cript"></textarea><br/><br/>
                        <td>
                            Numero de codificacao: <br/><input type="text" size=2 name="ncript"><br/><br/>
                            <input type="submit" class="btn btn-primary" name="submit" value="Codificar">
                        </td>
                        <br>
                        <br>
                        <br>
                        <a href="descriptografar.php" class="btn btn-info btn-lg" role="button" >DESCRIPTOGRAFAR</a>
                        <br>
                        <br>
						<?php

								error_reporting(E_ALL ^ E_NOTICE);

							$tamanhoAlfabeto = 256;
							$fora = 32;
							$criptografada = '';
							$criptografar=$_GET['cript'];
							$n=$_GET['ncript'];
							
							
							//Criptografar
							for($i = 0; $i < strlen($criptografar); $i++){
								$key = ord($criptografar[$i]);
								$novoCodigo = $key + $n;
								$novoCodigo = $novoCodigo % $tamanhoAlfabeto;
								
								if ($novoCodigo >= 0 && $novoCodigo < $fora){
									$novoCodigo += $fora;
								}
								
								$criptografada .= chr($novoCodigo);
							}
							echo '<strong>Frase original: ' . $criptografar . '<br/>';
							echo 'Frase criptografada: ' . $criptografada.'</strong>';
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