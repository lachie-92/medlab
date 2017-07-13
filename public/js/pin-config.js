var pin_config = {
	'default':{
		'pinShadow':'#000', //shadow color below the points
		'pinShadowOpacity':'50', //shadow opacity, value, 0-100
	},
	'points':[
	{
		'shape':'rectangle',//choose the shape of the pin circle or rectangle
		'hover': '<u><b>Sydney, Australia</b></u><br>Medlab Clinical LTD - Head Office<br><img src="https://www.medlab.co/img/logo_site.png"; width="250px";>',//the content of the hover popup
		'pos_X':915,
		'pos_Y':415,
		'width':12,//width of the rectangle
		'height':12,//height of the rectangle
		'outline':'#D2D2FF',//outline color of the pin
		'thickness':1,//thickness of the line (0 to hide the line)
		'upColor':'#0000FF',//color of the pin when map loads
		'overColor':'#3399ff',//color of the pin when mouse hover
		'downColor':'#00ffff',//color of the pin when clicked 
		//(trick, if you make this pin un-clickable > make the overColor and downColor the same)
		'url':'https://www.medlab.co',//URL of this pin
		'target':'new_window',//'new_window' opens URL in new window//'new_window' opens URL in the same window //'none' pin is not clickable
		'enable':true,//true/false to enable/disable this pin
	},
	{
		'shape':'rectangle',
		'hover': '<u><b>Rancho Santa Margarita, California, USA<br><img src="http://inmedtech.co/medlab_Nutraceuticals_Logo_landscape.png"; width="250px";>',
		'pos_X':87,
		'pos_Y':168,
		'width':12,//width of the rectangle
		'height':12,//height of the rectangle
		'outline':'#D2D2FF',//outline color of the pin
		'thickness':1,//thickness of the line (0 to hide the line)
		'upColor':'#0000FF',//color of the pin when map loads
		'overColor':'#3399ff',//color of the pin when mouse hover
		'downColor':'#00ffff',//color of the pin when clicked 
		//(trick, if you make this pin un-clickable > make the overColor and downColor the same)
		'url':'http://inmedtech.co',//URL of this pin
		'target':'new_window',//'new_window' opens URL in new window//'new_window' opens URL in the same window //'none' pin is not clickable
		'enable':true,//true/false to enable/disable this pin
	},
	{
		'shape':'circle',
		'hover': 'Shanghai, China - Vinuxbuy - Medlab Reseller',
		'pos_X':828,
		'pos_Y':185,
		'diameter':8,
		'outline':'#FFCECE',
		'thickness':1,
		'upColor':'#7AA43F',
		'overColor':'#990000',
		'downColor':'#00ffff',
		'url':'http://www.vinuxbuy.com/portal/goodThings/83365257/index/p',
		'target':'new_window',
		'enable':true,
	},
	{
		'shape':'circle',
		'hover': 'London, UK',
		'pos_X':452,
		'pos_Y':104,
		'diameter':8,
		'outline':'#FFCECE',
		'thickness':1,
		'upColor':'#7AA43F',
		'overColor':'#990000',
		'downColor':'#00ffff',
		'url':'#',
		'target':'new_window',
		'enable':true,
	},
	{
		'shape':'circle',
		'hover': 'Singapore, Singapore',
		'pos_X':786,
		'pos_Y':287,
		'diameter':8,
		'outline':'#FFCECE',
		'thickness':1,
		'upColor':'#7AA43F',
		'overColor':'#990000',
		'downColor':'#00ffff',
		'url':'#',
		'target':'new_window',
		'enable':true,
	},
	{
		'shape':'circle',
		'hover': 'New Zealand - Nutrisearch',
		'pos_X':980,
		'pos_Y':438,
		'diameter':8,
		'outline':'#FFCECE',
		'thickness':1,
		'upColor':'#7AA43F',
		'overColor':'#990000',
		'downColor':'#00ffff',
		'url':'http://www.nutrisearch.co.nz/',
		'target':'new_window',
		'enable':true,
	},
	{
		'shape':'circle',
		'hover': 'Hong Kong - Auswell Limited',
		'pos_X':811,
		'pos_Y':210,
		'diameter':8,
		'outline':'#FFCECE',
		'thickness':1,
		'upColor':'#7AA43F',
		'overColor':'#990000',
		'downColor':'#00ffff',
		'url':'http://www.html5interactivemaps.com',
		'target':'new_window',
		'enable':true,
	},
	{
		'shape':'circle',
		'hover': 'Hong Kong - Integrated Nutraceuticals Limited',
		'pos_X':811,
		'pos_Y':210,
		'diameter':8,
		'outline':'#FFCECE',
		'thickness':1,
		'upColor':'#7AA43F',
		'overColor':'#990000',
		'downColor':'#00ffff',
		'url':'http://www.inl.asia/',
		'target':'new_window',
		'enable':true,
	},

	]
}
