<?php

namespace App\GraphQL\Mutation;

use GraphQL;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Mutation;
use Rebing\GraphQL\Support\Query;
use Rebing\GraphQL\Support\SelectFields;
use GraphQL\Type\Definition\ResolveInfo;
use App\User;
use Auth;
use Closure;

class Sacarmutation extends Mutation
{
    protected $attributes = [
        'name' => 'sacar'
    ];

    public function type(): Type
    {
        return GraphQL::type('User');
    }

    public function args(): array
    {
        return [
            'id' => ['name' => 'id', 'type' => Type::nonNull(Type::int())],
            'sacar' => ['name' => 'sacar', 'type' => Type::nonNull(Type::int())],
        ];
    }

   /* public function rules(array $args = []): array
    {
        return [
            'email' => ['nameaposta' => 'aposta', 'type' => GraphQL::type('UserInput')],
            'company' => ['companhia' => 'aposta', 'type' => GraphQL::type('UserInput')],
        ];
    }
*/


public function resolve($root, $args, $context, ResolveInfo $resolveInfo, Closure $getSelectFields)
{
 
    $valornovo = $args['sacar'];
    $user = User::where('id', $args['id']);
    $fields2 = 'saldo';
     //return $user->select($fields)->first();
    $fields = $getSelectFields();
    //$user->select($fields2)   ->update($valornovo);
$valorantigo = (object) $user->with($fields->getRelations())->select($fields2)->first();
$foo =  json_decode($valorantigo, true);
$foo2 =  array_map('intval', $foo);
$foo3 =  array_map(function ($foo2) {
    return intval($foo2['saldo']);
}, ['sacar' => ['saldo' => 23]]);

    //$valorfinal  = $valorantigo  - $valornovo;
    // Unsupported operand types
    $user->with($fields->getRelations()) ->select($fields->getSelect()) ->
    first()->update(array('saldo' => - $valornovo ));
    return ['saldo' =>  - $valornovo];
    //return $user->with($fields->getRelations()) ->select($fields->getSelect()) ->
   // first()->update(array('saldo' =>  $valorantigo + $valornovo  ));


//return  $foo3;
 
}
}