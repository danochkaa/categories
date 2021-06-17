//var listDiv = document.getElementById("list");

var listDiv = $("#list");
var page = 1;

var blogs = [];
var inProgress = false; 

function getBlogs(){
	inProgress = true;
	$.ajax({
		method: "GET",
		url: "api/blog/get.php?page="+page
	}).done(function(data) {
		data = JSON.parse(data);

		blogs = blogs.concat(data);

		if(data.length>0) showBlogs(blogs);
		inProgress = false;
	}).fail(function(err){
		console.log(err);as
	})

}

getBlogs();

function showBlogs(blogs) {
	var listHTML = "";

	for (var i = 0; i < blogs.length; i++) {
		listHTML+= "<div>" +
					"<img src='" + blogs[i].img + "' width='200px'>" +
					"<h3>" + blogs[i].id + "</h3>" +
					"<h3>" + blogs[i].title + "</h3>" +
					"<p>" + blogs[i].description + "</p>" +
					"</div>";
}
listDiv.html(listHTML);
}

function saveBlog(e) {
	e.preventDefault();
	var titleInp = $("#title");
	var descInp = $("#description");
	var imgInp = $("#img");

	var fm = new FormData();
	fm.append('title', titleInp.val());
	fm.append('description', descInp.val());
	fm.append('img', imgInp[0].files[0]);


	$.ajax ({
		method:"POST",
		url: "api/blog/save.php",
		data: fm,
		processData: false,
		contentType: false
	}).done(function(data){
		getBlogs();
		titleInp.val('');
		descInp.val('');
	}).fail(function(err){
		console.log(err);
	});

}


function deleteBlog(e) {
	e.preventDefault();
	var idInp = $("#id");

	var newBlog = {
		id: idInp.val(),
	}

	$.ajax ({
		method:"POST",
		url: "api/blog/delete.php",
		data: newBlog


	}).done(function(data){
		getBlogs();
		idInp.val('');
	}).fail(function(err){
		console.log(err);
	});

}

function findBlogs(){
	var search = $("#search").val();
	$.ajax({
		method: "GET",
		url: "api/blog/search.php?key=" + search

	}).done(function(data){
		data = JSON.parse(data);
		showBlogs(data);
	})
}


$(window).scroll(function(){

	if(!inProgress && ($(window).height() + $(window).scrollTop() >= $(document).height()-200)){
		page++;
		getBlogs();
	}

});