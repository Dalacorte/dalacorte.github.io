package br.com.alura;

import java.util.ArrayList;
import java.util.Collection;
import java.util.HashSet;
import java.util.List;
import java.util.Set;

public class TestaAlunos {
	public static void main(String[] args) {

	    Set<String> alunos = new HashSet<>();
	    Collection<String> alun = new HashSet<>(); //
	    List<String> alunosEmLista = new ArrayList<>(alunos);
	    alunos.add("Rodrigo Turini");
	    alunos.add("Alberto Souza");
	    alunos.add("Nico Steppat");
	    alunos.add("Sergio Lopes");
	    alunos.add("Renan Saggio");
	    alunos.add("Mauricio Aniche");
	    
	    for (String aluno : alunos) {
	        System.out.println(aluno);
	    }
	    
	    alunos.forEach(aluno -> {
	    	System.out.println(aluno);
	    });
	    
	    boolean pauloEstaMatriculado = alunos.contains("Paulo Silveira");
	    System.out.println(pauloEstaMatriculado);
	    
	    System.out.println(alunos);    
	}
}
