# ListaDeHabitos
#Aplicação feita em PHP tirada do primeiro exemplo do livro "Programação para Web 1 | Prof. Laercio Metzner"

                                                            REQUISITOS

# 1º - A aplicação foi feita rodando sobre o conjunto do xampp versão 5.6.3-0. 
# não vi nenhum código em php ou comando sql que faça a aplicação rodar apenas nessa versão,
# aconselho o xampp pela simplicidade para correção de bugs e de alteração das configs do apache.
 
# 1.2 - Terão que ser feitas alterações nas configs do apache para que a aplicação funcione. 

#     a) Pare o serviço no xampp ou wampp e navegue até o  arquivo "php.ini" nele você irá procurar a seguinte condição "short_open_tag=off" 
#       você irá trocar para "short_open_tag=on".
      
#     b) Se no seu xampp der o erro 403 você irá editar o arquivo "httpd-xampp.conf" você irá encontrar essa parte:
			
			"<Directory "C:/xampp/phpMyAdmin">
				AllowOverride AuthConfig
				Require local
				ErrorDocument 403 /error/XAMPP_FORBIDDEN.html.var

			 <Directory>"
			 
			 
			 
#			ONDE DIZ "require local" VOCÊ TROCA POR "Require all granted".

#2º ERRO PID 4  | "erro: Port 80 in use by “Unable to open process” with PID 4!" | Esse erro acontece muito no windows 10, mas pode acontecer em outras versões do Windows.

 #  A) Solução um, pausar o serviço via {"cmd", prompt de comando do windows}, você irá abrir o cmd via "executar" ou pelo locarlizar, 
#	   OBS; EXECUTAR COMO ADMINISTRADOR.
#	   e irá digitar primeiro 'net stop w3svc' e depois esse 'net stop iisadmin'. pronto o aphache irá rodar na porta 80 sem problemas.

#	B) Solução dois, mudar a porta do apache, com o serviço parado você irá abrir o arquivo "httpd.conf", e irá procurar o texto que diz “listen 80” e irá trocar por “listen 8080”, pronto, o que irá mudar no seu projeto é que no fim do endereço dá página você terá que usar o ":8080"

#	C) SOLUÇÃO TRÊS, ESSA SOLUÇÃO SE MOSTROU EFICAZ NO WINDOWS 10, você irá abrir o "EXECUTAR" do Windows tanto faz pelo "localizar" quanto pelo
#    "Windows+R", depois digite "services.msc" , a tela serviços irá abrir, e nela você irá procurar o serviço "Serviço de Publicação da World 	#    Wide Web (W3SVC)", clicar  com botão direito, propriedades, escolha desabilitar, de ok, inicie o APACHE. 

	
