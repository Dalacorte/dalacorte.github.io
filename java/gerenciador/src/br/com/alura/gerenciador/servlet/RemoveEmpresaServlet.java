package br.com.alura.gerenciador.servlet;

import java.io.IOException;

import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

import br.com.alura.gerenciador.modelo.Banco;

/**
 * Servlet implementation class RemoveEmpresaServlet
 */
@WebServlet("/removeEmpresa")
public class RemoveEmpresaServlet extends HttpServlet {
	private static final long serialVersionUID = 1L;
       
    /**
     * @see HttpServlet#HttpServlet()
     */
    public RemoveEmpresaServlet() {
        super();
        // TODO Auto-generated constructor stub
    }

	/**
	 * @see HttpServlet#doGet(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		// TODO Auto-generated method stub
		
		String paramId = request.getParameter("id");
		Integer id = Integer.valueOf(paramId);
		
		System.out.println(id);
		
		Banco banco = new Banco();
		banco.removeEmpresa(id);
		
		response.sendRedirect("listaEmpresa");
		
	}

}
