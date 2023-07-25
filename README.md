# DSIN
Apresentação do Projeto:

Olá, meu nome é João Henrique e irei apresentar o meu projeto para o processo seletivo da DSIN. O intuito do projeto era criar um sistema para um salão de beleza, onde os clientes poderiam ter um cadastro nesse sistema, criar e gerenciar seus agendamentos. Além disso, o intuito seria também facilitar a gestão do administrador do salão, pois ele teria um melhor acesso aos seus serviços, e agendamentos, podendo edita-los ou exclui-los. Para a criação do sistema utilizei a linguagem de programação PHP e banco de dados MySQL.

A primeira tela do sistema é a tela de Login:
![login](https://github.com/joao591/DSIN/assets/61203115/49828ee2-ce66-4131-b159-2012b8731767)

Nela o usuário consegue acessar com o seu e-mail e senha cadastrados. Para verificar se o usuário se encontrava cadastrado em nossa base de dados foi feito um SELECT na nossa tabela de usuários 
![Captura de tela 2023-07-24 220225](https://github.com/joao591/DSIN/assets/61203115/8c64547b-4c81-48a1-ad43-9e7527329845)

Se o cliente não possuir cadastro, ele pode estar realizando pela nossa página de Cadastro:
![Captura de tela 2023-07-24 220348](https://github.com/joao591/DSIN/assets/61203115/bb1c6aa0-5234-4006-b4e5-5cfa6e58f239)

Após inserir os dados é feito um INSERT na nossa tabela 'usuarios'                            
![Captura de tela 2023-07-24 220555](https://github.com/joao591/DSIN/assets/61203115/71926508-3d3a-4d14-bab0-6b17f10fff7d)

Tabela 'usuarios' atualizada:                                     
![Captura de tela 2023-07-24 220653](https://github.com/joao591/DSIN/assets/61203115/27bf7c20-0a7f-4a0e-b35f-314a61d7ccf3)

Após realizar o login é apresentada a tela de agendamentos do usuário, essa tela é apresentada através de um SELECT utilizando como parâmetro o id do usuário:
![Captura de tela 2023-07-24 221108](https://github.com/joao591/DSIN/assets/61203115/1aa26f78-b03e-4c18-99b2-5846f943f2ae)

Código:                                                                     
![Captura de tela 2023-07-24 221315](https://github.com/joao591/DSIN/assets/61203115/e75ba681-36df-42c6-ba11-338bb5fdf066)

Clicando no botão de "Criar Agendamento" o usuário consegue criar um novo agendamento na nossa base de dados:
![Captura de tela 2023-07-24 221444](https://github.com/joao591/DSIN/assets/61203115/0bcf42b2-738f-48f3-9564-21b5ecb36999)

Após inserir os dados é realizado um INSERT na nossa tabela 'agendamentos' da nossa base de dados:
![Captura de tela 2023-07-24 221601](https://github.com/joao591/DSIN/assets/61203115/9cb51624-6c05-43d0-b1ea-153b94255cc8)

Atualizando a página, já é possível visualizar o nosso agendamento:
![Captura de tela 2023-07-24 221752](https://github.com/joao591/DSIN/assets/61203115/4ee247ec-be15-45e1-ba0c-c1dae7450514)

Clicando no botão de 'Sair' no canto da página é possível realizar o log-out da página:                           
![Captura de tela 2023-07-24 221951](https://github.com/joao591/DSIN/assets/61203115/1b3507fc-bd4e-4f9f-b967-8f4e70c986f6)

É possível acessar o sistema como administrador da página, podendo gerenciar todos os agendamentos:
![Captura de tela 2023-07-24 222030](https://github.com/joao591/DSIN/assets/61203115/0b1b61b6-fdd3-4fd9-a9c8-22abd6d51c85)

Quando acessamos como administrador temos acesso a todos os agendamentos programados, inclusive o que acabamos de criar:
![Captura de tela 2023-07-24 222420](https://github.com/joao591/DSIN/assets/61203115/1fa12710-fb9d-4e73-bc1d-d906be33dc9d)

Podemos editar um determinado agendamento em nossa tabela clicando no ícone de 'lápis':
![Captura de tela 2023-07-24 222706](https://github.com/joao591/DSIN/assets/61203115/de053823-2edc-4e64-9504-5d6926088a90)

Após confirmar as alterações, é realizado um UPDATE em nossa tabela 'agendamentos' na nossa base de dados:
![Captura de tela 2023-07-24 222910](https://github.com/joao591/DSIN/assets/61203115/e40bae64-8ae0-47c4-828e-5b7db795beb7)

As alterações feitas:                                                                
![Captura de tela 2023-07-24 223015](https://github.com/joao591/DSIN/assets/61203115/e594fa82-364f-41bc-815d-65c94edd1e17)

Clicando no ícone de 'Lixeira' podemos realizar a exclusão do registro na tabela 'agendamentos' através do comando DELETE:
![Captura de tela 2023-07-24 223335](https://github.com/joao591/DSIN/assets/61203115/e2d9a0d2-af6c-494e-9e63-22db701a16a1)

Nossa tabela atualizada após a exclusão do agendamento 1 da nossa base de dados:                               
![Captura de tela 2023-07-24 223429](https://github.com/joao591/DSIN/assets/61203115/b2ee9a9a-c6cc-40f1-9652-77196074fb82)
.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  
 .                                                                                                                                                                                                                                                                                                                                                      
Esse foi o sistema desenvolvido para o processo seletivo da DSIN, espero que tenham gostado! 😊
