<aside class="main-sidebar">
    <section class="sidebar">
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{asset('/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>{{Auth::user()->name}}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <ul class="sidebar-menu">
            <li class="header">{{Auth::user()->cargo}}</li>
            <!--LOG Residente-->
            @if(Auth::user()->cargo == 'residente')
            <li><a href="{{url('prueba')}}"><i class='fa fa-group'></i> <span>Mis Compromisos</span></a></li>
            <li class="treeview">
                <a href="#"><i class='fa fa-pencil-square-o'></i> <span>Pedidos</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{url('status')}}">Status</a></li>
                    <li><a href="{{url('nuevopedido')}}">Nuevo Pedido</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class='fa  fa-user'></i> <span>Recursos Humanos</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">Control Diario</a></li>
                    <li><a href="#">Solicitud de Empleo</a></li>
                    <li><a href="#">Trateros</a></li>
                    <li><a href="#">Subcontratos</a></li>
                </ul>
            </li>
            <li><a href="{{url('home')}}"><i class='fa fa-line-chart'></i> <span>Avance de Obra</span></a></li>
            @endif
            <!--LOG COMPRAS-->
            @if(Auth::user()->cargo == 'compras')
                    <li class="treeview">
                        <a href="#"><i class='fa fa-list-alt'></i> <span>Status</span> <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="statuspedido">Status de pedido</a></li>
                            <li><a href="odecemitidas">OdeC emitidas</a></li>
                        </ul>
                    </li>
                    <li><a href="{{url('prueba')}}"><i class='fa fa-calendar'></i> <span>Nueva Orden de Compra</span></a></li>
                    <li class="treeview">
                        <a href="#"><i class='fa fa-download'></i> <span>Descargas</span> <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="#">Pedidos</a></li>
                            <li><a href="#">ODEC & Rececpcion</a></li>
                            <li><a href="#">Avances</a></li>
                            <li><a href="#">Inventarios</a></li>
                        </ul>
                    </li>

            @endif
            <!--LOG BODEGUERO-->
            @if(Auth::user()->cargo == 'bodeguero')
                        <li><a href="#"><i class='fa fa-check'></i> <span>Status de Pedido</span></a></li>
                        <li class="treeview">
                            <a href="#"><i class='fa fa-cubes'></i> <span>Materiales</span> <i class="fa fa-angle-left pull-right"></i></a>
                            <ul class="treeview-menu">
                                <li><a href="#">Repecion</a></li>
                                <li><a href="#">Salidas</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#"><i class='fa fa-check-square-o'></i> <span>Solicitudes</span> <i class="fa fa-angle-left pull-right"></i></a>
                            <ul class="treeview-menu">
                                <li><a href="#">Contrato</a></li>
                                <li><a href="#">Anexo</a></li>
                                <li><a href="#">Finiquitos</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#"><i class='fa fa-print'></i> <span>Imprimir</span> <i class="fa fa-angle-left pull-right"></i></a>
                            <ul class="treeview-menu">
                                <li><a href="#">Contrato</a></li>
                                <li><a href="#">Liquidacion</a></li>
                            </ul>
                        </li>
            @endif
            <!--LOG SUPERVISOR-->
            @if(Auth::user()->cargo == 'supervisor')
                            <li><a href="#"><i class='fa fa-group'></i> <span>Nuevo Compromiso</span></a></li>
                            <li><a href="#"><i class='fa fa-user'></i> <span>Mis Compromisos</span></a></li>
                            <li><a href="#"><i class='fa fa-check'></i> <span>Status de Pedidos</span></a></li>
                            <li><a href="#"><i class='fa fa-area-chart'></i> <span>Informes</span></a></li>
            @endif





        </ul>
    </section>
</aside>