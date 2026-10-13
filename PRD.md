# PRD — FuniGest

**Sistema de Gestão de Serviços de Funilaria Civil (Calhas, Rufos, Coifas e Afins)**

| Campo | Valor |
|---|---|
| Produto | FuniGest |
| Versão do documento | 1.0 |
| Data | 13/10/2026 |
| Autor | Érick (TCC) |
| Status | Rascunho para validação |
| Repositório | `/home/aluno/Documentos/Érick_2A/TCC` |

---

## 1. Resumo Executivo

O **FuniGest** é um sistema web responsivo (com recursos de PWA) para **gerenciar dados e datas dos serviços de funilaria civil** — fabricação e instalação de calhas, rufos, coifas, dutos, condutores, curvas, chaminés, coberturas e estruturas metálicas. Foi concebido para uma operação de **pequeno porte (4–10 pessoas, 30–100 serviços/mês)**, atendendo clientes **residenciais e comerciais**, com multiusuário (dono, equipe interna, equipe de campo e portal do cliente) e fiscalização simplificada (recibos/controle interno, sem emissão de NF no MVP).

O produto substitui planilhas, cadernos e WhatsApp disperso, centralizando **clientes e obras, catálogo, orçamentos, ordens de serviço, agenda, estoque, financeiro e fotos/documentos**, com fluxo único da proposta à conclusão.

---

## 2. Contexto de Pesquisa

### 2.1 O que é funilaria civil
Diferente da funilaria automotiva (reparo de veículos), a **funilaria civil** trata da **fabricação e instalação sob medida de peças metálicas para edificações**, tipicamente em chapas de aço galvanizado, alumínio, inox e zinco. As peças mais comuns:

- **Calha** – coleta de água pluvial no beiral/telhado.
- **Rufo** – vedação/contorno em paredes, cumeeiras e acabamentos.
- **Coifa** – exaustão de fumaça/gordura (cozinha, churrasqueira, industrial).
- **Condutor / Algerosa** – tubulação vertical de escoamento da calha.
- **Duto** – passagem de ar/gases (exaustão, ventilação).
- **Curva / Joelho / Redução** – acessórios de duto.
- **Chaminé** – exaustão de gases de combustão.
- **Cobertura metálica / de galpão** – telhas e fechamentos.
- **Estrutura metálica** leve, pingadeiras, tampões de muro, barriletes.

Os serviços combinam **medição in loco**, **fabricação em oficina** (corte, dobra, rebite/solda) e **instalação no canteiro**, com matéria-prima comprada por **metro/área/peso** e alto índice de **perda/sobra**.

### 2.2 Fluxo real de uma empresa calheira (observado em pesquisas de mercado)
1. Cliente solicita orçamento (telefone/WhatsApp/site).
2. Visita técnica para **medição** (dimensões, fotos, acesso).
3. Elaboração do **orçamento** por item (calha linear, rufo linear, coifa por peça, mão de obra).
4. Envio e aprovação do cliente.
5. **Fabricação** das peças na oficina.
6. **Agendamento/instalação** no local.
7. Entrega, conferência e **faturamento/recebimento**.
8. Eventuais **manutenções/garantias**.

### 2.3 Dores atuais (motivadores)
- Orçamentos feitos em papel/WhatsApp sem histórico nem rastreabilidade.
- Datas de medição/fabricação/instalação em cadernos; conflitos de agenda e atrasos.
- Falta de controle de **material** (chapa galvanizada, parafusos, selante) → ruptura ou sobra.
- Dificuldade de saber **margem por obra/peça** e produtividade da equipe.
- Fotos espalhadas; sem evidência de antes/depois.
- Sem portal do cliente → retrabalho de comunicação.

### 2.4 Benchmark (sistemas correlatos)
- Gestão de oficinas de funilaria/pintura automotiva (OS, orçamento, estoque, financeiro) — referência de fluxo, mas foco em veículos.
- Software de gutter/sheet-metal contractors (scheduling, medição, estimativa por metro, fotos, dispatch) — referência de campo e agendamento.
- ERPs de fabricação de metal (job shop scheduling, bill of materials, rastreio de material) — referência de produção.

