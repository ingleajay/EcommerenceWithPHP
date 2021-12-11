function View1(){

  var pass11= document.getElementById('pass_r1');
  var pass22= document.getElementById('pass_r2');

  var eyes_r1 = document.getElementById('eyes_r1');
  var eyes_r2 = document.getElementById('eyes_r2');

  eyes_r1.addEventListener('click',visible_toggle4);
  eyes_r2.addEventListener('click',visible_toggle5);

  function visible_toggle4(){
  eyes_r1.classList.toggle('active');
  (pass11.type == 'password') ? pass11.type ='text': pass11.type ='password';
  }
  function visible_toggle5(){
  eyes_r2.classList.toggle('active');
  (pass22.type == 'password') ? pass22.type ='text': pass22.type ='password';
  }
  
}