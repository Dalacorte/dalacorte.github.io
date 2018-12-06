/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package PacoteJavaExercicio3;

/**
 *
 * @author Okarin
 */
public abstract class Estoque extends Produto {

    private int estoque;

    public int getEstoque() {
        return estoque;
    }

    public void setEstoque(int estoque) {
        this.estoque = estoque;
    }

    @Override
    public double getQuantidade() {

        if (estoque <= 0) {
            System.out.println("Não possui mais no estoque. \n Tipo do produto: "+ getTipoProduto());
        }else{
            estoque -= super.getQuantidade();
        }
        return this.estoque;
    }

}