**Diferencial do FuniGest:** foco em **funilaria civil residencial/comercial**, com medição por metro/área, instalação e fotos por OS, e simplicidade para pequena empresa com hospedagem de baixo custo.

---

## 3. Problema e Visão

**Problema:** pequenas empresas de funilaria civil não possuem uma ferramenta simples e acessível para organizar clientes, obras, orçamentos, agenda de medição/fabricação/instalação, estoque e financeiro em um único lugar, resultando em perda de tempo, erros de medição, conflitos de agenda e falta de visibilidade de margem.

**Visão do produto:** ser o **sistema de gestão de referência para funilaria civil de pequeno porte**, com baixo custo de hospedagem (PHP/Laravel + MySQL) e uso no campo via celular, permitindo que o dono tenha **controle ponta-a-ponta do serviço**, do orçamento à conclusão.

---

## 4. Objetivos e Métricas de Sucesso

### 4.1 Objetivos
- Centralizar todas as informações de clientes, obras e serviços.
- Reduzir tempo de elaboração de orçamento e emissão de OS.
- Organizar agenda de medição/fabricação/instalação por equipe.
- Controlar estoque de materiais e consumo por OS.
- Acompanhar receitas/despesas e recebimentos.
- Manter histórico e fotos por OS para garantia/melhoria.

### 4.2 KPIs (indicadores)
- Tempo médio para elaborar orçamento (meta: < 10 min).
- Taxa de conversão de orçamento em OS (meta: ≥ 40%).
- % de OS concluídas no prazo (meta: ≥ 85%).
- Rotatividade de estoque / rupturas (meta: zero ruptura crítica).
- Margem bruta por OS (visibilidade, meta: ≥ 20%).
- Satisfação do usuário (NPS interno ≥ 40 no piloto).

---

## 5. Escopo

### 5.1 Dentro do escopo (MVP — Fase 1)
- Autenticação e perfis (RBAC).
- Cadastro de clientes e ficha de obra/endereço.
- Catálogo de serviços/peças (calha, rufo, coifa, duto, condutor, curva, chaminé, cobertura, estrutura) com precificação por unidade/metro/área/peso/peça.
- Orçamentos/propostas com itens, quantidades, material, mão de obra, desconto, validade, PDF e compartilhamento por WhatsApp.
- Ordem de Serviço (OS) com fluxo de status completo e agendamento.
- Agenda (calendário) de medição, fabricação e instalação por equipe.
- Estoque de materiais (entrada/saída, consumo por OS, alerta de mínimo).
- Financeiro básico (receitas, despesas, a receber, recebimentos, recibos).
- Fotos/documentos por OS (antes/durante/depois).
- Recibos de pagamento (sem NF).
- Notificações por e-mail/WhatsApp (links `wa.me`).
- Busca e filtros; exportação CSV/PDF.

### 5.2 Fora do escopo (Fases posteriores)
- Emissão de NF-e/NFS-e (pode ser integrado a emissor externo futuramente).
- Medições detalhadas com croqui/desenhos (Fase 2).
- Relatórios/dashboard avançados e BI (Fase 2).
- Portal do cliente com aprovação online (Fase 2/3; no MVP envio por WhatsApp + aceite registrado).
- Modo offline completo de edição (MVP: visualização offline parcial via PWA).
- Integração com contabilidade/ERP externo e NF (Fase 3).
- Multiempresa (SaaS) e app nativo (Fase 3).

---

## 6. Usuários e Perfis (RBAC)

| Perfil | Permissões principais |
|---|---|
| **Admin (dono)** | Acesso total; cadastros mestres; financeiro; relatórios; usuários. |
| **Escritório/Vendas** | Clientes, obras, catálogo, orçamentos, OS, agenda, fotos. Sem financeiro sensível? Pode registrar recebimentos. |
| **Almoxarifado/Fabricação** | Estoque, movimentações, status de fabricação, consumo de material por OS. |
| **Campo (medidor/instalador)** | Visualizar agenda/OS atribuídas; registrar status, fotos, medições básicas, comunicar. |
| **Cliente (portal leitura)** | Visualizar orçamento/OS aprovada, fotos, status, contatos (acesso por link seguro). |

Regras: usuários desativados não perdem histórico; auditoria de alterações sensíveis (exclusão, edição de valores).

