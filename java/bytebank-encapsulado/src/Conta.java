
public class Conta { // classe conta
	private double saldo; // atributo
	private int agencia; // atributo
	private int numero; // atributo
	private Cliente titular; // atributo
	private static int total; // atributo

	public Conta( int agencia, int numero) { // rotina de inicializacao
		Conta.total++; // acrescenta 1 ao total
		System.out.println("o total de contas é "+ Conta.total); // mostra conta total
        this.agencia = agencia; // agencia recebe agencia
        this.numero = numero; // numero recebe numero
        System.out.println("estou criando uma conta " + this.numero); // mostra numero
    }
	
	public void deposita(double valor) { // metodo deposita
		this.saldo = this.saldo + valor; // acao do metodo
	}

	public boolean saca(double valor) { // metodo saca
		if (this.saldo >= valor) { // condicao booleana
			this.saldo = this.saldo - valor; // acao do metodo
			return true; // retorna true
		} else { // se nao da condicao
			return false; // retorna false
		}
	}

	public boolean transfere(double valor, Conta destino) { // metodo transfere
		if (this.saldo >= valor) { // condicao booleana
			this.saldo -= valor; // acao do metodo
			destino.deposita(valor); // acao do metodo
			return true; // retorna true
		} else { // se nao da condicao
			return false; // retorna false
		}
	}

	public double getSaldo() { // pega um valor
		return this.saldo; // acao do metodo
	}

	public int getNumero() { // pega um valor
		return this.numero; // acao do metodo
	}

	public void setNumero(int numero) { // altera um valor
		if (numero <= 0) { // condicao booleana
			System.out.println("não pode valor <= 0"); // mostra um texto
			return; // retorna 
		}
		this.numero = numero; // acao do metodo
	}

	public int getAgencia() { // pega um valor
		return this.agencia; // acao do metodo
	}

	public void setAgencia(int agencia) { // altera um valor
		if (agencia <= 0) { // condicao booleana
			System.out.println("nao pode valor menor igual a 0"); // mostra um texto
			return; // retorna
		}
		this.agencia = agencia; // acao do metodo
	}

	public Cliente getTitular() { // pega um valor
		return this.titular; // acao do metodo
	}

	public void setTitular(Cliente titular) { // altera um valor
		this.titular = titular; // acao do metodo
	}
	
	public static int getTotal() { // retorna um valor
		return Conta.total; // acao do metodo
	}

}