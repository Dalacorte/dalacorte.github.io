package br.com.alura.gerenciador.modelo;

import java.util.ArrayList;
import java.util.Iterator;
import java.util.List;

public class Banco {

	private static List<Empresa> lista = new ArrayList<>();
	private static List<Usuario> listaUsuario = new ArrayList<>();
	private static Integer chaveSequencial = 1;
	static {
		Empresa empresa = new Empresa();
		empresa.setId(chaveSequencial++);
		empresa.setNome("Facebook");
		Empresa empresa2 = new Empresa();
		empresa2.setId(chaveSequencial++);
		empresa2.setNome("Google");
		lista.add(empresa);
		lista.add(empresa2);
		
		Usuario user1 = new Usuario();
		user1.setLogin("java");
		user1.setSenha("123");
		Usuario user2 = new Usuario();
		user2.setLogin("js");
		user2.setSenha("123");
		listaUsuario.add(user1);
		listaUsuario.add(user2);
	}
	
	public void adiciona(Empresa empresa) {
		empresa.setId(chaveSequencial++);
		lista.add(empresa);
	}

	public List<Empresa> getEmpresas(){
		return Banco.lista;
	}

	public void removeEmpresa(Integer id) {
	    Iterator<Empresa> it = lista.iterator();

	    while(it.hasNext()) { 
	        Empresa emp = it.next();
	        if(emp.getId() == id ) {
	            it.remove();
	        }
	    }
		
//		for (Empresa empresa : lista) {
//			if(empresa.getId() == id) {
//				lista.remove(empresa);
//			}
//		}
	}

	public Empresa buscaEmpresa(Integer id) {
	    for (Empresa empresa: lista) { 
	        if(empresa.getId() == id)  {
	            return empresa;
	        }

	    }
	    return null;
	}

	public Usuario verificacao(String login, String senha) {
	    for(Usuario usuario : listaUsuario) {
	        if(usuario.ehIgual(login, senha)) { 
	            return usuario;

	        }
	    }
	    return null;
	}
	
}