---

## 7. Glossário de Domínio

| Termo | Significado no sistema |
|---|---|
| Calha | Peça coletora de água pluvial, precificada em metro linear. |
| Rufo | Acabamento/vedação linear, precificado em metro linear. |
| Coifa | Peça unitária (cozinha/churrasqueira/industrial). |
| Condutor/Algerosa | Tubulação vertical de descida, precificada em metro linear. |
| Duto | Canal de exaustão/ventilação, precificado em metro linear/peça. |
| Curva/Joelho/Redução | Acessório de duto, precificado por peça. |
| Chaminé | Saída de gases, precificada por peça/metro. |
| Obra | Local de execução vinculado a um cliente. |
| OS | Ordem de Serviço: entidade central de execução. |
| Medições | Quantitativos conferidos em campo (Fase 2). |
| Perda | Percentual de material desperdiçado no corte/dobra. |

---

## 8. Funcionalidades Detalhadas por Módulo

### 8.1 Módulo: Autenticação e Usuários
- Login com e-mail/senha; recuperação de senha.
- Perfil do usuário (nome, foto, função, contato).
- CRUD de usuários (Admin).
- Log de ações críticas (criação/edição/exclusão de OS, valores, estoque).
- Sessões e logout; bloqueio após tentativas falhas.

### 8.2 Módulo: Clientes
- Cadastro PF/PJ: nome/razão social, CPF/CNPJ, telefones, e-mails, observações.
- Múltiplos contatos por cliente.
- Histórico de orçamentos e OS do cliente.
- Busca por nome/telefone/documento.
- Importação/exportação CSV.

### 8.3 Módulo: Obras (Ficha de Obra)
- Vinculada a um cliente (um cliente pode ter várias obras).
- Dados: nome/apelido da obra, tipo (residencial/comercial/industrial), endereço completo, CEP, referência de acesso, coordenadas (link Google Maps), responsável no local, telefone.
- Observações técnicas (altura, andaime, acesso, disponibilidade).
- Status (ativa, concluída, arquivada).
- Histórico de orçamentos/OS/fotos da obra.

### 8.4 Módulo: Catálogo de Serviços/Peças
- Categorias: Calha, Rufo, Coifa, Condutor, Duto, Curva/Joelho, Redução, Chaminé, Cobertura, Estrutura, pingadeira, tampão, mão de obra, outros.
- Campos: código, nome, descrição, unidade (m, m², kg, pc/un), preço unitário, custo unitário, % de perda padrão, material (alumínio galv., aço galv., inox, zinco, pintura), ativo.
- Suporte a "sob medida" (item com dimensões variáveis).
- Versionamento de preços opcional (histórico de alteração).

### 8.5 Módulo: Orçamentos (Propostas)
- Cabeçalho: número sequencial, cliente, obra, data, validade, responsável, condições de pagamento.
- Itens: catálogo ou livre; quantidade, dimensões (comprimento/largura/altura), unidade efetiva, preço, desconto por item.
- Cálculo automático de quantidade a partir das dimensões e perda (%).
- Custos: mão de obra separada, deslocamento, andaime, outros acréscimos.
- Totais: subtotal, desconto global, total.
- Status: `Rascunho`, `Enviado`, `Aprovado`, `Recusado`, `Expirado`, `Convertido em OS`.
- Geração de PDF com layout profissional (logo, dados da empresa).
- Compartilhamento por WhatsApp (`wa.me` com mensagem + anexo/PDF link).
- Duplicar orçamento; versionamento (revisão).
- Aprovação registrada com data/responsável/observação.
- Conversão em OS com um clique.

### 8.6 Módulo: Ordens de Serviço (OS)
- Número sequencial; vinculada a orçamento aprovado e obra.
- Status (com transições controladas):
  `Rascunho → Orçamento enviado → Aprovado → Medição → Fabricação → Instalação → Concluído → Faturado`
  (possibilidade de `Cancelado` e `Pausado`).
- Equipe/responsável atribuído; datas planejadas e reais.
- Itens da OS (herdados do orçamento, editáveis com histórico).
- Checklist de fabricação/instalação.
- Fotos/documentos por etapa.
- Observações técnicas e ocorrências.
- Aceite de conclusão (assinatura/nome).
- Impressão de OS.

