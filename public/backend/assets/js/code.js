$(function(){
    $(document).on('click','#delete',function(e){
        e.preventDefault();
        var link = $(this).attr("href");
        Swal.fire({
            title: 'Are you sure?',
            text: "Delete This Data?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = link
                Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
                )
            }
        })
    });
});

$(function(){
    $(document).on('click','#accept',function(e){
        e.preventDefault();
        var link = $(this).attr("href");
        Swal.fire({
            title: 'Are you sure?',
            text: "Accept This Payment?",
            icon: 'info',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, Accept it!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = link
                Swal.fire(
                'Deleted!',
                'Payment has been Accepted.',
                'success'
                )
            }
        })
    });
});

$(function(){
    $(document).on('click','#decline',function(e){
        e.preventDefault();
        var link = $(this).attr("href");
        Swal.fire({
            title: 'Are you sure?',
            text: "Decline This Payment?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, Decline it!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = link
                Swal.fire(
                'Deleted!',
                'Payment has been Declined.',
                'success'
                )
            }
        })
    });
});

$('.popup-image').magnificPopup({
    type: 'image',
    gallery: {
        enabled: true
    }
});
