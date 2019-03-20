
public class CamaroteInferior extends VIP{

    private double localizacao;

    public double getLocalizacao() {
        return localizacao;
    }

    public void setLocalizacao(double localizacao) {
        this.localizacao = localizacao;
    }
    
    public String tipoIngresso(){
        return ("Camarote Inferior " + localizacao);
    }
	
}
