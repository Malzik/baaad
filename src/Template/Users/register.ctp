<br><br>
<div>
    <div class="container">
        <?php
        echo $this->Flash->render();

        $this->Form->setTemplates([
            'inputContainer' => '<div class="form-group{{required}}"> {{content}} <span class="help">{{help}}</span></div>',
            'input' => '<input type="{{type}}" name="{{name}}" class="form-control form-control-danger" {{attrs}}/>',
            'inputContainerError' => '<div class="form-group has-danger {{type}}{{required}}">{{content}}{{error}}</div>',
            'error' => '<div class="text-danger">{{content}}</div>'
        ]);

        echo $this->Form->create($sign);
        echo $this->Form->controls(
            [
                'name'      => ['type' => 'text','required'  => true,
                    'placeholder' => 'Entrez votre nom sous la forme (Nom Prenom)',
                    'label' => ['class'=> 'form-control-label', 'text' => 'Nom complet']
                ],
                'username'  => ['type' => 'text','required'  => true,
                    'placeholder' => 'Entrez votre nom d\'utilisateur',
                    'label' => ['class'=> 'form-control-label','text' => 'Nom d\'utilisateur']
                ],
                'email'     => ['type' => 'email','required'  => true,
                    'placeholder' => 'Entrez votre email',
                    'label' => ['class'=> 'form-control-label','text' => 'Email']
                ],
                'password'  => ['type' => 'password','required'  => true,
                    'placeholder' => 'Enter votre mot de passe (Entre 8 et 50 caractères)',
                    'label' => ['class'=> 'form-control-label', 'text' => 'Mot de passe']
                ],
                'confirm_password' => ['type' => 'password', 'required'  => true,
                    'placeholder' => 'Confirmation du mot de passe',
                    'label' => ['class'=> 'form-control-label', 'text' => 'Confirmation du mot de passe']
                ],
            ],
            [ 'legend' => 'Inscription']
        );
        echo $this->Form->button('<i class="fa fa-user"></i> S\'inscrire',['class' => 'btn btn-success btn-block']);
        echo $this->Form->end();
        ?>
        <br>
    </div>
</div>