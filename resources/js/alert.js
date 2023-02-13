document.querySelector(".first").addEventListener('click', function(){
    Swal.fire({
      title: 'Yakin untuk menghapus ?',
    showDenyButton: true,
    showCancelButton: true,
    confirmButtonText: 'Iya',
    denyButtonText: `Tidak`,
  }).then((result) => {
    /* Read more about isConfirmed, isDenied below */ 
    if (result.isConfirmed) {
      Swal.fire('Data Terhapus !', '', 'success')
    } else if (result.isDenied) {
      Swal.fire('Data Tidak Dihapus', '', 'info')
    }
    });
  });
