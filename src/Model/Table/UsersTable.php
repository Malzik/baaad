<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\ORM\RulesChecker;

class UsersTable extends Table
{
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['username']));
        $rules->add($rules->isUnique(['email']));
        return $rules;
    }
    public function validationLogin(Validator $validator)
    {
        $validator
            ->requirePresence('email')
            ->ascii('email')
            ->notEmpty('email', 'Veuillez compléter correctement ce champ')
            ->add('email', 'valid', [
                'rule' => 'email',
                'message' => 'Please enter valid email adress',
            ]);
        $validator
            ->requirePresence('password')
            ->ascii('password')
            ->notEmpty('password', 'Veuillez compléter correctement ce champ');

        return $validator;
    }

    public function validationSign(Validator $validator)
    {
        #Name
        $validator
            ->requirePresence('name')
            ->ascii('name')
            ->notEmpty('name', 'Veuillez compléter correctement ce champ')
            ->lengthBetween('name', [5, 30]);
        $validator
            ->requirePresence('username')
            ->ascii('username')
            ->notEmpty('username', 'Veuillez compléter correctement ce champ')
            ->lengthBetween('username', [5, 15], 'Nom d\'utilisateur compris entre 5 et 15 caractères');
        $validator
            ->requirePresence('email')
            ->ascii('email')
            ->notEmpty('email', 'Veuillez compléter correctement ce champ')
            ->add('email', 'valid', [
                'rule' => 'email',
                'message' => 'Please enter valid email adress',
            ]);
        $validator
            ->requirePresence('password')
            ->ascii('password')
            ->notEmpty('password', 'Veuillez compléter correctement ce champ')
            ->lengthBetween('password', [8, 50], 'Mot de passe compris entre 8 et 50 caractères')
            ->add('password', 'no-misspelling', [
                'rule' => ['compareWith', 'confirm_password'],
                'message' => 'Passwords are not equals',
            ]);
        $validator
            ->requirePresence('confirm_password')
            ->ascii('confirm_password')
            ->notEmpty('confirm_password', 'Veuillez compléter correctement ce champ')
            ->add('confirm_password', 'no-misspelling', [
                'rule' => ['compareWith', 'password'],
                'message' => 'Passwords are not equals',
            ]);

        return $validator;
    }
}