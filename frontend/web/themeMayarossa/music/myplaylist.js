/*
	For Edit This File Please Read Documentation
*/

var myPlaylist = [

	{
		mp3:'themeMayarossa/music/MayaRossa_the_show_must_go_on.mp3',
		title:'Шоу должно продолжаться',
		artist:'Maya Rossa',
		rating:5,
		buy:'#',
		//price:'17',
		duration:'0:38',
		cover:'themeMayarossa/music/MayaRossa_the_show_must_go_on.jpg'
	},

	{
		mp3:'themeMayarossa/music/MayaRossa_ya_vernus.mp3',
		title:'Я вернусь (Голос - дети)',
		artist:'Maya Rossa',
		rating:5,
		buy:'#',
		//price:'17',
		duration:'0:38',
		cover:'themeMayarossa/music/MayaRossa_ya_vernus.jpg'
	},

	{
		mp3:'themeMayarossa/music/MayaRossa_prodavets_kukol.mp3',
		title:'Продавец кукол',
		artist:'Maya Rossa',
		rating:5,
		buy:'#',
		//price:'17',
		duration:'0:38',
		cover:'themeMayarossa/music/MayaRossa_prodavets_kukol.jpg'
	},
	{
		mp3:'themeMayarossa/music/MayaRossa_Something\'s_Got_A_Hold_On_Me.mp3',
		title:'Something\'s_Got_A_Hold_On_Me',
		artist:'Maya Rossa',
		rating:5,
		buy:'#',
		//price:'17',
		duration:'0:38',
		cover:'themeMayarossa/music/MayaRossa_Something\'s_Got_A_Hold_On_Me.jpg'
	},

];
jQuery(document).ready(function ($) {
	$('.music-player-list').ttwMusicPlayer(myPlaylist, {
		currencySymbol:'$',
		buyText:'Скачать',
		tracksToShow:4,
		autoplay:false,
		ratingCallback:function(index, playlistItem, rating){
			//some logic to process the rating, perhaps through an ajax call
		},
		jPlayer:{
			swfPath: "http://www.jplayer.org/2.7.0/js/",
			supplied: "mp3",
			volume:  0.8,
			wmode:"window",
			solution: "html,flash",
			errorAlerts: true,
			warningAlerts: true
		}
	});
});