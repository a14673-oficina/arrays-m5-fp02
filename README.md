# fp02 - Formulário de Compras e Notas

## Português (Portugal)

### 📘 Descrição Geral
O projeto **fp02** é um formulário HTML que recolhe dados para duas funcionalidades:  
uma **Lista de Compras** e uma **Lista de Notas**.  
Os dados são enviados para o ficheiro PHP **`lista.php`**, que os processa e apresenta o resultado.

---

### 🔧 Funcionalidades Principais

#### 1. Lista de Compras
- Recolhe 5 itens de texto (`item1` a `item5`).
- Os itens são enviados para o PHP que os apresenta em lista.

#### 2. Lista de Notas
- Recolhe 5 valores numéricos (`nota1` a `nota5`).
- Validação HTML: `min="0"` e `max="20"`.
- O ficheiro PHP:
  - apresenta as notas,
  - calcula a média,
  - exibe o resultado final.

#### 3. Submissão de Formulário
- Método: **POST**
- Destino: **`lista.php`**

---

## 📂 Estrutura do Projeto

| Ficheiro     | Descrição |
|--------------|-----------|
| `form.html`  | Formulário HTML com campos para 5 itens e 5 notas |
| `lista.php`  | Script PHP que lê dados usando `$_POST`, imprime listas e calcula a média |

---

## 🧠 Explicação do Funcionamento do `lista.php`

### 📥 1. Receção dos dados
```php
$item1 = $_POST['item1'];
$nota1 = $_POST['nota1'];

### ✔️ Nota
Este README.md foi montado automaticamente a partir do ficheiro PHP que forneceste.

