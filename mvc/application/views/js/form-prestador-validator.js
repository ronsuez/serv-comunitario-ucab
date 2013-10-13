      


 new FormValidator('form-prestador', [{

            name: 'req',
            display: 'required',    
            rules: 'required'
        }, {
            name : "word",
            rules : "alpha | max_length[10]"
        },{
            name :"phone",
            rules : "alpha_numeric | max_length[7]"


        },{
            name: 'alphanumeric',
            rules: 'alpha_numeric'
        }, {
            name: 'password',
            rules: 'required'
        }, {
            name: 'password_confirm',
            display: 'password confirmation',
            rules: 'required|matches[password]'
        }, {
            name: 'email',
            rules: 'valid_email'
        }, {
            name: 'minlength',
            display: 'min length',
            rules: 'min_length[8]'
        }], function(errors, evt) {

            if (errors.length > 0) {
                // Show the errors
                   // SELECTOR_ERRORS.empty();
                    
                    for (var i = 0, errorLength = errors.length; i < errorLength; i++) {
                        //SELECTOR_ERRORS.append(errors[i].message + '<br />');
                              alert(errors[i].message);
                    }
                    
                    //SELECTOR_SUCCESS.css({ display: 'none' });
                    //SELECTOR_ERRORS.fadeIn(200);
                } else {
                    //SELECTOR_ERRORS.css({ display: 'none' });
                    //SELECTOR_SUCCESS.fadeIn(200);
                    alert("todo cool ");
                 }


            if (evt && evt.preventDefault) {
                evt.preventDefault();
            } else if (evt) {
                evt.returnValue = false;
            }
        });    
