
public class TestaConversao {
	public static void main(String[] args) {
		double salario = 1270.50;
		float pontoFlutuante = (float) 3.14;
		float pontoFlutuante2 = 3.14f;
		int valor = (int) salario;
		System.out.println(valor);
		long numeroGrande = 123456789l;
		short numeroPequeno = 1234;
		byte numeroMenorAinda = 127;
		double valor1 = 0.2;
		double valor2 = 0.1;
		double total = valor1 + valor2;
		System.out.println(total);
	}
}
