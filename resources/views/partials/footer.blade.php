@extends('layouts.app')
        <footer class="page-footer teal">
            <div class="">
              <div class="row">
                <div class="col m3 s12">
                  <h5 class="white-text">Grow<span class="yellow-text text-ligthen-3">Up</span></h5>
                  <p class="grey-text text-lighten-4">We are a team of 
                    college students working on this project like it's our
                    full time job.We love to code.Just do it, Ipsum. Proin gravida nibh vel.
                  </p>
        
        
                </div>
                <div class="col m3 s12">
                  <h5 class="white-text">Settings</h5>
                  <ul>
                    <li><a class="white-text" href="#!">Link 1</a></li>
                    <li><a class="white-text" href="#!">Link 2</a></li>
                    <li><a class="white-text" href="#!">Link 3</a></li>
                    <li><a class="white-text" href="#!">Link 4</a></li>
                  </ul>
                </div>
                <div class="col m3 s12">
                  <h5 class="white-text">Connect</h5>
                  <ul>
                    <li><a class="white-text" href="#!">Link 1</a></li>
                    <li><a class="white-text" href="#!">Link 2</a></li>
                    <li><a class="white-text" href="#!">Link 3</a></li>
                    <li><a class="white-text" href="#!">Link 4</a></li>
                  </ul>
                </div>
                <div class="col m3 s12">
                    <h5 class="white-text">Contact Us</h5>
                    <ul>
                        <li><a class="white-text" href="#!">Link 1</a></li>
                        <li><a class="white-text" href="#!">Link 2</a></li>
                        <li><a class="white-text" href="#!">Link 3</a></li>
                        <li><a class="white-text" href="#!">Link 4</a></li>
                    </ul>
                </div>
              </div>
            </div>
            <div class="footer-copyright">
              <div class="container">
              Made by <a class="brown-text text-lighten-3" href="#">Elinyx Solutions Ltd.</a>
              </div>
            </div>
          </footer>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var instances = M.AutoInit();
        });
    </script>
</body>
</html>
