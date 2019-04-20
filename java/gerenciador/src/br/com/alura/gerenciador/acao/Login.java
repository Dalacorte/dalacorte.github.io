package br.com.alura.gerenciador.acao;

import java.io.IOException;

import javax.servlet.ServletException;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import javax.servlet.http.HttpSession;

import br.com.alura.gerenciador.modelo.Banco;
import br.com.alura.gerenciador.modelo.Usuario;

public class Login implements Acao {

    @Override
    public String executa(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {

        String login = request.getParameter("login");
        String senha = request.getParameter("senha");

        System.out.println("Logando " + login);

        Banco banco = new Banco();
        Usuario usuario = banco.verificacao(login, senha);
        if(usuario != null) {
            HttpSession sessao = request.getSession();
            sessao.setAttribute("usuarioLogado", usuario);
        	System.out.println("Usuario existe");
            return "redirect:entrada?acao=ListaEmpresa";
        } else {
        	return "redirect:entrada?acao=LoginForm";
        }

    }

}