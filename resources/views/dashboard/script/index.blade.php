<script type="text/javascript" src={{ asset('me/dist/js/trix.js')}}></script>
<style>
  trix-toolbar [data-trix-button-group="file-tools"]{
    display: none;
  }
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript">
        $('#image').change(function(){
               
        let reader = new FileReader();
        reader.onload = (e) => { 
          $('#preview-image').attr('src', e.target.result); 
        }
        reader.readAsDataURL(this.files[0]); 
      
       });

       document.addEventListener('trix-file-accept', function(e) {
         e.preventDefault()
       });
      </script>
</style>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src= {{ asset('me/assets/js/vendor/jquery-slim.min.js') }}><\/script>')</script><script src= {{asset('me/dist/js/bootstrap.bundle.min.js')}}></script>