### 8.7 Módulo: Agenda e Datas
- Calendário (mês/semana/dia) com eventos: Medição, Fabricação, Instalação, Visita, Manutenção.
- Filtro por equipe/profissional/obra.
- Drag-and-drop para reagendar; conflito de disponibilidade avisado.
- Sincronização exportável para Google/Outlook via arquivo ICS.
- Lembretes por e-mail/WhatsApp (24h antes).
- Visão "lista do dia" para equipe de campo (mobile-first).

### 8.8 Módulo: Estoque de Materiais
- Cadastro de materiais: nome, categoria (chapa, perfil, parafuso, rebite, selante, tinta, EPI), unidade, custo médio, estoque mínimo, fornecedor.
- Movimentações: entrada (compra), saída (consumo por OS), ajuste/inventário, devolução.
- Consumo automático sugerido a partir dos itens da OS (manual de confirmação antes de baixar).
- Alerta de estoque mínimo e material insuficiente no agendamento.
- Inventário e relatório de giro.
- Anexo de nota/foto do material.

### 8.9 Módulo: Financeiro (Básico)
- Receitas: vinculadas a OS/orçamento; valor, vencimento, forma de pagamento, status (a receber/recebido/parcial).
- Despesas: categoria, fornecedor, valor, vencimento, status.
- Recebimentos: registro de pagamento parcial/total, geração de **recibo PDF**.
- Fluxo de caixa diário/mensal.
- Categorias configuráveis.
- Exportação para contabilidade (CSV).
- Sem emissão de NF no MVP (campo para número de NF externa, se houver).

### 8.10 Módulo: Fotos e Documentos
- Upload múltiplo (câmera do celular ou arquivo), com compressão.
- Categorização: antes, durante, depois, medição, material, ocorrência.
- Legenda, data, autor.
- Galeria por OS/obra.
- Download em lote (ZIP) e compartilhamento.
- Armazenamento local no servidor (pasta) com path no banco; backup orientado.

### 8.11 Módulo: Clientes/Obra — Portal de Leitura (Fase 2 parcial)
- Link seguro (token) para o cliente acompanhar orçamento/OS, fotos e status.
- Registro de aprovação/reprovação via link.
- MVP pode operar via WhatsApp; portal completo na Fase 2.

### 8.12 Configurações Gerais
- Dados da empresa (logo, endereço, contatos, CNPJ, textos de rodapé de PDF).
- Parâmetros: validade padrão de orçamento, % de perda padrão, estoque mínimo global.
- Formas de pagamento e condições padrão.
- Sequências de numeração (orçamento/OS/recibo).
- Tema/idioma (PT-BR).

---

## 9. Fluxos Principais

### 9.1 Fluxo do orçamento à conclusão
```
Rascunho → (enviar) Orçamento enviado → (aprovação) Aprovado → (agendar) Medição
  → Fabricação → Instalação → (aceite) Concluído → (pagamento) Faturado
```
- Cada transição registra data/hora/usuário e permite observação.
- Cancelamento permitido antes da instalação (com motivo).
- Após `Concluído`, OS bloqueada para edição de itens (somente observação/anexo); alterações geram nova revisão.

### 9.2 Fluxo de medição (campo) — Fase 2
Medidor visita a obra, registra medidas por item, anexa fotos e assinatura; sistema recalcula quantidades e atualiza orçamento.

### 9.3 Fluxo de estoque
Entrada por compra → alocação/sugestão de consumo por OS (confirmação) → saída registrada → alertas de mínimo → inventário periódico.

### 9.4 Fluxo financeiro
OS concluída gera lançamento a receber → registro de recebimento parcial/total → emissão de recibo PDF → fluxo de caixa atualizado.

---

