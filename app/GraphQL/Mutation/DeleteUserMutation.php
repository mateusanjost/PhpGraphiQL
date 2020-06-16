<?php

namespace App\GraphQL\Mutation;

use GraphQL;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Mutation;
use GraphQL\Type\Definition\ResolveInfo;
use Rebing\GraphQL\Support\SelectFields;
use Rebing\GraphQL\Support\Query;
use App\User;
use Closure;
use Auth;

class DeleteUserMutation extends Mutation
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
            'input' => ['name' => 'input', 'type' => GraphQL::type('UserInput')],
            'id' => ['name' => 'id', 'type' => Type::nonNull(Type::int())],
        ];
    }

    public function rules(array $args = []): array
    {
        return [
            'saldo' => ['nameaposta' => 'saldo', 'type' => GraphQL::type('UserInput')],
        ];
    }

  
public function resolve($root, $args, $context, ResolveInfo $resolveInfo, Closure $getSelectFields)
{
    $input = $args['input'];
    //$user = User::findOrFail($args['id'])->first()->fill($input['name'])->save();
    $user = User::where('id', $args['id']);
 
    $fields = $getSelectFields();
    //$user = User::create($input);
    //$user =  User::find($input)-> update($input);
    //return $user;


    
    return $user->with($fields->getRelations())
    ->select($fields->getSelect())
    ->first()-> update($input);

    
}
}
