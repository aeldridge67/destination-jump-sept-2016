(function() {
    var path = '//easy.myfonts.net/v2/js?sid=123535(font-family=Grilled+Cheese+BTN)&sid=123537(font-family=Grilled+Cheese+BTN+Cond+Bold)&key=dbGcf8CsO0',
        protocol = ('https:' == document.location.protocol ? 'https:' : 'http:'),
        trial = document.createElement('script');
        
    trial.type = 'text/javascript';
	trial.async = true;
	trial.src = protocol + path;
	var head = document.getElementsByTagName("head")[0];
	head.appendChild(trial);
})();