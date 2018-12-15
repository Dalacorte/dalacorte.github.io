package br.com.alura.java.io.teste;

import java.io.File;
import java.io.IOException;
import java.io.PrintStream;
import java.io.PrintWriter;

public class TesteEscritaPrintWriter {

	public static void main(String[] args) throws IOException {

		// Fluxo de Entrada com Arquivo
		// OutputStream fos = new FileOutputStream("lorem2.txt");
		// Writer osw = new OutputStreamWriter(fos);
		// Buff3eredWriter bw = new BufferedWriter(osw);

//		FileWriter fw = new FileWriter("lorem2.txt");
//		BufferedWriter bw = new BufferedWriter(fw);
//		BufferedWriter bw = new BufferedWriter(new FileWriter("lorem2.txt"));
		
		PrintStream ps = new PrintStream(new File("lorem2.txt", "UTF-8"));
//		PrintWriter pw = new PrintWriter(new File("lorem2.txt", "UTF-8"));
		ps.println("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod");
		ps.println("");
		ps.println("");
		ps.println("asfasdfsafdas dfs sdf asf assdﬂ");
		ps.close();

//		bw.write("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod");
//		bw.newLine();
//		bw.newLine();
//      fw.write(System.lineSeparator());
//      fw.write(System.lineSeparator());
//      fw.write("\r\n");
//      fw.write("\r\n");
//		bw.write("asfasdfsafdas dfs sdf asf assdﬂ");

//		bw.close();

	}
}