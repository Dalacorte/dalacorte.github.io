package br.com.bytebank.banco.teste;

public class TesteArrayDePrimitivos {
	
	//Array
	public static void main(String[] args) {

        int[]idades = new int[5]; //inicializa o array com os valores padroes

        for(int i = 0; i < idades.length; i++) {
        	idades[i] = i * i;
        }
        
        for(int i = 0; i < idades.length; i++) {
        	System.out.println(idades[i]);;
        }
        
//        idades[0] = 29;
//        idades[1] = 39;
//        idades[2] = 49;
//        idades[3] = 59;
//        idades[4] = 69;
//
//        int idade1 = idades[4];
//
//        System.out.println(idade1);
//
//        System.out.println(idades.length);
//		
//		int idade01 = 29;
//		int idade02 = 39;
//		int idade03 = 19;
//		int idade04 = 69;
//		int idade05 = 59;

	}

}
