
public class TestaValores {
	public static void main(String[] args) {
		Conta conta = new Conta(1337, 24226); // parametros para conta
		//conta.setAgencia(-50);
		//conta.setNumero(-330);
		System.out.println(conta.getAgencia()); // mostra agencia
		
		conta.setAgencia(123456); // acresta 123456 a agencia
		
		Conta conta2 = new Conta(1227, 12332); // parametros para conta
		Conta conta3 = new Conta(1447, 1231); // parametros para conta
		
		System.out.println(Conta.getTotal()); // mostra total conta
	}
}