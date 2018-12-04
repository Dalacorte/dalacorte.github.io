INSERT INTO tipolocal(descricao_tipolocal) values('Residencial');
INSERT INTO tipolocal(descricao_tipolocal) values('Comercial');
INSERT INTO tipolocal(descricao_tipolocal) values('Pessoal');

SELECT * FROM tipolocal;

INSERT INTO jogos(nome_jogo, descricao_jogo, genero_jogo, produtora_jogo) values('Snoopy', 'Jogo de ação com cachorro, fases', 'Ação', 'Top Games Kis');
INSERT INTO jogos(nome_jogo, descricao_jogo, genero_jogo, produtora_jogo) values('Super Mario', '', 'Ação', 'Top Games Kis');
INSERT INTO jogos(nome_jogo, descricao_jogo, genero_jogo, produtora_jogo) values('Copa do Mundo 2010 - Africa do Sul', 'Competição futebolística', 'Ação', 'Top Games Kis');
INSERT INTO jogos(nome_jogo, descricao_jogo, genero_jogo, produtora_jogo) values('FIFA', 'Simulação do EA Sports', 'Futebol', 'Top Games Kis');
INSERT INTO jogos(nome_jogo, descricao_jogo, genero_jogo, produtora_jogo) values('Homem Aranha', 'Versão TEEN', 'Ação', 'Top Games Kis');
INSERT INTO jogos(nome_jogo, descricao_jogo, genero_jogo, produtora_jogo) values('LestsLearn', 'Jogos para praticar inglês', 'Educativo', 'Top Games Kis');
INSERT INTO jogos(nome_jogo, descricao_jogo, genero_jogo, produtora_jogo) values('Capitão América', '', 'Ação', 'Top Games Kis');

SELECT * FROM jogos;

INSERT INTO videogame(modelo_videogame,ns_videogame) values('XBOX360','XB91054125');
INSERT INTO videogame(modelo_videogame,ns_videogame) values('Playstation 3 Slim','SO85E689');
INSERT INTO videogame(modelo_videogame,ns_videogame) values('Sony PSP','SOF582189');
INSERT INTO videogame(modelo_videogame,ns_videogame) values('Sony PS Vita','SOG782290');
INSERT INTO videogame(modelo_videogame,ns_videogame) values('Playstation 2 Slim','SO5A09999');
INSERT INTO videogame(modelo_videogame,ns_videogame) values('Nintendo Wii','NINFF0051486');

SELECT * FROM videogame;
INSERT INTO tipopessoa(descricao_tipopessoa) value ('Cliente');
INSERT INTO tipopessoa(descricao_tipopessoa) value ('Funcionario');


INSERT INTO pessoa(tipopessoa_idtipopessoa,nome_pessoa,rg_pessoa,cpf_pessoa) values ('1','Victor Dalacorte','1457955-8','11297520944');
INSERT INTO pessoa(tipopessoa_idtipopessoa,nome_pessoa,rg_pessoa,cpf_pessoa) values ('2','Giomar de Oliveira','2657945-8','26597520944');
INSERT INTO pessoa(tipopessoa_idtipopessoa,nome_pessoa,rg_pessoa,cpf_pessoa) values ('1','Bruno Correia','3978453-9','39874548407');
INSERT INTO pessoa(tipopessoa_idtipopessoa,nome_pessoa,rg_pessoa,cpf_pessoa) values ('2','Jonathan Almeida','3979459-9','39874528407');
INSERT INTO pessoa(tipopessoa_idtipopessoa,nome_pessoa,rg_pessoa,cpf_pessoa) values ('1','Ricardo Lopes','4587457-1','29874587915');


SELECT * FROM pessoa;

INSERT INTO cliente(pessoa_idpessoa,pai_cliente,mae_cliente,nick_cliente,senha_cliente) values ('3','','','bcorrea','159874');
INSERT INTO cliente(pessoa_idpessoa,pai_cliente,mae_cliente,nick_cliente,senha_cliente) values ('4','','','jalmeida','854789');


SELECT * FROM cliente;

INSERT INTO funcionario(pessoa_idpessoa,sexo,idade) values ('1','M','22');
INSERT INTO funcionario(pessoa_idpessoa,sexo,idade) values ('2','M','22');
INSERT INTO funcionario(pessoa_idpessoa,sexo,idade) values ('5','F','19');

SELECT * FROM funcionario;

