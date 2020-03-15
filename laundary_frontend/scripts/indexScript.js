(function() {
    'use strict';
    window.addEventListener('load', function() {
      // Get the forms we want to add validation styles to
      var forms = document.getElementsByClassName('needs-validation');
      // Loop over them and prevent submission
      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();



//   var frm = document.getElementById('signup');
//   $(function() {
//   frm.submit(function (e) {
 
//       e.preventDefault();
 
//       $.ajax({
//           type: frm.attr('method'),
//           url:'signup.php',
//           data: frm.serialize(),
//           success: function (sucess) {
//             invisble();
//               console.log('Submission was successful.');
//               console.log(sucess);
//           },
//           error: function (sucess) {
//               console.log('An error occurred.');
//               console.log(success);
//           },
//       });
//   });
//  })
 
 
//  $(function() {
//  $('signupp').trigger('submit');
//  });
 
 


  flag=0;
  function invisble()
  {
      
      if (flag==0)
    {
    var disble =document.getElementById("signup");
    // disble.classList.remove('w3-animate-left');
    // disble.classList.add('w3-animate-right');
    disble.style.display="none";
    var invisble =document.getElementById("login");
    invisble.style.display="block";
    var  change = document.getElementById("btnchange");
     // disble.classList.remove('w3-animate-left');
   
    change.classList.replace('w3-animate-left','w3-animate-top');
    change.innerText="Sign Up";  
    
    flag=1;
    }

      else if(flag==1)
      {
        var invisble1 =document.getElementById("login");
        // invisble1.classList.remove('w3-animate-left');
        // invisble1.classList.add('w3-animate-right');
        invisble1.style.display="none";  
       
        var disble1 =document.getElementById("signup");
        // disble1.classList.remove('w3-animate-right');
        disble1.style.display="block";
        // disble1.classList.add('w3-animate-left');

        var  change1 = document.getElementById("btnchange");
       // change1.classList.remove('w3-animate-left');
       // change1.classList.add('w3-animate-left');
      // change1.classList.toggle('w3-animate-left');
        change1.classList.replace('w3-animate-top','w3-animate-left');
        change1.innerText="Login";  
        flag=0;
      }
  }



  function review(a)
  {

      var img1=document.getElementById("img1");
      var img2=document.getElementById("img2");
      var img3=document.getElementById("img3");
      var img4=document.getElementById("img4");

      var text1=document.getElementById("text-img1");
      var text2=document.getElementById("text-img2");
      var text3=document.getElementById("text-img3");
      var text4=document.getElementById("text-img4");
  if(a==1)
  {   
      img1.classList.remove('imgDisable');  
      img2.classList.toggle('imgDisable','imgDisable');
      img3.classList.toggle('imgDisable','imgDisable');
      img4.classList.toggle('imgDisable','imgDisable');


      text1.classList.remove('textdisable');
      text2.classList.toggle('textdisable','textdisable');
      text3.classList.toggle('textdisable','textdisable');
      text4.classList.toggle('textdisable','textdisable');
  }
  else if(a==2)
  {     
        img2.classList.remove('imgDisable');  
        img1.classList.toggle('imgDisable','imgDisable');
        img3.classList.toggle('imgDisable','imgDisable');
        img4.classList.toggle('imgDisable','imgDisable');

        text2.classList.remove('textdisable');
        text1.classList.toggle('textdisable','textdisable');
        text3.classList.toggle('textdisable','textdisable');
        text4.classList.toggle('textdisable','textdisable');
  }
  else if(a==3)
  {
    img3.classList.remove('imgDisable','imgDisable');  
    img1.classList.toggle('imgDisable','imgDisable');
    img2.classList.toggle('imgDisable','imgDisable');
    img4.classList.toggle('imgDisable','imgDisable');

    text3.classList.remove('textdisable');
    text1.classList.toggle('textdisable','textdisable');
    text2.classList.toggle('textdisable','textdisable');
    text4.classList.toggle('textdisable','textdisable');
  }
  else if(a==4)
  {
    img4.classList.remove('imgDisable');  
    img1.classList.toggle('imgDisable','imgDisable');
    img2.classList.toggle('imgDisable','imgDisable');
    img3.classList.toggle('imgDisable','imgDisable');

    text4.classList.remove('textdisable');
    text1.classList.toggle('textdisable','textdisable');
    text2.classList.toggle('textdisable','textdisable');
    text3.classList.toggle('textdisable','textdisable');
  }

  console.info(a);
}


function address()
{
  var address= document.getElementById('signup');
  address.style.display="none";
  var qw = document.getElementById('addre');
  qw.style.display="block";
}




$('.js-wp-1').waypoint(function(direction){
    $('.js-wp-1').addClass('animated fadeInLeft ');
},{
    offset:'90%'
});
$('.js-wp-2').waypoint(function(direction){
    $('.js-wp-2').addClass('animated fadeInUp ');
},{
    offset:'90%'
});
$('.js-wp-3').waypoint(function(direction){
    $('.js-wp-3').addClass('animated fadeInRight ');
},{
    offset:'90%'
});
$('.js-wp-4').waypoint(function(direction){
    $('.js-wp-4').addClass('animated fadeInDown ');
},{
    offset:'90%'
});
$('.js-wp-5').waypoint(function(direction){
    $('.js-wp-5').addClass('animated fadeInDown ');
},{
    offset:'90%'
});
$('.js-wp-6').waypoint(function(direction){
    $('.js-wp-6').addClass('animated fadeInDown');
},{
    offset:'90%'
});
$('.js-wp-7').waypoint(function(direction){
    $('.js-wp-7').addClass('animated fadeInDown');
},{
    offset:'90%'
});
$('.js-wp-8').waypoint(function(direction){
    $('.js-wp-8').addClass('animated fadeInDown ');
},{
    offset:'90%'
});
$('.js-wp-9').waypoint(function(direction){
    $('.js-wp-9').addClass('animated bounceInUp ');
},{
    offset:'90%'
});
$('.js-wp-10').waypoint(function(direction){
    $('.js-wp-10').addClass('animated bounceInUp ');
},{
    offset:'90%'
});
$('.js-wp-11').waypoint(function(direction){
    $('.js-wp-11').addClass('animated bounceInUp ');
},{
    offset:'90%'
});
$('.js-wp-12').waypoint(function(direction){
    $('.js-wp-12').addClass('animated bounceInUp ');
},{
    offset:'90%'
});

$('.js-wp-13').waypoint(function(direction){
    $('.js-wp-13').addClass('animated fadeInLeft ');
},{
    offset:'90%'
});
$('.js-wp-14').waypoint(function(direction){
    $('.js-wp-14').addClass('animated fadeInUp ');
},{
    offset:'90%'
});
$('.js-wp-15').waypoint(function(direction){
    $('.js-wp-15').addClass('animated fadeInRight ');
},{
    offset:'90%'
});
$('.js-wp-16').waypoint(function(direction){
    $('.js-wp-16').addClass('animated slideInLeft ');
},{
    offset:'90%'
});

$(document).ready(function(){
   
    $(window).scroll(function(){
        
        if ($(window).scrollTop() > 130) {
            // var a = document.getElementById('nav-des');
            // a.style.backgroundColor="#E22727";
            $('#nav-des').addClass('nav-design');
            $('#nav-des1').addClass('nav-design1');
            $('#nav-des2').addClass('nav-design1');
            $('#nav-des3').addClass('nav-design1');
            $('#nav-des4').addClass('nav-design1');
            $('#nav-des5').addClass('nav-design1');
            $('#nav-des').addClass('animated bounceInDown')
        }
        if ($(window).scrollTop() < 201) {
            // var v = document.getElementById('nav-des');
            // v.style.backgrounColor="#f8f9fa";
            $('#nav-des').removeClass('nav-design');
            $('#nav-des1').removeClass('nav-design1');
            $('#nav-des2').removeClass('nav-design1');
            $('#nav-des3').removeClass('nav-design1');
            $('#nav-des4').removeClass('nav-design1');
            $('#nav-des5').removeClass('nav-design1');
            $('#nav-des').removeClass('animated bounceInDown');
            // $('#nav-des').style.backgroundColor="#f8f9fa";
        }
        
    });  
});

function reg()
{
    window.open("www.google.com","_self");
}