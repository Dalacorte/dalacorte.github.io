package br.com.alura.java.io.teste;

import java.io.Serializable;

/**
* Classe que representa um cliente no Bytebank.
*
*@author windyS
*@version 0.1
*/

public class Cliente implements Serializable { // classe cliente

	private static final long serialVersionUID = 9205117266306915548L; //serial da classe
	private String nome; // atributo
	private String cpf; // atributo
	private String profissao; // atributo

	public String getNome() { // pega um valor
		return nome; // acao do metodo
	}

	public void setNome(String nome) { // altera um valor
		this.nome = nome; // acao do metodo
	}

	public String getCpf() { // pega um valor
		return cpf; // acao do metodo
	}

	public void setCpf(String cpf) { // altera um valor
		this.cpf = cpf; // acao do metodo
	}

	public String getProfissao() { // pega um valor
		return profissao; // acao do metodo
	}

	public void setProfissao(String profissao) { // altera um valor
		this.profissao = profissao; // acao do metodo
	}

}
