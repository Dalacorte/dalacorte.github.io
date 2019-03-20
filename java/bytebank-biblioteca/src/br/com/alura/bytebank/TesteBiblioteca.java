package br.com.alura.bytebank;

import br.com.bytebank.banco.modelo.Conta;
import br.com.bytebank.banco.modelo.ContaCorrente;

public class TesteBiblioteca {

	public static void main(String[] args) {
		// TODO Auto-generated method stub

		Conta c = new ContaCorrente(123, 321);
		
		c.deposita(200);
		System.out.println(c.getSaldo());
		
	}

}
