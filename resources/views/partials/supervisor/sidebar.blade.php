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
            <li class="header">SUPERVISOR</li> <!---PODRIAMOS CREAR UN YEILD PARA MOSTRAR EL TIPO DE CARGO LOGEADO-->
            <li><a href="{{url('prueba')}}"><i class='fa fa-link'></i> <span>Mis Compromisos</span></a></li>
            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>Pedidos</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">Status</a></li>
                    <li><a href="{{url('nuevopedido')}}">Nuevo Pedido</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>Recursos Humanos</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">Control Diario</a></li>
                    <li><a href="#">Solicitud de Empleo</a></li>
                    <li><a href="#">Trateros</a></li>
                    <li><a href="#">Subcontratos</a></li>
                </ul>
            </li>
            <li><a href="{{url('home')}}"><i class='fa fa-link'></i> <span>Avance de Obra</span></a></li>
        </ul>
    </section>
</aside>