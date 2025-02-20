# Sistema de Gestão de Medidas Protetivas

Este sistema foi desenvolvido para auxiliar o 17° Batalhão da Polícia Militar de Guanambi no controle e acompanhamento de mulheres com medidas protetivas. O sistema permite o cadastro, gerenciamento e acompanhamento de assistidas, medidas protetivas e agressores.

## 📌 Funcionalidades Implementadas
### 👩‍🦰 Assistidas
- CRUD completo de assistidas (Cadastro, Listagem, Edição e Exclusão).
- Exibição detalhada das informações de cada assistida.
- Relação com medidas protetivas.

### 👨‍⚖️ Agressores
- CRUD completo de agressores.
- Exibição detalhada das informações de cada agressor.
- Relação com medidas protetivas.

### 📜 Medidas Protetivas
- CRUD completo de medidas protetivas.
- Relação com assistida e agressor.
- Exibição de detalhes da medida protetiva.

### 🔄 Relacionamentos das tabelas
- **Assistida → Medida Protetiva** (Uma assistida pode ter várias medidas protetivas).
- **Agressor → Medida Protetiva** (Um agressor pode ter várias medidas protetivas).

### 🎨 Estilização
- Uso do **Bootstrap 5** para estilização das páginas.
- Sidebar responsiva com botão para abrir/fechar o menu.

## 🚀 Tecnologias Utilizadas
- **Laravel** (Framework PHP para backend)
- **Bootstrap 5** (Framework CSS para estilização)
- **Blade** (Template Engine do Laravel)
- **Eloquent ORM** (Mapeamento de banco de dados)

## 📂 Estrutura do Projeto
```
📁 app
 ├── Models (Modelos das entidades: Assistida, Agressor, Medida)
 ├── Http/Controllers (Controladores das entidades)
📁 resources/views
 ├── layouts (Layouts base do sistema)
 ├── assistidas (Views de Assistidas)
 ├── agressores (Views de Agressores)
 ├── medidas (Views de Medidas Protetivas)
📁 database/migrations (Migrações do banco de dados)
📁 database/factories (Factories para geração de dados fictícios)
```

## 📌 Próximos Passos
### 🏠 Dashboard
- Criar um sistema de autenticação para acesso ao sistema.
- Dashboard (página inicial) do sistema com informações e resumos estátisticos.
- Adicionar novos campos essenciais para assistidas, medidas protetivas e agressores.
- Melhorar a funcionalidade dos filtros de busca para assistidas, agressores e medidas protetivas.
- Gerar relatórios estatísticos sobre os dados cadastrados.

---
📌 **Status do Projeto**: Em desenvolvimento 🛠️
