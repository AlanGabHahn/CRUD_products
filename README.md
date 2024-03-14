# API CRUD de Produtos

Esta é uma API para realizar operações CRUD (Create, Read, Update, Delete) na tabela de produtos.

## Recursos Disponíveis

### Listar Todos os Produtos

Endpoint:
```
GET /api/products
```

Descrição:
Retorna uma lista de todos os produtos cadastrados.

### Obter um Produto Específico

Endpoint:
```
GET /api/products/{id}
```

Descrição:
Retorna os detalhes de um produto específico com base no ID fornecido.

### Criar um Novo Produto

Endpoint:
```
POST /api/products
```

Descrição:
Cria um novo produto com base nos dados fornecidos.

### Atualizar um Produto Existente

Endpoint:
```
PUT /api/products/{id}
```

Descrição:
Atualiza os detalhes de um produto existente com base no ID fornecido.

### Excluir um Produto Existente

Endpoint:
```
DELETE /api/products/{id}
```

Descrição:
Exclui um produto existente com base no ID fornecido.

## Formato dos Dados

### Produto

```json
{
    "id": 1,
    "name": "Nome do Produto",
    "description": "Descrição do Produto",
    "price": 10.50,
    "quantity": 20,
    "created_at": "2024-03-13 12:00:00",
    "updated_at": "2024-03-13 12:00:00"
}
```

## Exemplos de Requisições

### Listar Todos os Produtos

**Request:**
```
GET /api/products
```

**Response:**
```json
[
    {
        "id": 1,
        "name": "Produto 1",
        "description": "Descrição do Produto 1",
        "price": 99.99,
        "quantity": 15,
        "created_at": "2024-03-13 12:00:00",
        "updated_at": "2024-03-13 12:00:00"
    },
    {
        "id": 2,
        "name": "Produto 2",
        "description": "Descrição do Produto 2",
        "price": 49.99,
        "quantity": 20,
        "created_at": "2024-03-13 12:00:00",
        "updated_at": "2024-03-13 12:00:00"
    }
]
```

### Obter um Produto Específico

**Request:**
```
GET /api/products/1
```

**Response:**
```json
{
    "id": 1,
    "name": "Produto 1",
    "description": "Descrição do Produto 1",
    "price": 99.99,
    "quantity": 15,
    "created_at": "2024-03-13 12:00:00",
    "updated_at": "2024-03-13 12:00:00"
}
```

### Criar um Novo Produto

**Request:**
```
POST /api/products
```

**Body:**
```json
{
    "name": "Novo Produto",
    "description": "Descrição do Novo Produto",
    "price": 149.99,
    "quantity": 10
}
```

**Response:**
```json
{
    "message": "Produto criado com sucesso. ID: 3"
}
```

### Atualizar um Produto Existente

**Request:**
```
PUT /api/products/1
```

**Body:**
```json
{
    "name": "Produto 1 Atualizado",
    "description": "Nova descrição do Produto 1",
    "price": 109.99,
    "quantity": 20
}
```

**Response:**
```json
{
    "message": "Produto atualizado com sucesso. ID: 1"
}
```

### Excluir um Produto Existente

**Request:**
```
DELETE /api/products/2
```

**Response:**
```json
{
    "message": "Produto excluído com sucesso. ID: 2"
}
```

---

Esta é uma documentação básica para um CRUD simples da tabela `products` em uma API Laravel. Certifique-se de ajustar o código e os exemplos de acordo com os requisitos específicos da sua aplicação.