
public class TesteSacaNegativo {
	public static void main(String[] args) {
		Conta conta = new Conta(); // instancia
		conta.deposita(100); // deposita 100 a conta
		System.out.println(conta.saca(200)); // mostra saca
		System.out.println(conta.getSaldo()); // mostra saldo

		conta.saca(101); // saca 101
		
		/* // proibido
		conta.saldo = conta.saldo - 101;
		System.out.println(conta.saldo); */
	}
}