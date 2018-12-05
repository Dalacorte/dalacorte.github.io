using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Windows.Forms;

namespace Aula15_GridView
{
    public partial class Form1 : Form
    {
        string nome, tipo;
        double valor;


        public Form1()
        {
            InitializeComponent();
        }

        private void Limpar()
        {

            txtNome.Clear();
            cboxTipo.Text = "Selecione";
            txtValor.Clear();
            pctFoto.Image = Properties.Resources._1;
            foto = false;

        }


        private void btnCadastrar_Click(object sender, EventArgs e)
        {

            string nome, tipo;
            double valor;
            nome = txtNome.Text;
            tipo = cboxTipo.Text;
            valor = double.Parse(txtValor.Text);

            //adicionar valores a gridview

            dataGridView.Rows.Add(nome, valor, tipo, foto);
            Limpar();

            //contar os itens do data grid

        }

        private void btnExcluir_Click(object sender, EventArgs e)
        {
            //dataGridView.Rows.RemoveAt(1);
            dataGridView.Rows.Remove(dataGridView.CurrentRow);

        }

        private void txtNome_TextChanged(object sender, EventArgs e)
        {

        }
        bool foto = false;
        private void btnFoto_Click(object sender, EventArgs e)
        {
            if (openFileDialog1.ShowDialog() == DialogResult.OK)
            {
                //Carregar a foto do produto
                pctFoto.Image = Image.FromFile(openFileDialog1.FileName);
                foto = true;
            }

        }

        private void Produto_Enter(object sender, EventArgs e)
        {

        }

        private void textBox1_TextChanged(object sender, EventArgs e)
        {

        }
    }
}