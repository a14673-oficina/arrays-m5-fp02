# Projeto: Listas e Tabelas com PHP e HTML

## Descrição Geral
Este projeto é um exemplo simples de utilização de **HTML e PHP** para criar listas e tabelas dinâmicas. O usuário pode inserir dados através de um formulário HTML, e o PHP processa esses dados para apresentar:

- Uma lista de compras.
- Uma lista de notas e cálculo da média.
- Uma tabela com a classificação de cada nota.
- Uma tabela fixa com informações de uma turma.

O objetivo do projeto é praticar **arrays, loops e condicionais em PHP**, bem como a integração de formulários HTML.

---

## Funcionalidades

### 1. Formulário HTML
- Permite inserir até 5 itens de compras.
- Permite inserir até 5 notas (0 a 20).
- Botão de envio para processar os dados com PHP.

### 2. Processamento PHP
- Recebe os dados do formulário via `POST`.
- Cria uma **lista de compras** usando arrays e `foreach`.
- Cria uma **tabela fixa da turma** (nomes e idades) usando arrays associativos.
- Cria uma **lista de notas** e calcula a média.
- Classifica a média com base nos seguintes critérios:
  - Média < 10 → Reprovado
  - Média entre 10 e 13 → Satisfaz
  - Média entre 14 e 17 → Bom
  - Média entre 18 e 20 → Excelente
- Mostra os resultados em **listas e tabelas HTML**.

---

## Estrutura do Código

### HTML (`index.html`)
- `<form>` para enviar dados ao PHP (`lista.php`).
- Campos de texto para itens de compras.
- Campos numéricos para notas (0 a 20).
- Botão de envio.

### PHP (`lista.php`)
- Recebe dados do formulário via `$_POST`.
- Cria arrays para itens de compras e notas.
- Calcula média das notas.
- Classifica a média usando condicionais `if-elseif`.
- Mostra resultados em listas (`<ul>`) e tabelas (`<table>`).
- Exemplo de array associativo para armazenar informações de uma turma.

---

## Como Usar
1. Abra o arquivo `index.html` no navegador.
2. Preencha os campos do formulário:
   - Itens da lista de compras.
   - Notas dos alunos.
3. Clique em **Enviar**.
4. O PHP processará os dados e exibirá:
   - Lista de compras.
   - Lista de notas e média.
   - Classificação da média.
   - Tabela da turma.

---

## Pontos de Aprendizagem
- Manipulação de **arrays simples** e **arrays associativos** em PHP.
- Uso de **loops `foreach`** para percorrer arrays.
- Processamento de **formulários HTML** com PHP.
- Condicionais (`if-elseif`) para classificar dados.
- Exibição dinâmica de dados em **listas** e **tabelas HTML**.

---

## Melhorias Futuras
- Adicionar **validação de entradas** no formulário (campos obrigatórios, apenas números nas notas).
- Permitir a inserção dinâmica de qualquer número de itens e notas.
- Melhorar o layout com CSS para deixar mais visualmente agradável.
- Adicionar funcionalidades como **remover ou editar itens da lista**.

---

## Tecnologias Utilizadas
- HTML5
- PHP
- Arrays e loops (`foreach`) em PHP
- Condicionais (`if-elseif`) em PHP
- Tabelas e listas HTML

---

Feito como exercício de integração de HTML com PHP, focado em **arrays, loops e formulários**.
- Gerado pelo ChatGPT
