

       
$(document).ready(function() {


 // Teachers verification
    let basename = 'https://wakocoding.rowareng.com/api/'

    $('#reg_button').click(function(e) {
        e.preventDefault();
      
        let name = $('#nam').val();
        let email = $('#emai').val();
        let phone = $('#phone').val();
        let proficiency = $('#proficiency').val();
        let password = $('#password').val();
        let cv = $('#v-upload').val();
       
        $.ajax({
            url: basename+'teacher/register',
            method:'POST',
            data: {name:name, email:email,  password:password, phone:phone, proficiency:proficiency, cv:cv }
        }).done(function( msg ) {
            alert( "Data Saved: " + msg );
          });
    });


    //    Users Login

    $('.logged').click(function(e) {
        e.preventDefault();

        let email = $('#emailin').val();
        let password = $('#pwd').val();
        let account_type =  $('input[name=type]:checked').val();
        let x = $.ajax({
            url: basename+'user/login',
            method:'POST',
            data: {email:email, password:password, account_type:account_type},
            dataType: 'json',
            // headers: {"X-AUTH-TOKEN" : token},
            error : function(err) {
                console.log('Error!', err)
                alert(JSON.stringify(err));
              },
              success: function(data) {
                console.log('Success!')
                alert(JSON.stringify(data));
               
                localStorage.setItem('token', data.id_token);
              }
        })

        let y = $.ajax({
            url: basename+'user/login',
            type: 'GET',
            // Fetch the stored token from localStorage and set in the header
            headers: {"Authorization": localStorage.getItem('token', data.id_token)}
          });
    });

    //User Sign Up
    
    $('#sup').click(function(e) {
        e.preventDefault();

        let name = $('#name').val();
        let phone = $('#phone').val();
        let email = $('#email').val();
        let state = $('#state').val();
        let password = $('#password').val();
        $.ajax({
            url: basename+'user/register',
            type:'POST',
            data: {full_name:name, phone_number:phone, email:email, state_area:state, password:password},
            success: function(response, textstatus, jqXHR, data){
                // if(response.status==success){

                //     fetch(basename+'user/register').then(result=> 
                //         {
                //             alert(result.json());
                //         }).catch(error => alert(error));
                // }
                console.log(JSON.stringify(data));
                 console.log(JSON.stringify(response.status));
                window.location.href='courses.html';
            }, 
            error: function(jqXHR, textstatus, errorThrown){
                // console.log(errorThrown);
                
            }

        })
    });


            
    
    

});


