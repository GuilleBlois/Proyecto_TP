@include('layouts.headerTie')
        <section id="single-content">
            <!-- Sidebar -->
            <div class="single-sidebar">
                <div class="single-sidebar-image">
                    <img src="{{URL::asset('/images/users/'.Auth::user()->id.'')}}" alt="foto ejemplo">
                    <h2 id="tai-funct" tai="{{ Auth::user()->id }}">{{ Auth::user()->nombre }}</h2>
                </div>
                <div class="single-sidebar-menu">
                    <ul>
                        <li><a href="#" id="seeFriends">Amigos</a></li>
                        <li><a href="#" id="masAmigos">Añadir Amigos</a></li>
                        <li style="display: flex;"><a href="#" id="solicitudes">Solicitudes de amistad</a>@if($count > 0)<div style="margin-left: 5px; border-radius: 50%; background-color: red; width: 12px; height: 12px;"><span style="color: white; margin-left: 3px; font-size: 0.7rem;">{{ $count }}</span></div>@endif</li>
                        <li><a href="/user/perfil" id="seeProfile">Ver Perfil</a></li>
                        <li><a class="dropdown-item" href="{{ route('cerrarsesion') }}">{{ __('Salir') }}</a></li>
                    </ul>
                </div>
            </div> 
               <!-- Fin sidebar -->
            <div class="single-content-right">
                <div class="single-nav">
                    <ul>
                        <li><a href="#" id="seeAll">Todas las fiestas</a></li>
                        <li><a href="#" id="seePersonal">Mis fiestas</a></li>
                        <li><a href="">Buscar fiesta</a></li>
                        <li><a href="#" id="seeParticipa">Participo</a></li>
                        <li><a href="">Fiestas pasadas</a></li>
                        <li><a href="">Invitaciones</a></li>
                    </ul>
                    <div class="btn-crear-fiesta"><i class="fa fa-plus"></i></div>
                </div>
                <div class="single-list">
                    <form method="POST" action="/user/name">
                        @csrf
                        <h2>Cambia tus datos</h2>
                        <br>
                        <label for="nombre">Nombre: </label>
                        <input type="text" name="nombre" placeholder="{{$user[0]['nombre']}}">
                        <br>
                        <label for="apellidos">Apellidos: </label>
                        <input type="text" name="apellidos" placeholder="{{$user[0]['apellidos']}}">
                        <br>
                        <input type="submit" value="Enviar">
                    </form>

                    <form method="POST" action="/user/password">
                        @csrf
                        <h2>Cambiar la contraseña</h2>
                        <br>
                        <label for="prev-password">Contraseña Actual: </label>
                        <input type="password" name="prev-password" placeholder="Contraseña actual">
                        <br>
                        <label for="new-password">Nueva Contraseña: </label>
                        <input type="password" name="new-password" placeholder="Contraseña nueva">
                        <br>
                        <label for="rep-password">Nueva Contraseña: </label>
                        <input type="password" name="rep-password" placeholder="Repita la contraseña nueva">
                        <br>
                        <input type="submit" value="Enviar">
                    </form>
                </div>
            </div>
            <div id="modal-crear-fiesta">
                <form action="#" method="">
                    <i class="fa fa-times"></i>
                    <h2>Nueva Fiesta!!!</h2>
                    <label for="name">¿Que nombre le darás a esta ocasión?</label><br>
                    <input type="text" id="name" name="name" placeholder="Ponle un nombre divertido!"><br>
                    <span>Elige el tipo de ocasión que vas a organizar:</span><br>
                    <input type="radio" id="fiesta" name="party-type" value="fiesta" checked> <label class="radio-label" for="fiesta">Fiesta!!!</label><br>
                    <input type="radio" id="celebracion" name="party-type" value="celebracio"> <label class="radio-label" for="celebracio">Celebración</label><br>
                    <input type="radio" id="boda" name="party-type" value="boda"> <label class="radio-label" for="boda">Boda</label>
                    <input type="submit" value="Crear fiesta">
                </form>
            </div>

            <div id="modal-buscar-amigos">
                <div id="interno">
                    <i class="fa fa-times"></i>
                    <h2>Nuevo Amigo</h2>
                    <label for="amigo">Email del usuario</label><br>
                    <input type="text" id="amigo_name" name="amigo" placeholder="Introduce el email del usuario"><br>
                    <a href="#" id="sendFriend"><button>Añadir</button></a>
                </div>
            </div>
        </section>
        <footer>
                <div id="foot-5">
                    <p>Copiright 2018 © Todos los derechos reservados a la empresa Tie-party Company</p>
                </div>
            </div>
        </footer>
        <script type="text/javascript" src="{{ asset('js/recursos/jquery.js') }}"></script>
    </body>
</html>