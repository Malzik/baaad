<br><br>
<div class="row">
    <div class="col-lg-2"></div>
    <div class="col-lg-8">
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
                'name'      => ['required'  => false, 'placeholder' => 'Enter Name', 'label' => ['class'=> 'form-control-label', 'text' => 'User Full Name']],
                'username'  => ['required'  => false, 'placeholder' => 'Enter Username', 'label' => ['class'=> 'form-control-label','text' => 'User Username']],
                'email'     => ['required'  => false, 'placeholder' => 'Enter Email Id', 'label' => ['class'=> 'form-control-label','text' => 'User Email']],
                'password'  => ['required'  => false, 'placeholder' => 'Enter Password', 'label' => ['class'=> 'form-control-label']],
                'confirm_password' => ['type' => 'password', 'required'  => false, 'placeholder' => 'Enter Confirm Password', 'label' => ['class'=> 'form-control-label']],
            ],
            [ 'legend' => 'User Sign Up Here']
        );
        echo $this->Form->button('<i class="fa fa-user"></i> SignUp',['class' => 'btn btn-success btn-block']);
        echo $this->Form->end();
        ?>
        <br>
    </div>
    <div class="col-lg-4"></div>
</div>