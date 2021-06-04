







jQuery("#chatbot").click(function () {
    (function(d, m){
        var kommunicateSettings = 
            {"appId":"3c3193c66f9389bf3c3a0d3583e0654bf","popupWidget":true,"automaticChatOpenOnNavigation":true};
        var s = document.createElement("script"); s.type = "text/javascript"; s.async = true;
        s.src = "https://widget.kommunicate.io/v2/kommunicate.app";
        var h = document.getElementsByTagName("head")[0]; h.appendChild(s);
        window.kommunicate = m; m._globals = kommunicateSettings;
    })(document, window.kommunicate || {});
});



