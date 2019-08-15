<?php 
	class Pessoa{
		
		public $nome;
		public $email;
		public $cpf;
		public $sexo;
		public $data_nasc;
		
		function __construct($n, $e, $c, $s, $d){
			$this->nome=$n;
			$this->email=$e;
			$this->cpf=$c;
			$this->sexo=$s;
			$this->data_nasc=$;
		}
		
		public function mostrar_dados(){
			
			echo "<fieldset>
				<div>
					<label>Nome:</label> ".$this->nome."
				</div>
				<div>
					<label>Email:</label> ".$this->email."
				</div>
				<div>
					<label>Cpf:</label> ".$this->cpf."
				</div>
				<div>
					<label>Sexo:</label> ".$this->sexo."
				</div>
				<div>
					<label>Data Nasc:</label> ".$this->data_nasc."
				</div>
			</fieldset>";
		}
		
		public function exibe_tr(){
			echo "<tr>
				<td>".$this->nome."</td>
				<td>".$this->email."</td>
				<td>".$this->cpf."</td>
				<td>".$this->sexo."</td>
				<td>".$this->data_nasc."</td>
			</tr>";
		}
	}
?>