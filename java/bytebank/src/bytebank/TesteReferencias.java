package bytebank;

public class TesteReferencias {
	public static void main(String[] args) {
		Conta primeiraConta = new Conta(); // instancia
		primeiraConta.saldo = 300; // atribui 300 ao saldo

		System.out.println("saldo da primeira: " + primeiraConta.saldo); // mostra saldo

		Conta segundaConta = primeiraConta; // referencia

		System.out.println("saldo da segunda conta: " + segundaConta.saldo); // mostra saldo

		segundaConta.saldo += 100; // atribui 100 ao saldo
		System.out.println("saldo da segunda conta " + segundaConta.saldo); // mostra saldo

		System.out.println(primeiraConta.saldo); // mostra saldo

		if (primeiraConta == segundaConta) { // condicao booleana
			System.out.println("é a mesma conta"); // mostra resultado
		}

		System.out.println(primeiraConta); // mostra conta
		System.out.println(segundaConta); // mostra conta
	}
}