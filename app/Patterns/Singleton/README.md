#Problema
Imagine que você possui uma classe de conexão com o banco de dados, não é interessante existirem várias conexões,
e deve existir uma instância única em seu código que provê essa conexão para o seu sistema, evitando grande consumo de
memória por exemplo.

#Solução
O Singleton resolve isso de forma simples, ele irá prover uma única interface que permite acessar a classe e toda vez
que alguém acessar ele verifica se já existe uma instância, se não existir ele cria, caso contrário utiliza a existente.


