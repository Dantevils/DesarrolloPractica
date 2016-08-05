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
            <li class="header">COMPRAS</li> <!---PODRIAMOS CREAR UN YEILD PARA MOSTRAR EL TIPO DE CARGO LOGEADO-->

            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>Status</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">Status de pedido</a></li>
                    <li><a href="{{url('nuevopedido')}}">OdeC emitidas</a></li>
                </ul>
            </li>
            <li><a href="{{url('prueba')}}"><i class='fa fa-link'></i> <span>Nueva Orden de Compra</span></a></li>
            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>Descargas</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">Pedidos</a></li>
                    <li><a href="#">ODEC & Rececpcion</a></li>
                    <li><a href="#">Avances</a></li>
                    <li><a href="#">Inventarios</a></li>
                </ul>
            </li>

        </ul>
    </section>
</aside>