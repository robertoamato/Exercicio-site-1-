<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<title>.::Programação Web::.</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
	<div class="topo">
		<img src="img/topo_aula.png" alt="Topo">
	</div>
	<br><br><br><br>
	<h1>ORÇAMENTO</h1><hr><br>

	

	<div class="conteudo">
		<?php

		$data = $_POST["data"];
		$garantia = $_POST["garantia"];
		$servico = $_POST["servico"];
		$aparelho = $_POST["aparelho"];
		$cliente = $_POST["cliente"];

		echo "<strong>Detalhes do Orçamento:</strong> <br><br>";
		echo "Data $data Tempo de garantia apos a entrega $garantia meses<br><br>";
		echo "Aparelho para manutenção: $aparelho <br><br>";

		echo "Serviço a ser execultado: $servico<br><br>";

		switch ($servico) {
			case 'Formatação':
				echo "O valor Total será de R$ 70,00 a mão de obra mais R$ 50,00 de equipamentos, <strong>totalizando R$ 120,00</strong>";
			break;
			case 'Troca de peças':
			echo "O valor Total será de R$ 100,00 a mão de obra mais R$ 50,00 de equipamentos, totalizando R$ 150,00";
			break;
			case 'Outros':
			echo "O valor Total será de R$ 150,00 a mão de obra mais R$ 50,00 de equipamentos, totalizando R$ 200,00";
			break;
			
			default:
				echo "Infelizmente Não é poessivel realizar este serviço no momento. ";
				break;


		}


		echo "<br><br>Declaro estar de acordo com os valores e informções acima descritos<br> $cliente.";


		?>
		<br><br>

		<p>Assinatura:___________________________________________</p><br>
		<p>Data:___/___/_____</p><br>
		<p>Ao assinar você concorda com todos os termos de serviços e garantia</p><br>

		<form>
			<input type="button" value="Imprimir Orçamento" onclick="window.print()">

		</form>




		<a href="index.html"><< voltar</a>
		
	</div>

	
	<footer>
		<h3>Todos os direitos reservados - Desenvolvido por TecTreinamentos</h3>
	</footer>




</body>
</html>