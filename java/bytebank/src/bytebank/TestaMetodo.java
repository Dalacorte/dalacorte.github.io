package bytebank;

public class TestaMetodo {
	public static void main(String[] args) {
		Conta contaDoPaulo = new Conta(); // instancia 
		contaDoPaulo.saldo = 100; // atribui 100 ao saldo
		contaDoPaulo.deposita(50); // deposita 50 no saldo
		System.out.println(contaDoPaulo.saldo); // mostra saldo

		boolean conseguiuRetirar = contaDoPaulo.saca(20); // tira 20 reais de saldo
		System.out.println(contaDoPaulo.saldo); // mostra saldo
		System.out.println(conseguiuRetirar); // mostra true ou false

		Conta contaDaMarcela = new Conta(); // instancia
		contaDaMarcela.deposita(1000); // deposita 100 no saldo

		boolean sucessoTransferencia = contaDaMarcela.transfere(300, contaDoPaulo); // transfere 300 reais
		if (sucessoTransferencia) { // condicao booleana
			System.out.println("transferencia com sucesso"); // mostra resultado
		} else { // se nao da condicao
			System.out.println("faltou dinheiro"); // mostra resultado

		}
		System.out.println(contaDaMarcela.saldo); // mostra saldo 
		System.out.println(contaDoPaulo.saldo); // mostra saldo
	}
}