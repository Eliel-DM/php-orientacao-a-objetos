# php-orientacao-a-objetos

[CURSO_PHP_ALURA] Fundamentos e prática de Programação Orientada a Objetos em PHP, abordando classes, objetos, encapsulamento, herança e polimorfismo.

Repositório de estudos com exercícios práticos e o projeto **ScreenMatch**, desenvolvidos durante o curso de Programação Orientada a Objetos com PHP da Alura.

Certificado de conclusão: [https://cursos.alura.com.br/certificate/25955d65-29b4-4f12-b58f-5a7f9e19fa71](https://cursos.alura.com.br/certificate/25955d65-29b4-4f12-b58f-5a7f9e19fa71)

## Índice

- [Sobre o projeto](#sobre-o-projeto)
- [Tecnologias](#tecnologias)
- [Pré-requisitos](#pré-requisitos)
- [Estrutura de pastas](#estrutura-de-pastas)
- [Exercícios](#exercícios)
- [Projeto ScreenMatch](#projeto-screenmatch)
- [Como executar](#como-executar)
- [Conceitos abordados](#conceitos-abordados)
- [Contribuição](#contribuição)

## Sobre o projeto

O repositório reúne a evolução dos estudos de Programação Orientada a Objetos em PHP, desde encapsulamento básico até herança, polimorfismo, enums e propriedades `readonly`. Além dos exercícios numerados, contém o projeto **ScreenMatch**, uma pequena aplicação de catálogo de filmes e séries usada para praticar modelagem de classes, avaliações e cálculo de duração de maratona.

## Tecnologias

- **PHP** (linguagem principal)
- **HTML** (formulário do ScreenMatch em `public/`)
- **JSON** (persistência simples de dados via `file_put_contents` / `json_decode`)

Não há gerenciador de dependências (não há `composer.json`) — o código é executado diretamente pelo interpretador PHP, usando `require` / `require_once` para incluir arquivos.

> **Observação:** o uso de `enum` (`Genero`, `TiposDeContas`) exige **PHP 8.1 ou superior**.

## Pré-requisitos

- PHP **8.1+** instalado e disponível no `PATH`
- (Opcional) Servidor embutido do PHP para a parte web do ScreenMatch
- Git, caso queira clonar o repositório

Verifique a versão instalada:

```bash
php -v
```

## Estrutura de pastas

```text
php-orientacao-a-objetos/
├── exercicios01/
│   ├── Exercicio01.php        # Classe Conta (encapsulamento do saldo)
│   └── index.php              # Script de teste da Conta
├── exercicios02/
│   ├── Conta.php              # Conta com readonly + promoção de construtor
│   ├── TiposDeContas.php      # Enum de tipos de conta
│   └── index.php              # Script de teste (enum, readonly, taxas)
├── exercicio03/
│   ├── ContaBancaria.php      # Classe base (depositar, sacar, consultarSaldo)
│   ├── ContaCorrente.php      # Subclasse com tarifas (herança/polimorfismo)
│   └── index.php              # Script de teste com tarifas
├── screen-match/
│   ├── antigo.php             # Versão inicial (procedural)
│   ├── importar.php           # Leitura de filme.json
│   ├── index.php              # Demonstração das classes de modelo
│   ├── filme.json             # Dados persistidos
│   ├── public/
│   │   ├── index.html         # Formulário de cadastro/exportação
│   │   ├── exporta-arquivo.php
│   │   ├── sucesso.php
│   │   └── filme.json
│   └── src/
│       ├── funcoes.php
│       ├── Calculos/
│       │   └── CalculadoraDeMaratona.php
│       └── Modelo/
│           ├── Titulo.php
│           ├── Filme.php
│           ├── Serie.php
│           └── Genero.php
└── README.md
```

## Exercícios

### `exercicios01` — Encapsulamento

A classe `Conta` mantém o saldo privado, permitindo alteração apenas por meio de métodos. Titular e número da conta são acessados por getters/setters.

```bash
php exercicios01/index.php
```

### `exercicios02` — Enum, readonly e construtor

A classe `Conta` usa **promoção de construtor** com propriedades `readonly` (`nomeDoTitular`, `tipoDeConta`) e um `enum TiposDeContas { corrente; investimento; poupanca; universitatio; }`. O método `calcularTaxas()` informa se o tipo de conta possui taxas (corrente e investimento **têm** taxas; poupança e universitária **não têm**), e `depositar()` valida valor mínimo maior que R$ 1.

```bash
php exercicios02/index.php
```

### `exercicio03` — Herança e polimorfismo

`ContaCorrente` estende `ContaBancaria` e sobrescreve `sacar()` para aplicar uma tarifa por saque, além de implementar `cobrarTarifaMensal()`. Contas marcadas como `pessoaComDeficiencia` são isentas de tarifas.

Constantes definidas em `ContaCorrente`:

| Constante             | Valor |
| --------------------- | ----- |
| `VALOR_TARIFA`        | 5     |
| `VALOR_TARIFA_MENSAL` | 20    |

```bash
php exercicio03/index.php
```

## Projeto ScreenMatch

Modela títulos de um catálogo de streaming:

- `Titulo` (classe base) — nome, ano de lançamento, gênero (todos `readonly`), notas privadas e cálculo de `media()`. Define `duracaoEmMinutos()` como valor padrão `0`.
- `Filme` (herda `Titulo`) — acrescenta `duracaoEmMinutos`.
- `Serie` (herda `Titulo`) — temporadas, episódios por temporada e minutos por episódio; `duracaoEmMinutos()` = temporadas × episódios × minutos.
- `Genero` (enum) — `Acao`, `Comeia`, `Terror`, `SuperHeroi`, `Drama`.
- `CalculadoraDeMaratona` — soma a duração de vários títulos via `inclui()` e devolve o total com `duracao()`.

Demonstração via linha de comando:

```bash
php screen-match/index.php
```

Leitura dos dados gravados em JSON:

```bash
php screen-match/importar.php
```

### Formulário web (opcional)

A pasta `public/` contém um formulário HTML que envia os dados para `exporta-arquivo.php`, que grava um `filme.json` e redireciona para `sucesso.php`, que exibe os dados cadastrados.

Para executar com o servidor embutido do PHP, a partir da raiz do projeto:

```bash
php -S localhost:8000 -t screen-match/public
```

Depois acesse `http://localhost:8000/` no navegador.

> **Atenção:** o formulário grava e lê arquivos (`filme.json`) no diretório de execução e não possui tratamento de erros/segurança robusto — é um exemplo didático, não destinado a uso em produção.

## Como executar

Cada pasta contém um `index.php` independente. Não é necessária instalação de dependências. Exemplos:

```bash
# Exercícios
php exercicios01/index.php
php exercicios02/index.php
php exercicio03/index.php

# Projeto ScreenMatch (CLI)
php screen-match/index.php
php screen-match/importar.php
```

## Conceitos abordados

- Classes, objetos, atributos e métodos
- Encapsulamento (`private`, getters/setters)
- Construtores e promoção de propriedades (`__construct`)
- Herança (`extends`, `parent::`)
- Polimorfismo e sobrescrita de métodos
- `enum` (PHP 8.1+)
- Propriedades `readonly` e parâmetros nomeados
- Tipos de retorno e type hints
- `match` e funções
- Persistência simples em JSON (`json_encode` / `json_decode` / `file_*`)

## Contribuição

Repositório de estudos pessoal. Contribuições não são esperadas, mas sugestões são bem-vindas via issues.

---

> Projeto desenvolvido como parte do curso **PHP: Programação Orientada a Objetos** da [Alura](https://www.alura.com.br/). Certificado de conclusão: [https://cursos.alura.com.br/certificate/25955d65-29b4-4f12-b58f-5a7f9e19fa71](https://cursos.alura.com.br/certificate/25955d65-29b4-4f12-b58f-5a7f9e19fa71).

---

> **Observação:** este README foi gerado por um modelo de inteligência artificial (**deepseek/deepseek-v4.1-flash**). O conteúdo pode conter imprecisões; confira as informações diretamente no código-fonte do projeto.
