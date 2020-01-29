const MODAL = document.querySelector('#modal');
const MODAL_OPEN_BTN = document.querySelectorAll('#modal_update');
const MODAL_FORMS = document.querySelectorAll('.modal-form');
const MODAL_CLOSE_BTN = document.querySelector('#close');

for ( let index = 0; index < MODAL_OPEN_BTN.length; index++) {
	MODAL_OPEN_BTN[index].addEventListener('click',function(){
		MODAL.style.display="block";
		
		for (let i = 0; i < MODAL_FORMS.length; i++) {
			MODAL_FORMS[i].style.display="none";
		}

		MODAL_FORMS[index].style.display="block";
		
	});
}

MODAL_CLOSE_BTN.addEventListener('click',function(){
	MODAL.style.display="none";
})