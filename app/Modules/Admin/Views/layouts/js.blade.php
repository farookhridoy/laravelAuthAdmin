<script src="{{ asset('backend/plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('backend/plugins/bootstrap/js/bootstrap.js') }}"></script>
<script src="{{ asset('backend/js/admin.js') }}"></script>
<script src="{{ asset('backend/js/jquery-confirm.min.js') }}"></script>
<script src="{{ asset('backend/js/summernote.js') }}"></script>

<script src="https://cdn.tiny.cloud/1/7qbbc3pfat70fau5frl0e9cu9hk2a5c2wa4p0rban43rka0j/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
   

   $(document).ready(function() {
   	 
  		tinymce.init({selector:'textarea#tiny'});
   });
 </script>
