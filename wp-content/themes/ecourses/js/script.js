


/*
 * Set Up JW Player for the Home Page
 */
jwplayer("videoContainer").setup({
	flashplayer: "/wp-content/themes/ecourses/player.swf",
	height: 282,
	width: 500,
	playlist: [{
		'file': '/video/hero.f4v',
		'image': '/wp-content/themes/ecourses/images/temp_videoSplashScreen.jpg',
		'title': 'eCourses Overview'
	},{
		'file': '/video/faculty.f4v',
		'image': '/wp-content/themes/ecourses/images/temp_videoSplashScreen.jpg',
		'title': 'Faculty Testimonials'
	},{
		'file': '/video/students.f4v',
		'image': '/wp-content/themes/ecourses/images/temp_videoSplashScreen.jpg',
		'title': 'Student Testimonial'
	},{
		'file': '/video/tour.f4v',
		'image': '/wp-content/themes/ecourses/images/temp_videoSplashScreen.jpg',
		'title': 'eCourses Tour'
	}],
	"playlist.size": 0
});


$("#vidFaculty").click(function() {
	jwplayer("videoContainer").playlistItem(1);
});

$("#vidStudents").click(function() {
	jwplayer("videoContainer").playlistItem(2);
});

$("#vidTour").click(function() {
	jwplayer("videoContainer").playlistItem(3);
});


$(document).ready(function()
{

	$("input[type=text]").focus(function() {
		if (this.value == this.defaultValue)
		{  
			this.value = '';  
		}
  
		if(this.value != this.defaultValue)
		{  
			this.select();  
		}
	});
  
	$("input[type=text]").blur(function() {  
		if ($.trim(this.value) == '')
		{  
			this.value = (this.defaultValue ? this.defaultValue : '');  
		}
	});


}); 











