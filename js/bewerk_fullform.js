function fillMe() {
    var obj = document.getElementById("bewerkdropdown");
    var id = obj.options[obj.selectedIndex].text;
    var id_pieces = id.split("|");
    var real_id = id_pieces[0];
    
    $.getJSON("http://lettervandekapstok.be/verhaaltjes.php", function(json){
        $.each(json, function(i, obj){
            if(real_id == obj.id)
            {   
               
                document.getElementById("titel").value = obj.titel;
                document.getElementById("genre").value = obj.genre;
                document.getElementById("inl").value = obj.inleiding;
               
                raw_doc = obj.raw.split("|", -1);
                var i = 0;
                
                if(raw_doc[i].length> 0)
                {
                    document.getElementById("pt1").value = raw_doc[i];
                }
                i++;
                if(raw_doc[i].length> 0)
                {
                    document.getElementById("p1").value = raw_doc[i];
                }
                i++;
                if(raw_doc[i].length> 0)
                {
                    document.getElementById("pt2").value = raw_doc[i];
                }
                i++;
                if(raw_doc[i].length> 0)
                {
                    document.getElementById("p2").value = raw_doc[i];
                }
                i++;
                if(raw_doc[i].length> 0)
                {
                    document.getElementById("pt3").value = raw_doc[i];
                }
                i++;
                if(raw_doc[i].length> 0)
                {
                    document.getElementById("p3").value = raw_doc[i];
                }
                i++;
                if(raw_doc[i].length> 0)
                {
                    document.getElementById("pt4").value = raw_doc[i];
                }
                i++;
                if(raw_doc[i].length> 0)
                {                    
                    document.getElementById("p4").value = raw_doc[i];
                }
            }
        });
    });
    
}