package br.com.alura.gerenciador.acao;

import java.io.IOException;
import java.text.SimpleDateFormat;
import java.util.Date;

import javax.servlet.ServletException;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

import br.com.alura.gerenciador.modelo.Banco;
import br.com.alura.gerenciador.modelo.Empresa;

public class AlteraEmpresa implements Acao {

    public String executa(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {

        System.out.println("altera empresa");

        String nomeEmpresa = request.getParameter("nome");
        String paramDataEmpresa = request.getParameter("data");
        String paramId = request.getParameter("id");
        Integer id = Integer.valueOf(paramId);

        Date dataAbertura = null;
        try {
            SimpleDateFormat sdf = new SimpleDateFormat("dd/MM/yyyy");
            dataAbertura = sdf.parse(paramDataEmpresa);
        } catch (Exception e) {
            throw new ServletException(e);
        }
        
        System.out.println(id);
        
        Banco banco = new Banco();
        Empresa empresa = banco.buscaEmpresa(id);
        empresa.setNome(nomeEmpresa);
        empresa.setDataAbertura(dataAbertura);

        return "redirect:entrada?acao=ListaEmpresa";
    } 
}