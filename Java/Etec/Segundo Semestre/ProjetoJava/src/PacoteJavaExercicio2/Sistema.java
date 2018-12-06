/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package PacoteJavaExercicio2;

/**
 *
 * @author LAB
 */
public class Sistema extends Veiculo {

    void reservaVeiculo() {
        System.out.println("O veiculo estara disponivel na data X");
        System.out.println("Modelo do veiculo alugado: " + getTipoVeiculo());
    }

    void veiculoPresente() {
        System.out.println("Veiculo disponivel para aluguel: " + getTipoVeiculo());
    }

    @Override
    public void setTipoVeiculo(int tipoVeiculo) {
        if(getTipoVeiculo() == 3){
            System.out.println("O veiculo é um automovel pequeno");
        }
    }
    
}
