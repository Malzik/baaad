<div class="row">
    <div class="col-lg-4"></div>
    <div class="col-lg-4 mt-3">
        <?php
        echo $this->Flash->render();

        $this->Form->setTemplates([
            'inputContainer' => '<div class="form-group{{required}}"> {{content}} <span class="help">{{help}}</span></div>',
            'input' => '<input type="{{type}}" name="{{name}}" class="form-control form-control-danger" {{attrs}}/>',
            'inputContainerError' => '<div class="form-group has-danger {{type}}{{required}}">{{content}}{{error}}</div>',
            'error' => '<div class="text-danger">{{content}}</div>'
        ]);

        echo $this->Form->create($login);
        echo $this->Form->controls(
            [
                'email'     => ['required'  => false, 'placeholder' => 'Adresse Mail', 'label' => ['class'=> 'form-control-label','text' => 'User Email']],
                'password'  => ['required'  => false, 'placeholder' => 'Mot de passe', 'label' => ['class'=> 'form-control-label']],
            ],
            [ 'legend' => 'User Sign In Here']
        );
        echo $this->Form->button('<i class="fa fa-user"></i> Sign In',['class' => 'btn btn-success btn-block']);
        echo $this->Form->end();
        ?>
    </div>
    <div class="col-lg-4"></div>
</div>