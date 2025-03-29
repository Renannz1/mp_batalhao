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

### 📊 Dashboard
- Visão geral do sistema com estatísticas sobre as entidades.
- Gráficos dinâmicos para análise de dados.
- Listagem das últimas medidas protetivas cadastradas.

### 🔄 Relacionamentos das tabelas
- **Assistida → Medida Protetiva** (Uma assistida pode ter várias medidas protetivas).
- **Agressor → Medida Protetiva** (Um agressor pode ter várias medidas protetivas).

### 🎨 Estilização
- Uso do **Bootstrap 5** para estilização das páginas.
- Sidebar responsiva com botão para abrir/fechar o menu.

## 🚀 Tecnologias Utilizadas
- **Laravel** (Framework PHP para backend)
- **JavaScript**  (Chart.js - Gráficos dinâmicos para visualização dos dados)
- **Bootstrap 5** (Framework CSS para estilização)
- **Blade** (Template Engine do Laravel)
- **Eloquent ORM** (Mapeamento de banco de dados)

## 📂 Estrutura do Projeto
```
📁 app
 ├── Models (Modelos das entidades: Assistida, Agressor, Medida)
 ├── Http/Controllers (Controladores das entidades)
 ├── Http/Requests (Regras de validação dos formulários de: Assistida, Agressor, Medida)
📁 resources/views
 ├── layouts (Layouts base do sistema)
 ├── assistidas (Views de Assistidas)
 ├── agressores (Views de Agressores)
 ├── medidas (Views de Medidas Protetivas)
 ├── dashboard (View da página inicial)
📁 database/migrations (Migrações do banco de dados)
📁 database/factories (Factories para geração de dados fictícios)
```

## 📌 Próximos Passos
- Criar um sistema de autenticação para acesso ao sistema.
- Adicionar novos campos essenciais para assistidas, medidas protetivas e agressores.
- Melhorar a funcionalidade dos filtros de busca para assistidas, agressores e medidas protetivas.
- Gerar relatórios para conversar com outros órgãos (Relatório sobre as visistas de uma assistida ou sobre a assistida). 
- Alterar processo SEI. (Várias medidas por processo SEI)
- Tabela para visitas
- Possibilidade de cadastrar nova visita para várias medidas para uma mesma mulher (Incluir campos de seleção na tabela de medidas para realizar ação).
- Possibilidade para importar dados de planilhas.
- Datas formulario medida 
 - - Inicio medida
 - - Inicio Recebimento (quando chegar no email)
  
---
📌 **Status do Projeto**: Em desenvolvimento 🛠️
