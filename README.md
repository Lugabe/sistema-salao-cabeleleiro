

<h1 align="center">Sistema de cadastro de salão de beleza criado por Luis Gabriel. </h1>
<br>
<h3>Crei este sistema de cadastro conforme me foi solicitado no desafio técnico da DSIN. Não deu tempo de finalizar por completo mas consegui finalizar 80% do projeto.</h3> <br>
<H2>Tecnólogias utilizadas:</H2>
<ul>
  <li> PHP 8.2.8</li>
  <li> HTML 5</li>
  <li> CSS 3</li>
  <li> MYSQL</li>
  <li> BOOTSTRAP 5</li>
</ul>

<H2 align="center"> INSTRUÇÕES PARA UTILIZAR O SISTEMA:</H2>
<p>É necessário ter instalado na máquina o php em sua ultima versão, para isto é necessário acessar o site official do php e fazer o download</p>
<p>Caso o seu sistema operacional seja o Windows entre neste link e faça o download conforme os bits do seu windows.</p>
<a href="https://windows.php.net/download#php-8.2">Windows</a>
<br>
<br>
<p>Para outros sistemas operacionais acesse o link abaixo:</p>
<a href="https://www.php.net/downloads.php">Outras versões</a>
<br>
<br>
<h2 align="center">BANCO DE DADOS:</h2>
<br>
<p>Utilizei o Mysql para guardar os dados, mas é possível utilizar qualquer banco de dados desde que seja SQL</p>
<br>
<h2>Comandos para crianção do banco de dados e das tabelas.</h2>
<p>Utileze o comando : <br> CREATE DATABASE `dbagendador` <br> Para criar o banco de dados.</p>
<br>
<h4>Após ter criado o banco de dados com o nome: <br>"dbagendador" <br>Utilize o proximo comando para criar a tabela dentro do banco de dados: </h4>
<br>

<p>CREATE TABLE `tbcontatos` (
  `idContato` int NOT NULL AUTO_INCREMENT,
  `nomeContato` varchar(200) NOT NULL,
  `emailContato` varchar(100) NOT NULL,
  `telefoneContato` varchar(50) NOT NULL,
  `dataAgendamento` date NOT NULL,
  `horarioAgendamento` varchar(10) NOT NULL,
  `servico` varchar(100) NOT NULL,
  `valorServico` float NOT NULL,
  PRIMARY KEY (`idContato`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
  
 </p>
<br>
<h2 align="center"> O seu banco deverá ficar assim: </h2>

![image](https://github.com/Lugabe/sistema-salao-cabeleleiro/assets/119985795/db19b5c3-848b-4859-953a-a8d3c6f41482)


<br>
<br>
<H2 align="center">Iniciando o servidor do site</H2>
<p>Dentro da sua IDE  vá no terminal de comando e utilize o comando: <br>  php -S localhost:8080 <br> para que o servidor do site fique online. Após ter subido o servidor é só acessar o endereço : <br>http://localhost:8080/index.php/index.php?menuop=home <br> e assim poderá testar o site! </p>

<h2>Para duvidas me chamar no contato abaixo:</h2>
<a href="https://www.linkedin.com/in/luis-gabriel-bernardi/">Linkedin</a>
