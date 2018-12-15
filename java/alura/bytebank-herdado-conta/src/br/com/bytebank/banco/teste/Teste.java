package br.com.bytebank.banco.teste;

import br.com.bytebank.banco.modelo.Cliente;
import br.com.bytebank.banco.modelo.ContaCorrente;
import br.com.bytebank.banco.modelo.ContaPoupanca;

public class Teste {

	public static void main(String[] args) {

		System.out.println("x");
		System.out.println(3);
		System.out.println(false);

		Object cc = new ContaCorrente(22, 33);
		Object cp = new ContaPoupanca(33, 22);
		Object c = new Cliente();

		
		System.out.println(cc);
		System.out.println(cp);

		println(c);

	}

	static void println(Object ob) {

	}

//	static void println() {
//
//	}
//	
//	static void println(int valor) {
//
//	}
//	
//	static void println(boolean valor) {
//
//	}
//	
//	static void println(ContaCorrente conta) {
//
//	}
//	
//	static void println(ContaPoupanca conta) {
//
//	}
//	
//	static void println(Conta conta) {
//
//	}

}