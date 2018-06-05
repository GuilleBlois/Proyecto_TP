@include('layouts.headerTie')
        @if (session('status'))
            <div class="modal-aviso">
                <i class="fa fa-times"></i>
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            </div>
        @endif
        <section id="pant1">
            <div class="img-portada img-home-1"></div>
            <div class="img-portada img-home-2"></div>
            <div class="img-portada img-home-3"></div>
            <div class="register-box">
                <div class="adorno adorno-fuegos-1"></div>
                <div class="adorno adorno-fuegos-2"></div>
                <!-- Formulario Registro -->
                <form class="form-reg-home" method="POST" action="{{ route('register') }}">
                @csrf
                    <input type="hidden" id="CSRF_TOKEN" value="{{csrf_token()}}">
                    <h2>Crea tu cuenta:</h2>
                    <p>Y comienza a disfrutar con nosotros:</p>
                    <input type="text" name="nombre" id="nombre" placeholder="Nombre">
                    <input type="text" name="apellidos" id="apellidos" placeholder="Apellidos">
                    <input type="email" name="email" id="registerEmail" placeholder="Email">
                    <input type="password" name="password" placeholder="Contraseña">
                    <input type="password" name="password_confirmation" placeholder="Repetir contraseña">
                    <span>Bacon ipsum dolor amet capicola salami pig, beef ribs swine short ribs bresaola beef corned beef kielbasa fatback. Leberkas kielbasa sirloin, shoulder beef ribs pork loin pork belly filet mignon.</span>
                    <button class="enviar" type="submit" value="Registrarte">Registrarte</button>
                </form>
                <!-- Fin formulario registro -->
            </div>
        </section>
        <section id="pant2">
            <div class="home-boxs row">
                <h2 class="home-h2">Ven a organizar tus fiestas con nosotros</h2>
                <div class="h-box">
                    <div class="img-box"><img src="{{URL::asset('/images/public_images/fiesta2.jpg')}}" alt="Foto fiesta"></div>
                    <div class="text-box">
                        <h3>Bacon Ipsum</h3>
                        <p>Bacon ipsum dolor amet capicola salami pig, beef ribs swine.</p>
                    </div>
                </div>
                <div class="h-box">
                    <div class="img-box"><img src="{{URL::asset('/images/public_images/boda2.jpg')}}" alt="foto boda"></div>
                    <div class="text-box">
                        <h3>Bacon Ipsum</h3>
                        <p>Bacon ipsum dolor amet capicola salami pig, beef ribs swine.</p>
                    </div>
                </div>
                <div class="h-box">
                    <div class="img-box"><img src="{{URL::asset('/images/public_images/celebracion2.jpg')}}" alt="foto celebracion"></div>
                    <div class="text-box">
                        <h3>Bacon Ipsum</h3>
                        <p>Bacon ipsum dolor amet capicola salami pig, beef ribs swine.</p>
                    </div>
                </div>
                <div class="adorno adorno-fuegos-3"></div>
                <div class="adorno adorno-fuegos-4"></div>
            </div>
        </section>
        <section id="pant3">
            <div class="row">
                <h2 class="home-h2">Descubre el potencial de tu fiesta</h2>
                <div class="home-boxs-3">
                    <div class="h-box-3">
                        <div class="h-box-3-img img-box">
                            <img src="{{URL::asset('/images/public_images/fiesta3.jpg')}}" alt="foto fiesta">
                        </div>
                        <div class="h-box-3-text">
                            <h3>Bacon ipsum dolor amet</h3>
                            <p>Bacon ipsum dolor amet capicola salami pig, beef ribs swine short ribs bresaola beef corned beef kielbasa fatback. Leberkas kielbasa sirloin, shoulder beef ribs pork loin pork belly filet mignon.</p>
                        </div>
                        <div class="adorno adorno-fuegos-2 adorno-fuegos-2-1"></div>
                    </div>
                    <div class="h-box-3">
                        <div class="h-box-3-text">
                            <h3>Bacon ipsum dolor amet</h3>
                            <p>Bacon ipsum dolor amet capicola salami pig, beef ribs swine short ribs bresaola beef corned beef kielbasa fatback. Leberkas kielbasa sirloin, shoulder beef ribs pork loin pork belly filet mignon.</p>
                        </div>
                        <div class="h-box-3-img img-box">
                            <img src="{{URL::asset('/images/public_images/boda3.jpg')}}" alt="foto boda">
                        </div>
                        <div class="adorno adorno-fuegos-1"></div>
                    </div>
                    <div class="h-box-3">
                        <div class="h-box-3-img img-box">
                            <img src="{{URL::asset('/images/public_images/celebracion3.jpg')}}" alt="foto celebracion">
                        </div>
                        <div class="h-box-3-text">
                            <h3>Bacon ipsum dolor amet</h3>
                            <p>Bacon ipsum dolor amet capicola salami pig, beef ribs swine short ribs bresaola beef corned beef kielbasa fatback. Leberkas kielbasa sirloin, shoulder beef ribs pork loin pork belly filet mignon.</p>
                        </div>
                        <div class="adorno adorno-fuegos-2 adorno-fuegos-2-2"></div>
                    </div>
                </div>
            </div>
        </section>
        <section id="pant4">
            <div class="row">
                <div class="img-box">
                    <img class="cocktail-n" src="{{URL::asset('/images/public_images/cocktail-turq.jpg')}}" alt="foto de un cocktail">
                    <img class="cocktail-p" src="{{URL::asset('/images/public_images/cocktail-p.jpg')}}" alt="foto de un cocktail">
                </div>
                <div class="home-4-text">
                    <h2>Bacon ipsum dolor amet</h2>
                    <p>Bacon ipsum dolor amet jowl ribeye jerky, kielbasa cupim boudin corned beef pork belly pork chuck ball tip filet mignon. Turducken drumstick chicken ham, jerky pork chop shoulder beef ribs swine prosciutto venison strip steak. Kielbasa bacon turducken ham meatball ribeye. Turducken chuck picanha, chicken prosciutto salami ribeye t-bone short loin flank pork belly beef.</p>
                    <p>Sirloin tail cupim capicola pork loin shank t-bone tenderloin picanha pork chop short loin burgdoggen strip steak andouille buffalo. Frankfurter short loin buffalo chicken shank kielbasa. Boudin chicken shoulder bresaola. Bacon frankfurter landjaeger turducken pork sirloin ribeye pork loin. Strip steak alcatra bacon shank tenderloin.</p>
                    <div class="adorno adorno-fuegos-2"></div>
                </div>
            </div>            
        </section>
        <footer>
            <div class="row">
                <div id="foot-1">
                    <div class="adorno adorno-fuegos-4"></div>
                    <h4>Contacto</h4>
                    <ul>
                        <li>
                            <a href="">Quienes Somos</a>
                        </li>
                        <li>
                            <a href="">Contacto</a>
                        </li>
                    </ul>
                    <h4>Dirección:</h4>
                    <p>Calle al Andalus, 2</p>
                    <p>cp: 29313</p>
                    <p>Villanueva del Trabuco, Málaga</p>
                    <p>958 205 236 / 666555888</p>
                    <p>info@tieparty.com</p>
                </div>
                <div id="foot-2">
                    <h4>Páginas legales:</h4>
                    <ul>
                        <li>Aviso legal</li>
                        <li>Política de Cookies</li>
                        <li>Política de privacidad</li>
                    </ul>
                </div>
                <div id="foot-3">
                    <!-- Formulario registro empresa -->
                    <form method="POST" action="{{ route('regemp') }}">
                    @csrf
                        <h4>Registro empresa: </h4>
                        <input type="text" name="nombre" placeholder="Nombre de la empresa">
                        <input type="text" name="apellidos" placeholder="Distintivo de la empresa">
                        <input type="email" name="email" placeholder="Email">
                        <input type="password" name="password" placeholder="Contraseña">
                        <input type="password" name="password_confirmation" placeholder="Repetir contraseña">
                        <input class="enviar" type="submit" value="Registrarte">
                    </form>
                    <!-- fin formulario registro empresa -->
                </div>
                <div id="foot-4">
                    <!-- Formulario login empresa -->
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <h4>Login empresa: </h4>
                        <input type="email" name="email" placeholder="Email">
                        <input type="password" name="password" placeholder="Contraseña">
                        <button class="enviar-white" type="submit" value="Entrar">Entrar</button>
                    </form>
                    <!-- Fin formulario login empresa -->
                    <div class="adorno adorno-fuegos-3"></div>
                </div>
                <div id="foot-5">
                    <p>Copiright 2018 © Todos los derechos reservados a la empresa Tie-party Company</p>
                </div>
            </div>
            
        </footer>
        <script type="text/javascript" src="{{ asset('js/recursos/jquery.js') }}"></script>
    </body>
</html>