
public class TestaContaSemCliente { 
    public static void main(String[] args) { 
        Conta contaDaMarcela = new Conta(); // instancia
        System.out.println(contaDaMarcela.getSaldo()); // mostra saldo 
        
        contaDaMarcela.titular = new Cliente(); // instancia
        System.out.println(contaDaMarcela.titular); // mostra titular

        contaDaMarcela.titular.nome = "Marcela"; // atribui marcela ao nome
        System.out.println(contaDaMarcela.titular.nome); // mostra nome
    }
}