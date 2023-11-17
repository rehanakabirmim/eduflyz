import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

$(document).ready(function(){
    $(document).on("click","#softDelete",function(){
        
        var deleteID=$(this).data('id');
        $("#modal_id").val(deleteID);
    });
        
});