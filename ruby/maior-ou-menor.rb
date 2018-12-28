# ruby is fun

=begin
	27
	Dezembro
	2018
=end

def da_boas_vindas
	puts "Bem-vindo ao jogo da adivinhação!"
	puts "Qual é o seu nome?"
	nome = gets
	puts "\n\n\n"
	puts "Começaremos o jogo para voce, " + nome
end

def sorteia_numero_secreto
	puts "Escolhendo um número entre 0 e 200..."
	sorteado = 175
	puts "Escolhido... Que tal adivinhar o nosso número secreto?!"
	return sorteado
end

def pede_um_numero(tentativa, limite_de_tentativas)
	puts "\n\n\n"
	puts "Tentativa " + tentativa.to_s + " de " + limite_de_tentativas.to_s
	puts "Entre com o número"
	chute = gets
	return chute
end

def verifica_se_acertou(numero_secreto, chute)
	acertou = numero_secreto == chute.to_i
	if acertou
		puts "Acertou!"
		return true
	end
	puts "Errou!"
	maior = numero_secreto > chute.to_i
	if maior
		puts "O número secreto é maior!"
	else
		puts "O número secreto é menor!"
	end
	false
end

da_boas_vindas
numero_secreto = sorteia_numero_secreto

limite_de_tentativas = 5

for tentativa in 1..limite_de_tentativas
	chute = pede_um_numero tentativa, limite_de_tentativas
	break if verifica_se_acertou numero_secreto, chute 
end 