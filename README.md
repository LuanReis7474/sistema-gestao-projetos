
# 📊 Sistema de Gestão de Projetos e Gastos
Este projeto é uma plataforma de controle financeiro  para gerenciamento de projetos, desenvolvido como parte do meu portfólio. Ele foi projetado para oferecer uma visão clara da saúde financeira de cada empreendimento, desde o orçamento inicial até o custo final que será repassado ao cliente.

Esta hospedado em: https://sistema-gestao-projetos-ppqz.onrender.com/projetos

![GitHub Workflow Status](https://img.shields.io/github/actions/workflow/status/LuanReis7474/sistema-gestao-projetos/test.yml?branch=main&style=for-the-badge&logo=github&label=Build%20Status)
![Laravel Version](https://img.shields.io/badge/Laravel-12.0-FF2D20?style=for-the-badge&logo=laravel)
![PHP Version](https://img.shields.io/badge/PHP-8.2%2B-777BB4?style=for-the-badge&logo=php)



## 🚀 Tecnologias Utilizadas

* **Backend:** Laravel 12 (PHP 8.2+)
* **Frontend:** Vite 7, Tailwind CSS 4, AlpineJS
* **Banco de Dados:** PostgreSQL (Produção/Desenvolvimento) e SQLite (Testes em Memória)
* **DevOps & CI/CD:** GitHub Actions (Automação de Testes)
* **Testes** Pest

o sistema possui:

* **Testes de Integração (Feature Tests):** Cobertura de fluxo completo utilizando Pest, garantindo que a comunicação entre Controllers, Models e Banco de Dados esteja íntegra.
* **CI/CD Pipeline:** Teste automatizado do fluxo completo de criação de projeto, fornecedores e gastos.
* **Persistência Baseada em Sessão:** Implementação de lógica para isolamento de dados por `session_id`, permitindo o uso simultâneo por múltiplos usuários sem conflitos de dados.

Para rodar o projeto localmente:
```bash

git clone [https://github.com/LuanReis7474/sistema-gestao-projetos.git](https://github.com/LuanReis7474/sistema-gestao-projetos.git)

composer install
npm install

cp .env.example .env
php artisan key:generate

php artisan migrate

php artisan serve
```

para rodar os testes localmente: 

```bash

php artisan test --filter FlowTest
```
<img width="1193" height="459" alt="image" src="https://github.com/user-attachments/assets/bcf532b7-ccbb-4507-8640-234839ca133f" />

<img width="1202" height="478" alt="image" src="https://github.com/user-attachments/assets/a83077f7-4c8e-4a12-9f90-2ef285e96097" />

<img width="759" height="431" alt="image" src="https://github.com/user-attachments/assets/69bcbe2f-7917-4bde-ae5e-5d57bd993cee" />

<img width="1217" height="297" alt="image" src="https://github.com/user-attachments/assets/a144395c-8707-4037-9dcc-32ba84f76b78" />

<img width="677" height="641" alt="image" src="https://github.com/user-attachments/assets/fe70eb8d-ecd9-4829-b445-2d3bab48dcf2" />

<img width="694" height="642" alt="image" src="https://github.com/user-attachments/assets/51efa32b-f1a6-47cb-8b0d-c057d7d2f047" />

<img width="1182" height="312" alt="image" src="https://github.com/user-attachments/assets/9f542d6e-9762-4faf-b6d6-a8f75380ff77" />

<img width="1187" height="458" alt="image" src="https://github.com/user-attachments/assets/be6a42b7-a952-44a0-b2aa-d6ef2fe841cb" />






