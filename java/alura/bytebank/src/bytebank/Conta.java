package bytebank;

public class Conta { // classe conta
	double saldo; // atributo
	int agencia; // atributo
	int numero; // atributo
	String titular; // atributo

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
}