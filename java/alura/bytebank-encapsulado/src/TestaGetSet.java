
public class TestaGetSet {
	public static void main(String[] args) { 
        Conta conta = new Conta(1337, 24226); // instancia
        conta.setNumero(1337); // altera um valor
        System.out.println(conta.getNumero()); // pega um valor
        
        Cliente paulo = new Cliente(); // insstancia
        paulo.setNome("Paulo Silveira"); // mostra nome
        conta.setTitular(paulo); // atribui paulo
        System.out.println(conta.getTitular().getNome()); // mostra nome
        conta.getTitular().setProfissao("programador"); // atribui programador a profissao
        //agora em duas linhas: 
        Cliente titularDaConta = conta.getTitular(); // atribui titular a conta
        titularDaConta.setProfissao("programador"); // atribui programador a profissao 

        System.out.println(titularDaConta); // mostra titulardaconta
        System.out.println(paulo); // mostra paulo
        System.out.println(conta.getTitular()); // mostra titular
    }
}
