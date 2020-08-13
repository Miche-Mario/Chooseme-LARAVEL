  
$(function (){
  $('.arrow').hide();

      $("#form").validate({
        
         errorPlacement: function(label, element) {
              label.addClass('arrow');
              label.insertAfter(element);
          },
          wrapper: 'span',  
      
      rules: {
        prenom: {
          required: true,
          maxlength:50,
          minlength:3,
        },
    
         nom: {
              required: true,
              minlength: 3,
              maxlength:12,
          },
          email: {
                  required: true,
                  email: true
              },    
      },
      messages: {
          
        prenom: {
          required: "Veuillez entrer votre prénom.",
          minlength: "Votre prénom doit comporter au moins 3 caractères.",
          maxlength: "Le nombre maximum de caractère est 24."
        },
        nom: {
          required: "Veuillez entrer votre nom.",
          minlength: "Votre prénom doit comporter au moins 3 caractères.",
          maxlength: "Le nombre maximum de caractère est 24."
        },
        email: {
            required: "Veuillez entrer un email valide.",
            email: "Entrez un mail valide."
          },
         
      }
    }); //End validate
  
    
    $('#form').on('submit',function(e) {
      
      e.preventDefault(); 
      $.ajaxSetup({
        headers:{
        'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
        }
      });   
      $('#save').html('En cours...');
    $.ajax({
      url: "",
      method: 'post',
      data: $('#form').serialize(),
      success: function( response ) {
        
        $('#msg_div').removeAttr('class');
        $('#msg_div').addClass('alert alert-success d-none');
        
       $('#res_message').show();
       $('#res_message').html(response.msg);
       $('#msg_div').removeClass('d-none');
       $('#save').replaceWith('<button type="submit" id="save" class="btn btn-block btn-md btn-chooseme text-white">Je m\'inscris sur la liste d\'attente</button>');
       document.getElementById("form").reset(); 
      $('#countt').load('../public/ #count');
      },
      error: function() {
        
        $('#msg_div').removeAttr('class');
        $('#msg_div').addClass('alert alert-danger d-none');
        var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        if(($('#nom').val().length>3) && ($('#prenom').val().length>3) && ($('#email').val().match(mailformat) )){
          
        
        $('#res_message').show();
        $('#res_message').html('Vous êtes déjà inscrit sur notre liste. Merci de votre intérêt pour ChooseMe.');
        $('#msg_div').removeClass('d-none');
        $('#save').replaceWith('<button type="submit" id="save" class="btn btn-block btn-md btn-chooseme text-white">Je m\'inscris sur la liste d\'attente</button>');
       $('#countt').load('../public/ #count');
       }else {
        $('#save').html('En cours...');
        $('#res_message').show();
        $('#res_message').html('Vous avez entré un email invalide');
        $('#msg_div').removeClass('d-none');
        $('#save').replaceWith('<button type="submit" id="save" class="btn btn-block btn-md btn-chooseme text-white">Je m\'inscris sur la liste d\'attente</button>');
       }
      }
    });
  });
    
  


 



  $("#formm").validate({
        
    errorPlacement: function(label, element) {
        label.addClass('arrow');
        label.insertAfter(element);
    },
    wrapper: 'span',

rules: {
  prenom: {
    required: true,
    maxlength:24,
    minlength:3,
  },

   nom: {
        required: true,
        minlength: 3,
        maxlength:24,
    },
    email: {
            required: true,
            
        },    
},
messages: {
    
  prenom: {
    required: "Veuillez entrer votre prénom.",
    minlength: "Votre prénom doit comporter au moins 3 caractères.",
    maxlength: "Le nombre maximum de caractère est 24.",
  },
  nom: {
    required: "Veuillez entrer votre nom.",
    minlength: "Votre prénom doit comporter au moins 3 caractères.",
    maxlength: "Le nombre maximum de caractère est 24.",
  },
  email: {
      required: "Veuillez entrer un email validee.",
      email: "Entrez un mail validee.",
    },
   
}
}); //End validate
  

  $('#formm').on('submit',function(e) {
    
    e.preventDefault(); 
    $.ajaxSetup({
      headers:{
      'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
      }
    });
    $('#savee').html('En cours...');
  $.ajax({
    url: "",
    method: 'post',
    data: $('#formm').serialize(),
    success: function( response ) {
      
     $('#msg_divvv').removeAttr('class');
     $('#msg_divvv').addClass('alert alert-success d-none');
     $('#savee').html('En cours...');
     $('#res_messageee').show();
     $('#res_messageee').html(response.msg);
     $('#msg_divvv').removeClass('d-none');
     $('#savee').replaceWith('<button type="submit" id="savee" class="btn btn-block btn-md btn-chooseme text-white">Je m\'inscris sur la liste d\'attente</button>');
     document.getElementById("formm").reset(); 
    $('#countttt').load('../public/ #counttt');
    },
    error: function( response ) {
      
      $('#msg_divvv').removeAttr('class');
      $('#msg_divvv').addClass('alert alert-danger d-none');
      var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
      if(($('#nomm').val().length>3) && ($('#prenomm').val().length>3) && ($('#emaill').val().match(mailformat) )){
       
      $('#res_messageee').show();
      $('#res_messageee').html('Vous êtes déjà inscrit sur notre liste. Merci de votre intérêt pour ChooseMe.');
      $('#msg_divvv').removeClass('d-none');
      $('#savee').replaceWith('<button type="submit" id="savee" class="btn btn-block btn-md btn-chooseme text-white">Je m\'inscris sur la liste d\'attente</button>');
     $('#countttt').load('../public/ #counttt');
    }else {
      
      $('#savee').html('En cours...');
      $('#res_messageee').show();
      $('#res_messageee').html('Vous avez entré un email invalide');
      $('#msg_divvv').removeClass('d-none');
      $('#savee').replaceWith('<button type="submit" id="saveee" class="btn btn-block btn-md btn-chooseme text-white">Je m\'inscris sur la liste d\'attente</button>');
     }
     }
  });
});


}); //End ready()