## 10. Regras de Negócio (selecionadas)
1. Todo orçamento/OS deve estar vinculado a um **cliente** e a uma **obra**.
2. OS só pode ser criada a partir de orçamento **Aprovado** (ou manual com permissão de Admin).
3. Transições de status só seguem a sequência (com exceção de cancelamento/pausa justificado).
4. Baixa de estoque só ocorre mediante confirmação; não permite estoque negativo (aviso + bloqueio configurável).
5. Exclusão de OS/Orçamento exige permissão Admin e gera log; preferir "cancelado" a excluir.
6. Número sequencial de documentos não pode repetir/reutilizar.
7. Permissão mínima para visualizar valores financeiros pode ser configurada.
8. Fotos devem ter tamanho/ formato validados; compressão automática para web.
9. Disponibilidade de equipe verificada na agenda (aviso de conflito).
10. Validade padrão de orçamento configurável (ex.: 15 dias).

---

## 11. Requisitos Não-Funcionais

### 11.1 Plataforma e hospedagem
- **Stack sugerida:** PHP 8 + Laravel 11, MySQL 8, Blade/Livewire (ou Inertia + Vue) e Tailwind CSS; hospedagem compartilhada.
- Servidor web Apache/Nginx; HTTPS obrigatório.
- Uploads em disco local; fila via cron (Laravel scheduler) para e-mails/lembretes.
- Cache (file/redis se disponível) para catálogo e configurações.

### 11.2 Usabilidade
- Web responsivo (mobile-first) para uso em campo.
- Ações principais em até 3 cliques.
- Formulários com validação client-side e server-side.
- Português (PT-BR) completo.

### 11.3 Performance
- Carregamento de listagens paginadas (≥ 20/50 itens).
- Imagens otimizadas (thumbnails).
- Consultas indexadas (cliente, obra, data, status).

### 11.4 Segurança
- Autenticação com hash (bcrypt), proteção CSRF, validação de inputs, políticas (Gates/Policies).
- Controle de acesso por perfil; dados sensíveis apenas a autorizados.
- Upload seguro (tipos/tamanho; nomes aleatórios).
- Backups periódicos (DB + arquivos) e exportação.
- LGPD: dados pessoais mínimos; política de privacidade e termo; possibilidade de exclusão/anonimização.

### 11.5 Offline (parcial)
- PWA com Service Worker: cache de app shell, listagens recentes e fotos em visualização.
- Edição/criação exige conexão; fila de sincronização apenas leitura offline no MVP.

### 11.6 Acessibilidade/compatibilidade
- Navegadores modernos (Chrome, Edge, Safari, Firefox) Android/iOS.
- Impressão/PDF com layout consistente.

---

## 12. Integrações

| Integração | MVP | Detalhe |
|---|---|---|
| WhatsApp | Sim | Links `wa.me` + mensagem pré-preenchida + anexo PDF (download). |
| Google Maps | Sim | Link para localizar obra/rota (sem API paga). |
| Google/Outlook Calendar | Sim (export) | Export ICS de agenda; import opcional Fase 2. |
| E-mail (SMTP) | Sim | Orçamentos, lembretes, recibos. |
| NF-e/NFS-e | Não MVP | Campo para número externo; integração futura. |
| Contabilidade | Export CSV | Lançamentos de receitas/despesas. |
| Armazenamento de fotos | Local + download | Backup em nuvem via cron (opcional). |

---

## 13. Arquitetura Proposta (alto nível)

```
[ Navegador / PWA ]  <-->  [ Laravel App (Blade/Livewire) ]  <-->  [ MySQL ]
        |                          |                                 |
        |                          |-- Jobs/Cron (e-mail, backup)       |
        |                          |-- Storage (uploads/PDFs)          |
```

- **Módulos (pastas/domínios):** Auth, Clients, Works, Catalog, Quotes, WorkOrders, Schedule, Stock, Finance, Media, Settings.
- **Padrões:** MVC + Services/Actions; Form Requests; Policies; Resources para export.
- **PDF:** DomPDF ou Snappy; geração assíncrona para orçamentos grandes.
- **Numeração:** tabela `number_sequences` por tipo/ano.
- **Anexos:** `media` polimórfica (`mediable_type/id`).

---

## 14. Modelo de Dados (entidades principais)

