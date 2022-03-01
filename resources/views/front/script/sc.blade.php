<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src= {{ asset('me/js/dist/popover.js') }}></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src= {{ asset('me/assets/js/vendor/jquery-slim.min.js') }}><\/script>')</script><script src= {{asset('me/dist/js/bootstrap.bundle.min.js')}}></script>
      <script>
        window.onload = () => {
      // (A) GET ALL IMAGES
      let all = document.getElementsByClassName("zoomE");
     
      // (B) CLICK TO GO FULLSCREEN
      if (all.length>0) { for (let i of all) {
        i.onclick = () => {
          // (B1) EXIT FULLSCREEN
          if (document.fullscreenElement != null || document.webkitFullscreenElement != null) {
            if (document.exitFullscreen) { document.exitFullscreen(); }
            else { document.webkitCancelFullScreen(); }
          }
     
          // (B2) ENTER FULLSCREEN
          else {
            if (i.requestFullscreen) { i.requestFullscreen(); }
            else { i.webkitRequestFullScreen(); }
          }
        };
      }}
    };
    </script>