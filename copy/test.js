//вытащить элемент по его ID
function el(el_id){
	return document.getElementById( el_id ); 
}

//подсчитать результат теста
function calc_result(){
	//заготовки для ответа и числа правильных ответов
    all_answer = "";

	//цикл по всем задачам
    tasks = document.getElementsByClassName( 'divtask' );
	for(num_task=0; num_task < tasks.length; num_task++){
		//получить номер вопроса
		line = tasks[num_task].innerHTML;
		space_pos = line.indexOf(' ');
		quest_num = line.slice( 0,space_pos ).trim();

		//получить реальный и правильный ответы
		real_answer = el("text_answ"+num_task).value.trim();

		//сформировать кусок строки ответов
		all_answer += " "+quest_num  + ": " + real_answer +";";

	}
	//вывести результаты проверки
	el("itog_text").value = all_answer;
	el('form_itog').submit();

}

//действия при загрузке страницы
window.onload = function(){
	//очистить результаты проверки
	el("itog_text").value = " ";
}

//добавить обработчики событий
el('itog_btn').addEventListener('click', calc_result); 