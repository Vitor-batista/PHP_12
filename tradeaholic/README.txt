A disposição das páginas, css e php está feita da seguinte forma:

/images     onde aparece as images.
/css        onde está o css utillizado.
/include    onde está o php de cada página em particular.
/utility    onde estão os requires que não fazem parte de uma página em específico.



Como funcionam as páginas:

index:
O index faz um form que tem 2 requires  que serão explicados mais à frente,caso se clique
no botão do login sera encaminhado para a pagina do index2 queapenas ira verificar se a conta
existe , caso não exista a variável "$_SESSION['not_found']" irá passar a ter umvalor  e o
programa é reencaminhado para o index, ao fazer novamente o form desta vezentra dentro de um
dos requires, o "index_nofounf.php" que irá verificar adicionar ao programa um texto a informar
que a conta não existe, o outro require sempre que entra no login irá verificar se existe a
variável  "$_SESSION['destroy']" caso exista o comando "session_destroy();" será executado e
todas as variáveis e cache armazenadas na sessão iram desaparrcer.

Register:
O register faz um form 1 requires  que será ativado se a variável "$_SESSION['match']" tiver
um valor, e irá dizer ao utilizador se as palavras passes estão diferentes, caso não estejam
o programa irá apenas redirecionar para o login, caso contrário a variável "$_SESSION['match']"
irá ser ativa e o programa será redirecionado para o register novamente, mas irá executar o
require que informa o utilizador que as palavra-passes não coincidem.

Inventory: 
No inventário faz-se um require que imprime a tabela do utilizador que está logado, também tem
um form que pega um valor numérico que é adicionado dinheiro atual. 

SELL:
No sell os itens são impressos e vêm com uma hiperligação que entra no ficheiro sell.php que
irá retirar o registo de compra do item da base de dados o que fará com que o item desapareça
do inventário do utilizador e irá também acrescentar  o dinheiro do  item ao dinheiro utilizador.

Buy: 
No buy faz a listagem dos itens com hiperligações tal como no sell, mas o item selecionado irá
ser registado na tabela do inventário em vez de ser apagado, também há um form para inserir
novos itens e também aparece um form sem inputs, mas com uma hiperligação que leva para a página
buy_delete.php que lista os itens também com hiperligações que levam para o buy_delete2.php
que verifica o item selecionado e tira-o da base de dados.

change: 
A página change é apenas para os admins e lista a tabela com os itens tal como no buy e o 
no sell(com giperligação) que redireciona para a página  change2.php e ira aparecer um form
para trocar os dados do item selecionado.

topnav:
a top nav tem em primeiro um div com o nome do site, tem depois uma aba com as hiperligações
para as outras paginas e depois tem um div em que aparece o nome do utilizador e o dinheiro,
aparece também uma hiperligação que manda para o index(login) e que ativa um require no login
que faz a session_destoy();.
