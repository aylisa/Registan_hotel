function showReg() {
   document.getElementById('register_form').style.display = "block";
}

      $(document).ready(function() {

    $('#register_form').bootstrapValidator({
        
        fields: {
            first_name: {
                validators: {
                        stringLength: {
                        min: 2,
                    },
                        notEmpty: {
                        message: 'Please enter your First Name'
                    }
                }
            },
             holder_name: {
                validators: {
                        stringLength: {
                        min: 2,
                    },
                        notEmpty: {
                        message: 'Please enter Card Holder Name'
                    }
                }
            },
             card_name: {
                validators: {
                        stringLength: {
                        min: 2,
                    },
                        notEmpty: {
                        message: 'Please enter Card Name'
                    }
                }
            },
             last_name: {
                validators: {
                     stringLength: {
                        min: 2,
                    },
                    notEmpty: {
                        message: 'Please enter your Last Name'
                    }
                }
            },
              
              mail_subject: {
                validators: {
                     stringLength: {
                        min: 2,
                    },
                    notEmpty: {
                        message: 'Please enter Subject of your mail'
                    }
                }
            },

            contact_message: {
                validators: {
                     stringLength: {
                        min: 5,
                    },
                    notEmpty: {
                        message: 'Please enter context of your mail'
                    }
                }
            },

                  email: {
                validators: {
                    notEmpty: {
                        message: 'Please enter your Email Address'
                    },
                    emailAddress: {
                        message: 'Please enter a valid Email Address'
                    }
                }
            },
            contact_no: {
                validators: {
                  notEmpty: {
                        message: 'Please enter your Contact No.'
                     },
                  stringLength: {
                        min: 12, 
                        max: 13,
                    
                }
            }
        },
            card_num: {
                validators: {
               
                  notEmpty: {
                        message: 'Please enter your Card Number'
                     },
                     stringLength: {
                        min: 12, 
                        max: 16,
                    
                }
            }
        },
            card_cvc: {
                validators: {
                  notEmpty: {
                        message: 'Please enter your CVC'
                     },
                     stringLength: {
                        min: 3, 
                        max: 3,
                    
                }
            }
        },
             country: {
                validators: {
                    notEmpty: {
                        message: 'Please select your Country'
                    }
                }
            },


                }
            })
        
        .on('success.form.bv', function(e) {
            $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
                $('#register_form').data('bootstrapValidator').resetForm();

            // Prevent form submission
            e.preventDefault();

            // Get the form instance
            var $form = $(e.target);

            // Get the BootstrapValidator instance
            var bv = $form.data('bootstrapValidator');

            // Use Ajax to submit form data
            $.post($form.attr('action'), $form.serialize(), function(result) {
                console.log(result);
            }, 'json');
        });


$('#contact_form').bootstrapValidator({
        
        fields: {
            first_name: {
                validators: {
                        stringLength: {
                        min: 2,
                    },
                        notEmpty: {
                        message: 'Please enter your First Name'
                    }
                }
            },
             last_name: {
                validators: {
                     stringLength: {
                        min: 2,
                    },
                    notEmpty: {
                        message: 'Please enter your Last Name'
                    }
                }
            },
              
              mail_subject: {
                validators: {
                     stringLength: {
                        min: 2,
                    },
                    notEmpty: {
                        message: 'Please enter Subject of your mail'
                    }
                }
            },

            contact_message: {
                validators: {
                     stringLength: {
                        min: 5,
                    },
                    notEmpty: {
                        message: 'Please enter context of your mail'
                    }
                }
            },

                  email: {
                validators: {
                    notEmpty: {
                        message: 'Please enter your Email Address'
                    },
                    emailAddress: {
                        message: 'Please enter a valid Email Address'
                    }
                }
            },
          

                }
            })
        
        .on('success.form.bv', function(e) {
            $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
                $('#contact_form').data('bootstrapValidator').resetForm();

            // Prevent form submission
            e.preventDefault();

            // Get the form instance
            var $form = $(e.target);

            // Get the BootstrapValidator instance
            var bv = $form.data('bootstrapValidator');

            // Use Ajax to submit form data
            $.post($form.attr('action'), $form.serialize(), function(result) {
                console.log(result);
            }, 'json');
        });




});