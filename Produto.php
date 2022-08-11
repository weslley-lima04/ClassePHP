<?php 


class Produto
{
	
	var $codigo;
	var $descricao;
	var $preco;
	var $quantidade;


	function ImprimeEtiqueta()
	{

		echo "Codigo: ".$this->codigo."<br/>";
		echo "Descrição: ".$this->descricao."<br/>";

	}

}



 ?>