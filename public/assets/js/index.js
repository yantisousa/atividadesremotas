$('.btn-edit').click(function(){
});
function excluir(id) {
    console.log(id);
    $.ajax({
        url: '/disciplines/destroy/' + id,
        type: 'get',
        success: function () {
            location.reload()
        }
    });

}

