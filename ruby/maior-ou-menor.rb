puts "Bem-voindo ao jogo da adivinhação"
puts "Qual é o seu nome?"
nome = gets

puts
puts 
puts

puts "Começaremos o jogo para voce, " + nome

puts "Escolhendo um número entre 0 e 200..."
numero_secreto = 175
puts "Escolhido... Que tal adivinhar o nosso número secreto?!"

puts
puts
puts

puts "Tentativa 1";
puts "Entre com o numero"
chute = gets

puts"Será que acertou?! Você chutou: "+ chute
puts chute.to_i == numero_secreto