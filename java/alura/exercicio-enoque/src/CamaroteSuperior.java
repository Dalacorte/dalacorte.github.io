
public class CamaroteSuperior extends VIP {
	
    private double valorAdicional;
    private int localizacao;

    public double getValorAdicional() {
        return valorAdicional;
    }

    public void setValorAdicional(double adicionalcs) {
        this.valorAdicional = adicionalcs;
    }

    public int getLocalizacao() {
        return localizacao;
    }

    public void setLocalizacao(int localizacao) {
        this.localizacao = localizacao;
    }
    
    public double valorIngresso(){
        return this.valorIngresso+this.valorAdicional+this.valorAdicional;
    }
    
    public String tipoIngresso(){
        return ("Camarote Superior"+ localizacao);
    }
    
}

