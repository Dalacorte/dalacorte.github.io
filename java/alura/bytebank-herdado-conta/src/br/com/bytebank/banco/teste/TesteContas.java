package br.com.bytebank.banco.teste;
import br.com.bytebank.banco.especial.ContaEspecial;
import br.com.bytebank.banco.modelo.ContaCorrente;
import br.com.bytebank.banco.modelo.ContaPoupanca;
import br.com.bytebank.banco.modelo.SaldoInsuficienteException;

//br.com.bytebank.banco.teste.TesteContas
public class TesteContas {
	
	//java.lang.String
	public static void main(String[] args) throws SaldoInsuficienteException {

		ContaEspecial ce = new ContaEspecial(123, 123);
		//ce.saldo(100.0); nao funciona
		
		ContaCorrente cc = new ContaCorrente(111, 111);
		cc.deposita(100.0);

		ContaPoupanca cp = new ContaPoupanca(222, 222);
		cp.deposita(200.0);

		cc.transfere(10.0, cp);

		System.out.println("CC: " + cc.getSaldo());
		System.out.println("CP: " + cp.getSaldo());

	}
}