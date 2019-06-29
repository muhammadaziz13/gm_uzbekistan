function set_data() {
	
	my_obj = localStorage.getItem("news_object");
	news_obj = JSON.parse(my_obj);
	document.getElementById('category').innerHTML = " " + news_obj['category'];
	document.getElementById('title').innerHTML = news_obj['title'];
	document.getElementsByClassName('textpart1')[0].innerHTML = news_obj['description'];
	document.getElementById('count').innerHTML = news_obj['view_count'];
	document.getElementById('datetime').innerHTML = news_obj['time'] + " / " + news_obj['date'];
	var main_image = document.getElementById('main_reading_img');

	switch(news_obj['image_name'].substr(0, 1)){

		case 'b': {main_image.src = "../Images/Business/" + news_obj['image_name'];}
		break;
		case 'c': main_image.src = "Images/Culturre/" + news_obj['image_name'];
		break; 
		case 's': main_image.src = "../Images/Science/" + news_obj['image_name'];
		break; 
		case 'S': main_image.src = "../Images/Sport/" + news_obj['image_name'];
		break; 
		case 't': main_image.src = "../Images/Tech/" + news_obj['image_name'];
		break; 
		case 'T': main_image.src = "../Images/Business/" + news_obj['image_name'];
		break; 
		case 'b': main_image.src = "../Images/Business/" + news_obj['image_name'];
		break; 
		case 'b': main_image.src = "../Images/Business/" + news_obj['image_name'];
		break; 
	}
}