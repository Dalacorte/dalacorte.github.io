package bytebank;

public class CriaConta {
	public static void main(String[] args) {
		Conta primeiraConta = new Conta(); // instancia 
		primeiraConta.saldo = 200; // atribui 200 ao saldo
		System.out.println(primeiraConta.saldo); // mostra valor

		primeiraConta.saldo += 100; // atribui 100 ao saldo
		System.out.println(primeiraConta.saldo); // mostra valor

		Conta segundaConta = new Conta(); // instancia
		segundaConta.saldo = 300; // atribui 300 ao saldo

		System.out.println("primeira conta tem " + primeiraConta.saldo); // mostra valor
		System.out.println("segunda conta tem " + segundaConta.saldo); // mostra valor

		segundaConta.agencia = 146; // atribui 146 a agencia
		System.out.println(primeiraConta.agencia); // mostra agencia
		System.out.println(primeiraConta.numero); // mostra numero

		System.out.println(segundaConta.agencia); // mostra agencia

		segundaConta.agencia = 146; // atribui 146 a agencia
		System.out.println("agora a segunda conta está na agencia " + segundaConta.agencia); // mostra agencia

		if (primeiraConta == segundaConta) { //condicao booleana
			System.out.println("mesma conta"); // mostra resultado
		} else { // se nao da condicao
			System.out.println("contas diferentes"); // mostra resultado
		}
		System.out.println(primeiraConta); // mostra conta
		System.out.println(segundaConta); // mostra conta
	}
}
