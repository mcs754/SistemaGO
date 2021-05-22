# SistemaGO
## Tecnologias utilizadas no desenvolvimento
O SistemaGO foi desenvolvido utilizando um microcomputador com o sistema operacional Microsoft Windows 10 Home Single Language versão 21H1 além das seguintes tecnologias:

* Utilizou-se PHP versão 7.4 (7.4.19) Non Thread Safe como linguagem de programação;

* Utilizou-se MySQL versão 8.0.25.0 como sistema gerenciador de banco de dados;

* Utilizou-se Composer versão 6.1.0 para gerenciar as dependências e baixar os pacotes úteis;

* Utilizou-se o Cmder versão 1.3.18.1106 como terminal de comandos;

* Utilizou-se o Microsoft Visual C++ 2015 versão 14.28.29914.0 necessário para o funcionamento do PHP na versão instalada;

* Utilizou a IDE de desenvolvimento Visual Studio Code na versão 1.56.2;

* Utilizou-se o framework Bootstrap versão 5.0.1.

## Implementação
Para compilar localmente o SistemaGO é necessário que seja instalado no seu computdor a linguagem PHP na versão descrita no parágrafo anterior, instalar também o servidor MySQL para que seja possível criar o banco de dados e se o seu computador tiver o sistema operacional Windows 10, é necessário instalar também o Microsoft Visual C++2015 na versão 14.28.299.14.0 ou pelo menos garantir que o seu computador já o tenha para evitar erros no PHP.

Após a instalação, apenas rode um servidor PHP na mesma pasta que você salvou o SistemaGO. Para rodar o servidor é muito simples basta digitar os seguintes comandos no terminal de comandos do seu computador:
`php -S localhost:8080`

Após isso se você conseguir abrir o SistemaGO no seu navegador, pode ser que ele ainda não funcione pois ainda falta criar o banco de dados utilizando o MySQL. Os scripts estão todos prontos basta executá-los e os mesmos estão salvos em SistemaGO/Database/sistemago.sql. É importante lembrar que a minha senha de acesso ao banco de dados é *123456* e você deve atualizar o arquivo contendo esta senha se a senha que você configurou para acessar o seu sgbd for diferente. O arquivo contendo a senha está salva em SistemaGO/App/DAO/Conexao.php e lá eu deixei comentários explicando detalhes para alterar a senha.

## Contato
[Instagram](https://www.instagram.com/marcosvha/)

[Whatsapp](https://api.whatsapp.com/send?phone=5547991768278)

[E-mail](mailto:mcs754@gmail.com)