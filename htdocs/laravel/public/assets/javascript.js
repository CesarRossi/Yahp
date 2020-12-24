(function(win,doc){
	'use strict';
	function confirmaExclusao(event){
		event.preventDefault();
		if(confirm("Deseja mesmo excluir este produto?")){
			console.log("teste");
			/*let ajax = new XMLHttpRequest();
			ajax.open("DELETE", urlAjax);
			ajax.onreadystatechange = function(){
				if(ajax.readyState === 4 && ajax.status = 200){
					console.log(idExcluir);
				}
			}
			ajax.send();*/
		}else{
			console.log("teste2");
			return false;
		}
	}
	if(document.querySelector('.js-del')){
		console.log('Progressos');
		var btn = document.querySelectorAll('.js-del');
		for(var i = 0; i<btn.length; i++){
			btn[i].addEventListener('click', confirmaExclusao,false);
		}
	}
})(window,document)// JavaScript Document



