$.getJSON("http://lettervandekapstok.be/valveverhaal.php", function(json){
        $.each(json, function(i, obj){
            obj.titel
            obj.genre
            obj.inleiding
            obj.raw
        });
});