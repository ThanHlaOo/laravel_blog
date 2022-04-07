@if(session('alert'))
  
<script>

setTimeout(function (){
    let toastInfo = @json(session('alert'));
    Swal.fire({
    position: 'center',
    icon:  toastInfo.icon,
    title: toastInfo.title,
    showConfirmButton: false,
    timer: 1500
    })
},1000)

</script>

@endif