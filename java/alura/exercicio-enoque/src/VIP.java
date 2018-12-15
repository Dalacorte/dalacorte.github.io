
public class VIP extends Ingresso {

	protected double valorAdicional;

	public double getAdicional() {
		return valorAdicional;
	}

	public void setAdicional(double adicional) {
		this.valorAdicional = valorAdicional;
	}

	public double ImprimeValorVip() {
		return this.valorIngresso + this.valorAdicional;
	}

}
