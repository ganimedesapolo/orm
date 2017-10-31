<li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            Consultas Eloquent
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{ route('all') }}">
                                    Todos los usuarios (ALL)
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('get','f') }}">
                                    Lista de usuarios Femenino (GET)
                                </a>
                            </li>
                             <li>
                                <a href="{{ route('get','m') }}">
                                    Lista de usuarios Masculino (GET)
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('get-custom') }}">
                                    Lista de usuarios (GET con Array)
                                </a>
                            </li>
                             <li>
                                <a href="{{ route('lists') }}">
                                    Lista de Usuarios para select (Lists)
                                </a>
                            </li>
                             <li>
                                <a href="{{ route('first-last') }}">
                                   Fisrt Last
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('paginate') }}">
                                   Paginate
                                </a>
                            </li>
                        </ul>
 </li>