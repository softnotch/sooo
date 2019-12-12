
// // //contact validation
// // var inputName = document.getElementById('name');
// // var inputMail = document.getElementById('email');
// // var inputMessage = document.getElementById('message');
// // var button = document.querySelector('.site-btn');
// // var sup = document.querySelector('#sup');
// // var log = document.querySelector('#log');
// // var password = document.querySelector('#password');
// // var cpassword = document.querySelector('#cpassword');
// // var regEx = /\S+@\S+\.\S+/;
// // var form = document.querySelector('.form');

// // function checkInput(){
// //     if(inputName.value.trim() !=="" && regEx.test(inputMail.value) && inputMessage.value.trim() !=="" && password.value.trim() !==""){
// //         button.style.backgroundColor = '#d82a4e';
// //         button.disabled = false;
// //         sup.style.backgroundColor = '#d82a4e';
// //         sup.disabled = false;
// //         log.style.backgroundColor = '#d82a4e';
// //         log.disabled = false;
// //     } else{
// //         button.style.backgroundColor = '#777';
// //         button.disabled = true;
// //         sup.style.backgroundColor = '#777';
// //         sup.disabled = true;
// //         log.style.backgroundColor = '#777';
// //         log.disabled = true;
// //     }
// // }
// // form.addEventListener('submit',function(event){
// //     event.preventDefault();

// // })

//         // Teachers verification
// $(document).ready(function() {
//     let basename = 'https://wakocoding.rowareng.com/api/'

//     $('#reg_button').click(function(e) {
//         e.preventDefault();
//         //alert("not working");
//         let name = $('#name').val();
//         let email = $('#email').val();
//         let phone = $('#phone').val();
//         let proficiency = $('#proficiency').val();
//         //let password = $('#password').val();
       
//         $.ajax({
//             url: basename+'teacher/register',
//             type:'POST',
//             data: {name:name, email:email, phone:phone, proficiency:proficiency, password:password},
//             success: function(response, textstatus, jqXHR){
//                 alert(response);
//                 // if(response.status==success){
//                   //  window.localStorage.setItem('access_token',token)
//                     //window.localStorage.getItem('access_token')
//                 //     // localStorage.getItem(l );
//                 //     // localStorage.getItem(name);

//                 //     fetch(basename+'teacher/register').then(result=> 
//                 //         {
//                 //             alert(result);
//                 //         }).catch(error => alert(error));
//                 // }
//             }, 
//             error: function(jqXHR, textstatus, errorThrown){
//                 alert(errorThrown);
//             }

//         })
//     });

//        // Users Login

//     $('#log').click(function(e) {
//         e.preventDefault();

//         let email = $('#email').val();
//         let password = $('#password').val();
//         $.ajax({
//             url: basename+'user/login',
//             type:'POST',
//             data: {email:email, password:password},
//             success: function(response, textstatus, jqXHR){
//                 alert(JSON.stringify(response));
//                 window.location.href="/soft/journey.php";
//             }, 
//             error: function(jqXHR, textstatus, errorThrown){
//                 alert(errorThrown);
//             }

//         })
//     });

//         //User Sign Up
    
//     $('#sup').click(function(e) {
//         e.preventDefault();

//         let name = $('#name').val();
//         let phone = $('#phone').val();
//         let email = $('#email').val();
//         let state = $('#state').val();
//         let password = $('#password').val();
//         $.ajax({
//             url: basename+'user/register',
//             type:'POST',
//             data: {full_name:name, phone_number:phone, email:email, state_area:state, password:password},
//             success: function(response, textstatus, jqXHR){
//                 if(response.status==success){

//                     fetch(basename+'user/register').then(result=> 
//                         {
//                             alert(result.json());
//                         }).catch(error => alert(error));
//                 }
//                 //alert(JSON.stringify(response));
//                 window.location.href="/soft/journey.php";
//             }, 
//             error: function(jqXHR, textstatus, errorThrown){
//                 alert(errorThrown);
//             }

//         })
//     });
//             // Reset password for User
    
//     $('#upd').click(function(e) {
//         e.preventDefault();
//         let new_password = $('#new_password').val();
//         $.ajax({
//             url: basename+'user/reset_password',
//             header: x-access-token,
//             type:'POST',
//             data: { new_password:new_paasword},
//             success: function(response, textstatus, jqXHR){
//                 alert('successful');
//             }, 
//             error: function(jqXHR, textstatus, errorThrown){
//                 alert(errorThrown);
//             }

//         })
//     });

//      // Reset password for Teacher
    
//      $('#res_pwd2').click(function(e) {
//         e.preventDefault();
//         let new_password = $('#new_password').val();
//         $.ajax({
//             url: basename+'teacher/reset_password',
//             header: x-access-token,
//             type:'POST',
//             data: { new_password:new_password},
//             success: function(response, textstatus, jqXHR){
//                 alert('successful');
//             }, 
//             error: function(jqXHR, textstatus, errorThrown){
//                 alert(errorThrown);
//             }

//         })
//     });

//          // contact
    
//          $('#contact').click(function(e) {
//             e.preventDefault();
//             let full_name = $('#full_name').val();
//             let email = $('#email').val();
//             let subject = $('#subject').val();
//             let message = $('#message').val();
//             $.ajax({
//                 url: basename+'user/contact',
//                 type:'POST',
//                 data: { full_name:full_name, email:email,  subject:subject, message:message},
//                 success: function(response, textstatus, jqXHR){
//                     alert('successful');
//                 }, 
//                 error: function(jqXHR, textstatus, errorThrown){
//                     alert(errorThrown);
//                 }
    
//             })
//         });
    
    

// });


