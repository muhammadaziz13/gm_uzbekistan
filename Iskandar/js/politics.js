/*window.onscroll = function() {scrollcha();} 
	var menu=document.getElementsByClassName('menu')[0];
	var lang = document.getElementsByClassName('lang')[0];
	function scrollcha () {
		if (100 < window.pageYOffset) {
			menu.classList.add("menuex");
			lang.style.display=("none");
			menu.style.background=("-webkit-radial-gradient(#24AFFF, #FFF)");
			menu.style.width=("80%");
			}
		else {
			menu.classList.remove("menuex");
			lang.style.display=("block");
			menu.style.background=("none");
			
			menu.style.width=("100%");
			}
	}*/
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += "responsive";
    } else {
        x.className = "topnav";
    }
}

function call_ajax (page_name) {
	$.ajax({
		type: "GET",
		url: "myController.php",
		data: {
			page: "other_pages",
			news_page: page_name
		},
		success: function(resp) {
			var parent_element = document.getElementsByClassName('m_rightside')[0];
			
			while(parent_element.firstChild){
				parent_element.removeChild(parent_element.firstChild);
			}

			console.log(parent_element);
			var the_most_interesting =  document.getElementById('the_most_interesting');
			var news = resp.split('&&');

			var myBestNews = news[0].split('$$');

			var main_title = document.getElementsByClassName('a_top1')[0];
			main_title.id = myBestNews[7];
			main_title.setAttribute('onclick', 'pass_read_page(' + myBestNews[7] + ')');
			var theMostNews = document.getElementById(main_title.id);

            theMostNews.innerHTML = myBestNews[3] + "<br><br>";
            var desc = document.getElementById('main_desc');
            var my = myBestNews[2];
			desc.innerHTML = "" + my.substr(0, 180);
			document.getElementById('main_date').innerHTML = " " + myBestNews[4];
			document.getElementById('view_count').innerHTML = " " + myBestNews[1];

			var myinterestingNews = news[1].split('$$');
            // the_most_interesting.innerHTML = myinterestingNews[3];
            // document.getElementById('main_i_date').innerHTML = " " + myinterestingNews[4];
			// document.getElementById('count_i_view').innerHTML = " " + myinterestingNews[1];
			
			
			
			var main_image = document.getElementById('main_image');
			console.log(myBestNews[6]);
			var my1 = myBestNews[6];
			switch(my1.substr(0, 1)){

				case 'b': {main_image.src = "../Images/Business/" + myBestNews[6];}
				break;
				case 'c': main_image.src = "../Images/Culturre/" + myBestNews[6];
				break; 
				case 's': main_image.src = "../Images/Science/" + myBestNews[6];
				break; 
				case 'S': main_image.src = "../Images/Sport/" + myBestNews[6];
				break; 
				case 't': main_image.src = "../Images/Tech/" + myBestNews[6];
				break; 
				case 'T': main_image.src = "../Images/Business/" + myBestNews[6];
				break; 
				case 'b': main_image.src = "../Images/Business/" + myBestNews[6];
				break; 
				case 'b': main_image.src = "../Images/Business/" + myBestNews[6];
				break; 
			}

			for (var i = 2; i < news.length-1; i++) {
				var every_news = news[i].split('$$');
				set_news(every_news[7], every_news[3], every_news[2], every_news[0], every_news[5], every_news[1], parent_element);
			};

		}
	});
}

function set_news(news_id, title, description, category, insertdate, view_count, parent_element) {
	var elem1 = document.createElement('div');
	elem1.className = 'everytopnews';
	elem1.id = news_id;
	elem1.setAttribute('onclick', 'pass_read_page(' + news_id + ')');
	//var elem2 = document.createElement('div');
	//elem2.className = 'backev_n';
	var elem3 = document.createElement('div');
	elem3.className = 'topev_news';
	var elem4 = document.createElement('div');
	elem4.className = 'boxesev_news';
	var elem5 = document.createElement('a');
	elem5.href = '#';
	elem5.innerHTML = title;
	elem4.appendChild(elem5);
	elem3.appendChild(elem4);

	var elem6 = document.createElement('div');
	elem6.className = 'bottomev_news';
	var elem7 = document.createElement('div');
	elem7.className = 'bottomsigns';
	var elem8 = document.createElement('div');
	elem8.className = 'rounda1';
	elem8.style = 'color:red';
	var elem9 = document.createElement('p');
	elem9.innerHTML = " " + category;
	var elem10 = document.createElement('i');
	elem10.className = 'fa fa-clock-o';
	elem10.innerHTML = " " + insertdate;
	var elem11 = document.createElement('span');
	elem11.className = 'fa fa-eye';
	elem11.innerHTML = " " + view_count;

	elem7.appendChild(elem8);
	elem7.appendChild(elem9);
	elem7.appendChild(elem10);
	elem7.appendChild(elem11);
	elem6.appendChild(elem7);

	//elem1.appendChild(elem2);
	elem1.appendChild(elem3);
	elem1.appendChild(elem6);

	var myHr = document.createElement('hr');
	
	parent_element.appendChild(elem1);
	parent_element.appendChild(myHr);
}

function pass_read_page(news_id) {
	$.ajax({
		type: "GET",
		url: "myController.php",
		data: {
			page: "reading",
			news_id: news_id
		},
		success: function(resp) {
			var news_details = resp.split('$$');
			news_detail = {
			           "category": news_details[0], 
		               "time": news_details[5],
		               "date": news_details[4], 
		               "view_count": news_details[3],
		           	   "title": news_details[1],
		           	   "description": news_details[2],
		           	   "image_name": news_details[6]
		           	};

		    news_obj = JSON.stringify(news_detail);
		    localStorage.setItem("news_object", news_obj);
		    window.location.replace('reading.php');
		}
	});
} 