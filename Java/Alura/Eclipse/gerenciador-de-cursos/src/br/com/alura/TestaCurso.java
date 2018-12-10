package br.com.alura;

import java.util.List;

public class TestaCurso {
	public static void main(String[] args) {
		Curso javaColecoes = new Curso("Dominando as colecoes do Java", "Paulo Silveira");

		javaColecoes.adiciona(new Aula("Trabalhando com ArrayList", 21));
		javaColecoes.adiciona(new Aula("Criando uma Aula", 20));
		javaColecoes.adiciona(new Aula("Modelando com colecoes", 24));

		// tentando adicionar da maneira "antiga". Podemos fazer isso? Teste:
		javaColecoes.getAulas().add(new Aula("Trabalhando com ArrayList", 21));
		List<Aula> aulas = javaColecoes.getAulas();
		
		System.out.println(javaColecoes.getAulas());
	}
}