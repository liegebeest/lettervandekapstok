$.getJSON("http://lettervandekapstok.be/verhaaltjes.php", function(json){
        $('#bewerkdropdown').empty();
        $('#bewerkdropdown').append($('<option>').text("Selecteer een verhaal").attr('value', ''));
        $.each(json, function(i, obj){
                $name = obj.id + "|" + obj.titel
                $('#bewerkdropdown').append($('<option>').text($name).attr('value', obj.id));
        });
});