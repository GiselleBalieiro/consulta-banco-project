# Exercício de lógica - PHP

Este é um sistema bancário simples desenvolvido em PHP, que simula operações de consulta de saldo, saque e depósito. O programa interage com o usuário no terminal, permitindo a realização dessas operações até que o usuário decida encerrar a sessão.

## Funcionalidades

- **Consultar saldo atual**: Exibe o saldo da conta do titular.
- **Sacar valor**: Permite sacar um valor, desde que haja saldo suficiente.
- **Depositar valor**: Permite realizar um depósito na conta.
- **Sair**: Encerra o programa.

## Como Funciona

O programa exibe um menu de opções onde o usuário pode escolher entre:

1. Consultar saldo atual
2. Sacar valor
3. Depositar valor
4. Sair

Após cada operação, o menu é exibido novamente até que o usuário escolha a opção de sair.

### Fluxo de Operações:

- **Consulta de saldo**: Mostra o saldo da conta.
- **Saque**: O usuário informa o valor a ser sacado. Se o valor for superior ao saldo disponível, o sistema exibe uma mensagem de erro.
- **Depósito**: O usuário informa o valor a ser depositado e o saldo é atualizado.

## Como Executar

1. Clone este repositório ou baixe o código para seu computador.
2. Abra um terminal e navegue até o diretório onde o arquivo PHP está localizado.
3. Execute o código com o comando:

   ```bash
   php banco.php
