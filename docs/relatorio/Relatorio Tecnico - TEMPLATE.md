# Informações do Projeto

......  PROJETO EULER ......

......  SISTEMAS DE INFORMAÇÂO ......

......  PARTICIPANTES ......

 Os membros do grupo são: 
 * Rafael Sanzio e Silva
 * Matheus Felipe da Silva
 * Thiago Caetano Dantas
 * Lucas Pereira de Souza
 * Pedro Henrique Resende Menezes

# Estrutura do Documento

- [Informações do Projeto](#informações-do-projeto)
  - [Participantes](#participantes)
- [Estrutura do Documento](#estrutura-do-documento)
- [Introdução](#introdução)
  - [Problema](#problema)
  - [Objetivos](#objetivos)
  - [Justificativa](#justificativa)
  - [Público-Alvo](#público-alvo)
- [Especificações do Projeto](#especificações-do-projeto)
  - [Personas e Mapas de Empatia](#personas-e-mapas-de-empatia)
  - [Histórias de Usuários](#histórias-de-usuários)
  - [Requisitos](#requisitos)
    - [Requisitos Funcionais](#requisitos-funcionais)
    - [Requisitos não Funcionais](#requisitos-não-funcionais)
  - [Restrições](#restrições)
- [Projeto de Interface](#projeto-de-interface)
  - [User Flow](#user-flow)
  - [Wireframes](#wireframes)
- [Metodologia](#metodologia)
  - [Divisão de Papéis](#divisão-de-papéis)
  - [Ferramentas](#ferramentas)
  - [Controle de Versão](#controle-de-versão)
- [**############## SPRINT 1 ACABA AQUI #############**](#-sprint-1-acaba-aqui-)
- [Projeto da Solução](#projeto-da-solução)
  - [Tecnologias Utilizadas](#tecnologias-utilizadas)
  - [Arquitetura da solução](#arquitetura-da-solução)
- [Avaliação da Aplicação](#avaliação-da-aplicação)
  - [Plano de Testes](#plano-de-testes)
  - [Ferramentas de Testes (Opcional)](#ferramentas-de-testes-opcional)
  - [Registros de Testes](#registros-de-testes)
- [Referências](#referências)


# Introdução

## Problema

A aplicação busca resolver a falta de funcionalidades e versatilidade do site descontinuado de nossa beneficiaria. Feito inicialmente para promover produtos e portifólios autorais do ramo artístico, agora busca continuidade para hospedagem. Para isso, buscamos reduzir custos, atualizar o site de uma Artista e Aromaterapeuta  

## Objetivos

O trabalho de extensão tem como objetivo expandir a visibilidade e a acessibilidade dos serviços oferecidos pela professora de artes Kelly Fonseca, que se incluem como Aromaterapia, arte visual e fotografia, além de realizar trabalhos para caridade e serviços para igreja. Com interesses em relações de pertencimento que estão na memória, no corpo e no espaço. O site terá como funcionalidades a exibição de obras em formato de blog, venda de cosméticos e séries de diversas fotografias e desenhos entre outros, exposições que esteve e estará presente e uma aba que descreve todo seu portfólio, cursos e uma pequena biografia.

## Justificativa

......  COLOQUE AQUI O SEU TEXTO ......

> Descreva a importância ou a motivação para trabalhar com esta aplicação
> que você escolheu. Indique as razões pelas quais você escolheu seus
> objetivos específicos ou as razões para aprofundar em certos aspectos
> do software.
> 
> O grupo de trabalho pode fazer uso de questionários, entrevistas e
> dados estatísticos, que podem ser apresentados, com o objetivo de
> esclarecer detalhes do problema que será abordado pelo grupo.
>
> **Links Úteis**:
> - [Como montar a justificativa](https://guiadamonografia.com.br/como-montar-justificativa-do-tcc/)

## Público-Alvo

Podemos concluir de forma textual que nosso público alvo se concentra em:

* Amantes de arte;

* Pessoas com problemas físicos ou mentais que buscam tratamento;

* Pessoas que buscam inspiração artística;

* Interessados em comprar produtos de arte ou/e aromaterapia

Através do **Mapa de StakeHolders** podemos ter essa visão:

![Mapa de Stakeholders](imagens/Mapa_StakeHolders.jpg)

# Especificações do Projeto

Nessa sessão entraremos em detalhes sobre o usuário que terá acesso ao site, sobre toda a experiência que o mesmo terá sob diferentes pontos de vista ou casos de usos. Falaremos também sobre todas as funções que o sistema deve ser capaz de proporcionar, isso é, conforme os objetivos e problemas então estabelecidos. Por fim, uma visualização prática do que foi desenvolvido por via de interfaces protótipadas, meio que permite técnicas de design sem envolvimento de código ou programa de compilação.

## Personas e Mapas de Empatia

### Persona 1
![Persona 1](images/Persona1)
![Persona 1 - Mapa de Empatia](images/Persona1-Empatia)

### Persona 2
![Persona 2](images/Persona2)
![Persona 2 - Mapa de Empatia](images/Persona2-Empatia)

### Persona 3
![Persona 3](images/Persona3)
![Persona 3 - Mapa de Empatia](images/Persona3-Empatia)

## Histórias de Usuários

Com base na análise das personas forma identificadas as seguintes histórias de usuários:

|EU COMO... `PERSONA`| QUERO/PRECISO ... `FUNCIONALIDADE` |PARA ... `MOTIVO/VALOR`                 |
|--------------------|------------------------------------|----------------------------------------|
|Professora  | Velas artesanais que tranquilizem a mente            | Melhorar o ambiente de sala de aula |
|Tatuador       | Alterar permissões                 | Permitir que possam administrar contas |

## Requisitos

As tabelas que se seguem apresentam os requisitos funcionais e não funcionais que detalham o escopo do projeto:

### Requisitos Funcionais

|ID     | Descrição do Requisito  | Prioridade |
|------ |-----------------------------------------|----|
|RF-001 | Banco de Dados | ALTA | 
|RF-002 | Sistema de compras | ALTA |
|RF-003 | Página para detalhes dos produtos  | ALTA |
|RF-004 | Página para perfil da conta | ALTA |
|RF-005 | Menu de produtos/produções | MÉDIA |
|RF-006 | Página de Carrinho de compras  | ALTA |
|RF-007 | Tela de sobre  | MÉDIA |


### Requisitos não Funcionais

|ID     | Descrição do Requisito  |Prioridade |
|-------|-------------------------|----|
|RNF-001| Escalabilidade | ALTA | 
|RNF-002| Usabilidade |  MÉDIA | 
|RNF-003| Confiabilidade |  ALTA | 
|RNF-004| Portabilidade|  BAIXA | 


## Restrições

O projeto está restrito pelos itens apresentados na tabela a seguir.

|ID| Restrição                                             |
|--|-------------------------------------------------------|
|01| O projeto deverá ser entregue até o final do semestre |
|02| Não pode ser desenvolvido um módulo de backend        |
|03| 

# Projeto de Interface

As principais interfaces foram desenvolvidas do projeto se tratam das que convergem entre as áreas de artes e de aromaterapia. Responsáveis por permitir que as duas atividades caraácteristicas da benefíciaria consigam coexixtir no mesmo site, ainda sem desvalorizar um ao outro. Tal estratégia soma com as hitórias de usuários, graças ao objetivo de valorizar ambas áreas independente do clinete. Associado aos quesitos de confiabilidade e divulgação dos produtos, a interface busca tratar o usuário de forma pessoal, seja pela paleta de cores acolhedora ou através das informações realativas as obras e a própria beneficiária.

## User Flow

Sequência completa de telas que o usuário pode acessar no site em suas respectivas conexões:
![UserFlow](images/UserFlow.jpg)

## Wireframes

* Acesso completo e interativo pode ser feito através desse [link](https://www.figma.com/file/qE84wuzvtWN12kfAvU9sXg/WireFrame-Projeto-Euler?type=design&node-id=0%3A1&mode=design&t=XHy2fnJw74t7gdrS-1)

* Descrição tela por tela:
  * ![Telas de Pré-Menu](images/Pré-Menu.png) Pré-Menus
  * ![Telas de Menu](images/Menus.png) Menus
  * ![Telas de loja e detalhes do produto](images/Lojas.png) Lojas
  * ![Telas de sobre](images/Sobres.png) Sobres

......  INCLUA AQUI OS WIREFRAMES DAS TELAS DA APLICAÇÃO COM UM BREVE DESCRITIVO ......

# Metodologia

......  COLOQUE AQUI O SEU TEXTO ......

> Nesta parte do documento, você deve apresentar a metodologia 
> adotada pelo grupo, descrevendo o processo de trabalho baseado nas metodologias ágeis, 
> a divisão de papéis e tarefas, as ferramentas empregadas e como foi realizada a
> gestão de configuração do projeto via GitHub.
>
> Coloque detalhes sobre o processo de Design Thinking e a implementação do Framework Scrum seguido
> pelo grupo. O grupo poderá fazer uso de ferramentas on-line para acompanhar
> o andamento do projeto, a execução das tarefas e o status de desenvolvimento
> da solução.
> 
> **Links Úteis**:
> - [Tutorial Trello](https://trello.com/b/8AygzjUA/tutorial-trello)
> - [Gestão ágil de projetos com o Trello](https://www.youtube.com/watch?v=1o9BOMAKBRE)
> - [Gerência de projetos - Trello com Scrum](https://www.youtube.com/watch?v=DHLA8X_ujwo)
> - [Tutorial Slack](https://slack.com/intl/en-br/)

## Divisão de Papéis

A divisão de papéis feita está baseada em:


## Ferramentas

| Ambiente  | Plataforma              |Link de Acesso |
|-----------|-------------------------|---------------|
|Processo de Design Thinkgin  | Figma | [Acesso processo](https://www.figma.com/file/qE84wuzvtWN12kfAvU9sXg/WireFrame-Projeto-Euler?type=design&node-id=0%3A1&mode=design&t=XHy2fnJw74t7gdrS-1) | 
|Repositório de código | GitHub | [Acesso repositório](https://github.com/PSG-TIAPN-2022-1/psg-tiapn-2024-1-projeto-euler/tree/master) | 
|Protótipo Interativo | Figma | [Acesso protótipo](https://www.figma.com/proto/qE84wuzvtWN12kfAvU9sXg/WireFrame-Projeto-Euler?type=design&node-id=1-2&t=kOpakEQUeIKxzg9j-1&scaling=min-zoom&page-id=0%3A1&starting-point-node-id=1%3A2&mode=design) | 
|Editor de código | VS Code |  |
|Ferramenta de comunicação | Teams | Link privado  |
|Ferramenta de diagramação | Lucidchart | none |
|Plataforma de hospedagem | HostGator | none |

## Controle de Versão

......  COLOQUE AQUI O SEU TEXTO ......

Nesse quesito o projeto busca como referência as melhores estrtégias de versionamento e hospedágem em nosso repositório do GitHub. As branchs usadas modelam nomes profissionais usados na industria, tais como: "main", "unstable", "testing", "dev". Enquanto para a gerência dos issues, será usado as seguintes etiquetas: "bugfix","enchancement","feature". Os commits seralizados serão realizados com nomes descritivos quanto a suas reespectivas operações, de forma a destacar qual versão do cídigo se trata. Nas demais branch que não sejam a "main" é escrito todas mudanças feitas na versão, assim permitindo a caominicação direta do que foi feito e do que precisa ser feito no próprio arquivo.

_FIM DO SPRINT 1_

# Projeto da Solução

......  COLOQUE AQUI O SEU TEXTO ......

## Tecnologias Utilizadas

......  COLOQUE AQUI O SEU TEXTO ......

> Descreva aqui qual(is) tecnologias você vai usar para resolver o seu
> problema, ou seja, implementar a sua solução. Liste todas as
> tecnologias envolvidas, linguagens a serem utilizadas, serviços web,
> frameworks, bibliotecas, IDEs de desenvolvimento, e ferramentas.
> Apresente também uma figura explicando como as tecnologias estão
> relacionadas ou como uma interação do usuário com o sistema vai ser
> conduzida, por onde ela passa até retornar uma resposta ao usuário.
> 
> Inclua os diagramas de User Flow, esboços criados pelo grupo
> (stoyboards), além dos protótipos de telas (wireframes). Descreva cada
> item textualmente comentando e complementando o que está apresentado
> nas imagens.

## Arquitetura da solução

......  COLOQUE AQUI O SEU TEXTO E O DIAGRAMA DE ARQUITETURA .......

> Inclua um diagrama da solução e descreva os módulos e as tecnologias
> que fazem parte da solução. Discorra sobre o diagrama.
> 
> **Exemplo do diagrama de Arquitetura**:
> 
> ![Exemplo de Arquitetura](images/arquitetura-exemplo.png)


# Avaliação da Aplicação

......  COLOQUE AQUI O SEU TEXTO ......

> Apresente os cenários de testes utilizados na realização dos testes da
> sua aplicação. Escolha cenários de testes que demonstrem os requisitos
> sendo satisfeitos.

## Plano de Testes

......  COLOQUE AQUI O SEU TEXTO ......

> Enumere quais cenários de testes foram selecionados para teste. Neste
> tópico o grupo deve detalhar quais funcionalidades avaliadas, o grupo
> de usuários que foi escolhido para participar do teste e as
> ferramentas utilizadas.
> 
> **Links Úteis**:
> - [IBM - Criação e Geração de Planos de Teste](https://www.ibm.com/developerworks/br/local/rational/criacao_geracao_planos_testes_software/index.html)
> - [Práticas e Técnicas de Testes Ágeis](http://assiste.serpro.gov.br/serproagil/Apresenta/slides.pdf)
> -  [Teste de Software: Conceitos e tipos de testes](https://blog.onedaytesting.com.br/teste-de-software/)

## Ferramentas de Testes (Opcional)

......  COLOQUE AQUI O SEU TEXTO ......

> Comente sobre as ferramentas de testes utilizadas.
> 
> **Links Úteis**:
> - [Ferramentas de Test para Java Script](https://geekflare.com/javascript-unit-testing/)
> - [UX Tools](https://uxdesign.cc/ux-user-research-and-user-testing-tools-2d339d379dc7)

## Registros de Testes

......  COLOQUE AQUI O SEU TEXTO ......

> Discorra sobre os resultados do teste. Ressaltando pontos fortes e
> fracos identificados na solução. Comente como o grupo pretende atacar
> esses pontos nas próximas iterações. Apresente as falhas detectadas e
> as melhorias geradas a partir dos resultados obtidos nos testes.


# Referências

......  COLOQUE AQUI O SEU TEXTO ......

> Inclua todas as referências (livros, artigos, sites, etc) utilizados
> no desenvolvimento do trabalho.
> 
> **Links Úteis**:
> - [Formato ABNT](https://www.normastecnicas.com/abnt/trabalhos-academicos/referencias/)
> - [Referências Bibliográficas da ABNT](https://comunidade.rockcontent.com/referencia-bibliografica-abnt/)