INSERT INTO contato(tipolocal_idtipolocal,pessoa_idpessoa,telefone_contato,mail_contato) values ('3','1','1156662008','aaraujo@ig.com.br');
INSERT INTO contato(tipolocal_idtipolocal,pessoa_idpessoa,telefone_contato,mail_contato) values ('1','1','1156691587','alearaujo@uol.com.br');
INSERT INTO contato(tipolocal_idtipolocal,pessoa_idpessoa,telefone_contato,mail_contato) values ('3','2','1156698877','goliveira@terra.com.br');
INSERT INTO contato(tipolocal_idtipolocal,pessoa_idpessoa,telefone_contato,mail_contato) values ('3','3','11998770028','bcorrea@ig.com.br');
INSERT INTO contato(tipolocal_idtipolocal,pessoa_idpessoa,telefone_contato,mail_contato) values ('3','4','11998887900','jalmeida@bol.com.br');
INSERT INTO contato(tipolocal_idtipolocal,pessoa_idpessoa,telefone_contato,mail_contato) values ('3','5','1156637895','rlopes@hotmail.com.br');

SELECT * FROM contato;

INSERT INTO endereco(tipolocal_idtipolocal,pessoa_idpessoa,logradouro_endereco,numero_endereco,complemente_endereco,bairro_endereco,cep_endereco,cidade_endereco,estado_endereco) values ('3','1','Rua Demonte Risco','220','','Interlagos','04814-578','São Paulo','SP');
INSERT INTO endereco(tipolocal_idtipolocal,pessoa_idpessoa,logradouro_endereco,numero_endereco,complemente_endereco,bairro_endereco,cep_endereco,cidade_endereco,estado_endereco) values ('3','2','Rua Nascimento de Moraes','51','','Grajaú','04922-510','São Paulo','SP');
INSERT INTO endereco(tipolocal_idtipolocal,pessoa_idpessoa,logradouro_endereco,numero_endereco,complemente_endereco,bairro_endereco,cep_endereco,cidade_endereco,estado_endereco) values ('3','3','Praça Montes Claros','15','A','Progresso','04914-000','São Paulo','SP');
INSERT INTO endereco(tipolocal_idtipolocal,pessoa_idpessoa,logradouro_endereco,numero_endereco,complemente_endereco,bairro_endereco,cep_endereco,cidade_endereco,estado_endereco) values ('3','4','Av. Primavera','1010','','Primavera','04010-100','São Paulo','SP');
INSERT INTO endereco(tipolocal_idtipolocal,pessoa_idpessoa,logradouro_endereco,numero_endereco,complemente_endereco,bairro_endereco,cep_endereco,cidade_endereco,estado_endereco) values ('3','5','Rua Marinez','2','','Orion','04878-879','São Paulo','SP');

SELECT * FROM endereco;

INSERT INTO aluguel(funcionario_idfuncionario,videogame_idvideogame,cliente_idcliente,jogos_idjogos,valor_alugel,date_aluguel) values ('3','6','1','3','17.86','2004-01-20');
INSERT INTO aluguel(funcionario_idfuncionario,videogame_idvideogame,cliente_idcliente,jogos_idjogos,valor_alugel,date_aluguel) values ('3','6','1','3','17.86','2013-09-01');
INSERT INTO aluguel(funcionario_idfuncionario,videogame_idvideogame,cliente_idcliente,jogos_idjogos,valor_alugel,date_aluguel) values ('3','6','1','3','17.86','2013-01-04');
INSERT INTO aluguel(funcionario_idfuncionario,videogame_idvideogame,cliente_idcliente,jogos_idjogos,valor_alugel,date_aluguel) values ('1','1','2','1','19.5','2013-03-03');

SELECT * FROM aluguel;

SELECT Nome_Pessoa, CPF_Pessoa 
FROM Pessoa 
ORDER BY Nome_Pessoa;

SELECT * FROM endereco
ORDER BY bairro_endereco;

SELECT Nome_Pessoa
FROM Pessoa
WHERE tipopessoa_idtipopessoa = 2
ORDER by cpf_pessoa;

SELECT P.Nome_Pessoa,T.descricao_tipopessoa,P.cpf_pessoa
FROM Pessoa AS P JOIN tipopessoa AS T
ON P.tipopessoa_idtipopessoa = T.idtipopessoa
ORDER BY descricao_tipopessoa; 
 /*pessoa.tipopessoa_idtipopessoa = tipopessoa.idpessoa caso tenha o mesmo nome*/
/*p.tipopessoa_idtipopessoa = t.idpessoa (modo ideal)*/

SELECT p.nome_pessoa, e.logradouro_endereco, e.numero_endereco
FROM endereco e JOIN Pessoa p
ON e.pessoa_idpessoa = p.idpessoa
WHERE e.bairro_endereco = 'Interlagos'
ORDER BY p.nome_pessoa;


SELECT COUNT(idcliente)
FROM cliente;

/* SUM = SOMA / AVG = Media*/
SELECT SUM(valor_alugel) as total, AVG(valor_alugel) as media from aluguel;

SELECT p.nome_pessoa
FROM Pessoa p JOIN Cliente c 
ON p.idpessoa = c.pessoa_idpessoa
WHERE c.pai_cliente IS NULL AND c.mae_cliente IS NULL ;

SELECT Nome_pessoa FROM Pessoa
WHERE Nome_pessoa like'%i%' and tipopessoa_idtipopessoa = 2;
