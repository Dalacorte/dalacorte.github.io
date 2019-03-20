
public class Ingresso {
	
    protected double valorIngresso = 5;  
    
    public String imprimeValor(){
        return "Valor do ingresso: R$" + this.getValorIngresso();
    }

	public double getValorIngresso() {
		return valorIngresso;
	}

	public void setValorIngresso(double valorIngresso) {
		this.valorIngresso = valorIngresso;
	}
    
}
