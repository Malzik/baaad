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
            #Name
            $validator->notEmpty('name');
                
            #Email
            $validator->notEmpty('email')
                ->add('email', 'valid', [
                    'rule' => 'email',
                    'message' => 'Please enter valid email adress',
                ]);
            #Username
            $validator->notEmpty('username')
                ->add('username', 'lengthBetween', [
                    'rule' => ['lengthBetween', 0,20],
                    'message' => 'Invalid length, must be between 8 and 20',
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