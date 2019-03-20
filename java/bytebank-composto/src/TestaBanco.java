
public class TestaBanco {
	public static void main(String[] args) {
		Cliente paulo = new Cliente(); // instancia
		paulo.nome = "Paulo Silveira"; // atribui paulo silveira ao nome 
		paulo.cpf = "222.222.222-22"; // atribui 222.222.222-22 ao cpf
		paulo.profissao = "Programador"; // atribui programador a profissao
		
		Conta contaDoPaulo = new Conta(); // instancia
		contaDoPaulo.deposita(100); // deposita 100
		
		// associa o cliente paulo a contaDoPaulo
		contaDoPaulo.titular = paulo; // associa paulo a conta
		System.out.println(contaDoPaulo.titular.nome); // mostra titular.nome
	}
}
