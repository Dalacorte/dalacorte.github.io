/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package desktop.login.load;

import desktop.main.Inicio;

/**
 *
 * @author archwinlinu
 */
public class ProgressBarCarregamento {

    public static void main(String[] args) throws InterruptedException {

        Carregamento carregamento = new Carregamento();

        for (int i = 0; i <= 100; i++) {

            Thread.sleep(40);
            carregamento.setVisible(true);
            carregamento.ProgressBar.setValue(i);

            if (i == 100) {

                Inicio inicio = new Inicio();
                inicio.setVisible(true);
                carregamento.setVisible(false);

            }

        }

    }

}
