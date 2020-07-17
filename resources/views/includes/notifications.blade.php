@if(Session::has('success'))
  <script type="text/javascript">
    toastr.options = {
      closeButton: true,
      progressBar: true,
    }
    toastr.success("{{ session()->get('success') }}")
  </script>  
@elseif(Session::has('error'))  
  <script type="text/javascript">
    toastr.options = {
      closeButton: true,
      progressBar: true,
    }
    toastr.error("{{ session()->get('error') }}")
  </script>
@endif