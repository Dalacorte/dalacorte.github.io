package br.com.bytebank.banco.teste;

public class TesteString { 

    public static void main(String[] args) { 

    	String vazio = "Alura";
    	String outroVazio = vazio.trim(); //retira espacos 
    	System.out.println(outroVazio.isEmpty()); //verifica se a string esta vazia
    	System.out.println(vazio.contains("Alu")); //verica se contem tal sequencia de letras
    	
    	int a = 3;
    	String nome = "Alura"; //object literal

    	System.out.println(nome.length()); //mostra o tamanho da string
    	
    	for(int i = 0; i < nome.length(); i++) {
    		System.out.println(nome.charAt(i));
    	}
    	
//    	String sub = nome.substring(1); //mostra tudo depois do indice
//    	System.out.println(sub);
    	
//    	int posicao = nome.indexOf("ur"); //mostra em posicao esta tal caracter
//    	System.out.println(posicao);
    	
//    	char n = nome.charAt(0); //mostra o char em tal posicao
//    	System.out.println(n);
    	
//    	String outro = new String("Alura");
//    	char c = 'c';
//    	String outra = nome.replace('A', 'a'); //muda a letra A para a
//      String outras = nome.toUpperCase(); //muda tudo para upper. tambem existe toLowerCase

//        System.out.println(nome);
//        System.out.println(outras);
    }
}