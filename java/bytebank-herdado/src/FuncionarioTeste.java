
public class FuncionarioTeste {

	private String nome;
	private String cpf;
	private double salario;
	private int tipo = 0; // 0 funcionario comun, 1 gente, 2 diretor

	public FuncionarioTeste() {

	}

	public void setTipo(int tipo) {
		this.tipo = tipo;
	}

	public int getTipo() {
		return this.tipo;
	}
	
	public double getBonificacao() {
		
		if (this.tipo == 0) { // Funcionário comum;
			return this.salario * 0.1;
		} else if (this.tipo == 1) { // Gerente;
			return this.salario;
		} else { // Diretor
			return this.salario + 1000.0;
		}
	}
	
	public String getNome() {
		return nome;
	}

	public void setNome(String nome) {
		this.nome = nome;
	}

	public String getCpf() {
		return cpf;
	}

	public void setCpf(String cpf) {
		this.cpf = cpf;
	}

	public double getSalario() {
		return salario;
	}

	public void setSalario(double salario) {
		this.salario = salario;
	}
}