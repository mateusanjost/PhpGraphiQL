


Execute nessa ordem:

    composer install
    npm install

    cp .env.example .env
    php artisan migrate --seed
    php artisan key:generate
    php artisan serve


Disponível em:

    http://127.0.0.1:8000/graphiql

Mutations: 
        mutation {
         sacar(id: 3, sacar: 10) {
        saldo 

          }
        }
Vai causar uma subtração no valor.


    mutation {
         depositar(id: 3, sacar: 10) {
        saldo 

          }
        }
    
  Vai somar um valor.

    {
      users {
        name
        email
        saldo
        id

      }
    }
    
  Vai retornar a lista de usuários e os seus dados.
  