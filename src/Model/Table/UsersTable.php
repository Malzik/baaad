<?php
    namespace App\Model\Table;

    use Cake\ORM\Table;
    use Cake\Validation\Validator;

    class UsersTable extends Table
    {
        public function validationDefault(Validator $validator)
        {
            
        }

        public function validationRegister(Validator $validator)
        {
            #LastName
            $validator->notEmpty('lastname');
                
            #FirstName
            $validator->notEmpty('firstname');

            #Email
            $validator->notEmpty('email')
                ->add('email', 'valid', [
                    'rule' => 'email',
                    'message' => 'Please enter valid email adress',
                ]);

            #Password
            $validator->notEmpty('password')
                ->add('password', 'lengthBetween', [
                    'rule' => ['lengthBetween', 0,50],
                    'message' => 'Invalid length, must be between 8 and 50',
                ]);
                
            #Confirm Password
            $validator->notEmpty('confirmpassword')
                ->add('confirmpassword', 'no-misspelling', [
                    'rule' => ['compareWith', 'password'],
                    'message' => 'Passwords are not equal',
                ]);

            return $validator;
        }
    }
?>