| Entidade | Campos-chave |
|---|---|
| users | id, name, email, password, role, active, timestamps |
| clients | id, type (PF/PJ), name, document, phone, email, notes, timestamps |
| addresses/works | id, client_id, name, type, address, city, state, zip, lat/lng, contact, status, notes |
| catalog_items | id, category, code, name, description, unit, price, cost, loss_pct, material, active |
| quotes | id, number, client_id, work_id, date, validity, status, discount, total, notes, approved_at, approved_by |
| quote_items | id, quote_id, catalog_item_id, description, qty, dimensions, unit_price, discount, total |
| work_orders | id, number, quote_id, client_id, work_id, status, team_id, scheduled_measure, scheduled_fab, scheduled_install, finished_at, notes |
| schedule_events | id, type, start, end, work_order_id, user_id, status, notes |
| stock_items | id, category, name, unit, cost, qty, min_qty, supplier |
| stock_movements | id, stock_item_id, type, qty, cost, work_order_id, user_id, occurred_at, notes |
| financial_transactions | id, type (income/expense), category, amount, due_date, paid_at, status, method, work_order_id, client_id, notes |
| receipts | id, number, transaction_id, pdf_path |
| media | id, mediable_type, mediable_id, category, path, thumb_path, legend, taken_at, user_id |
| audit_logs | id, user_id, action, entity, entity_id, before/after (json), created_at |
| settings | key, value (json) |

---

## 15. Roadmap e Backlog Priorizado

### Fase 1 — MVP (8–12 semanas)
1. Auth + RBAC + configurações da empresa.
2. Clientes e Obras.
3. Catálogo.
4. Orçamentos (PDF + WhatsApp).
5. OS com fluxo de status.
6. Agenda (lista do dia + calendário).
7. Estoque básico + consumo por OS.
8. Financeiro básico + recibos.
9. Fotos/documentos por OS.
10. Busca/filtros/export CSV.

### Fase 2 — (4–8 semanas)
1. Medições em campo com recálculo e fotos.
2. Relatórios/dashboard (conversão, margem, produtividade, estoque).
3. Portal do cliente (links seguros, aprovação online).
4. Offline parcial (PWA cache) e sync.
5. Integração Calendar (ICS import) e Google Maps API (opcional).

### Fase 3 — (6–10 semanas)
1. NF-e/NFS-e via integração de terceiros.
2. Multiempresa/SaaS e app nativo (opcional).
3. Compras a fornecedores e ordem de compra.
4. Garantia/manutenção recorrente e lembretes.
5. BI avançado e previsão de demanda.

---

## 16. Riscos e Mitigações

| Risco | Impacto | Mitigação |
|---|---|---|
| Escopo crescer além do tempo do TCC | Alto | Fixar MVP; deixar Fase 2/3 documentadas. |
| Hospedagem compartilhada limitar upload/PDF/fila | Médio | Otimizar imagens; processar PDF sob demanda; jobs via cron. |
| Adoção da equipe de campo | Médio | UI mobile-first, treinamento curto, lista do dia. |
| Perda de dados/fotos | Alto | Backups automáticos; exportação manual. |
| Erros de medição impactarem custo | Alto | Dupla conferência; medição registrada com fotos. |
| Dependência de internet em obra | Médio | Cache de visualização offline; sincronização posterior. |

---

## 17. Critérios de Aceite do MVP
- Criar cliente, obra, orçamento e convertê-lo em OS em < 5 min em dispositivo móvel.
- Alterar status da OS seguindo o fluxo e registrar data/hora/usuário.
- Agendar instalação e visualizar conflitos.
- Dar baixa de material por OS com alerta de mínimo funcionando.
- Registrar recebimento e emitir recibo PDF.
- Anexar ≥ 5 fotos por OS com compressão e galeria.
- Exportar listagens para CSV.
- Funcionar em hospedagem compartilhada (PHP/MySQL) com HTTPS.

---

## 18. Próximos Passos
1. Validar escopo e prioridades deste PRD com o stakeholder (dono da empresa).
2. Elaborar protótipo de baixa fidelidade (telas principais: Dashboard, Orçamento, OS, Agenda, Estoque).
3. Configurar repositório Laravel + MySQL e pipelines de backup.
4. Implementar Fase 1 conforme roadmap.
5. Piloto com uma obra real e coleta de feedback; ajustes.

---

*Documento gerado a partir de pesquisa sobre funilaria civil (calhas, rufos, coifas, dutos) e de gestão de serviços de metal sheet/civil construction, adaptado ao contexto de uma pequena empresa (PHP/Laravel + MySQL).*
