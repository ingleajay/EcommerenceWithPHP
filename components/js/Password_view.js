function view() {
  var pwd1 = document.getElementById('pwd1');
  var pwd2 = document.getElementById('pwd2');
  var pwd3 = document.getElementById('pwd3');
  var eyes1 = document.getElementById('eyes1');
  var eyes2 = document.getElementById('eyes2');
  var eyes3 = document.getElementById('eyes3');
  eyes1.addEventListener('click',visible_toggle1);
  eyes2.addEventListener('click',visible_toggle2);
  eyes3.addEventListener('click',visible_toggle3);
function visible_toggle1(){
	eyes1.classList.toggle('active');
	(pwd1.type == 'password') ? pwd1.type ='text': pwd1.type ='password';
}
function visible_toggle2(){
	eyes2.classList.toggle('active');
	(pwd2.type == 'password') ? pwd2.type ='text': pwd2.type ='password';
}
function visible_toggle3(){
	eyes3.classList.toggle('active');
	(pwd3.type == 'password') ? pwd3.type ='text': pwd3.type ='password';
}
}

