function Swal(result,title,txt,link){
    setTimeout(function() {
        swal({
            type: result,
            title: title,
            text: txt,
            timer: 1500,
            showConfirmButton: true
        }).then(function () {
            window.location = link;
        });
    });
}
